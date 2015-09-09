<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="../public/favicon.ico" />
        <title>@yield('title')</title>

        <link rel="stylesheet" href="../assets/css/material.min.css">
        <link rel="stylesheet" href="../assets/css/styles.css">        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        @yield('styles')
    </head>
    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">            
            @include('shared.navbar_home')
            <main class="mdl-layout__content mdl-color--grey-100">
                <div class="mdl-grid content">
                    @yield('content')
                </div>                
            </main>
            @yield('javascript')
            <script src="../assets/js/jquery-1.11.3.min.js"></script>
            <script src="../assets/js/material.min.js"></script>
            <!--@include('shared.footer_login')-->
        </div>
    </body>
</html>