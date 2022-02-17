@include('Admin.include.header')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container">
            <div class="row">

                <form action="{{route('product_detail.update',$productsdetail->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>pattern:</strong>
                                <input type="text" name="pattern" class="form-control" placeholder="Enter Pattern">
                                @error('pattern')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Sleeve:</strong>
                                <input type="text" name="sleeve" class="form-control" placeholder="Enter Sleeve">
                                @error('sleeve')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Neck:</strong>
                                <input type="text" name="neck" class="form-control" placeholder="Enter Neck">
                                @error('type')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Febric:</strong>
                                <input type="text" name="fabric" class="form-control" placeholder="Enter Febric">
                                @error('fabric')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Length:</strong>
                                <input type="text" name="length" class="form-control" placeholder="Enter Length">
                                @error('length')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>style:</strong>
                                <input type="text" name="style" class="form-control" placeholder="Enter Style">
                                @error('style')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Occasion:</strong>
                                <input type="text" name="occasion" class="form-control" placeholder="Enter Occasion">
                                @error('occasion')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Package Contain:</strong>
                                <input type="text" name="package_contain" class="form-control" placeholder="Enter Package Contain">
                                @error('package_contain')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Product Description:</strong>
                                <input type="text" name="product_description" class="form-control" placeholder="Enter Product Description">
                                @error('product_description')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Bottom Type:</strong>
                                <input type="text" name="bottomtype" class="form-control" placeholder="Enter Bottom Type">
                                @error('bottomtype')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Multiple Images:</strong>
                                <input type="file" name="mulimages[]" class="form-control" placeholder="Enter photos" multiple>

                            </div>
                        </div>


                        <input type="submit" class="btn btn-primary ml-3 " value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('Admin.include.footer')