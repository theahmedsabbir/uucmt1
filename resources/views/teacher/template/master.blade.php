<!doctype html>
<html lang="en">
<head>
	<!-- header section start -->
	@include('teacher.includes.header')
	<!-- header section end -->


	<!-- css section start -->
	<!-- VENDOR CSS -->
	@include('teacher.includes.css')
	<!-- css section end -->

</head>
<body class="theme-blue">

    <!-- Page Loader start-->
    {{-- @include('teacher.includes.pageloader') --}}
    <!-- Page Loader end-->

    <div id="wrapper">

        <!-- nav section start -->
        @include('teacher.includes.nav')
        <!-- nav section end -->

        <!-- left sidebar start -->
        @include('teacher.includes.left_sidebar')
        <!-- left sidebar end -->


        <!-- main section start -->
        @yield('main_content')
        <!-- main section end -->  
    </div>

    <!-- script section start -->
    @include('teacher.includes.script')
    <!-- script section end -->


</body>
</html>

