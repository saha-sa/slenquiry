<?php
session_start();
include 'db_connect.php'; // الاتصال بقاعدة البيانات

// التحقق من أن البيانات تم إرسالها عبر النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // الحصول على البيانات من النموذج
    $serviceCode = mysqli_real_escape_string($conn, $_POST['serviceCode']);
    $identityNumber = mysqli_real_escape_string($conn, $_POST['identityNumber']);

    // تحقق من وجود الحقول في قاعدة البيانات
    $sql = "SELECT * FROM sick_leaves WHERE leave_code = ? AND identity_number = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $serviceCode, $identityNumber); // ربط القيمتين في الاستعلام
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // إذا كانت البيانات موجودة، الانتقال إلى صفحة أخرى
        header("Location: display_leave.php"); // توجيه المستخدم إلى صفحة عرض البيانات
        exit();
    } else {
        // إذا لم توجد البيانات، عرض رسالة خطأ
        $_SESSION['error_message'] = "لا توجد إجازة مطابقة لهذا الرمز أو رقم الهوية.";
        header("Location: index.php"); // العودة إلى صفحة البحث
        exit();
    }
} else {
    // إذا لم يكن الطلب من نوع POST
    $_SESSION['error_message'] = "طلب غير صالح.";
    header("Location: index.php"); // العودة إلى صفحة البحث
    exit();
}
