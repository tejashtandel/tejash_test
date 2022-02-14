@include('include.header')
<div class="main-content">
                        <div class="section__content section__content--p30">
                             <div class="container">
                                    <div class="row">

                         <form href="{{url('header.update',$header[0]->id)}}" method="PUT" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Header Name:</strong>
<input type="text" name="header_name" class="form-control" placeholder="Header Name" value="{{$header[0]->header_name}}">
@error('header_name')
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