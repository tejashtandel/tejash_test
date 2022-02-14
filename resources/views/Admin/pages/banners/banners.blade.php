@include('Admin.include.header')
       
            <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                <a href="{{url('banner_create') }}" class="btn btn-success btn-lg float-right" type="submit"> Add Banners</a>
                    <table class="table table-bordered">
                             <thead>
                                 <tr>
                                        
                                            <th scope="col">Banner Images</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                     </tr>
                             </thead>
                            <tbody>
                            @foreach($bann as $ban)
                             <tr>
                                 <td><img src="{{('upload/' . $ban->banner_image)}}" class="img-thumbnail" alt="Responsive image" style="width:250px"></td>
                                 <td>{{$ban->description}}</td>
                                 
                             </tr>
                             @endforeach
                            </tbody>
                        </table>   
                </div>
            </div>  
        </div>
</div>
@include('Admin.include.footer')