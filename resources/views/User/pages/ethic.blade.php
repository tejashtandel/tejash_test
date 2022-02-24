<!DOCTYPE html>
<html lang="en">

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

<body>
    <div class="container-fluid">
        <nav class="breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb" id="try">
                <li class="breadcrumb-item"><a href="#">HOME</a></li>
                <li class="breadcrumb-item"><a href="#">ETHIC SET</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div id="cheking">



                        <div class="cd-filter-block">


                            <ul style="list-style-type: none" class="cd-filter-content cd-filters list">
                                <li>
                                    <a class="filter-button btn btn-primary active" data-filter="all"
                                        style="margin-top: 15px;">All</a>

                                </li>
                                <hr>
                                <h4 class="catagory">Catagory</h4>
                                <li>
                                    <a class="btn filter-button" data-filter="kurta">KURTA</a>

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
                    @foreach ($product2 as $prod)
                        <div class="col-lg-4 col-md-6 col-sm-12 product kurta" id="h">

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
                    @foreach ($product3 as $prod)
                        <div class="col-lg-4 col-md-6 col-sm-12 product dress" id="h">

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
                    @foreach ($product4 as $prod)
                        <div class="col-lg-4 col-md-6 col-sm-12 product kurtis" id="h">

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
                    @foreach ($product5 as $prod)
                        <div class="col-lg-4 col-md-6 col-sm-12 product above1000" id="hi">

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
                    @foreach ($product6 as $prod)
                        <div class="col-lg-4 col-md-6 col-sm-12 product below500" id="hid">

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
                    @foreach ($product7 as $prod)
                        <div class="col-lg-4 col-md-6 col-sm-12 product in500" id="hide">

                            <div class="wholecard">
                                <div class="box-img">
                                    <div class="type-lb">
                                        <img src="User/product/{{ $prod->image }}" class="img-fluid"
                                            alt="Image" style="display: flex" />
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
                    @foreach ($product8 as $prod)
                        <div class="col-lg-4 col-md-6 col-sm-12 product large" id="hidden">

                            <div class="wholecard">
                                <div class="box-img">
                                    <div class="type-lb">
                                        <img src="User/product/{{ $prod->image }}" class="img-fluid"
                                            alt="Image" style="display: flex" />
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
                    @foreach ($product9 as $prod)
                        <div class="col-lg-4 col-md-6 col-sm-12 product medium" id="hidden">

                            <div class="wholecard">
                                <div class="box-img">
                                    <div class="type-lb">
                                        <img src="User/product/{{ $prod->image }}" class="img-fluid"
                                            alt="Image" style="display: flex" />
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
                    @foreach ($product10 as $prod)
                        <div class="col-lg-4 col-md-6 col-sm-12 product xl" id="hidden">

                            <div class="wholecard">
                                <div class="box-img">
                                    <div class="type-lb">
                                        <img src="User/product/{{ $prod->image }}" class="img-fluid"
                                            alt="Image" style="display: flex" />
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
                    @foreach ($product11 as $prod)
                        <div class="col-lg-4 col-md-6 col-sm-12 product xxl" id="hidden">

                            <div class="wholecard">
                                <div class="box-img">
                                    <div class="type-lb">
                                        <img src="User/product/{{ $prod->image }}" class="img-fluid"
                                            alt="Image" style="display: flex" />
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
                    @foreach ($product12 as $prod)
                        <div class="col-lg-4 col-md-6 col-sm-12 product small" id="hidden">

                            <div class="wholecard">
                                <div class="box-img">
                                    <div class="type-lb">
                                        <img src="User/product/{{ $prod->image }}" class="img-fluid"
                                            alt="Image" style="display: flex" />
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
            $(".kurta").hide();
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

</body>

</html>
