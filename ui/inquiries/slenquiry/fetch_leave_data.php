<?php
session_start();

include 'db_connect.php';  // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the posted data
    $leave_code = mysqli_real_escape_string($conn, $_POST['leave_code']);
    $identity_number = mysqli_real_escape_string($conn, $_POST['identity_number']);

    // Query to fetch leave data based on leave code, identity number, and is_active
    $sql = "SELECT * FROM sick_leaves WHERE leave_code = '$leave_code' AND identity_number = '$identity_number'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $leave_data = mysqli_fetch_assoc($result);

        // Check if the leave record is active
        if ($leave_data['is_active'] == 1) {
            // Prepare the response with the data fetched from the database
            $response = [
                'success' => true,
                'data' => [
                    'name_ar' => $leave_data['name_ar'],
                    'report_issue_date' => $leave_data['report_issue_date'],
                    'leave_start_gregorian' => $leave_data['leave_start_gregorian'],
                    'leave_end_gregorian' => $leave_data['leave_end_gregorian'],
                    'duration' => calculateDuration($leave_data['leave_start_gregorian'], $leave_data['leave_end_gregorian']), // Calculate based on start and end date
                    'doctor_name_ar' => $leave_data['doctor_name_ar'],
                    'doctor_job_title_ar' => $leave_data['doctor_job_title_ar']
                ]
            ];
            echo json_encode($response);  // Return data as JSON
        } else {
            // If the record is not active, return an error response
            echo json_encode(['success' => false, 'message' => 'This leave record is not active.']);
        }
    } else {
        // If no data found, send an error response
        echo json_encode(['success' => false, 'message' => 'No data found']);
    }

    mysqli_close($conn);  // Close the database connection
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

// Function to calculate the duration between two dates
function calculateDuration($start_date, $end_date)
{
    $start = new DateTime($start_date);
    $end = new DateTime($end_date);
    $interval = $start->diff($end);
    return $interval->days + 1; // Return duration in days, +1 to include both start and end dates
}
