<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Blank - Layout | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('css/theme.css')}}">


</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">

    <div class="nk-app-root">

        @include('admin-layout.sidebar')
        <!-- main  -->
        <div class="nk-main ">
            <!-- wrap  -->
            <div class="nk-wrap ">

                @include('admin-layout.navbar')

                <!-- content -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                               @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content -->
            </div>
            <!-- wrap -->
        </div>
        <!-- main -->
    </div>
    <!-- app-root -->
    <!-- JavaScript -->
    <script src="{{ asset('js/bundle.js')}}"></script>
    <script src="{{ asset('js/scripts.js')}}"></script>
    <script src="{{ asset('js/quill.js')}}"></script>

    <link rel="stylesheet" href="{{ asset('css/editors/quill.css')}}">


</body>

</html>
