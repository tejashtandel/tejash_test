<!DOCTYPE html>
@include('User.include.header')
    <div class="container-fluid">
        <nav class="breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb" id="try">
                <li class="breadcrumb-item"><a href="#">HOME</a></li>
                <li class="breadcrumb-item active"><a href="#">TOP WEAR</a></li>
                
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div id="cheking">

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div id="cheking">



                    <div class="cd-filter-block">


                        <ul style="list-style-type: none" class="cd-filter-content cd-filters list">
                            <li>
                                <a class="filter-button btn btn-primary active" data-filter="all" style="margin-top: 15px;">All</a>

                            </li>
                            <hr>
                            <h4 class="catagory">Sub Catagory</h4>
                            <li>
                                <a class="btn filter-button" data-filter="tops">TOPS</a>

                            </li>
                            <li>
                                <a class="btn filter-button" data-filter="dress">DRESS</a>

                            </li>
                            <li>
                                <a class="btn filter-button" data-filter="kurtis">KURTIS</a>

                            </li>
                            <hr>
                            <h4 class="catagory">Size</h4>
                            <li>
                                <a class="btn filter-button" data-filter="small">Small</a>

                            </li>
                            <li>
                                <a class="btn filter-button" data-filter="medium">Medium</a>

                            </li>
                            <li>
                                <a class="btn filter-button" data-filter="large">Large</a>

                            </li>
                            <li>
                                <a class="btn filter-button" data-filter="xl">XL</a>

                            </li>
                            <li>
                                <a class="btn filter-button" data-filter="xxl">XXl</a>

                            </li>
                            <hr>
                            <h4 class="catagory">Price</h4>
                            <li>
                                <a class="btn filter-button" data-filter="below500">Below 500</a>

                            </li>
                            <li>
                                <a class="btn filter-button" data-filter="in500">500-1000</a>

                            </li>
                            <li>
                                <a class="btn filter-button" data-filter="above1000">above 1000</a>

                            </li>

                        </ul>
                        <!-- cd-filter-content -->
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <img class="img" id="banner" src="User/images/banner.png" />
            </div>
            <div class="row sameproduct">
                <div class="col-lg-4 col-md-6 col-sm-12 product all">
                    <div class="wholecard">
                        <div class="box-img">
                            <div class="type-lb">
                                <img src="User/images/CT2.jpg" class="img-fluid" alt="Image" style="display: flex" />
                                <a href=" " class="btn add2">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                                <button value="add to cart" class="add">Add to cart</button>
                            </div>
                            <div class="why-text">
                                <h5 class="productdetails">NAME:</h5>
                                <h5 class="productdetails">Price:</h5>
                            </div>
                        </div>
                    </div>
            <div class="col-lg-8">
                <div class="row">
                    <img class="img" id="banner" src="User/images/banner.png" />
                </div>
                <div class="row sameproduct">
                    @foreach ($product1 as $prod)
                        <div class="col-lg-4 col-md-6 col-sm-12 product all">

                            <div class="wholecard">
                                <div class="box-img">
                                    <div class="type-lb">
                                        <img src="User/product/{{ $prod->image }}" class="img-fluid" alt="Image"
                                            style="display: flex" />
                                        <a href="{{ url('/prod1', ['id' => $prod->id]) }} " class="btn add2">
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                        <button value="add to cart" class="add">Add to cart</button>
                                    </div>
                                    <div class="why-text">
                                        <h5 class="productdetails">NAME:{{ $prod->product_name }}</h5>
                                        <h5 class="productdetails">Price:{{ $prod->price }}</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    @foreach($product2 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product tops">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Price:Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product3 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product dress">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Price:Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product4 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product kurtis">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Price:Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product5 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product above1000">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Price:Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product6 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product below500">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Price:Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product7 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product in500">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Price:Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product8 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product large">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Price:Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product9 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product medium">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Price:Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product10 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product xl">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Price:Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product11 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product xxl">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Price:Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product12 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product small">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Price:Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function clrfields() {
        document.getElementById("checkbox1").value = "";
    }
</script>



<script>
    $(document).ready(function() {
        // $("*").ready(function){
        $(".tops").hide();
        $(".kurtis").hide();
        $(".dress").hide();
        $(".small").hide();
        $(".medium").hide();
        $(".large").hide();
        $(".xl").hide();
        $(".xxl").hide();
        $(".in500").hide();
        $(".below500").hide();
        $(".above1000").hide();

        $(".filter-button").click(function() {
            var value = $(this).attr('data-filter');

            if (value == "all") {
                //$('.filter').removeClass('hidden');
                $(".product").not('.' + value).hide('3000');
                $('.product').filter('.' + value).show('3000');

            } else {
                //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".product").not('.' + value).hide('3000');
                $('.product').filter('.' + value).show('3000');

            }
        });

    });
</script>
@include('User.include.footer')

    <script>
        function clrfields() {
            document.getElementById("checkbox1").value = "";
        }
    </script>



    <script>
        $(document).ready(function() {
            // $("*").ready(function){
            $(".tops").hide();
            $(".kurtis").hide();
            $(".dress").hide();
            $(".small").hide();
            $(".medium").hide();
            $(".large").hide();
            $(".xl").hide();
            $(".xxl").hide();
            $(".in500").hide();
            $(".below500").hide();
            $(".above1000").hide();

            $(".filter-button").click(function() {
                var value = $(this).attr('data-filter');

                if (value == "all") {
                    //$('.filter').removeClass('hidden');
                    $(".product").not('.' + value).hide('3000');
                    $('.product').filter('.' + value).show('3000');

                } else {
                    //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                    //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".product").not('.' + value).hide('1000');
                    $('.product').filter('.' + value).show('3000');

                }
            });

        });
    </script>
@include('User.include.footer')
