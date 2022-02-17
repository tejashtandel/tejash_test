<!DOCTYPE html>

@include('User.include.header')


    <!-- Start Top Search -->
    
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            @foreach($banner as $bann)
            <li class="text-left">
                <img src="User/upload/{{$bann-> banner_image}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>{{ $bann-> description}}</strong></h1>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
            {{-- <li class="text-left">
                <img src="User/images/banner2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> MohMaya</strong></h1>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-left">
                <img src="User/images/banner3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> MohMaya</strong></h1>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li> --}}
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                @foreach ($catagory as $cat)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="User/images/topw.jpg" alt="" />
                        <a class="btn hvr-hover" href="cat2">{{ $cat-> category_name }} </a>
                    </div>
                  
                </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="shop-cat-box">
                        <img class="img-fluid"  src="User/images/botomw.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Bottom Wear</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="User/images/ethicw.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Ethic Set</a>
                    </div>
                </div> --}}
               
              
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Featured Products</h1>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">ALL</button>
                            <button  data-filter=".topwear">Top Wear</button>
                            <button  data-filter=".ethicset">Ethic Set</button>
                            <button data-filter=".bottomwear">Bottom Wear</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row special-list">
                @foreach($product1 as $prod)
                <div class="col-lg-3 col-md-6 special-grid topwear">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                
                            </div>
                            <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="product1" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            
                            <h5> Type: {{ $prod-> product_name}}</h5>
                            <h5> Price: {{ $prod-> price}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach($product3 as $prod)
                <div class="col-lg-3 col-md-6 special-grid bottomwear">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                
                            </div>
                            <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="product1" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            
                            <h5> Type: {{ $prod-> product_name}}</h5>
                            <h5> Price: {{ $prod-> price}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach($product2 as $prod)
                <div class="col-lg-3 col-md-6 special-grid ethicset">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                
                            </div>
                            <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="product1" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            
                            <h5> Type: {{ $prod-> product_name}}</h5>
                            <h5> Price: {{ $prod-> price}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-3 col-md-6 special-grid topwear">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                
                            </div>
                            <img src="User/images/top2.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            
                            <h5> $9.79</h5>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-lg-3 col-md-6 special-grid bottomwear">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                
                            </div>
                            <img src="User/images/bottom1.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-lg-3 col-md-6 special-grid bottomwear"> --}}
                    {{-- <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                
                            </div>
                            <img src="User/images/bottom2.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>About Us</h1>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="User/images/aboutus.jpeg" alt="" />
                        </div>
                    
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <div class="blog-box">
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>carlier Fashion</h3>
                                <p>Our main goal is to furnish exceptionally popular items with best quality at extremely serious costs. We expect to contact purchasers searching for style across globe through retail and internet business.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
   
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    @include('User.include.footer')
    <!-- End Footer  -->

