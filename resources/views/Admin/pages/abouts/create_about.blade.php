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
                                    <form action="{{route('abouts.store') }}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                    <h2>Add Banners</h2>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                @if($errors->any())
                                {!! implode('', $errors->all('<div class="alert alert-danger mt-1 mb-1">:message</div>')) !!}
                                @endif
                            </div>
                        </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong>Description:</strong>
                                    <input type="text" name="description" class="form-control" placeholder="Enter description">
                                    <!-- @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                    @enderror -->
                                    </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong>Photos:</strong>
                                    <input type="file" name="photo" class="form-control" placeholder="Enter photos">
                                    <!-- @error('photo')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                    @enderror -->
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary ml-3">Add</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>

@include('Admin.include.footer')