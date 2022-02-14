<!doctype html>
@include('User.include.header')
<div class="container-fluid">
<div class="row special-list">
    @foreach($product as $prod)
    <div class="col-lg-2 col-md-2 special-grid ">
        <div class="products-single fix">
            <div class="box-img-hover">
                <div class="type-lb">
                    
                </div>
                <img src="User/product/{{$prod-> image}}" class="img-fluid" alt="Image" style="display: flex">
                <div class="mask-icon">
                    <ul>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                        
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                    </ul>
                    <a class="cart" href="#">Add to Cart</a>
                </div>
            </div>
            <div class="why-text">
                
                <h5>{{ $prod-> product_name}}</h5>
                <h5>{{ $prod-> price}}</h5>
            </div>
        </div>
    </div>
    
    @endforeach
</div>
</div>





@include('user.include.footer')