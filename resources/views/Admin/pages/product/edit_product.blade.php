@include('include.header')
<div class="main-content">
                        <div class="section__content section__content--p30">
                             <div class="container">
                                    <div class="row">

                         <form href="{{url('product.update',$product[0]->id)}}" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')
                         <div class="row">
                               <div class="col-xs-12 col-sm-12 col-md-12">
                                   <div class="form-group">
                                   <strong>Product Name:</strong>
                                        <input type="text" name="product_name" class="form-control" placeholder="product Name" value={{$product[0]->product_name}}>
                                              @error('product_name')
                                                   <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
                                              @enderror
                                   </div>
                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-12">
                                   <div class="form-group">
                                   <strong>Price:</strong>
                                        <input type="text" name="price" class="form-control" placeholder="Price" value={{$product[0]->price}}>
                                              @error('price')
                                                   <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
                                              @enderror
                                   </div>
                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-12">
                                   <div class="form-group">
                                   <strong>Image:</strong>
                                        <input type="file" name="image" class="form-control" placeholder="Image" value={{$product[0]->image}}>
                                              @error('image')
                                                   <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
                                              @enderror
                                   </div>
                              </div>


                              <input type="submit" class="btn btn-primary ml-3 " value="Update" >
                              </div> 
                         </form>
                    </div>
               </div>
          </div>
     </div>
@include('include.footer')