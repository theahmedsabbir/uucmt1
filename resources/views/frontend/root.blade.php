<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('backend/img/logo/favicon.ico') }}" type="image/x-icon">
    <title>UU CSE Mangement Tool</title>

    <link href="https://fonts.googleapis.com/css?family=Arimo:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/pb.calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <style>       

        .about_slider img {
            -webkit-clip-path: unset !important;
            clip-path: unset !important;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".main_menu" data-offset="70">

    <!--***********************
    menu header part start
  ************************-->
    <div class="full_manu_header " id="menu_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9  col-sm-8 col-md-9">
                    <div class="header_left">
                        <ul>
                            <li>Have any Trouble?</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> (+880) 1723 49 45 91</li>
                            <li class="eml"><i class="fa fa-envelope"></i>
                                <a class="text-white" href="mailTo: theahmedsabbir@gmail.com">theahmedsabbir@gmail.com</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-3  col-sm-4 col-md-3">
                    <div class="header_right ">
                        <ul>
                            <li><a class="register" href="{{ route('login') }}">Register </a></li>
                            <li><a class="login" href="{{ route('login') }}"> / Login</a></li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--********************
      menu header part end
    ********************-->

    <!--********************
     navbar-part start
    ********************-->
    <nav class="navbar main_menu navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="{{ asset('frontend/images/logo4.png')}}" alt="logo" width="110px" class="main_logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-0">
                    <li class="nav-item ">
                        <a class="nav-link    " href="#menu_top">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#course">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#teachers">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#notice">Notices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#library">Library</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#club">Clubs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-info">Contact</a>
                    </li>
                </ul>
                {{-- <a class="get-start" href="#">Get Started Now </a> --}}
            </div>
        </div>
    </nav>
    <!--********************
     navbar-part end
    ********************-->

    <!--********************
     banner part Start
    ********************-->
    <section id="banner">
        <div class="full_slider">
            <div class="slider">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bnr_text">
                                <h1><span>Welcome To</span> UU CSE Management Tool</h1>
                                <p>A complete online-based platform.As our whole education system is at risk only because of Covid-19, we started to think about how we can help our university to run all their activities swiftly and easily with the help of just one platform</p>
                                <a class="start_course" href="our_course.html">Start a Course</a>
                                <a class="take_tour" href="{{ route('login') }}">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider slider1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bnr_text">
                                <h1><span>Let’s Learn</span> For Bright Future</h1>
                                <p>A University Management System is a software solution that has developed a focus on the challenges universities face with the capability to restructure the institute for good. It comes with several modules dedicated to help everyone and tackle the problems and challenges that everyone faces.</p>
                                <a class="start_course" href="our_course.html">Start a Course</a>
                                <a class="take_tour" href="{{ route('login') }}">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider slider2">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bnr_text">
                                <h1><span>Let’s Learn</span> For Bright Future</h1>
                                <p>A centralized system connecting all offline departmental activities.Used Most upgraded technologies to make the platform faster & secured. Though it is an online-based platform, it is more efficient than any other offline based platform.S</p>
                                <a class="start_course" href="our_course.html">Start a Course</a>
                                <a class="take_tour" href="{{ route('login') }}">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>
    <!--********************
     banner part end
    ********************-->


    <!--********************
     Support part Start
    **********************-->
    <section id="support">
        <div class="container support">
            <div class="row">
                <div class="col-lg-4 col-md-4  px-0">
                    <div class="online">
                        <img src="{{ asset('frontend/images/online_class_icon.png')}}" alt="online_class_icon">
                        <div class="text-center">
                            <h4>Live Classes</h4>
                            <a href="{{ route('login') }}">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4  px-0">
                    <div class="online ">
                        <img src="{{ asset('frontend/images/online_support_icon.png')}}" alt="online_support_icon">
                        <div class="text-center">
                            <h4>Complete Courseroom</h4>
                            <a href="{{ route('login') }}">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 px-0">
                    <div class="online ">
                        <img src="{{ asset('frontend/images/lifetime_support_icon.png')}}" alt="lifetime_support_icon">
                        <div class="text-center">
                            <h4>Online Exams</h4>
                            <a href="{{ route('login') }}">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--********************
     Support part end
  **********************-->

    <!--********************
     About part Start
  **********************-->
    <section id="about">
        <div class="about_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title">
                            <h1>Our Application</h1>
                            <p>A centralized system connecting all offline departmental activities. A complete tool that will help to perform almost all managerial tasks of department.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slider_about">
                            <div class="about_slider">
                                <div class="">
                                    <img src="{{ asset('frontend/images/aboutSlider4.png')}}" class="img-fluid" alt="aboutSlider1">
                                </div>
                            </div>
                            <div class="about_slider">
                                <div class="">
                                    <img src="{{ asset('frontend/images/aboutSlider5.png')}}" class="img-fluid" alt="aboutSlider2">
                                </div>
                            </div>
                            <div class="about_slider">
                                <div class="">
                                    <img src="{{ asset('frontend/images/aboutSlider6.png')}}" class="img-fluid" alt="aboutSlider3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about_text">
                            <p>A University Management System is a software solution that has developed a focus on the challenges universities face with the capability to restructure the institute for good. It comes with several modules dedicated to help everyone and tackle the problems and challenges that everyone faces. This system can deliver an educational institute with many benefits.</p>
                            <p>So we decided to work on University Management Tool which is totally an online based platform.</p>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="button">
                                        {{-- <a class="active" href="#">All Courses</a> --}}
                                        <a href="{{ route('login') }}">Join Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--********************
     About part end
    **********************-->


    <!--********************
     Counter  part Start
    **********************-->
    <section id="counter_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_item">
                        <h3 class="counter">{{ App\User::where('user_role', 2)->count() }}</h3>
                        <h5>Teachers</h5>
                        <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border Bottom">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_item">
                        <h3 class="counter">{{ App\User::where('user_role', 4)->count() }}</h3>
                        <h5>Students</h5>
                        <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border Bottom">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_item">
                        <h3 class="counter">{{ App\Course::count() }}</h3>
                        <h5>Online Courses</h5>
                        <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border Bottom">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_item">
                        <h3 class="counter">{{ App\Club::count() }}</h3>
                        <h5>Clubs</h5>
                        <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border Bottom">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--********************
     Counter  part end
    **********************-->


    <!--********************
     Our Courses part start
    **********************-->
    <section id="our_course">
        <div class="container" id="course">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <h1>Our Courses</h1>
                        <p>We don’t just give students an education and experiences that set them up for success in a career. We help them succeed in their career—to discover a field they’re passionate about and dare to lead it.</p>
                    </div>
                </div>
            </div>
            <div class="row course-slider">
                @foreach ($courses as $course)
                    <div class="col-lg-12 ">
                        <div class="course-one">
                            <div class="course-banner">

                                @if ($course->image!=NULL || $course->image!="")
                                    <img src="{{ asset('backend/images/courses/'.$course->image ) }}" class="w-100" alt="1" height="200px;">
                                @else
                                    <img src="{{ asset('backend/images/courses/course_default.jpg' ) }}" class="w-100" alt="1" height="200px;">
                                @endif
                                <div class="course-banner-overlay">
                                    <a href="#"> <i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="trainer_pro_details">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="Pro_img">
                                            <img src="
                                                @if ( $course->teacher->image!=NULL || $course->teacher->image!="")
                                                    {{ asset('backend/images/Teachers/'.$course->teacher->image ) }}
                                                @else 
                                                    @if ($course->teacher->gender == 1)
                                                        {{ asset('backend/images/default_male.png') }}
                                                    @else
                                                        {{ asset('backend/images/default_female.png') }}
                                                    @endif                                                    
                                                @endif

                                            " alt="profile pic">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class="profile">
                                            <p>Conduct by:</p><br>
                                            <h5>{{ $course->teacher->name }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 pl-0">
                                        <div class="pro-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                            <p>4.8 Ratings</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="crs-details">
                                        <h4>{{ str_limit($course->name, 23, '..') }}</h4>
                                        <p>
                                            @if ($course->description)
                                               {{ str_limit($course->description, 125, '...')}}
                                            @else
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4  col-4  p-0">
                                    <div class="crs_footer">
                                        <p><span>Course</span> Duration</p>
                                        <p class="m_name">4 Months</p>
                                    </div>
                                </div>
                                <div class="col-lg-4  col-4 p-0">
                                    <div class="crs_footer">
                                        <p>Course Credit</p>
                                        <p class="m_name">{{ $course->credit }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-4  col-4 p-0">
                                    <div class="crs_footer">
                                        <p>Total Classes</p>
                                        <p class="m_name">30 Classes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="enroll">
                                <a href="our_course.html">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--********************
     Our Courses part end
    **********************-->


    <!--*****************************
     Our Event part start
    **********************-->
    <section id="event" class="pb-0">
        <div class="container" id="notice">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <h1>Notice & Announcements</h1>
                        <p>Get all the information about our department's activities and events. We love to get in touch with our students and improve their allround performances.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($notices as $notice)
                <div class="col-lg-6 col-md-12">
                    <div class="event_bg">
                        <div class="row event-details-top">
                            <div class="col-lg-5  col-sm-5">
                                <div class="event-img1">
                                    <img src="

                                    @if ($notice->image)
                                        {{ asset('backend/images/notices/'.$notice->image) }}
                                    @else
                                         {{ asset('backend/images/notices/default.png') }}
                                    @endif

                                    " class="w-100" alt="ux">
                                    <div class="event-img1-text">
                                        <p>{{ $notice->created_at->format('d')}} <span>{{ $notice->created_at->format('M')}}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-7">
                                <div class="event-text">
                                    <h3>{{ str_limit( $notice->headline, 30, '...')}}</h3>
                                    <p>{{ str_limit( $notice->description, 70, '...')}}</p>
                                    <i class="fas fa-user"></i>
                                    <P class="sem_title"> {{ $notice->posted_by }}</P>
                                    <i class="far fa-clock  icon"></i>
                                    <P class="sem_title"> {{ $notice->created_at->format('d-M-Y')}}</P>
                                    <div class="">
                                        <a href="#notice"  data-toggle="modal" data-target="#notice{{$notice->id}}">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- notice modal starts --}}

                <!-- Modal -->
                <div class="modal fade" id="notice{{$notice->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $notice->headline }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        {{$notice->description}}
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Exit</button>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- notice modal ends --}}
                @endforeach

            </div>
            {{-- <div class="row">   
                <div class="col-lg-12 col-md-12">                    
                    <div class="text-center">
                        <a href="#" class="my_button">All Notices</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!--*****************************
     Our Event part end
    **********************-->


    <!--*********************************
          Our Teacher part start
    *******************************-->
    <section id="teacher">
        <div class="container" id="teachers">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <h1>Our Teacher’s</h1>
                        <p>Our respected teachers are always keen to deliver the best efforts to find out each student's hidden potentiality and motivate them to be on right track.</p>
                    </div>
                </div>
            </div>
            <div class="row teacher-slide">

                @foreach ($teachers->sortBy('designation') as $teacher)
                <div class="col-lg-12 ">
                    <div class="teacher-prof">
                        <div class="techer-img">
                            <img src="{{ asset('backend/images/Teachers/'. $teacher->image)}}" alt="teacher1" class="img-fluid  w-100">
                        </div>
                        <div class="teacher-text">
                            <h3>{{ str_limit($teacher->name , 18, '..')}}</h3>
                            @php                                
                                        if ($teacher->designation == 1)
                                            $designation = "Chairman";
                                        else if ($teacher->designation == 2)
                                            $designation = "Associate Professor & Coordinator";
                                        else if ($teacher->designation == 3)
                                            $designation = "Associate Professor";
                                        else if ($teacher->designation == 4)
                                            $designation = "Assistant Professor & Coordinator";
                                        else if ($teacher->designation == 5)
                                            $designation = "Assistant Professor";
                                        else if ($teacher->designation == 6)
                                            $designation = "Senior Lecturer";
                                        else
                                            $designation = "Lecturer";
                                    
                            @endphp
                            <p>{{ str_limit($designation , 20, '..')}}</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png')}}" alt="border" class="img-fluid ">
                        </div>
                        <div class="teacher-text-hover">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                            <h3>{{ str_limit($teacher->name , 18, '..')}}</h3>
                            <p>{{ str_limit($designation , 20, '..')}}</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png')}}" alt="border" class="img-fluid ">
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--*********************************
            Our Teacher part end
    *******************************-->


    <!--*****************************
     Library part start
    **********************-->
    <section id="event" class="pb-0">
        <div class="container" id="library">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <h1>Library Collections</h1>
                        <p>All the latest library books with updated collections. Students in our institution find our library as all in one solution for their daily resources.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($libraries as $library)
                <div class="col-lg-4 col-md-12">
                    <div class="event_bg library_box">
                        <div class="row event-details-top">
                            <div class="col-lg-5  col-sm-5">
                                <div class="event-img1">
                                    <img class="library_img w-100" src="

                                    @if ($library->image)
                                        {{ asset('backend/images/libraries/'.$library->image) }}
                                    @else
                                         {{ asset('backend/images/libraries/default.jpg') }}
                                    @endif

                                    " alt="ux">
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-7">
                                <div class="event-text">
                                    <h3>{{ str_limit( $library->book_name, 30, '...')}}</h3>
                                    <p class="mt-5"><strong>Subject: </strong>{{ $library->subject }}</p>
                                    <p><strong>Edition: </strong>{{ $library->details }}</p>
                                    <p><strong>Stock: </strong>{{ $library->stock>0? 'In Stock' : 'Out of Stock' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            {{-- <div class="row">   
                <div class="col-lg-12 col-md-12">                    
                    <div class="text-center">
                        <a href="#" class="my_button">All Notices</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!--*****************************
     Library part end
    **********************-->



    <!--********************
     Our Clubs part start
    **********************-->
    <section id="our_course">
        <div class="container" id="club">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <h1>Our Clubs</h1>
                        <p>We don’t just give students an education and experiences that set them up for success in a career. We help them succeed in their career—to discover a field they’re passionate about and dare to lead it.</p>
                    </div>
                </div>
            </div>
            <div class="row course-slider">
                @foreach ($clubs as $club)
                    <div class="col-lg-12 ">
                        <div class="course-one">
                            <div class="course-banner">

                                @if ($club->image!=NULL || $club->image!="")
                                    <img src="{{ asset('backend/images/clubs/'.$club->image ) }}" class="w-100" alt="1" height="200px;">
                                @else
                                    <img src="{{ asset('backend/images/clubs/default2.png' ) }}" class="w-100" alt="1" height="200px;">
                                @endif
                                <div class="course-banner-overlay">
                                    <a href="#"> <i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="crs-details">
                                        <h4>{{ str_limit($club->name, 23, '..') }}</h4>
                                        <p>
                                            @if ($club->description)
                                               {{ str_limit($club->description, 125, '...')}}
                                            @else
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12  col-12  p-0">
                                    <div class="crs_footer">
                                        <p><span>Contact</span></p>
                                        <p class="m_name">{{ $club->phone }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="enroll">
                                <a href="{{ route('login') }}">Join Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--********************
     Our Clubs part end
    **********************-->



    <!--*********************************
         Our ContactInfo part start
    *******************************-->
    <section id="contact-info">
        <div class="container">
            <div class="content-text">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="cheader-left">
                            <a href="#"><img class="mt-lg-3" src="{{ asset('frontend/')}}/images/footerlogo1.png" alt="footer logo"></a>
                        </div>
                        <div class="c-text-left">
                            <p class="nipa">Our tool is to tackle the problems and challenges that everyone faces. This system can deliver an educational institute with many benefits.
                            </p>
                            <p>So we decided to work on University Management Tool which is totally an online based platform.</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-12">
                        <div class="cheader-center">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 col-md-7 pl-md-3  col-sm-6 pl-sm-5 ">
                                <div class="c-text-menu1">
                                    <ul>
                                        <li><a href="index.html">Home </a></li>
                                        <li><a href="about_us.html">About us</a></li>
                                        <li><a href="#">Courses</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 pl-md-0 col-sm-6 ">
                                <div class="c-text-menu1">
                                    <ul>
                                        <li><a href="our_teacher.html">Our Teachers</a></li>
                                        <li><a href="#">Library Books</a></li>
                                        <li><a href="blog_details.html">Notices</a></li>
                                        <li><a href="#">Clubs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cheader-center">
                            <h3>Contact Informations</h3>
                        </div>
                        <div class="c-text-location">
                            <div class="row">
                                <div class="col-lg-3  col-md-3">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-home"></i></a></li>
                                        <li><a href="#"><i class="fas fa-phone"></i></a></li>
                                        <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-9  col-md-9">
                                    <div class="address">
                                        <p class="address_title">Location</p>
                                        <p>House-4 & 6, Road-15, Uttara</p>
                                        <p class="address_title">Phone</p>
                                        <p>+880 1723 49 45 91</p>
                                        <p class="address_title">E-mail</p>
                                        <p>theahmedsabbir@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*********************************
          Our ContactInfo part end
    *******************************-->

    <!--*********************************
     Our ContactInfo image part Start
    *******************************-->
{{--     <section id="contact-info-img">
        <div class="row footer_slider">
            <div class="item-img">
                <div class="footer_img">
                    <img src="{{ asset('frontend/')}}/images/aboutSlider6.png" alt="blogsmall1" class="img-fluid">
                    <div class="overlay_social">
                        <a href="#">Instagram Photos </a>
                    </div>
                </div>
            </div>
            <div class="item-img">
                <div class="footer_img">
                    <img src="{{ asset('frontend/')}}/images/blogsmall2.png" alt="blogsmall2" class="img-fluid">
                    <div class="overlay_social">
                        <a href="#">Instagram Photos </a>
                    </div>
                </div>
            </div>
            <div class="item-img">
                <div class="footer_img">
                    <img src="{{ asset('frontend/')}}/images/blogsmall3.png" alt="blogsmall3" class="img-fluid">
                    <div class="overlay_social">
                        <a href="#">Instagram Photos </a>
                    </div>
                </div>
            </div>
            <div class="item-img">
                <div class="footer_img">
                    <img src="{{ asset('frontend/')}}/images/blogsmall4.png" alt="blogsmall4" class="img-fluid">
                    <div class="overlay_social">
                        <a href="#">Instagram Photos </a>
                    </div>
                </div>
            </div>
            <div class="item-img">
                <div class="footer_img">
                    <img src="{{ asset('frontend/')}}/images/blogsmall2.png" alt="blogsmall2" class="img-fluid">
                    <div class="overlay_social">
                        <a href="#">Instagram Photos </a>
                    </div>
                </div>
            </div>
            <div class="item-img">
                <div class="footer_img">
                    <img src="{{ asset('frontend/')}}/images/blogsmall3.png" alt="blogsmall3" class="img-fluid">
                    <div class="overlay_social">
                        <a href="#">Instagram Photos </a>
                    </div>
                </div>
            </div>
            <div class="item-img">
                <div class="footer_img">
                    <img src="{{ asset('frontend/')}}/images/blogsmall1.png" alt="blogsmall1" class="img-fluid">
                    <div class="overlay_social">
                        <a href="#">Instagram Photos </a>
                    </div>
                </div>
            </div>
            <div class="item-img">
                <div class="footer_img">
                    <img src="{{ asset('frontend/')}}/images/blogsmall4.png" alt="blogsmall1" class="img-fluid">
                    <div class="overlay_social">
                        <a href="#">Instagram Photos </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
 --}}
    <!--*********************************
     Our ContactInfo image part end
    *******************************-->


    <!--*********************************
       Our footer part Start
    *******************************-->
    <section id="footer">
        <div class="footer1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2021. All rights reserved by <span>UUCMT Team</span> | Developed By <span>Ahmed Sabbir</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*********************************
       Our footer part end
    *******************************-->

    <div class="back_to_top">
        <i class="fa fa-angle-up "></i>
    </div>
    <!--*********************************
        back to top end
    *******************************-->


    <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/venobox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/Carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/pb.calendar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>
    <style>
        @media (max-width: 1199.98px){
            .course-left_arrow{
                display: none !important;
            }            
            .course-right_arrow{
                display: none !important;
            }   
            .left_arrow{
                display: none !important;
            }            
            .right_arrow{
                display: none !important;
            }   
            .footer1{
                height: unset !important;
                line-height: 21px !important;
                padding-bottom: 10px;
            }         
        }
    </style>

</body>
</html>
