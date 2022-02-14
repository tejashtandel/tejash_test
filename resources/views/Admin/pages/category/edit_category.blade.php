
@include('include.header')

<div class="main-content">
                        <div class="section__content section__content--p30">
                             <div class="container">
                                    <div class="row">

                         <form href="{{url('edit',$category[0]->id)}}" method="PUT" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Category Name:</strong>
<input type="text" name="category_name" class="form-control" placeholder="Category Name" value={{$category[0]->category_name}}>
@error('category_name')
<div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Size:</strong>
<input type="text" name="size" class="form-control" placeholder="Enter Size" value={{$category[0]->size}}>
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Type:</strong>
<input type="text" name="type"  class="form-control" placeholder="Enter Type" value={{$category[0]->type}}>
@error('type')
<div class="alert alert-danger mt-1 mb-1">{{ $message}}</div>
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