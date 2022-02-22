@include('User.include.header')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container">
            <div class="row">
                @if(Session::has('success'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ Session::get('success') }}
                </div>
                @endif
                <form action="{{ route('userdetails.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <h2>MY Profile</h2>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                @if($errors->any())
                                {!! implode('', $errors->all('<div class="alert alert-danger mt-1 mb-1">:message</div>')) !!}
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>First Name:</strong>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter FirstName" value={{ Auth::user()-> firstname}}>
                                <!-- @error('description')
                                              <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                              @enderror -->
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Last Name:</strong>
                                <input type="text" name="lastname" class="form-control" placeholder="Enter LastName" value={{ Auth::user()-> lastname}}>
                                <!-- @error('description')
                                              <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                              @enderror -->
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Mobile Number:</strong>
                                <input type="text" name="mobile_no" class="form-control" placeholder="Enter Mobile Number" value={{ Auth::user()-> mobile_no}}>
                                <!-- @error('description')
                                              <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                              @enderror -->
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Gender:</strong>
                                <input type="radio" id="male" name="gender" value="Male">
                                  <label for="male">Male</label><br>
                                  <input type="radio" id="female" name="gender" value="Female">
                                  <label for="female">Female</label><br>
                                  <input type="radio" id="other" name="gender" value="Others">
                                  <label for="other">Others</label>
                                <!-- @error('description')
                                              <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                              @enderror -->
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>House:</strong>
                                <input type="text" name="house" class="form-control" placeholder="Enter House Number" value={{ Auth::user()-> house}}>
                                <!-- @error('description')
                                              <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                              @enderror -->
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Street:</strong>
                                <input type="text" name="street" class="form-control" placeholder="Enter Street Address" value={{ Auth::user()-> street}}>
                                <!-- @error('description')
                                              <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                              @enderror -->
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Landmark:</strong>
                                <input type="text" name="landmark" class="form-control" placeholder="Enter Landmark" value={{ Auth::user()-> landmark}}>
                                <!-- @error('description')
                                              <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                              @enderror -->
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>State:</strong>
                                <input type="text" name="state" class="form-control" placeholder="Enter state" value={{ Auth::user()-> state}}>
                                <!-- @error('description')
                                              <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                              @enderror -->
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>City:</strong>
                                <input type="text" name="city" class="form-control" placeholder="Enter City" value={{ Auth::user()-> city}}>
                                <!-- @error('description')
                                              <div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
                                              @enderror -->
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Postcode:</strong>
                                <input type="text" name="postcode" class="form-control" placeholder="Enter Postcode" value={{ Auth::user()-> postcode}}>
                                <!-- @error('description')
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
@include('User.include.footer')