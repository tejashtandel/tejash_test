@include('Admin.include.header')
       
            <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
            <a href="{{url('brand_create') }}" class="btn btn-success btn-lg float-right" type="submit">Add Brand</a>
                <div class="row">
             
                    <table class="table table-bordered" id="myTable">
                             <thead>
                                 <tr>
                                        
                                            <th scope="col">Brand Name</th>
                                            <th scope="col">Action</th>
                                </tr>
                             </thead>
                             <tbody>
                             @foreach($brand as $brd)
                             <tr>
                                
                                 <td>{{$brd->brand_name}}</td>
                                
                                 <td>
                                 <form action="{{route('brands.destroy',$brd->id)}}" method="Post">
                                            <a class="btn btn-primary"  href="{{route('brands.edit',$brd->id)}}">Edit</a>
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