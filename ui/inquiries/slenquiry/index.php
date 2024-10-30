<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <!-- رابط ملف CSS الرئيسي -->
  <link href="main.4730aed6.css" rel="stylesheet">

  <!-- إعدادات الميتا -->
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">

  <!-- جافاسكربت غير متزامن -->
  <script type="text/javascript" async="" src="js"></script>
  <script type="text/javascript" async="" charset="utf-8" src="recaptcha__ar.js" crossorigin="anonymous" integrity="sha384-KRI3sHLHUpJCSYB/Wt0kq1MH5bQrK0If2qhRD937+daCWIutUh/5CWdu7+NfHB/w"></script>

  <!-- Google Analytics -->
  <script async="" src="%D8%B5%D8%AD%D8%A9%20-%201%D9%85%D9%86%D8%B5%D8%A9%20%D8%A7%D9%84%D8%AE%D8%AF%D9%85%D8%A7%D8%AA%20%D8%A7%D9%84%D8%B5%D8%AD%D9%8A%D8%A9_files/analytics.js"></script>

  <!-- Elastic APM -->
  <script src="%D8%B5%D8%AD%D8%A9%20-%201%D9%85%D9%86%D8%B5%D8%A9%20%D8%A7%D9%84%D8%AE%D8%AF%D9%85%D8%A7%D8%AA%20%D8%A7%D9%84%D8%B5%D8%AD%D9%8A%D8%A9_files/elastic-apm-rum.umd.min.js" crossorigin=""></script>
  <script>
    elasticApm.init({
      serviceName: "Seha2-Frontend",
      serverUrl: "https://apm-lean.acuative-me.com:8200/",
      environment: "Production"
    });
  </script>

  <!-- إضافة أنماط CSS مباشرة في الملف -->
  <style type="text/css">
    :root,
    :host {
      --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
      --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
      --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
      --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
      --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
      --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
    }

    svg:not(:root).svg-inline--fa,
    svg:not(:host).svg-inline--fa {
      overflow: visible;
      box-sizing: content-box;
    }

    .svg-inline--fa {
      display: var(--fa-display, inline-block);
      height: 1em;
      overflow: visible;
      vertical-align: -0.125em;
    }

    .svg-inline--fa.fa-2xs {
      vertical-align: 0.1em;
    }

    .svg-inline--fa.fa-xs {
      vertical-align: 0em;
    }

    .svg-inline--fa.fa-sm {
      vertical-align: -0.0714285705em;
    }

    .svg-inline--fa.fa-lg {
      vertical-align: -0.2em;
    }

    .svg-inline--fa.fa-xl {
      vertical-align: -0.25em;
    }

    .svg-inline--fa.fa-2xl {
      vertical-align: -0.3125em;
    }

    .svg-inline--fa.fa-pull-left {
      margin-right: var(--fa-pull-margin, 0.3em);
      width: auto;
    }

    .svg-inline--fa.fa-pull-right {
      margin-left: var(--fa-pull-margin, 0.3em);
      width: auto;
    }

    .svg-inline--fa.fa-li {
      width: var(--fa-li-width, 2em);
      top: 0.25em;
    }

    .svg-inline--fa.fa-fw {
      width: var(--fa-fw-width, 1.25em);
    }

    .fa-layers svg.svg-inline--fa {
      bottom: 0;
      left: 0;
      margin: auto;
      position: absolute;
      right: 0;
      top: 0;
    }

    /* تخصيص الخط واللون للعناصر */
    #name,
    #report_date,
    #start_date,
    #end_date,
    #duration,
    #doctor_name,
    #doctor_title {
      font-family: 'Cairo', sans-serif;
      /* استخدام خط Cairo */
      font-style: normal;
      font-weight: normal;
      font-size: 16px;
      margin-right: 0;
      padding: 0;

      /* تحديد حجم النص */
    }


    .fa-layers-counter,
    .fa-layers-text {
      display: inline-block;
      position: absolute;
      text-align: center;
    }

    .fa-layers {
      display: inline-block;
      height: 1em;
      position: relative;
      text-align: center;
      vertical-align: -0.125em;
      width: 1em;
    }

    .fa-layers svg.svg-inline--fa {
      -webkit-transform-origin: center center;
      transform-origin: center center;
    }

    .fa-layers-text {
      left: 50%;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      -webkit-transform-origin: center center;
      transform-origin: center center;
    }

    .fa-layers-counter {
      background-color: var(--fa-counter-background-color, #ff253a);
      border-radius: var(--fa-counter-border-radius, 1em);
      box-sizing: border-box;
      color: var(--fa-inverse, #fff);
      line-height: var(--fa-counter-line-height, 1);
      max-width: var(--fa-counter-max-width, 5em);
      min-width: var(--fa-counter-min-width, 1.5em);
      overflow: hidden;
      padding: var(--fa-counter-padding, 0.25em 0.5em);
      right: var(--fa-right, 0);
      text-overflow: ellipsis;
      top: var(--fa-top, 0);
      -webkit-transform: scale(var(--fa-counter-scale, 0.25));
      transform: scale(var(--fa-counter-scale, 0.25));
      -webkit-transform-origin: top right;
      transform-origin: top right;
    }

    .fa-layers-bottom-right {
      bottom: var(--fa-bottom, 0);
      right: var(--fa-right, 0);
      top: auto;
      -webkit-transform: scale(var(--fa-layers-scale, 0.25));
      transform: scale(var(--fa-layers-scale, 0.25));
      -webkit-transform-origin: bottom right;
      transform-origin: bottom right;
    }

    .fa-layers-bottom-left {
      bottom: var(--fa-bottom, 0);
      left: var(--fa-left, 0);
      right: auto;
      top: auto;
      -webkit-transform: scale(var(--fa-layers-scale, 0.25));
      transform: scale(var(--fa-layers-scale, 0.25));
      -webkit-transform-origin: bottom left;
      transform-origin: bottom left;
    }

    .fa-layers-top-right {
      top: var(--fa-top, 0);
      right: var(--fa-right, 0);
      -webkit-transform: scale(var(--fa-layers-scale, 0.25));
      transform: scale(var(--fa-layers-scale, 0.25));
      -webkit-transform-origin: top right;
      transform-origin: top right;
    }

    .fa-layers-top-left {
      left: var(--fa-left, 0);
      right: auto;
      top: var(--fa-top, 0);
      -webkit-transform: scale(var(--fa-layers-scale, 0.25));
      transform: scale(var(--fa-layers-scale, 0.25));
      -webkit-transform-origin: top left;
      transform-origin: top left;
    }

    .hidden {
      display: none;
      /* This hides the element completely */
    }

    .visible {
      display: block;
      /* This shows the element */
    }


    .fa-1x {
      font-size: 1em;
    }

    .fa-2x {
      font-size: 2em;
    }

    .fa-3x {
      font-size: 3em;
    }

    .fa-4x {
      font-size: 4em;
    }

    .fa-5x {
      font-size: 5em;
    }

    .fa-6x {
      font-size: 6em;
    }

    .fa-7x {
      font-size: 7em;
    }

    .fa-8x {
      font-size: 8em;
    }

    .fa-9x {
      font-size: 9em;
    }

    .fa-10x {
      font-size: 10em;
    }

    .fa-2xs {
      font-size: 0.625em;
      line-height: 0.1em;
      vertical-align: 0.225em;
    }

    .fa-xs {
      font-size: 0.75em;
      line-height: 0.0833333337em;
      vertical-align: 0.125em;
    }

    .fa-sm {
      font-size: 0.875em;
      line-height: 0.0714285718em;
      vertical-align: 0.0535714295em;
    }

    .fa-lg {
      font-size: 1.25em;
      line-height: 0.05em;
      vertical-align: -0.075em;
    }

    .fa-xl {
      font-size: 1.5em;
      line-height: 0.0416666682em;
      vertical-align: -0.125em;
    }

    .fa-2xl {
      font-size: 2em;
      line-height: 0.03125em;
      vertical-align: -0.1875em;
    }

    .fa-fw {
      text-align: center;
      width: 1.25em;
    }

    .fa-ul {
      list-style-type: none;
      margin-left: var(--fa-li-margin, 2.5em);
      padding-left: 0;
    }

    .fa-ul>li {
      position: relative;
    }

    .fa-li {
      left: calc(var(--fa-li-width, 2em) * -1);
      position: absolute;
      text-align: center;
      width: var(--fa-li-width, 2em);
      line-height: inherit;
    }

    .fa-border {
      border-color: var(--fa-border-color, #eee);
      border-radius: var(--fa-border-radius, 0.1em);
      border-style: var(--fa-border-style, solid);
      border-width: var(--fa-border-width, 0.08em);
      padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
    }

    .fa-pull-left {
      float: left;
      margin-right: var(--fa-pull-margin, 0.3em);
    }

    .fa-pull-right {
      float: right;
      margin-left: var(--fa-pull-margin, 0.3em);
    }

    .fa-beat {
      -webkit-animation-name: fa-beat;
      animation-name: fa-beat;
      -webkit-animation-delay: var(--fa-animation-delay, 0);
      animation-delay: var(--fa-animation-delay, 0);
      -webkit-animation-direction: var(--fa-animation-direction, normal);
      animation-direction: var(--fa-animation-direction, normal);
      -webkit-animation-duration: var(--fa-animation-duration, 1s);
      animation-duration: var(--fa-animation-duration, 1s);
      -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
      animation-timing-function: var(--fa-animation-timing, ease-in-out);
    }

    .fa-bounce {
      -webkit-animation-name: fa-bounce;
      animation-name: fa-bounce;
      -webkit-animation-delay: var(--fa-animation-delay, 0);
      animation-delay: var(--fa-animation-delay, 0);
      -webkit-animation-direction: var(--fa-animation-direction, normal);
      animation-direction: var(--fa-animation-direction, normal);
      -webkit-animation-duration: var(--fa-animation-duration, 1s);
      animation-duration: var(--fa-animation-duration, 1s);
      -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
      animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
    }

    .fa-fade {
      -webkit-animation-name: fa-fade;
      animation-name: fa-fade;
      -webkit-animation-delay: var(--fa-animation-delay, 0);
      animation-delay: var(--fa-animation-delay, 0);
      -webkit-animation-direction: var(--fa-animation-direction, normal);
      animation-direction: var(--fa-animation-direction, normal);
      -webkit-animation-duration: var(--fa-animation-duration, 1s);
      animation-duration: var(--fa-animation-duration, 1s);
      -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
      animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
    }

    .fa-beat-fade {
      -webkit-animation-name: fa-beat-fade;
      animation-name: fa-beat-fade;
      -webkit-animation-delay: var(--fa-animation-delay, 0);
      animation-delay: var(--fa-animation-delay, 0);
      -webkit-animation-direction: var(--fa-animation-direction, normal);
      animation-direction: var(--fa-animation-direction, normal);
      -webkit-animation-duration: var(--fa-animation-duration, 1s);
      animation-duration: var(--fa-animation-duration, 1s);
      -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
      animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
    }

    .fa-flip {
      -webkit-animation-name: fa-flip;
      animation-name: fa-flip;
      -webkit-animation-delay: var(--fa-animation-delay, 0);
      animation-delay: var(--fa-animation-delay, 0);
      -webkit-animation-direction: var(--fa-animation-direction, normal);
      animation-direction: var(--fa-animation-direction, normal);
      -webkit-animation-duration: var(--fa-animation-duration, 1s);
      animation-duration: var(--fa-animation-duration, 1s);
      -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
      animation-timing-function: var(--fa-animation-timing, ease-in-out);
    }

    .fa-shake {
      -webkit-animation-name: fa-shake;
      animation-name: fa-shake;
      -webkit-animation-delay: var(--fa-animation-delay, 0);
      animation-delay: var(--fa-animation-delay, 0);
      -webkit-animation-direction: var(--fa-animation-direction, normal);
      animation-direction: var(--fa-animation-direction, normal);
      -webkit-animation-duration: var(--fa-animation-duration, 1s);
      animation-duration: var(--fa-animation-duration, 1s);
      -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      -webkit-animation-timing-function: var(--fa-animation-timing, linear);
      animation-timing-function: var(--fa-animation-timing, linear);
    }

    .fa-spin {
      -webkit-animation-name: fa-spin;
      animation-name: fa-spin;
      -webkit-animation-delay: var(--fa-animation-delay, 0);
      animation-delay: var(--fa-animation-delay, 0);
      -webkit-animation-direction: var(--fa-animation-direction, normal);
      animation-direction: var(--fa-animation-direction, normal);
      -webkit-animation-duration: var(--fa-animation-duration, 2s);
      animation-duration: var(--fa-animation-duration, 2s);
      -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      -webkit-animation-timing-function: var(--fa-animation-timing, linear);
      animation-timing-function: var(--fa-animation-timing, linear);
    }

    .fa-spin-reverse {
      --fa-animation-direction: reverse;
    }

    .fa-pulse,
    .fa-spin-pulse {
      -webkit-animation-name: fa-spin;
      animation-name: fa-spin;
      -webkit-animation-direction: var(--fa-animation-direction, normal);
      animation-direction: var(--fa-animation-direction, normal);
      -webkit-animation-duration: var(--fa-animation-duration, 1s);
      animation-duration: var(--fa-animation-duration, 1s);
      -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      animation-iteration-count: var(--fa-animation-iteration-count, infinite);
      -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
      animation-timing-function: var(--fa-animation-timing, steps(8));
    }

    @media (prefers-reduced-motion: reduce) {

      .fa-beat,
      .fa-bounce,
      .fa-fade,
      .fa-beat-fade,
      .fa-flip,
      .fa-pulse,
      .fa-shake,
      .fa-spin,
      .fa-spin-pulse {
        -webkit-animation-delay: -1ms;
        animation-delay: -1ms;
        -webkit-animation-duration: 1ms;
        animation-duration: 1ms;
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
        transition-delay: 0s;
        transition-duration: 0s;
      }
    }

    @-webkit-keyframes fa-beat {

      0%,
      90% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }

      45% {
        -webkit-transform: scale(var(--fa-beat-scale, 1.25));
        transform: scale(var(--fa-beat-scale, 1.25));
      }
    }

    @keyframes fa-beat {

      0%,
      90% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }

      45% {
        -webkit-transform: scale(var(--fa-beat-scale, 1.25));
        transform: scale(var(--fa-beat-scale, 1.25));
      }
    }

    @-webkit-keyframes fa-bounce {
      0% {
        -webkit-transform: scale(1, 1) translateY(0);
        transform: scale(1, 1) translateY(0);
      }

      10% {
        -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
        transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
      }

      30% {
        -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
        transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
      }

      50% {
        -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
        transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
      }

      57% {
        -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
        transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
      }

      64% {
        -webkit-transform: scale(1, 1) translateY(0);
        transform: scale(1, 1) translateY(0);
      }

      100% {
        -webkit-transform: scale(1, 1) translateY(0);
        transform: scale(1, 1) translateY(0);
      }
    }

    @keyframes fa-bounce {
      0% {
        -webkit-transform: scale(1, 1) translateY(0);
        transform: scale(1, 1) translateY(0);
      }

      10% {
        -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
        transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
      }

      30% {
        -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
        transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
      }

      50% {
        -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
        transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
      }

      57% {
        -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
        transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
      }

      64% {
        -webkit-transform: scale(1, 1) translateY(0);
        transform: scale(1, 1) translateY(0);
      }

      100% {
        -webkit-transform: scale(1, 1) translateY(0);
        transform: scale(1, 1) translateY(0);
      }
    }

    @-webkit-keyframes fa-fade {
      50% {
        opacity: var(--fa-fade-opacity, 0.4);
      }
    }

    @keyframes fa-fade {
      50% {
        opacity: var(--fa-fade-opacity, 0.4);
      }
    }

    @-webkit-keyframes fa-beat-fade {

      0%,
      100% {
        opacity: var(--fa-beat-fade-opacity, 0.4);
        -webkit-transform: scale(1);
        transform: scale(1);
      }

      50% {
        opacity: 1;
        -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
        transform: scale(var(--fa-beat-fade-scale, 1.125));
      }
    }

    @keyframes fa-beat-fade {

      0%,
      100% {
        opacity: var(--fa-beat-fade-opacity, 0.4);
        -webkit-transform: scale(1);
        transform: scale(1);
      }

      50% {
        opacity: 1;
        -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
        transform: scale(var(--fa-beat-fade-scale, 1.125));
      }
    }

    @-webkit-keyframes fa-flip {
      50% {
        -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
        transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
      }
    }

    @keyframes fa-flip {
      50% {
        -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
        transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
      }
    }

    @-webkit-keyframes fa-shake {
      0% {
        -webkit-transform: rotate(-15deg);
        transform: rotate(-15deg);
      }

      4% {
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
      }

      8%,
      24% {
        -webkit-transform: rotate(-18deg);
        transform: rotate(-18deg);
      }

      12%,
      28% {
        -webkit-transform: rotate(18deg);
        transform: rotate(18deg);
      }

      16% {
        -webkit-transform: rotate(-22deg);
        transform: rotate(-22deg);
      }

      20% {
        -webkit-transform: rotate(22deg);
        transform: rotate(22deg);
      }

      32% {
        -webkit-transform: rotate(-12deg);
        transform: rotate(-12deg);
      }

      36% {
        -webkit-transform: rotate(12deg);
        transform: rotate(12deg);
      }

      40%,
      100% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
    }

    @keyframes fa-shake {
      0% {
        -webkit-transform: rotate(-15deg);
        transform: rotate(-15deg);
      }

      4% {
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
      }

      8%,
      24% {
        -webkit-transform: rotate(-18deg);
        transform: rotate(-18deg);
      }

      12%,
      28% {
        -webkit-transform: rotate(18deg);
        transform: rotate(18deg);
      }

      16% {
        -webkit-transform: rotate(-22deg);
        transform: rotate(-22deg);
      }

      20% {
        -webkit-transform: rotate(22deg);
        transform: rotate(22deg);
      }

      32% {
        -webkit-transform: rotate(-12deg);
        transform: rotate(-12deg);
      }

      36% {
        -webkit-transform: rotate(12deg);
        transform: rotate(12deg);
      }

      40%,
      100% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
    }

    @-webkit-keyframes fa-spin {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes fa-spin {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    .fa-rotate-90 {
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg);
    }

    .fa-rotate-180 {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg);
    }

    .fa-rotate-270 {
      -webkit-transform: rotate(270deg);
      transform: rotate(270deg);
    }

    .fa-flip-horizontal {
      -webkit-transform: scale(-1, 1);
      transform: scale(-1, 1);
    }

    .fa-flip-vertical {
      -webkit-transform: scale(1, -1);
      transform: scale(1, -1);
    }

    .fa-flip-both,
    .fa-flip-horizontal.fa-flip-vertical {
      -webkit-transform: scale(-1, -1);
      transform: scale(-1, -1);
    }

    .fa-rotate-by {
      -webkit-transform: rotate(var(--fa-rotate-angle, none));
      transform: rotate(var(--fa-rotate-angle, none));
    }

    .fa-stack {
      display: inline-block;
      vertical-align: middle;
      height: 2em;
      position: relative;
      width: 2.5em;
    }

    .fa-stack-1x,
    .fa-stack-2x {
      bottom: 0;
      left: 0;
      margin: auto;
      position: absolute;
      right: 0;
      top: 0;
      z-index: var(--fa-stack-z-index, auto);
    }

    .svg-inline--fa.fa-stack-1x {
      height: 1em;
      width: 1.25em;
    }

    .svg-inline--fa.fa-stack-2x {
      height: 2em;
      width: 2.5em;
    }

    .fa-inverse {
      color: var(--fa-inverse, #fff);
    }

    .sr-only,
    .fa-sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border-width: 0;
    }

    .sr-only-focusable:not(:focus),
    .fa-sr-only-focusable:not(:focus) {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border-width: 0;
    }

    .svg-inline--fa .fa-primary {
      fill: var(--fa-primary-color, currentColor);
      opacity: var(--fa-primary-opacity, 1);
    }

    .svg-inline--fa .fa-secondary {
      fill: var(--fa-secondary-color, currentColor);
      opacity: var(--fa-secondary-opacity, 0.4);
    }

    .svg-inline--fa.fa-swap-opacity .fa-primary {
      opacity: var(--fa-secondary-opacity, 0.4);
    }

    .svg-inline--fa.fa-swap-opacity .fa-secondary {
      opacity: var(--fa-primary-opacity, 1);
    }

    .svg-inline--fa mask .fa-primary,
    .svg-inline--fa mask .fa-secondary {
      fill: black;
    }

    .fad.fa-inverse,
    .fa-duotone.fa-inverse {
      color: var(--fa-inverse, #fff);
    }
  </style>
  <link rel="icon" href="https://www.seha.sa/favicon.png">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="#000000">
  <link rel="apple-touch-icon" href="https://www.seha.sa/logo.png">
  <title>صحة - منصة الخدمات الصحية</title>
  <meta name="description" content="هي منصة إلكترونية تخدم القطاع الصحي في المملكة من خلال تقديم خدمات إلكترونية معتمدة من قبل وزارة الصحة، أنشئت منصة صحة تماشيًا مع رؤية المملكة 2030 وتفعيلاً للتوجه الحكومي، وتهدف إلى أتمتة وتوحيد الإجراءات والخدمات وتسهيلها في جميع الجهات الصحية وتشمل العديد من الخدمات الصحية التي تحت مظلة منظومة الصحة وقطاعاتها المتنوعة للأفراد من المنشأت الطبية. ">
  <link rel="manifest" href="https://www.seha.sa/manifest.json">
  <link href="css2.css" rel="stylesheet">
  <script defer="defer" src="%D8%B5%D8%AD%D8%A9%20-%201%D9%85%D9%86%D8%B5%D8%A9%20%D8%A7%D9%84%D8%AE%D8%AF%D9%85%D8%A7%D8%AA%20%D8%A7%D9%84%D8%B5%D8%AD%D9%8A%D8%A9_files/main.4d1c9174.js"></script>
  <link href="main.4730aed6.css" rel="stylesheet">
  <style>
    .swal2-popup.swal2-toast {
      box-sizing: border-box;
      grid-column: 1/4 !important;
      grid-row: 1/4 !important;
      grid-template-columns: min-content auto min-content;
      padding: 1em;
      overflow-y: hidden;
      background: #fff;
      box-shadow: 0 0 1px rgba(0, 0, 0, .075), 0 1px 2px rgba(0, 0, 0, .075), 1px 2px 4px rgba(0, 0, 0, .075), 1px 3px 8px rgba(0, 0, 0, .075), 2px 4px 16px rgba(0, 0, 0, .075);
      pointer-events: all
    }

    .swal2-popup.swal2-toast>* {
      grid-column: 2
    }

    .swal2-popup.swal2-toast .swal2-title {
      margin: .5em 1em;
      padding: 0;
      font-size: 1em;
      text-align: initial
    }

    .swal2-popup.swal2-toast .swal2-loading {
      justify-content: center
    }

    .swal2-popup.swal2-toast .swal2-input {
      height: 2em;
      margin: .5em;
      font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-validation-message {
      font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-footer {
      margin: .5em 0 0;
      padding: .5em 0 0;
      font-size: .8em
    }

    .swal2-popup.swal2-toast .swal2-close {
      grid-column: 3/3;
      grid-row: 1/99;
      align-self: center;
      width: .8em;
      height: .8em;
      margin: 0;
      font-size: 2em
    }

    .swal2-popup.swal2-toast .swal2-html-container {
      margin: .5em 1em;
      padding: 0;
      overflow: initial;
      font-size: 1em;
      text-align: initial
    }

    .swal2-popup.swal2-toast .swal2-html-container:empty {
      padding: 0
    }

    .swal2-popup.swal2-toast .swal2-loader {
      grid-column: 1;
      grid-row: 1/99;
      align-self: center;
      width: 2em;
      height: 2em;
      margin: .25em
    }

    .swal2-popup.swal2-toast .swal2-icon {
      grid-column: 1;
      grid-row: 1/99;
      align-self: center;
      width: 2em;
      min-width: 2em;
      height: 2em;
      margin: 0 .5em 0 0
    }

    .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
      display: flex;
      align-items: center;
      font-size: 1.8em;
      font-weight: bold
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
      top: .875em;
      width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
      left: .3125em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
      right: .3125em
    }

    .swal2-popup.swal2-toast .swal2-actions {
      justify-content: flex-start;
      height: auto;
      margin: 0;
      margin-top: .5em;
      padding: 0 .5em
    }

    .swal2-popup.swal2-toast .swal2-styled {
      margin: .25em .5em;
      padding: .4em .6em;
      font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-success {
      border-color: #a5dc86
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
      position: absolute;
      width: 1.6em;
      height: 3em;
      transform: rotate(45deg);
      border-radius: 50%
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
      top: -0.8em;
      left: -0.5em;
      transform: rotate(-45deg);
      transform-origin: 2em 2em;
      border-radius: 4em 0 0 4em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
      top: -0.25em;
      left: .9375em;
      transform-origin: 0 1.5em;
      border-radius: 0 4em 4em 0
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
      top: 0;
      left: .4375em;
      width: .4375em;
      height: 2.6875em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
      height: .3125em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
      top: 1.125em;
      left: .1875em;
      width: .75em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
      top: .9375em;
      right: .1875em;
      width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
      animation: swal2-toast-animate-success-line-tip .75s
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
      animation: swal2-toast-animate-success-line-long .75s
    }

    .swal2-popup.swal2-toast.swal2-show {
      animation: swal2-toast-show .5s
    }

    .swal2-popup.swal2-toast.swal2-hide {
      animation: swal2-toast-hide .1s forwards
    }

    div:where(.swal2-container) {
      display: grid;
      position: fixed;
      z-index: 1060;
      inset: 0;
      box-sizing: border-box;
      grid-template-areas: "top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";
      grid-template-rows: minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
      height: 100%;
      padding: .625em;
      overflow-x: hidden;
      transition: background-color .1s;
      -webkit-overflow-scrolling: touch
    }

    div:where(.swal2-container).swal2-backdrop-show,
    div:where(.swal2-container).swal2-noanimation {
      background: rgba(0, 0, 0, .4)
    }

    div:where(.swal2-container).swal2-backdrop-hide {
      background: rgba(0, 0, 0, 0) !important
    }

    div:where(.swal2-container).swal2-top-start,
    div:where(.swal2-container).swal2-center-start,
    div:where(.swal2-container).swal2-bottom-start {
      grid-template-columns: minmax(0, 1fr) auto auto
    }

    div:where(.swal2-container).swal2-top,
    div:where(.swal2-container).swal2-center,
    div:where(.swal2-container).swal2-bottom {
      grid-template-columns: auto minmax(0, 1fr) auto
    }

    div:where(.swal2-container).swal2-top-end,
    div:where(.swal2-container).swal2-center-end,
    div:where(.swal2-container).swal2-bottom-end {
      grid-template-columns: auto auto minmax(0, 1fr)
    }

    div:where(.swal2-container).swal2-top-start>.swal2-popup {
      align-self: start
    }

    div:where(.swal2-container).swal2-top>.swal2-popup {
      grid-column: 2;
      place-self: start center
    }

    div:where(.swal2-container).swal2-top-end>.swal2-popup,
    div:where(.swal2-container).swal2-top-right>.swal2-popup {
      grid-column: 3;
      place-self: start end
    }

    div:where(.swal2-container).swal2-center-start>.swal2-popup,
    div:where(.swal2-container).swal2-center-left>.swal2-popup {
      grid-row: 2;
      align-self: center
    }

    div:where(.swal2-container).swal2-center>.swal2-popup {
      grid-column: 2;
      grid-row: 2;
      place-self: center center
    }

    div:where(.swal2-container).swal2-center-end>.swal2-popup,
    div:where(.swal2-container).swal2-center-right>.swal2-popup {
      grid-column: 3;
      grid-row: 2;
      place-self: center end
    }

    div:where(.swal2-container).swal2-bottom-start>.swal2-popup,
    div:where(.swal2-container).swal2-bottom-left>.swal2-popup {
      grid-column: 1;
      grid-row: 3;
      align-self: end
    }

    div:where(.swal2-container).swal2-bottom>.swal2-popup {
      grid-column: 2;
      grid-row: 3;
      place-self: end center
    }

    div:where(.swal2-container).swal2-bottom-end>.swal2-popup,
    div:where(.swal2-container).swal2-bottom-right>.swal2-popup {
      grid-column: 3;
      grid-row: 3;
      place-self: end end
    }

    div:where(.swal2-container).swal2-grow-row>.swal2-popup,
    div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup {
      grid-column: 1/4;
      width: 100%
    }

    div:where(.swal2-container).swal2-grow-column>.swal2-popup,
    div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup {
      grid-row: 1/4;
      align-self: stretch
    }

    div:where(.swal2-container).swal2-no-transition {
      transition: none !important
    }

    div:where(.swal2-container) div:where(.swal2-popup) {
      display: none;
      position: relative;
      box-sizing: border-box;
      grid-template-columns: minmax(0, 100%);
      width: 32em;
      max-width: 100%;
      padding: 0 0 1.25em;
      border: none;
      border-radius: 5px;
      background: #fff;
      color: #545454;
      font-family: inherit;
      font-size: 1rem
    }

    div:where(.swal2-container) div:where(.swal2-popup):focus {
      outline: none
    }

    div:where(.swal2-container) div:where(.swal2-popup).swal2-loading {
      overflow-y: hidden
    }

    div:where(.swal2-container) h2:where(.swal2-title) {
      position: relative;
      max-width: 100%;
      margin: 0;
      padding: .8em 1em 0;
      color: inherit;
      font-size: 1.875em;
      font-weight: 600;
      text-align: center;
      text-transform: none;
      word-wrap: break-word
    }

    div:where(.swal2-container) div:where(.swal2-actions) {
      display: flex;
      z-index: 1;
      box-sizing: border-box;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      width: auto;
      margin: 1.25em auto 0;
      padding: 0
    }

    div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled[disabled] {
      opacity: .4
    }

    div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:hover {
      background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))
    }

    div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:active {
      background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))
    }

    div:where(.swal2-container) div:where(.swal2-loader) {
      display: none;
      align-items: center;
      justify-content: center;
      width: 2.2em;
      height: 2.2em;
      margin: 0 1.875em;
      animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      border-width: .25em;
      border-style: solid;
      border-radius: 100%;
      border-color: #2778c4 rgba(0, 0, 0, 0) #2778c4 rgba(0, 0, 0, 0)
    }

    div:where(.swal2-container) button:where(.swal2-styled) {
      margin: .3125em;
      padding: .625em 1.1em;
      transition: box-shadow .1s;
      box-shadow: 0 0 0 3px rgba(0, 0, 0, 0);
      font-weight: 500
    }

    div:where(.swal2-container) button:where(.swal2-styled):not([disabled]) {
      cursor: pointer
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
      border: 0;
      border-radius: .25em;
      background: initial;
      background-color: #7066e0;
      color: #fff;
      font-size: 1em
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm:focus {
      box-shadow: 0 0 0 3px rgba(112, 102, 224, .5)
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-deny {
      border: 0;
      border-radius: .25em;
      background: initial;
      background-color: #dc3741;
      color: #fff;
      font-size: 1em
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-deny:focus {
      box-shadow: 0 0 0 3px rgba(220, 55, 65, .5)
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel {
      border: 0;
      border-radius: .25em;
      background: initial;
      background-color: #6e7881;
      color: #fff;
      font-size: 1em
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel:focus {
      box-shadow: 0 0 0 3px rgba(110, 120, 129, .5)
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-default-outline:focus {
      box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
    }

    div:where(.swal2-container) button:where(.swal2-styled):focus {
      outline: none
    }

    div:where(.swal2-container) button:where(.swal2-styled)::-moz-focus-inner {
      border: 0
    }

    div:where(.swal2-container) div:where(.swal2-footer) {
      margin: 1em 0 0;
      padding: 1em 1em 0;
      border-top: 1px solid #eee;
      color: inherit;
      font-size: 1em;
      text-align: center
    }

    div:where(.swal2-container) .swal2-timer-progress-bar-container {
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
      grid-column: auto !important;
      overflow: hidden;
      border-bottom-right-radius: 5px;
      border-bottom-left-radius: 5px
    }

    div:where(.swal2-container) div:where(.swal2-timer-progress-bar) {
      width: 100%;
      height: .25em;
      background: rgba(0, 0, 0, .2)
    }

    div:where(.swal2-container) img:where(.swal2-image) {
      max-width: 100%;
      margin: 2em auto 1em
    }

    div:where(.swal2-container) button:where(.swal2-close) {
      z-index: 2;
      align-items: center;
      justify-content: center;
      width: 1.2em;
      height: 1.2em;
      margin-top: 0;
      margin-right: 0;
      margin-bottom: -1.2em;
      padding: 0;
      overflow: hidden;
      transition: color .1s, box-shadow .1s;
      border: none;
      border-radius: 5px;
      background: rgba(0, 0, 0, 0);
      color: #ccc;
      font-family: monospace;
      font-size: 2.5em;
      cursor: pointer;
      justify-self: end
    }

    div:where(.swal2-container) button:where(.swal2-close):hover {
      transform: none;
      background: rgba(0, 0, 0, 0);
      color: #f27474
    }

    div:where(.swal2-container) button:where(.swal2-close):focus {
      outline: none;
      box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
    }

    div:where(.swal2-container) button:where(.swal2-close)::-moz-focus-inner {
      border: 0
    }

    div:where(.swal2-container) .swal2-html-container {
      z-index: 1;
      justify-content: center;
      margin: 1em 1.6em .3em;
      padding: 0;
      overflow: auto;
      color: inherit;
      font-size: 1.125em;
      font-weight: normal;
      line-height: normal;
      text-align: center;
      word-wrap: break-word;
      word-break: break-word
    }

    div:where(.swal2-container) input:where(.swal2-input),
    div:where(.swal2-container) input:where(.swal2-file),
    div:where(.swal2-container) textarea:where(.swal2-textarea),
    div:where(.swal2-container) select:where(.swal2-select),
    div:where(.swal2-container) div:where(.swal2-radio),
    div:where(.swal2-container) label:where(.swal2-checkbox) {
      margin: 1em 2em 3px
    }

    div:where(.swal2-container) input:where(.swal2-input),
    div:where(.swal2-container) input:where(.swal2-file),
    div:where(.swal2-container) textarea:where(.swal2-textarea) {
      box-sizing: border-box;
      width: auto;
      transition: border-color .1s, box-shadow .1s;
      border: 1px solid #d9d9d9;
      border-radius: .1875em;
      background: rgba(0, 0, 0, 0);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(0, 0, 0, 0);
      color: inherit;
      font-size: 1.125em
    }

    div:where(.swal2-container) input:where(.swal2-input).swal2-inputerror,
    div:where(.swal2-container) input:where(.swal2-file).swal2-inputerror,
    div:where(.swal2-container) textarea:where(.swal2-textarea).swal2-inputerror {
      border-color: #f27474 !important;
      box-shadow: 0 0 2px #f27474 !important
    }

    div:where(.swal2-container) input:where(.swal2-input):focus,
    div:where(.swal2-container) input:where(.swal2-file):focus,
    div:where(.swal2-container) textarea:where(.swal2-textarea):focus {
      border: 1px solid #b4dbed;
      outline: none;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(100, 150, 200, .5)
    }

    div:where(.swal2-container) input:where(.swal2-input)::placeholder,
    div:where(.swal2-container) input:where(.swal2-file)::placeholder,
    div:where(.swal2-container) textarea:where(.swal2-textarea)::placeholder {
      color: #ccc
    }

    div:where(.swal2-container) .swal2-range {
      margin: 1em 2em 3px;
      background: #fff
    }

    div:where(.swal2-container) .swal2-range input {
      width: 80%
    }

    div:where(.swal2-container) .swal2-range output {
      width: 20%;
      color: inherit;
      font-weight: 600;
      text-align: center
    }

    div:where(.swal2-container) .swal2-range input,
    div:where(.swal2-container) .swal2-range output {
      height: 2.625em;
      padding: 0;
      font-size: 1.125em;
      line-height: 2.625em
    }

    div:where(.swal2-container) .swal2-input {
      height: 2.625em;
      padding: 0 .75em
    }

    div:where(.swal2-container) .swal2-file {
      width: 75%;
      margin-right: auto;
      margin-left: auto;
      background: rgba(0, 0, 0, 0);
      font-size: 1.125em
    }

    div:where(.swal2-container) .swal2-textarea {
      height: 6.75em;
      padding: .75em
    }

    div:where(.swal2-container) .swal2-select {
      min-width: 50%;
      max-width: 100%;
      padding: .375em .625em;
      background: rgba(0, 0, 0, 0);
      color: inherit;
      font-size: 1.125em
    }

    div:where(.swal2-container) .swal2-radio,
    div:where(.swal2-container) .swal2-checkbox {
      align-items: center;
      justify-content: center;
      background: #fff;
      color: inherit
    }

    div:where(.swal2-container) .swal2-radio label,
    div:where(.swal2-container) .swal2-checkbox label {
      margin: 0 .6em;
      font-size: 1.125em
    }

    div:where(.swal2-container) .swal2-radio input,
    div:where(.swal2-container) .swal2-checkbox input {
      flex-shrink: 0;
      margin: 0 .4em
    }

    div:where(.swal2-container) label:where(.swal2-input-label) {
      display: flex;
      justify-content: center;
      margin: 1em auto 0
    }

    div:where(.swal2-container) div:where(.swal2-validation-message) {
      align-items: center;
      justify-content: center;
      margin: 1em 0 0;
      padding: .625em;
      overflow: hidden;
      background: #f0f0f0;
      color: #666;
      font-size: 1em;
      font-weight: 300
    }

    div:where(.swal2-container) div:where(.swal2-validation-message)::before {
      content: "!";
      display: inline-block;
      width: 1.5em;
      min-width: 1.5em;
      height: 1.5em;
      margin: 0 .625em;
      border-radius: 50%;
      background-color: #f27474;
      color: #fff;
      font-weight: 600;
      line-height: 1.5em;
      text-align: center
    }

    div:where(.swal2-container) .swal2-progress-steps {
      flex-wrap: wrap;
      align-items: center;
      max-width: 100%;
      margin: 1.25em auto;
      padding: 0;
      background: rgba(0, 0, 0, 0);
      font-weight: 600
    }

    div:where(.swal2-container) .swal2-progress-steps li {
      display: inline-block;
      position: relative
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step {
      z-index: 20;
      flex-shrink: 0;
      width: 2em;
      height: 2em;
      border-radius: 2em;
      background: #2778c4;
      color: #fff;
      line-height: 2em;
      text-align: center
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
      background: #2778c4
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
      background: #add8e6;
      color: #fff
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
      background: #add8e6
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step-line {
      z-index: 10;
      flex-shrink: 0;
      width: 2.5em;
      height: .4em;
      margin: 0 -1px;
      background: #2778c4
    }

    div:where(.swal2-icon) {
      position: relative;
      box-sizing: content-box;
      justify-content: center;
      width: 5em;
      height: 5em;
      margin: 2.5em auto .6em;
      border: 0.25em solid rgba(0, 0, 0, 0);
      border-radius: 50%;
      border-color: #000;
      font-family: inherit;
      line-height: 5em;
      cursor: default;
      user-select: none
    }

    div:where(.swal2-icon) .swal2-icon-content {
      display: flex;
      align-items: center;
      font-size: 3.75em
    }

    div:where(.swal2-icon).swal2-error {
      border-color: #f27474;
      color: #f27474
    }

    div:where(.swal2-icon).swal2-error .swal2-x-mark {
      position: relative;
      flex-grow: 1
    }

    div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line] {
      display: block;
      position: absolute;
      top: 2.3125em;
      width: 2.9375em;
      height: .3125em;
      border-radius: .125em;
      background-color: #f27474
    }

    div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=left] {
      left: 1.0625em;
      transform: rotate(45deg)
    }

    div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=right] {
      right: 1em;
      transform: rotate(-45deg)
    }

    div:where(.swal2-icon).swal2-error.swal2-icon-show {
      animation: swal2-animate-error-icon .5s
    }

    div:where(.swal2-icon).swal2-error.swal2-icon-show .swal2-x-mark {
      animation: swal2-animate-error-x-mark .5s
    }

    div:where(.swal2-icon).swal2-warning {
      border-color: #facea8;
      color: #f8bb86
    }

    div:where(.swal2-icon).swal2-warning.swal2-icon-show {
      animation: swal2-animate-error-icon .5s
    }

    div:where(.swal2-icon).swal2-warning.swal2-icon-show .swal2-icon-content {
      animation: swal2-animate-i-mark .5s
    }

    div:where(.swal2-icon).swal2-info {
      border-color: #9de0f6;
      color: #3fc3ee
    }

    div:where(.swal2-icon).swal2-info.swal2-icon-show {
      animation: swal2-animate-error-icon .5s
    }

    div:where(.swal2-icon).swal2-info.swal2-icon-show .swal2-icon-content {
      animation: swal2-animate-i-mark .8s
    }

    div:where(.swal2-icon).swal2-question {
      border-color: #c9dae1;
      color: #87adbd
    }

    div:where(.swal2-icon).swal2-question.swal2-icon-show {
      animation: swal2-animate-error-icon .5s
    }

    div:where(.swal2-icon).swal2-question.swal2-icon-show .swal2-icon-content {
      animation: swal2-animate-question-mark .8s
    }

    div:where(.swal2-icon).swal2-success {
      border-color: #a5dc86;
      color: #a5dc86
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line] {
      position: absolute;
      width: 3.75em;
      height: 7.5em;
      transform: rotate(45deg);
      border-radius: 50%
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=left] {
      top: -0.4375em;
      left: -2.0635em;
      transform: rotate(-45deg);
      transform-origin: 3.75em 3.75em;
      border-radius: 7.5em 0 0 7.5em
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=right] {
      top: -0.6875em;
      left: 1.875em;
      transform: rotate(-45deg);
      transform-origin: 0 3.75em;
      border-radius: 0 7.5em 7.5em 0
    }

    div:where(.swal2-icon).swal2-success .swal2-success-ring {
      position: absolute;
      z-index: 2;
      top: -0.25em;
      left: -0.25em;
      box-sizing: content-box;
      width: 100%;
      height: 100%;
      border: .25em solid rgba(165, 220, 134, .3);
      border-radius: 50%
    }

    div:where(.swal2-icon).swal2-success .swal2-success-fix {
      position: absolute;
      z-index: 1;
      top: .5em;
      left: 1.625em;
      width: .4375em;
      height: 5.625em;
      transform: rotate(-45deg)
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-line] {
      display: block;
      position: absolute;
      z-index: 2;
      height: .3125em;
      border-radius: .125em;
      background-color: #a5dc86
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=tip] {
      top: 2.875em;
      left: .8125em;
      width: 1.5625em;
      transform: rotate(45deg)
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=long] {
      top: 2.375em;
      right: .5em;
      width: 2.9375em;
      transform: rotate(-45deg)
    }

    div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-tip {
      animation: swal2-animate-success-line-tip .75s
    }

    div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-long {
      animation: swal2-animate-success-line-long .75s
    }

    div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-circular-line-right {
      animation: swal2-rotate-success-circular-line 4.25s ease-in
    }

    [class^=swal2] {
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    .swal2-show {
      animation: swal2-show .3s
    }

    .swal2-hide {
      animation: swal2-hide .15s forwards
    }

    .swal2-noanimation {
      transition: none
    }

    .swal2-scrollbar-measure {
      position: absolute;
      top: -9999px;
      width: 50px;
      height: 50px;
      overflow: scroll
    }

    .swal2-rtl .swal2-close {
      margin-right: initial;
      margin-left: 0
    }

    .swal2-rtl .swal2-timer-progress-bar {
      right: 0;
      left: auto
    }

    @keyframes swal2-toast-show {
      0% {
        transform: translateY(-0.625em) rotateZ(2deg)
      }

      33% {
        transform: translateY(0) rotateZ(-2deg)
      }

      66% {
        transform: translateY(0.3125em) rotateZ(2deg)
      }

      100% {
        transform: translateY(0) rotateZ(0deg)
      }
    }

    @keyframes swal2-toast-hide {
      100% {
        transform: rotateZ(1deg);
        opacity: 0
      }
    }

    @keyframes swal2-toast-animate-success-line-tip {
      0% {
        top: .5625em;
        left: .0625em;
        width: 0
      }

      54% {
        top: .125em;
        left: .125em;
        width: 0
      }

      70% {
        top: .625em;
        left: -0.25em;
        width: 1.625em
      }

      84% {
        top: 1.0625em;
        left: .75em;
        width: .5em
      }

      100% {
        top: 1.125em;
        left: .1875em;
        width: .75em
      }
    }

    @keyframes swal2-toast-animate-success-line-long {
      0% {
        top: 1.625em;
        right: 1.375em;
        width: 0
      }

      65% {
        top: 1.25em;
        right: .9375em;
        width: 0
      }

      84% {
        top: .9375em;
        right: 0;
        width: 1.125em
      }

      100% {
        top: .9375em;
        right: .1875em;
        width: 1.375em
      }
    }

    @keyframes swal2-show {
      0% {
        transform: scale(0.7)
      }

      45% {
        transform: scale(1.05)
      }

      80% {
        transform: scale(0.95)
      }

      100% {
        transform: scale(1)
      }
    }

    @keyframes swal2-hide {
      0% {
        transform: scale(1);
        opacity: 1
      }

      100% {
        transform: scale(0.5);
        opacity: 0
      }
    }

    @keyframes swal2-animate-success-line-tip {
      0% {
        top: 1.1875em;
        left: .0625em;
        width: 0
      }

      54% {
        top: 1.0625em;
        left: .125em;
        width: 0
      }

      70% {
        top: 2.1875em;
        left: -0.375em;
        width: 3.125em
      }

      84% {
        top: 3em;
        left: 1.3125em;
        width: 1.0625em
      }

      100% {
        top: 2.8125em;
        left: .8125em;
        width: 1.5625em
      }
    }

    @keyframes swal2-animate-success-line-long {
      0% {
        top: 3.375em;
        right: 2.875em;
        width: 0
      }

      65% {
        top: 3.375em;
        right: 2.875em;
        width: 0
      }

      84% {
        top: 2.1875em;
        right: 0;
        width: 3.4375em
      }

      100% {
        top: 2.375em;
        right: .5em;
        width: 2.9375em
      }
    }

    @keyframes swal2-rotate-success-circular-line {
      0% {
        transform: rotate(-45deg)
      }

      5% {
        transform: rotate(-45deg)
      }

      12% {
        transform: rotate(-405deg)
      }

      100% {
        transform: rotate(-405deg)
      }
    }

    @keyframes swal2-animate-error-x-mark {
      0% {
        margin-top: 1.625em;
        transform: scale(0.4);
        opacity: 0
      }

      50% {
        margin-top: 1.625em;
        transform: scale(0.4);
        opacity: 0
      }

      80% {
        margin-top: -0.375em;
        transform: scale(1.15)
      }

      100% {
        margin-top: 0;
        transform: scale(1);
        opacity: 1
      }
    }

    @keyframes swal2-animate-error-icon {
      0% {
        transform: rotateX(100deg);
        opacity: 0
      }

      100% {
        transform: rotateX(0deg);
        opacity: 1
      }
    }

    @keyframes swal2-rotate-loading {
      0% {
        transform: rotate(0deg)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    @keyframes swal2-animate-question-mark {
      0% {
        transform: rotateY(-360deg)
      }

      100% {
        transform: rotateY(0)
      }
    }

    @keyframes swal2-animate-i-mark {
      0% {
        transform: rotateZ(45deg);
        opacity: 0
      }

      25% {
        transform: rotateZ(-25deg);
        opacity: .4
      }

      50% {
        transform: rotateZ(15deg);
        opacity: .8
      }

      75% {
        transform: rotateZ(-5deg);
        opacity: 1
      }

      100% {
        transform: rotateX(0);
        opacity: 1
      }
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
      overflow: hidden
    }

    body.swal2-height-auto {
      height: auto !important
    }

    body.swal2-no-backdrop .swal2-container {
      background-color: rgba(0, 0, 0, 0) !important;
      pointer-events: none
    }

    body.swal2-no-backdrop .swal2-container .swal2-popup {
      pointer-events: all
    }

    body.swal2-no-backdrop .swal2-container .swal2-modal {
      box-shadow: 0 0 10px rgba(0, 0, 0, .4)
    }

    @media print {
      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        overflow-y: scroll !important
      }

      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
        display: none
      }

      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
        position: static !important
      }
    }

    body.swal2-toast-shown .swal2-container {
      box-sizing: border-box;
      width: 360px;
      max-width: 100%;
      background-color: rgba(0, 0, 0, 0);
      pointer-events: none
    }

    body.swal2-toast-shown .swal2-container.swal2-top {
      inset: 0 auto auto 50%;
      transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-top-end,
    body.swal2-toast-shown .swal2-container.swal2-top-right {
      inset: 0 0 auto auto
    }

    body.swal2-toast-shown .swal2-container.swal2-top-start,
    body.swal2-toast-shown .swal2-container.swal2-top-left {
      inset: 0 auto auto 0
    }

    body.swal2-toast-shown .swal2-container.swal2-center-start,
    body.swal2-toast-shown .swal2-container.swal2-center-left {
      inset: 50% auto auto 0;
      transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center {
      inset: 50% auto auto 50%;
      transform: translate(-50%, -50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center-end,
    body.swal2-toast-shown .swal2-container.swal2-center-right {
      inset: 50% 0 auto auto;
      transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-start,
    body.swal2-toast-shown .swal2-container.swal2-bottom-left {
      inset: auto auto 0 0
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom {
      inset: auto auto 0 50%;
      transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-end,
    body.swal2-toast-shown .swal2-container.swal2-bottom-right {
      inset: auto 0 0 auto
    }
  </style>
  <style type="text/css">
    .rmdp-wrapper {
      background-color: #fff;
      border-radius: 5px;
      direction: ltr;
      text-align: center;
      width: max-content
    }

    .rmdp-shadow {
      box-shadow: 0 0 5px #8798ad
    }

    .rmdp-border {
      border: 1px solid #cfd8e2
    }

    .rmdp-calendar {
      height: max-content;
      padding: 4px
    }

    .rmdp-border-top {
      border-top: 1px solid #cfd8e2
    }

    .rmdp-border-bottom {
      border-bottom: 1px solid #cfd8e2
    }

    .rmdp-border-left {
      border-left: 1px solid #cfd8e2
    }

    .rmdp-border-right {
      border-right: 1px solid #cfd8e2
    }

    .rmdp-week,
    .rmdp-ym {
      display: flex;
      justify-content: space-between
    }

    .rmdp-ym {
      height: 25%
    }

    .rmdp-day,
    .rmdp-week-day {
      color: #000;
      cursor: pointer;
      height: 34px;
      position: relative;
      width: 34px
    }

    .rmdp-week-day {
      color: #0074d9;
      cursor: default;
      font-size: 13px;
      font-weight: 500
    }

    .rmdp-day span,
    .rmdp-week-day {
      display: flex;
      flex-direction: column;
      justify-content: center
    }

    .rmdp-day span {
      border-radius: 50%;
      bottom: 3px;
      font-size: 14px;
      left: 3px;
      position: absolute;
      right: 3px;
      top: 3px
    }

    .rmdp-day.rmdp-today span {
      background-color: #7fdbff;
      color: #fff
    }

    .rmdp-day.rmdp-selected span:not(.highlight) {
      background-color: #0074d9;
      box-shadow: 0 0 3px #8798ad;
      color: #fff
    }

    .rmdp-day.rmdp-deactive,
    .rmdp-day.rmdp-disabled {
      color: #8798ad
    }

    .rmdp-day.rmdp-deactive.rmdp-selected span {
      background-color: #4ca6f5;
      box-shadow: 0 0 3px #bac5d3
    }

    .rmdp-ym .rmdp-day {
      flex: 1;
      margin: auto
    }

    .rmdp-ym .rmdp-day span {
      border-radius: 12px;
      padding: 2px 0
    }

    .rmdp-range {
      background-color: #0074d9;
      box-shadow: 0 0 3px #8798ad;
      color: #fff
    }

    .rmdp-range-hover {
      background-color: #7ea6f0;
      color: #fff
    }

    .rmdp-range-hover.start,
    .rmdp-range.start {
      border-bottom-left-radius: 50%;
      border-top-left-radius: 50%
    }

    .rmdp-range-hover.end,
    .rmdp-range.end {
      border-bottom-right-radius: 50%;
      border-top-right-radius: 50%
    }

    .rmdp-ym .rmdp-range-hover.start,
    .rmdp-ym .rmdp-range.start {
      border-bottom-left-radius: 15px;
      border-top-left-radius: 15px
    }

    .rmdp-ym .rmdp-range-hover.end,
    .rmdp-ym .rmdp-range.end {
      border-bottom-right-radius: 15px;
      border-top-right-radius: 15px
    }

    .rmdp-day:not(.rmdp-disabled):not(.rmdp-day-hidden) span:hover {
      background-color: #7ea6f0;
      color: #fff
    }

    .rmdp-day-picker {
      padding: 5px
    }

    .rmdp-header {
      font-size: 14px;
      height: 38px;
      line-height: 37px;
      margin-top: 5px
    }

    .rmdp-month-picker,
    .rmdp-year-picker {
      background-color: #fff;
      border-radius: 0 0 5px 5px;
      bottom: 2px;
      left: 2px;
      position: absolute;
      right: 2px;
      top: 2px
    }

    .only.rmdp-month-picker,
    .only.rmdp-year-picker {
      height: 240px;
      position: static;
      width: 250px
    }

    .rmdp-header-values {
      color: #000;
      margin: auto
    }

    .rmdp-header-values span {
      padding: 0 0 0 5px
    }

    .rmdp-arrow {
      border: solid #0074d9;
      border-width: 0 2px 2px 0;
      display: inline-block;
      height: 3px;
      margin-top: 5px;
      padding: 2px;
      width: 3px
    }

    .rmdp-right i {
      margin-right: 3px;
      transform: rotate(-45deg);
      -webkit-transform: rotate(-45deg)
    }

    .rmdp-left i {
      margin-left: 3px;
      transform: rotate(135deg);
      -webkit-transform: rotate(135deg)
    }

    .rmdp-left,
    .rmdp-right {
      position: absolute;
      top: 54%;
      transform: translateY(-50%)
    }

    .rmdp-left {
      left: 0
    }

    .rmdp-right {
      right: 0
    }

    .rmdp-arrow-container {
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      height: 20px;
      justify-content: center;
      margin: 0 5px;
      width: 20px
    }

    .rmdp-arrow-container:hover {
      background-color: #0074d9;
      box-shadow: 0 0 3px #8798ad
    }

    .rmdp-arrow-container:hover .rmdp-arrow {
      border: solid #fff;
      border-width: 0 2px 2px 0
    }

    .rmdp-arrow-container.disabled {
      cursor: default
    }

    .rmdp-arrow-container.disabled:hover {
      background-color: inherit;
      box-shadow: inherit
    }

    .rmdp-arrow-container.disabled .rmdp-arrow,
    .rmdp-arrow-container.disabled:hover .rmdp-arrow {
      border: solid gray;
      border-width: 0 2px 2px 0
    }

    .rmdp-rtl {
      direction: rtl
    }

    .rmdp-rtl .rmdp-left i {
      margin-left: 0;
      margin-right: 3px;
      transform: rotate(-45deg);
      -webkit-transform: rotate(-45deg)
    }

    .rmdp-rtl .rmdp-right i {
      margin-left: 3px;
      margin-right: 0;
      transform: rotate(135deg);
      -webkit-transform: rotate(135deg)
    }

    .rmdp-rtl .rmdp-right {
      left: 0;
      right: auto
    }

    .rmdp-rtl .rmdp-left {
      left: auto;
      right: 0
    }

    .rmdp-rtl .rmdp-range-hover.start,
    .rmdp-rtl .rmdp-range.start {
      border-bottom-left-radius: unset;
      border-bottom-right-radius: 50%;
      border-top-left-radius: unset;
      border-top-right-radius: 50%
    }

    .rmdp-rtl .rmdp-range-hover.end,
    .rmdp-rtl .rmdp-range.end {
      border-bottom-left-radius: 50%;
      border-bottom-right-radius: unset;
      border-top-left-radius: 50%;
      border-top-right-radius: unset
    }

    .rmdp-rtl .rmdp-range.start.end {
      border-radius: 50%
    }

    .rmdp-rtl .rmdp-ym .rmdp-range-hover.start,
    .rmdp-rtl .rmdp-ym .rmdp-range.start {
      border-bottom-right-radius: 15px;
      border-top-right-radius: 15px
    }

    .rmdp-rtl .rmdp-ym .rmdp-range-hover.end,
    .rmdp-rtl .rmdp-ym .rmdp-range.end {
      border-bottom-left-radius: 15px;
      border-top-left-radius: 15px
    }

    .rmdp-day-hidden,
    .rmdp-day.rmdp-disabled {
      cursor: default
    }

    .rmdp-selected .highlight {
      box-shadow: 0 0 3px #8798ad
    }

    .rmdp-day:not(.rmdp-disabled):not(.rmdp-day-hidden) .highlight-red:hover {
      background-color: #ff6687
    }

    .rmdp-day:not(.rmdp-deactive) .highlight-red {
      color: #cc0303
    }

    .rmdp-day.rmdp-deactive .highlight-red {
      color: #e08e8e
    }

    .rmdp-day.rmdp-selected .highlight-red {
      background-color: #ea0034;
      color: #fff
    }

    .rmdp-day.rmdp-deactive.rmdp-selected .highlight-red {
      background-color: #e4b0ba;
      color: #fff
    }

    .rmdp-day:not(.rmdp-disabled):not(.rmdp-day-hidden) .highlight-green:hover {
      background-color: #4db6ac
    }

    .rmdp-day:not(.rmdp-deactive) .highlight-green {
      color: #00796b
    }

    .rmdp-day.rmdp-deactive .highlight-green {
      color: #7ab3ac
    }

    .rmdp-day.rmdp-selected .highlight-green {
      background-color: #009688;
      color: #fff
    }

    .rmdp-day.rmdp-deactive.rmdp-selected .highlight-green {
      background-color: #749c98;
      color: #fff
    }

    .rmdp-day-hidden,
    .rmdp-day-hidden:hover span {
      background-color: unset;
      color: transparent
    }

    .rmdp-month-name {
      cursor: default;
      font-size: 14px;
      margin: 3px 0
    }

    .rmdp-full-year {
      grid-template-columns: 1fr 1fr 1fr
    }

    @media (max-height:450px),
    (max-width:450px) {

      .rmdp-day,
      .rmdp-week-day {
        height: 28px;
        width: 28px
      }

      .rmdp-day span {
        font-size: 12px;
        padding-left: .5px
      }

      .only.rmdp-month-picker,
      .only.rmdp-year-picker {
        height: 200px;
        width: 205px
      }

      .rmdp-header {
        height: 32px;
        line-height: 32px
      }

      .rmdp-header,
      .rmdp-month-name {
        font-size: 12px
      }

      .rmdp-full-year {
        grid-template-columns: 1fr 1fr
      }
    }
  </style>
  <style type="text/css">
    .rmdp-visible {
      visibility: visible
    }

    .rmdp-invisible {
      visibility: hidden
    }

    .rmdp-input {
      border: 1px solid #c0c4d6;
      border-radius: 5px;
      height: 22px;
      margin: 1px 0;
      padding: 2px 5px
    }

    .rmdp-input:focus {
      border: 1px solid #a4b3c5;
      box-shadow: 0 0 2px #a4b3c5;
      outline: none !important
    }

    .rmdp-button {
      background-color: #0074d9;
      border: none;
      border-radius: 5px;
      color: #fff;
      cursor: pointer;
      display: inline-block;
      padding: 7px 16px;
      text-align: center;
      text-decoration: none;
      transition: .3s
    }

    .rmdp-button:hover {
      background-color: #143ac5;
      transition: .4s
    }

    .rmdp-button:disabled {
      background-color: #8798ad
    }

    .rmdp-action-button {
      border-radius: unset;
      color: #2682d3;
      float: right;
      font-weight: 700;
      margin: 15px 10px 15px 0
    }

    .rmdp-action-button,
    .rmdp-action-button:hover {
      background-color: transparent
    }

    .rmdp-ep-arrow {
      overflow: hidden;
      will-change: transform
    }

    .rmdp-ep-arrow:after {
      background-color: #fff;
      content: "";
      height: 12px;
      position: absolute;
      transform: rotate(45deg);
      width: 12px
    }

    .rmdp-ep-shadow:after {
      box-shadow: 0 0 6px #8798ad
    }

    .rmdp-ep-border:after {
      border: 1px solid #cfd8e2
    }

    .rmdp-ep-arrow[direction=top] {
      border-bottom: 1px solid #fff
    }

    .rmdp-ep-arrow[direction=left] {
      border-right: 1px solid #fff
    }

    .rmdp-ep-arrow[direction=right] {
      border-left: 1px solid #fff;
      margin-left: -1px
    }

    .rmdp-ep-arrow[direction=bottom] {
      border-top: 1px solid #fff;
      margin-top: -1.5px
    }

    .rmdp-ep-arrow[direction=top]:after {
      left: 4px;
      top: 5px
    }

    .rmdp-ep-arrow[direction=bottom]:after {
      left: 4px;
      top: -6px
    }

    .rmdp-ep-arrow[direction=left]:after {
      left: 5px;
      top: 3px
    }

    .rmdp-ep-arrow[direction=right]:after {
      left: -6px;
      top: 3px
    }
  </style>
  <style data-rc-order="append" rc-util-key="-ant-1726359143259-0.7833757535335202-dynamic-theme">
    :root {
      --ant-primary-color: rgb(48, 109, 181);
      --ant-primary-color-disabled: #d3e0e8;
      --ant-primary-color-hover: #538bc2;
      --ant-primary-color-active: #1f508f;
      --ant-primary-color-outline: rgba(48, 109, 181, 0.2);
      --ant-primary-color-deprecated-bg: #e6eff5;
      --ant-primary-color-deprecated-border: #a4c4db;
      --ant-primary-1: #e6eff5;
      --ant-primary-2: #d3e0e8;
      --ant-primary-3: #a4c4db;
      --ant-primary-4: #7aa7cf;
      --ant-primary-5: #538bc2;
      --ant-primary-6: #306db5;
      --ant-primary-7: #1f508f;
      --ant-primary-8: #123469;
      --ant-primary-9: #081d42;
      --ant-primary-10: #030b1c;
      --ant-primary-color-deprecated-l-35: rgb(174, 201, 234);
      --ant-primary-color-deprecated-l-20: rgb(114, 161, 217);
      --ant-primary-color-deprecated-t-20: rgb(89, 138, 196);
      --ant-primary-color-deprecated-t-50: rgb(152, 182, 218);
      --ant-primary-color-deprecated-f-12: rgba(48, 109, 181, 0.12);
      --ant-primary-color-active-deprecated-f-30: rgba(230, 239, 245, 0.3);
      --ant-primary-color-active-deprecated-d-02: rgb(223, 234, 242);
    }
  </style>
  <meta charset="utf-8" data-react-helmet="true">
  <meta name="description" content="هي منصة إلكترونية تخدم القطاع الصحي في المملكة من خلال تقديم خدمات إلكترونية معتمدة من قبل وزارة الصحة، أنشئت منصة صحة تماشيًا مع رؤية المملكة 2030 وتفعيلاً للتوجه الحكومي، وتهدف إلى أتمتة وتوحيد الإجراءات والخدمات وتسهيلها في جميع الجهات الصحية وتشمل العديد من الخدمات الصحية التي تحت مظلة منظومة الصحة وقطاعاتها المتنوعة للأفراد من المنشأت الطبية." data-react-helmet="true">
  <script id="google-recaptcha-v3" src="%D8%B5%D8%AD%D8%A9%20-%201%D9%85%D9%86%D8%B5%D8%A9%20%D8%A7%D9%84%D8%AE%D8%AF%D9%85%D8%A7%D8%AA%20%D8%A7%D9%84%D8%B5%D8%AD%D9%8A%D8%A9_files/api.js"></script>
</head>

<body>
  <noscript>You need to enable JavaScript to run this app.</noscript>
  <div id="root">
    <div class="App">
      <main>
        <div>
          <div style="z-index: 99; opacity: 1; transform: none;">
            <nav class="header navbar navbar-expand-lg navbar-light">
              <div class="nav-container">
                <a class="navbar-brand" href="#/">
                  <img src="seha_logo.4dde29e5c4f38890ccf9787220bcc5be.svg" alt="logo" class="logo">
                </a>
                <div class="d-lg-none d-xl-none justify-content-end menu">
                  <button aria-controls="responsive-navbar-nav" type="button" aria-label="Toggle navigation" class="d-inline-flex menu-img navbar-toggler collapsed">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </div>
                <div class="white justify-content-between navbar-collapse collapse" id="responsive-navbar-nav">
                  <div class="justify-content-between navbar-nav">
                    <a data-rr-ui-event-key="1" class="link nav-link" href="#/services">الخدمات</a>
                    <a data-rr-ui-event-key="2" class="link nav-link" href="#">الاستعلامات</a>
                  </div>
                  <div class="justify-content-between navbar-nav">
                    <a data-rr-ui-event-key="4" class="nav-link" href="https://www.seha.sa/ui#/iamredirection/1">
                      <p>إنشاء حساب</p>
                    </a>
                    <a data-rr-ui-event-key="5" class="login nav-link" href="#">
                      <img src="user_o.7825677e64284b06f60f7c30082fed56.svg" alt="logo">
                      <p>تسجيل الدخول</p>
                    </a>
                  </div>
                </div>
              </div>
              <button style="display: none;" id="top-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.4" height="18.503" viewBox="0 0 14.4 18.503">
                  <path id="arrow-up-c" d="M8.862,11.37L14.381,6.1a1.7,1.7,0,0,1,2.355,0l5.54,5.272a1.555,1.555,0,0,1,0,2.271,1.738,1.738,0,0,1-2.376,0l-2.649-2.528V22.519a1.684,1.684,0,0,1-3.364,0V11.113l-2.649,2.534a1.738,1.738,0,0,1-2.376,0,1.561,1.561,0,0,1,0-2.276Z" transform="translate(-8.369 -5.625)" fill="#00a1c9"></path>
                </svg>
              </button>
            </nav>
          </div>
          <div class="inner-page inquiries-container">
            <h1 class="heading">الإجازات المرضية</h1>
            <p class="sub-heading">خدمة الاستعلام عن الإجازات المرضية تتيح لك الاستعلام عن حالة طلبك للإجازة ويمكنك طباعتها عن طريق تطبيق صحتي</p>
            <div class="row justify-content-center mt-1">
              <div class="col-md-5 p-4">
                <div class="form-group">
                  <input type="text" id="leave_code" maxlength="14" placeholder="رمز الخدمة" class="form-control">
                </div>
                <div class="form-group">
                  <label></label>
                  <input type="text" id="identity_number" maxlength="10" pattern="\d*" placeholder="رقم الهوية / الإقامة" class="form-control">
                </div>
                <div id="no-results" class="alert alert-danger mt-2 hidden">لا يوجد نتائج</div>
                <div id="result-container" class="results-inquiery row hidden">
                  <div class="col-md-6"><span>الاسم: </span><span id="name"></span></div>
                  <div class="col-md-6"><span>تاريخ إصدار تقرير الإجازة: </span><span id="report_date"></span></div>
                  <div class="col-md-6"><span>تبدأ من: </span><span id="start_date"></span></div>
                  <div class="col-md-6"><span>وحتى: </span><span id="end_date"></span></div>
                  <div class="col-md-6"><span>المدة بالأيام: </span><span id="duration"></span></div>
                  <div class="col-md-6"><span>اسم الطبيب: </span><span id="doctor_name"></span></div>
                  <div class="col-md-6"><span>المسمى الوظيفي: </span><span id="doctor_title"></span></div>
                </div>

                <button class="btn btn-primary mt-3" id="check-leave">استعلام جديد</button>
              </div>
              <div class="col-md-12 text-center">
                <a class="btn btn-primary mb-3" href="https://sehe.in/ui/inquiries/">رجوع للاستعلامات</a>
              </div>
            </div>
          </div>
          <div class="mini-footer-container container-fluid">
            <ul class="logos-wrapper">
              <li><img class="logo" src="lean-logo.47f1c2c4f559aab0fc8472beba56bb76.svg"></li>
              <li><img class="logo" src="MOH-logo.3721a12f98819dbb30527088a659b864.svg"></li>
            </ul>
            <div class="footer-note-wrapper">
              <p>منصة صحة معتمدة من قبل وزارة الصحة © 2024</p>
              <ul>
                <li><a>سياسة الخصوصية وشروط الإستخدام</a></li>
                <li><a class="" href="https://www.seha.sa/Content/LandingPages/UserManual.pdf">دليل الاستخدام</a></li>
              </ul>
            </div>
            <ul class="links-wrapper">
              <li><a href="#/">الرئيسية</a></li>
              <li><a href="#/faq">الأسئلة الشائعة</a></li>
              <li><a href="#/contactUs">تواصل معنا</a></li>
            </ul>
            <ul class="contact-wrapper">
              <li class="socials-wrapper">
                <button>
                  <a href="https://www.youtube.com/channel/UCb9ZrS2YcriYqIPIHNp9wcQ">
                    <img src="youtube-fill.c5beebfa7cdb5cbc577b75e89ef8f244.svg">
                  </a>
                </button>
                <button>
                  <a href="https://twitter.com/seha_services">
                    <img src="twitter-fill.9a9732867f4d5522891aeaa883b834bb.svg">
                  </a>
                </button>
                <button>
                  <a href="https://wa.me/920002005" target="_blank" rel="noreferrer">
                    <img src="whatsapp-icon.96a9f6c9dad8f701b1015c07572d4fbb.svg" style="height: 16px;">
                  </a>
                </button>
              </li>
              <li><a href="mailto: support@seha.sa">support@seha.sa</a></li>
              <li><a href="tel: 920002005">920002005</a></li>
            </ul>
          </div>
        </div>
      </main>
    </div>
  </div>
  <script defer="defer" src="vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon="{&quot;rayId&quot;:&quot;8c3467630bb3d1e0&quot;,&quot;serverTiming&quot;:{&quot;name&quot;:{&quot;cfExtPri&quot;:true,&quot;cfL4&quot;:true}},&quot;version&quot;:&quot;2024.8.0&quot;,&quot;token&quot;:&quot;e370208f11b34d34bca931ffb6c58056&quot;}" crossorigin="anonymous"></script>
  <deepl-input-controller></deepl-input-controller>
  <div>
    <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; position: fixed; visibility: hidden; display: block; transition: right 0.3s; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
      <div class="grecaptcha-logo">
        <iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-w76jak6euylc" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="anchor.htm"></iframe>
      </div>
      <div class="grecaptcha-error"></div>
      <textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">
                03AFcWeA5vA3ogPL08pejlbLgf3lRN8SgwEc5XQIT0Ow2ew49JiA--Rr552hTQzBvQ5cKpydsjvz2KU1ZqvbSq5kCDFNFAUUYfnFWRj-PZc0ccDiSTHcN_t4Dw8xxN0PV9oz4AyLpdsEPT979aPVGfYnoGEUhBpUjlj_txk4ghat_C3DucG9kmCLm04u6Pci4RClVmud5sBebtIV6lqr5bd9i9OGYThyF7KonnPmmDcs8DnD4veOYcu_0yTuXAELNHw-bE7b7K1dCY_dFnaHuDouVH2ewOeN2BhJAK1vPqRPSt0V3aQhKKs5WMRf0-3h8sC21eafkCdNXAvhWwkXmxeHqgLd90H7mhrunkpYQDu4iebmLVj_MAPpB9KZMmfUKGoGJO9wqqlcPlqYsFq-DDoGLEnpMxH6UTJt_yFEY17Aa0Yht8ZwnQYiEQ0L5-S2K7xhUlxR-IABahbqSp-VMUAHrKJKZOUAYXFKSSEV9N24cDiKdPkXbfwbg-J5FyzbfRcQAFy2RVw9EYNTg9fw72LxvP2V6KO1ujLH1U9kzDn51JTbttc4YgT4Rp6Z_bQFyf67KhA5EJNMdzbHtcTcI7VZYJNglVWC0jS5gMHBNR9birGAHe_XmUkblYvqvbINCCmy-SY6x2QHOgzq9k57tY2DkAmFVb0VywbhbPtjq6iNAgUHRFXAt0U9KSxEujW1vXSRCmMblO8_KYiR9-gOXTay31bm3G-M1oLoSaVMpnvPj9wsBZlvaQh_bH9HECzXLhezjIQpwr3Ne_zgoFhLx729pfILQ3lP8UZQDElbfg9tjZ0nXGCHANLyty-sDzDZWYOnQPN-niE4Xo
            </textarea>
    </div>
    <iframe style="display: none;"></iframe>
  </div>
  <script>
    document.getElementById('check-leave').addEventListener('click', function() {
      const leaveCode = document.getElementById('leave_code').value;
      const identityNumber = document.getElementById('identity_number').value;

      // إخفاء الرسالة عند البدء في البحث
      const noResults = document.getElementById('no-results');
      const resultContainer = document.getElementById('result-container');
      noResults.classList.add('hidden');
      resultContainer.classList.add('hidden');

      // AJAX request to PHP backend to fetch leave data
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'fetch_leave_data.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          const response = JSON.parse(xhr.responseText);
          if (response.success) {
            // Set the data in the result container
            document.getElementById('name').innerText = response.data.name_ar;
            document.getElementById('report_date').innerText = response.data.report_issue_date;
            document.getElementById('start_date').innerText = response.data.leave_start_gregorian;
            document.getElementById('end_date').innerText = response.data.leave_end_gregorian;
            document.getElementById('duration').innerText = response.data.duration;
            document.getElementById('doctor_name').innerText = response.data.doctor_name_ar;
            document.getElementById('doctor_title').innerText = response.data.doctor_job_title_ar;

            // Show the result container
            resultContainer.classList.remove('hidden');
            resultContainer.classList.add('visible');
          } else {
            // Show the no results message
            noResults.classList.remove('hidden');
          }
        }
      };
      xhr.send(`leave_code=${leaveCode}&identity_number=${identityNumber}`);
    });
  </script>

</body>

</html>