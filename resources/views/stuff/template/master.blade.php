<!doctype html>
<html lang="en">
<head>
	<!-- header section start -->
	@include('stuff.includes.header')
	<!-- header section end -->


	<!-- css section start -->
	<!-- VENDOR CSS -->
	@include('stuff.includes.css')
	<!-- css section end -->

</head>
<body class="theme-blue">

    <!-- Page Loader start-->
    {{-- @include('stuff.includes.pageloader') --}}
    <!-- Page Loader end-->

    <div id="wrapper">

        <!-- nav section start -->
        @include('stuff.includes.nav')
        <!-- nav section end -->

        <!-- left sidebar start -->
        @include('stuff.includes.left_sidebar')
        <!-- left sidebar end -->


        <!-- main section start -->
        @yield('main_content')
        <!-- main section end -->  
    </div>

    <!-- script section start -->
    @include('stuff.includes.script')
    <!-- script section end -->


</body>
</html>

