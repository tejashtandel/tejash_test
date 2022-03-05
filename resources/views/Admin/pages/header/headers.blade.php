@include('Admin.include.header')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container">
            @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger text-center">
                {{Session::get('error')}}
            </div>
            @endif
            <a href="{{route('header.create') }}" class="btn btn-success btn-lg float-right" type="submit"> Create Header</a>
            <div class="row">

                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>

                            <th scope="col">Header name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($head as $hd)
                        <tr>
                            <td>{{$hd->header_name}}</td>
                            <td>
                                <form action="{{route('header.destroy',$hd->id)}}" method="POST">
                                    <a class="btn btn-primary" href="{{route('header.edit',$hd->id)}}">Edit</a>
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