<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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
              <h6 ><button id="clr" class="btn btn-primary" onclick="clrfields()">Clear All</button></h6>
              <hr />

              <div class="cd-filter-block" id="first">
                <h4 class="catagory">Catagory</h4>

                <ul
                  style="list-style-type: none"
                  class="cd-filter-content cd-filters list"
                >
                  <li>
                    <input
                    name="jeans"  
                    class="filter"
                      data-filter=".check1"
                      type="checkbox"
                      id="checkbox"
                    />
                    <label class="checkbox-label" id="jean">Jeans</label
                    >
                  </li>
                  <li>
                    <input
                    name="plazo"  
                    class="filter"
                      data-filter=".check1"
                      type="checkbox"
                      id="checkbox"
                    />
                    <label class="checkbox-label" for="plazo">Plazo</label
                    >
                  </li>
                  <li>
                    <input
                    name="lengis"  
                    class="filter"
                      data-filter=".check1"
                      type="checkbox"
                      id="lengis"
                    />
                    <label class="checkbox-label" for="lengis">Lengis</label
                    >
                  </li>
                </ul>
                <!-- cd-filter-content -->
              </div>
              <hr />
              <div class="cd-filter-block">
                <h4 class="catagory">Size</h4>

                <ul
                  style="list-style-type: none"
                  class="cd-filter-content cd-filters list"
                >
                  <li>
                    <input
                    name="small"  
                    class="filter"
                      data-filter=".check1"
                      type="checkbox"
                      id="small"
                    />
                    <label class="checkbox-label" for="small">Small</label>
                  </li>
                  <li>
                    <input
                    name="medium"  
                    class="filter"
                      data-filter=".check1"
                      type="checkbox"
                      id="medium"
                    />
                    <label class="checkbox-label" for="medium">Medium</label>
                  </li>
                  <li>
                    <input
                    name="large"  
                    class="filter"
                      data-filter=".check1"
                      type="checkbox"
                      id="large"
                    />
                    <label class="checkbox-label" for="large">Large</label>
                  </li>
                  <li>
                    <input
                    name="xl"  
                    class="filter"
                      data-filter=".check1"
                      type="checkbox"
                      id="xl"
                    />
                    <label class="checkbox-label" for="xl">XL</label>
                  </li>
                  <li>
                    <input
                    name="xxl"  
                    class="filter"
                      data-filter=".check1"
                      type="checkbox"
                      id="xxl"
                    />
                    <label class="checkbox-label" for="xxl">XXL</label>
                  </li>
                </ul>
                <!-- cd-filter-content -->
              </div>
              <hr />
              <div class="cd-filter-block">
                <h4 class="catagory">Price</h4>

                <ul
                  style="list-style-type: none"
                  class="cd-filter-content cd-filters list"
                >
                  <li>
                    <input
                    name="cat"  
                    class="filter"
                      data-filter=".check1"
                      type="checkbox"
                      id="500"
                    />
                    <label class="checkbox-label" for="checkbox1"
                      >Below 500</label
                    >
                  </li>
                  <li>
                    <input
                    name="cat"  
                    class="filter"
                      data-filter=".check1"
                      type="checkbox"
                      id="501"
                    />
                    <label class="checkbox-label" for="checkbox1"
                      >500 - 1000</label
                    >
                  </li>
                  <li>
                    <input
                    name="cat"  
                    class="filter"
                      data-filter=".check1"
                      type="checkbox"
                      id="1000"
                    />
                    <label class="checkbox-label" for="checkbox1"
                      >1000 above</label
                    >
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
            @foreach( $product2 as $prod)
            <div class="col-lg-4 col-md-6 col-sm-12">
               
              <div class="wholecard">
                <div class="box-img">
                  <div class="type-lb">
                    <img
                      src="User/product/{{$prod-> image}}" 
                      class="img-fluid"
                      alt="Image"
                      style="display: flex"
                    />

                    <a href="{{ url('/prod3',['id'=>$prod->id]) }} " class="btn add2">
                        <i class="fa-solid fa-heart"></i>
                      </a>
                    <button value="add to cart" class="add">Add to cart</button>
                  </div>
                  <div class="why-text">
                    <h5 class="productdetails">NAME:{{ $prod-> product_name}}</h5>
                    <h5 class="productdetails">Price:{{ $prod-> price}}</h5>
                  </div>
                </div>
              </div>
              
            </div>
            @endforeach
            {{-- <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="wholecard">
                <div class="box-img">
                  <div class="type-lb">
                    <img
                      src="User/images/CT2.jpg"
                      class="img-fluid"
                      alt="Image"
                      style="display: flex"
                    />
                    <button value="stsraf" class="add2">
                      <i class="fa-solid fa-heart"></i></button
                    ><button value="add to cart" class="add">
                      Add to cart
                    </button>
                  </div>
                  <div class="why-text">
                    <h5 class="productdetails">NAME:</h5>
                    <h5 class="productdetails">Price: 500</h5>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="wholecard">
                <div class="box-img">
                  <div class="type-lb">
                    <img
                      src="User/images/CT3.jpg"
                      class="img-fluid"
                      alt="Image"
                      style="display: flex"
                    />
                    <button value="stsraf" class="add2">
                      <i class="fa-solid fa-heart"></i></button
                    ><button value="add to cart" class="add">
                      Add to cart
                    </button>
                  </div>
                  <div class="why-text">
                    <h5 class="productdetails">NAME:</h5>
                    <h5 class="productdetails">Price: 500</h5>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="wholecard">
                <div class="box-img">
                  <div class="type-lb">
                    <img
                      src="User/images/CT4.jpg"
                      class="img-fluid"
                      alt="Image"
                      style="display: flex"
                    />
                    <button value="stsraf" class="add2">
                      <i class="fa-solid fa-heart"></i></button
                    ><button value="add to cart" class="add">
                      Add to cart
                    </button>
                  </div>
                  <div class="why-text">
                    <h5 class="productdetails">NAME:</h5>
                    <h5 class="productdetails">Price: 500</h5>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="wholecard">
                <div class="box-img">
                  <div class="type-lb">
                    <img
                      src="User/images/CT5.jpeg"
                      class="img-fluid"
                      alt="Image"
                      style="display: flex"
                    />
                    <button value="stsraf" class="add2">
                      <i class="fa-solid fa-heart"></i></button
                    ><button value="add to cart" class="add">
                      Add to cart
                    </button>
                  </div>
                  <div class="why-text">
                    <h5 class="productdetails">NAME:</h5>
                    <h5 class="productdetails">Price: 500</h5>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="wholecard">
                <div class="box-img">
                  <div class="type-lb">
                    <img
                      src="User/images/CT6.jpg"
                      class="img-fluid"
                      alt="Image"
                      style="display: flex"
                    />
                    <button value="stsraf" class="add2">
                      <i class="fa-solid fa-heart"></i></button
                    ><button value="add to cart" class="add">
                      Add to cart
                    </button>
                  </div>
                  <div class="why-text">
                    <h5 class="productdetails">NAME:</h5>
                    <h5 class="productdetails">Price: 500</h5>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="wholecard">
                <div class="box-img">
                  <div class="type-lb">
                    <img
                      src="User/images/ct7.jpeg"
                      class="img-fluid"
                      alt="Image"
                      style="display: flex"
                    />
                    <button value="stsraf" class="add2">
                      <i class="fa-solid fa-heart"></i></button
                    ><button value="add to cart" class="add">
                      Add to cart
                    </button>
                  </div>
                  <div class="why-text">
                    <h5 class="productdetails">NAME:</h5>
                    <h5 class="productdetails">Price: 500</h5>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="wholecard">
                <div class="box-img">
                  <div class="type-lb">
                    <img
                      src="User/images/ct8.jpeg"
                      class="img-fluid"
                      alt="Image"
                      style="display: flex"
                    />
                    <button value="stsraf" class="add2">
                      <i class="fa-solid fa-heart"></i></button
                    ><button value="add to cart" class="add">
                      Add to cart
                    </button>
                  </div>
                  <div class="why-text">
                    <h5 class="productdetails">NAME:</h5>
                    <h5 class="productdetails">Price: 500</h5>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="col-lg-4 col-md-6">
              <div class="wholecard">
                <div class="box-img">
                  <div class="type-lb">
                    <img
                      src="User/images/ct9.jpeg"
                      class="img-fluid"
                      alt="Image"
                      style="display: flex"
                    />
                    <button value="stsraf" class="add2">
                      <i class="fa-solid fa-heart"></i></button
                    ><button value="add to cart" class="add">
                      Add to cart
                    </button>
                  </div>
                  <div class="why-text">
                    <h5 class="productdetails">NAME:</h5>
                    <h5 class="productdetails">Price: 500</h5>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
    <!-- <script>
      $(".cd-filter-block h4").on("click", function () {
        $(this)
          .toggleClass("closed")
          .siblings(".cd-filter-content")
          .slideToggle(300);
      });
    </script> -->
    
    <script>
      $(document).ready(function() {
         
         $("#clr").click(function(){
         $(":checkbox").prop("checked", false);
         
         });
         
       
         
         });
    </script>
    <script>
      var wrapper = document.getElementById('first');
wrapper.addEventListener("click", function (evt) {
    var elem = evt.target;
    if (elem.name==="jeans") {
      // let c = document.getElementById('jeans').label;
      let c = document.getElementById("jean").innerHTML;
  
       
    }
// $("#jeans").is(':checked', function(){
//               // $("#jeans").attr('value', 'true');
//               console.log("jenas");
//           });

//           $("#plazo").is(':checked', function(){
//               $("plazo").attr('value', 'true');
//           });
//           $("#lengis").is(':checked', function(){
//               $("#lengis").attr('value', 'true');
//           });


});
    
    //input element where you put value
    // $("#isClicked").val("Yes");
    // console.log($("#isClicked").val());              
  
</script>

  </body>
</html>
