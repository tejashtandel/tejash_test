<!DOCTYPE html>
@include('User.include.header')
    <!-- Start All Title Box -->
    {{-- <div class="all-title-box"> --}}
        {{-- <div class="container">
            <div class="row text">
                <div class="col-lg-12">
                    
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                    <h2>ABOUT US</h2>
                </div>
            </div>
        </div> --}}
    {{-- </div> --}}
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                @foreach( $about as $ab)
                <div class="col-lg-6 about">
                    <h2 class="noo-sh-title">Welcome to <span>Ethics Beauty</span></h2>
                    <p class="aboutinfo">
                        {{$ab -> description}}
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="banner"> <img class="img-thumbnail" src="admin/upload/{{$ab-> photo}}"  alt="" />
                    </div>
                </div>
                @endforeach
            </div>
            {{-- <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Trusted</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Professional</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Expert</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
            @include('User.include.footer');
                
    <!-- End About Page -->

    <!-- Start Instagram Feed  -->
 
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
  