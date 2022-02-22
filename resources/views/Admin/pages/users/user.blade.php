@include('Admin.include.header')


<div class="main-content">

    <div class="section__content section__content--p30">
        <div class="container-fluid">
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
         
            <div class="row">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Contact</th>
                            <th  scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($userss as $user)
                        <tr>
                            <td> {{ $user->name}}</td>
                            <td></td>
                            <td>{{$user->email}}</td>
                            <td>
                                <!-- <form action="{{route('userss.destroy',$user->id)}}" method="Post">
                                    <a class="btn btn-primary" href="{{route('userss.edit',$user->id)}}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form> -->
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