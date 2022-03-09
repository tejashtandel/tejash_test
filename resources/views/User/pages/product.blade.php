<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" id="product" style="margin-top: 100px">
        <div class="row">
    
            <div class="col-lg-6" id="productimage">
                <img class="img-fluid" src="User\producttop1.jpg">
            </div>
            <div class="col-lg-6" id="productinfo">
                <h1>Topwear kurti</h1>
                <h3>Price: 250$</h3>
                <h3>Select size</h3>
                <select>
                    <option>small</option>
                    <option>medium</option>
                    <option>large</option>
                </select>
                <br>
                <button class="btn" ><i class="fa fa-plus"></i></button>
                
                <button class="btn" ><i class="fa fa-plus"></i></button>
                <br>
                <a href="#" class="btn">Add to CArt</a>
                <a href="#" class="btn">Add to Wishlist</a>
                <p>Product Details</p>
                <p>Make an elegant addition to your formal ethnic closet with this turquoise kurta from Janasya. Constructed in a straight silhouette from a cotton material, this floral kurta flaunts exquisite button detailing on the bodice for added charm and is completed with a pair of off-white cotton flex pants.</p>
    
    
            </div>
    
https://cdn.jsdetivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css
https://cdn.jsdetivr.net

https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css
    
        </div>
    </div>
    <div class="container" style="margin-top: 100px">
        <div class="row">
           <div class="col-12">
            <div class="top-mw-txt text-center">
                <h3>Related Products</h3>
            </div>
           </div>
        </div>
    </div>
    
    
</body>
</html> -->
<!DOCTYPE html>
@include('User.include.header')

<body>
    {{-- <div class="container-fluid">
        <nav class="breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb" id="try">
                <li class="breadcrumb-item"><a href="#">HOME</a></li>
                <li class="breadcrumb-item"><a href="#">ETHIC SET</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Product Details
                </li>
            </ol>
        </nav>
    </div> --}}

    <div class="container-fluid imagec">
        <div class="row">
            @foreach ($details as $det)
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="product-imgs">
                        <div class="img-display">
                            <div class="img-showcase">
                                <?php
                                $images = explode('|', $det->mulimages);
                                
                                ?>
                                @foreach ($images as $image)
                                    <img src="{{ asset('mulimages/' . $image) }}" alt="shoe image">
                                @endforeach


                            </div>
                        </div>
                        <div class="img-select d-flex justify-content-center">
                            @foreach ($images as $image)
                                <div class="img-item">
                                    <a href="#" data-id="{{ $loop->iteration }}">
                                        <img src="{{ asset('mulimages/' . $image) }}" alt="shoe image">
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>



                <div class="col-lg-6 col-md-6 col-sm-12 product-text-detail">
                    <h3 class="mainheading">
                        {{ $det->product_name }}
                    </h3>

                    <h3 class="mainheading">
                        Price:
                        <b class="price">{{ $det->price }} ₹</b>
                    </h3>

                    <div>
                        <h3 class="mainheading">
                            Size:<span>

                                <span class="deatails">{{ $det->size }}</span>


                            </span>
                        </h3>
                    </div>

                    {{-- <div >
            <h3 class="mainheading">Quantity:</h3>
            <a href="#" id="decrement" class="btn btn-primary"  style="text-decoration: none;">&#8722</a>
            <span class="px-3 quantityShow">1</span>
            <a href="#" id="increment"  class="btn btn-primary" style="text-decoration: none;">&#43</a>
        </div> --}}
                    {{-- @php
        print_r($det->pID );
        @endphp --}}

                    <!-- <div class="img">
                  <img src="hear.jpg" height="45px"; weight="35px";>
              </div> -->

                    @if ($det->quantity < 5)
                        <div class="alert alert-danger">
                            <strong>OOps!!!</strong>Currently Not in Stock
                        </div>
                    @else
                        @auth
                            @if (Auth::check())
                                <div>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="product_id" value="{{ $det->pID }}">
                                        <input type="hidden" name="totalprice" value="{{ $det->price }}">
                                        <input type="hidden" name="quantity" id="" value="1">


                                        <button type="submit" class="btn btn-primary my-2">Add to Cart</button>
                                    </form>
                                </div>
                            @endif
                        @endauth
                    @endif
                    <hr>

                    <h3 class="mainheading">Product Details</h3>
                    <ul class="details">
                        <table>
                            <tr>
                                <td class="dh1">Pattern:</td>
                                <td></td>
                                <td class="dh2">{{ $det->pattern }}</td>
                            </tr>

                            <tr>
                                <td class="dh1">Sleeve:</td>
                                <td></td>
                                <td class="dh2">{{ $det->sleeve }}</td>
                            </tr>
                            <tr>
                                <td class="dh1">Neck Type:</td>
                                <td></td>
                                <td class="dh2">{{ $det->neck }}</td>
                            </tr>
                            <tr>
                                <td class="dh1">Fabric type:</td>
                                <td></td>
                                <td class="dh2">{{ $det->fabric }}</td>
                            </tr>
                            <tr>
                                <td class="dh1">Length:</td>
                                <td></td>
                                <td class="dh2">{{ $det->length }}</td>
                            </tr>
                            <tr>
                                <td class="dh1">Style:</td>
                                <td></td>
                                <td class="dh2">{{ $det->style }}</td>
                            </tr>
                            <tr>
                                <td class="dh1">Occasion:</td>
                                <td></td>
                                <td class="dh2">{{ $det->occasion }}</td>
                            </tr>
                            <tr>
                                <td class="dh1">Package Contain :</td>
                                <td></td>
                                <td class="dh2">{{ $det->package_contain }} product</td>
                            </tr>

                        </table>

                        {{-- <li class="main">Pattern:<span>{{$det->pattern}}</span></li>
              <li>Sleeve:<span>{{$det->sleeve}}</span></li>
              <li>Neck Type:<span>{{$det->neck}}</span></li>
              <li>Fabric type:<span>{{$det->fabric}}</span></li>
              <li>Length:<span>{{$det->length}}</span></li>
              <li>Style:<span>{{$det->style}}</span></li>
              <li>Occasion:<span>{{$det->occasion}}</span></li>
              <li>Package Contain :<span>{{$det->package_contain}} product</li> --}}
                    </ul>
                    <hr />
                    <h3 class="mainheading">Brand</h3>
                    <ul class="details">
                        <table>
                            <tr>
                                <td>{{ $det->brand_name }}
                                </td>
                            </tr>
                        </table>
                    </ul>
                    <hr />
                    <h3 class="mainheading">Product Description</h3>
                    <ul class="details">
                        <table>
                            <tr>
                                <td><textarea class="details"
                                        readonly> {{ $det->product_description }}</textarea>
                                </td>
                            </tr>
                        </table>
                    </ul>
                    <ul class="pay">
                        <li>Cash on delivery</li>
                        <li>Free delivery</li>
                        <li>Easy 15 Days Exchange And Return</li>
                    </ul>
                </div>
        </div>
    </div>
    </div>
    @endforeach

    <hr />

    <div class="container-fluid owl">
        <div class="owl-carousel owl-theme">
            {{-- <div class="item img-thumbnail">
          <h4 class="image"><img src="{{asset('User\productct7.jpeg')}}" /> <button value="stsraf" class="add2">
            <i class="fa-solid fa-heart"></i>
          </button><button value="add to cart" class="add">
            Add to cart
          </button>
        </h4></h4>
          <h4>Name:</h4>
          <h4>Price</h4>
        </div> --}}
            {{-- <div class="item img-thumbnail">
          <h4 class="image">
            <img src="{{asset('User\productct8.jpeg')}}" />
            <button value="stsraf" class="add2">
              <i class="fa-solid fa-heart"></i>
            </button><button value="add to cart" class="add">
              Add to cart
            </button>
          </h4>
          <h4>Name:</h4>
          <h4>Price</h4>
        </div> --}}
            {{-- <div class="item img-thumbnail">
          <h4 class="image"><img src="{{asset('User\productCT1.jpg')}}" /> <button value="stsraf" class="add2">
            <i class="fa-solid fa-heart"></i>
          </button><button value="add to cart" class="add">
            Add to cart
          </button>
        </h4></h4>
          <h4>Name:</h4>
          <h4>Price</h4>
        </div> --}}
            {{-- <div class="item img-thumbnail">
          <h4 class="image"><img src="{{asset('User\productCT2.jpg')}}" /> <button value="stsraf" class="add2">
            <i class="fa-solid fa-heart"></i>
          </button><button value="add to cart" class="add">
            Add to cart
          </button>
        </h4></h4>
          <h4>Name:</h4>
          <h4>Price</h4>
        </div> --}}
            {{-- <div class="item img-thumbnail">
          <h4 class="image"><img src="{{asset('User\productct9.jpeg')}}" /> <button value="stsraf" class="add2">
            <i class="fa-solid fa-heart"></i>
          </button><button value="add to cart" class="add">
            Add to cart
          </button>
        </h4></h4>
          <h4>Name:</h4>
          <h4>Price</h4>
        </div> --}}
            {{-- <div class="item img-thumbnail">
          <h4 class="image"><img src="{{asset('User\productCT3.jpg')}}" /> <button value="stsraf" class="add2">
            <i class="fa-solid fa-heart"></i>
          </button><button value="add to cart" class="add">
            Add to cart
          </button>
        </h4></h4>
          <h4>Name:</h4>
          <h4>Price</h4>
        </div> --}}
            {{-- <div class="item img-thumbnail">
          <h4 class="image"><img src="{{asset('User\productCT4.jpg')}}" /> <button value="stsraf" class="add2">
            <i class="fa-solid fa-heart"></i>
          </button><button value="add to cart" class="add">
            Add to cart
          </button>
        </h4></h4>
          <h4>Name:</h4>
          <h4>Price</h4>
        </div> --}}
            {{-- @foreach ($product1 as $prod)
                <div class="item img-thumbnail">
                    <h4 class="image"><img src="{{ asset('mulimages/' . $prod->image) }}" />
                        <a href="{{ url('/prod', ['id' => $prod->id]) }} " class="btn add2">
                            <i class="fa-solid fa-heart"></i>
                        </a><button value="add to cart" class="add">
                            Add to cart
                        </button>
                    </h4>
                    <h4>Name: {{ $prod->product_name }}</h4>
                    <h4>Price {{ $prod->price }}</h4>
                </div>
            @endforeach --}}
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function currentDiv(n) {
            showDivs((slideIndex = n));
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = x.length;
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-opacity-off";
        }
    </script>
    <script>
        var x = 1;
        var span = document.querySelector('.quantityShow'); // find the <span> element in the DOM
        var increment = document.getElementById('increment'); // find the element with the ID 'increment'
        var decrement = document.getElementById('decrement'); // find the element with the ID 'decrement'

        increment.addEventListener('click', function() {
            // this function is executed whenever the user clicks the increment button
            span.textContent = ++x;
        });

        decrement.addEventListener('click', function() {
            // this function is executed whenever the user clicks the decrement button
            if (x == 1) {
                alert("Please select valid input");
            } else {
                span.textContent = --x;

            }
        });

        // $(".aa").mouseenter(function () {
        //     $(this).find(".bb").show();
        // });

        // $(".aa").mouseout(function () {
        //     $(this).find(".bb").hide();
        // });
    </script>
    <script>
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 75,
            nav: true,

            navText: [
                '<i class="fa-solid fa-chevron-left"></i>',
                '<i class="fa-solid fa-chevron-right"></i>'

            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                800: {
                    items: 3,
                },
                1000: {
                    items: 4,
                },
            },
        });
    </script>
    <script>
        $(document).ready(function() {

            const imgs = document.querySelectorAll('.img-select a');
            const imgBtns = [...imgs];
            let imgId = 1;

            imgBtns.forEach((imgItem) => {
                imgItem.addEventListener('click', (event) => {
                    event.preventDefault();
                    imgId = imgItem.dataset.id;
                    slideImage();
                });
            });

            function slideImage() {
                const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

                document.querySelector('.img-showcase').style.transform =
                    `translateX(${- (imgId - 1) * displayWidth}px)`;
            }

            window.addEventListener('resize', slideImage);



        });
    </script>
    @include('User.include.footer')
