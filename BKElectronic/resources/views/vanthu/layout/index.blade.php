<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BKElectronic</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap Core CSS -->
    <link href="front_asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="front_asset/css/shop-homepage.css" rel="stylesheet">
    <link href="front_asset/css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
@include('vanthu.layout.header')

<!-- Page Content -->
@yield('content');
<!-- /#page-wrapper -->
<!-- Footer -->
@include('vanthu.layout.footer')
<!-- end Footer -->
<!-- jQuery -->
<script src="front_asset/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="front_asset/js/bootstrap.min.js"></script>
<script src="front_asset/js/my.js"></script>
<script type="text/javascript" language="javascript" src="front_asset/ckeditor/ckeditor.js" ></script>
@yield('script')

</body>

</html>
