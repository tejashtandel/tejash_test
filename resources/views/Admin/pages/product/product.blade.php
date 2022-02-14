@include('Admin.include.header')
       
            <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                <a href="{{url('create_product') }}" class="btn btn-success btn-lg float-right" type="submit"> Add Product</a>
                    <table class="table table-bordered">
                             <thead>
                                 <tr>
                                        
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                     </tr>
                             </thead>
                             <tbody>
                             @foreach($product as $pro)
                             <tr>
                                
                                 <td>{{$pro->product_name}}</td>
                                 <td>{{$pro->price}}</td>
                                <td><img src="{{('product/' . $pro->image)}}" class="img-thumbnail" alt="Responsive image" style="width: 200px;"></td> 
                                <td>   
                              <form action="{{route('product.destroy',$pro->id)}}" method="Post">
                                 <a class="btn btn-primary" href="{{url('product_edit',$pro->id)}}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                             </tr>
                             @endforeach
                             </tbody>
                        </table>   
                </div>
            </div>  
        </div>
</div>
@include('Admin.include.footer')