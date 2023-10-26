<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="rica" />
    <meta name="keywords" content="rica" />
    <meta name="author" content="rica" />
    <link rel="icon" href="{{asset('front/assets/images/favicon.png')}}" type="image/x-icon" />
    <title>Welt</title>

    <!--Google font-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Vampiro+One&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/animate.css')}}" />

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/slick.css')}}" />
    <link
        rel="stylesheet"
        type="text/css"
        href="{{asset('front/assets/css/slick-theme.css')}}" />

    <!-- Date-time picker css -->
    <link
        rel="stylesheet"
        type="text/css"
        href="{{asset('front/assets/css/datepicker.min.css')}}" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/bootstrap.css')}}" />

    <!-- Themify icon -->
    <link
        rel="stylesheet"
        type="text/css"
        href="{{asset('front/assets/css/themify-icons.css')}}" />

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/color1.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/custom.css')}}" />
</head>

<body>
<!-- pre-loader start -->
{{--<div class="loader-wrapper img-gif">--}}
{{--    <img src="{{asset('front/assets/images/loader.gif')}}" alt="" />--}}
{{--</div>--}}
<!-- pre-loader end -->

@include('front.layouts.includes.header')

@yield('content')



<!--  home section end -->

<!-- latest jquery-->
<script src="{{asset('front/assets/js/jquery-3.5.1.min.js')}}"></script>

<!-- popper js-->
<script src="{{asset('front/assets/js/popper.min.js')}}"></script>

<!-- date-time picker js -->
<script src="{{asset('front/assets/js/date-picker.js')}}"></script>

<!-- tilt effect js-->
<script src="{{asset('front/assets/js/tilt.jquery.js')}}"></script>

<!-- slick js-->
<script src="{{asset('front/assets/js/slick.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('front/assets/js/bootstrap.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('front/assets/js/lazysizes.min.js')}}"></script>

<!-- Theme js-->
<script src="{{asset('front/assets/js/script.js')}}"></script>

<script>
    $("#datepicker").datepicker({
        uiLibrary: "bootstrap4",
        name: "pickDate",
    });
    $("#timepicker").timepicker({
        uiLibrary: "bootstrap4",
        name: "pickTime",
    });

    $("#datepickerDrop").datepicker({
        uiLibrary: "bootstrap4",
    });
    $("#timepickerDrop").timepicker({
        uiLibrary: "bootstrap4",
    });
    $(window).on("load", function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<script>
    $(".form-group:has(.open-select)").each(function () {
        $inputVal = $(this).find("input");
        $inputShow = $(this).find("input[type='text']");
        $selections = $(this).find(".selector-box li button");

        $selections.click(function () {
            $parent = $(this).parent().parent().parent();
            $parent.removeClass("show");
            $inputVal.val($(this).data("value"));
            $inputShow.val($(this).text().trim());
        });
    });
</script>
</body>
</html>













