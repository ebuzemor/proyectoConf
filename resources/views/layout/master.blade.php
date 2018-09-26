<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/confraise.ico" type="image/x-icon">
    <title>Confraise: Fundraising for Conferences & Research Projects</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }
        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    @yield('css')
</head>
<body>
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="l-s-2 blink">LOADING...</div>
    </div>
</div>

<div id="app" class="paper-loading">
    @include("layout.menu")
    <main class="overflow-hide">
        @yield('pageSections')
    </main>
    @include("layout.footerSection")
</div>
<!--End Page page_wrrapper -->
<script src="assets/js/app.js"></script>
@yield('js')
</body>
</html>