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
                                    <form action="{{url('store') }}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                    <h2>Add Category</h2>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong>Category Name:</strong>
                                    <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name">
                                    @error('category_name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                    @enderror
                                    </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong>Size:</strong>
                                    <input type="text" name="size" class="form-control" placeholder="Enter Category Size">
                                    @error('size')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                    @enderror
                                    </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong>Type:</strong>
                                    <input type="text" name="type" class="form-control" placeholder="Enter Type">
                                    @error('type')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                    @enderror
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary ml-3">Add category</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 @include('Admin.include.footer')
