@include('Admin.include.header')


<div class="main-content">

    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <a href="{{url('demo') }}" class="btn btn-success btn-lg float-right" type="submit"> Create Category</a>
            <div class="row">

                <table class="table table-bordered" id="myTable">

                    <thead>
                        <tr>
                            <th scope="col">Category Name</th>
                            <th scope="col">Size</th>
                            <th scope="col">Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cat as $ct)
                        <tr>

                            <td>{{$ct->category_name}}</td>
                            <td>{{$ct->size}}</td>
                            <td>{{$ct->type}}</td>
                            <td>
                                <form action="{{route('category.destroy',$ct->id)}}" method="Post" id="form">
                                    <a class="btn btn-primary" href="{{route('category.edit',$ct->id)}}">Edit</a>
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
