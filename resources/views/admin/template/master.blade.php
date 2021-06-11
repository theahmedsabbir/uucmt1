<!doctype html>
<html lang="en">
<head>
	<!-- header section start -->
	@include('admin.includes.header')
	<!-- header section end -->


	<!-- css section start -->
	<!-- VENDOR CSS -->
	@include('admin.includes.css')
	<!-- css section end -->

</head>
<body class="theme-blue">

    <!-- Page Loader start-->
    {{-- @include('admin.includes.pageloader') --}}
    <!-- Page Loader end-->

    <div id="wrapper">

        <!-- nav section start -->
        @include('admin.includes.nav')
        <!-- nav section end -->

        <!-- left sidebar start -->
        @include('admin.includes.left_sidebar')
        <!-- left sidebar end -->


        <!-- main section start -->
        @yield('main_content')
        <!-- main section end -->  
    </div>

    <!-- script section start -->
    @include('admin.includes.script')
    <!-- script section end -->


</body>
</html>

