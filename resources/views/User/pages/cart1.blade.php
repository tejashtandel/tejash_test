<!DOCTYPE html>
{{-- <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="addtocart.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
  </head> --}}
  @include('user.include.header')

  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12">
          <div class="carddetails">
              <h1>Shopping Cart</h1>
            
              <div class="details">
              <table class="table table-hover">
                  <thread>
                  <tr>
                      <th>#</th>
                      <th>Product Image</th>
                      <th>Product name</th>
                      <th>Product Price</th>
                      <th>Product Quantity</th>
                      <th>Total Price</th>
                     <th>Remove</th>
                  </tr>
                </thread>

                @foreach($cart as $cat)
                  <tbody>
                      <td>{{$cat->product_id}}</td>
                      <td><img src="{{ asset('User/product/'. $cat->image)}}"></td>
                      <td>{{$cat ->product_name}}</td>
                     
                      <td id="productprice">
                          {{$cat->price}}
                      </td>
                      <td>
                        <div>
                            
                            <a href="#" id="decrement" class="btn"  style="text-decoration: none;">&#8722</a>
                            <span class="px-3 quantityShow" id="qun">1</span>
                            <a href="#" id="increment"  class="btn" style="text-decoration: none;">&#43</a>
                        </div>
                      </td>
                      <td id="totalprice">0 </td>
                      <form action="{{ route('cart.destroy', ['cart' => $cat-> id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td data-label="Delete">
                            
                            <button  type="submit"  value="Delete" class="fa-solid fa-trash-can" ></button>
                        </td>

                    </form>
                      {{-- <td><a href="{{ route('cart.destroy', ['cart' =>  Auth::user()->id ])}}"><i class="fa-solid fa-trash-can"></i></a></td> --}}
                  </tbody>
                 @endforeach
                  {{-- <tbody>
                    <td><img src="{{asset('User/images/CT2.jpg')}}"></td>
                    <td></td>
                   
                    <td id="productprice">
                        2000
                    </td>
                    <td>
                      <div>
                          
                          <a href="#" id="decrement" class="btn"  style="text-decoration: none;">&#8722</a>
                          <span class="px-3 quantityShow" id="qun">1</span>
                          <a href="#" id="increment"  class="btn" style="text-decoration: none;">&#43</a>
                      </div>
                    </td>
                    <td ><span class="px-3" id="totalprice">2000</span></td>
                    <td><i class="fa-solid fa-trash-can"></i></td>
                </tbody> --}}
              </table>
            </div>

          </div>
        </div>
        <!-- <div class="col-lg-4 col-12">
          <div class="card">
            <div class="pricedetails">
              <h2>Product Amount:</h2>
              <h2>shipping amount:</h2>
              <hr />
              <h2>Total amount:</h2>
            </div>
          </div>
        </div> -->
      </div>
    </div>




    <script>
     

     
        var x = 1;
  var span = document.querySelector('.quantityShow');

  var increment = document.getElementById('increment'); // find the element with the ID 'increment'
  var decrement = document.getElementById('decrement'); // find the element with the ID 'decrement'
  
  increment.addEventListener('click', function () {
      // this function is executed whenever the user clicks the increment button
      if(x >10){
          alert("Limit Reached");
      }
      else{
        span.textContent = x++;
        
      

      }
     
    
  });
  
  decrement.addEventListener('click', function () {
      // this function is executed whenever the user clicks the decrement button
      if (x <= 1) {
          alert("Please select valid input");
      } else {
          span.textContent = --x;
  
      }
  });

  </script>
  
  @include('User.include.footer')