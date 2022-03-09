<!DOCTYPE html>
@include('User.include.header')
{{-- <html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
    <link rel="stylesheet" href="User/css/newtry.css" />
    <title>Document</title>
</head>

<body> --}}
 

    {{-- <div class="all-title-box"> --}}
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Bottom Wear</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Bottom Wear</li>
                    </ul>
                </div>
            </div>
        </div> --}}
    {{-- </div> --}}


<div class="container mainheader">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div id="cheking">



                    <div class="cd-filter-block">
                       


                        <ul  class="cd-filter-content cd-filters list">
                            
            
                        <a class="filter-button btn btn-primary active" data-filter="all"
                        style="margin-top: 15px;">All</a>
                            
                               
                            
                            <hr>
                            <h4 class="catagory"> Sub Catagory</h4>
                            <li>
                            
                                <a class="btn filter-button" data-filter="jeans">Jeans</a>

                            </li>
                            <li>
                                <a class="btn filter-button" data-filter="plazo">Plazo</a>

                            </li>
                            <li>
                                <a class="btn filter-button" data-filter="lengis">Lengis</a>

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
                @foreach($product2 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product all">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
{{--                                         
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product3 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product plazo">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
{{--                                         
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product12 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product jeans">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
{{--                                         
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product13 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product lengis">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
{{--                                         
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product7 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product large">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
{{--                                         
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product4 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product in500">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
{{--                                         
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Rs. {{ $prod-> price}}</h5>
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
{{--                                         
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Rs. {{ $prod-> price}}</h5>
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
{{--                                         
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($product8 as $prod)
                    <div class="col-lg-4 col-md-6 col-sm-12 product small">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    
                                </div>
                                <img src="User/product/{{$prod-> image}}"  class="img-fluid" alt="Image" style="display: flex" >
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ url('/prod',['id'=>$prod->id]) }} " data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
{{--                                         
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Rs. {{ $prod-> price}}</h5>
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
{{--                                         
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Rs. {{ $prod-> price}}</h5>
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
{{--                                         
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Rs. {{ $prod-> price}}</h5>
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
{{--                                         
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                                    </ul>
                                    {{-- <a class="cart" href="#">Add to Cart</a> --}}
                                </div>
                            </div>
                            <div class="why-text">
                                
                                <h5>  {{ $prod-> product_name}}</h5>
                                <h5> Rs. {{ $prod-> price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
        $(".plazo").hide();
        $(".jeans").hide();
        $(".lengis").hide();
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
</div>
</div>
</div>
@include('User.include.footer')
