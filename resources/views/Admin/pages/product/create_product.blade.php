@include('Admin.include.header')
            <div class="main-content">
                        <div class="section__content section__content--p30">
                             <div class="container">
                                    <div class="row">
                                    @if(session('status'))
                                    <div class="alert alert-success mb-1 mt-1">
                                    {{ session('status') }}
                                    </div>
                                    @endif
                                    <form action="{{ url('product_store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                    <h2>Add Products</h2>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong>Product Name:</strong>
                                    <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
                                    @error('product_name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                    @enderror
                                    </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong>Price:</strong>
                                    <input type="text" name="price" class="form-control" placeholder="Enter Price">
                                    @error('price')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                    @enderror
                                    </div>
                                    </div>
                                  
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong>image:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="Enter Images">
                                    @error('image')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                    @enderror
                                    </div>
                                    </div>
                                   
                                    <button type="submit" class="btn btn-primary ml-3">Add Products</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 @include('Admin.include.footer')
