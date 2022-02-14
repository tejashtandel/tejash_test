@include('include.header')
       
            <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                <a href="{{route('footers.create') }}" class="btn btn-success btn-lg float-right" type="submit">Add footer</a>
                    <table class="table table-bordered">
                             <thead>
                                 <tr>
                                        
                                            <th scope="col">About</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                     </tr>
                             </thead>
                             <tbody>
                             @foreach($footer as $foot)
                             <tr>
                                
                                 <td>{{$foot->about}}</td>
                                 <td>{{$foot->address}}</td>
                                 <td>{{$foot->phone}}</td>
                                 <td>{{$foot->email}}</td>
                                 <td>
                                 <form action="{{route('footers.destroy',$foot->id)}}" method="Post">
<a class="btn btn-primary"  href="{{route('footers.edit',$foot->id)}}">Edit</a>
@csrf
 @method('DELETE')
<!-- <button type="submit" class="btn btn-danger">Delete</button> -->
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
@include('include.footer')