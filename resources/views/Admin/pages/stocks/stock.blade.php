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
            <a href="{{route('stocks.create') }}" class="btn btn-success btn-lg float-right" type="submit">Add stocks</a>
            <div class="row">

                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>

                            <th scope="col">Product Name</th>
                            <th scope="col">Size</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            
                        @foreach($stock as $st)
                        <tr>
                           <td>{{$st->product_name}}</td>
                            <td>{{$st->size}}</td>
                            <td>{{$st->quantity}}</td>
                            <td>{{$st->price}}</td>
                            <td>
                                <form action="{{route('stocks.destroy',$st->id)}}" method="POST">
                                    <a class="btn btn-primary" href="{{route('stocks.edit',$st->id)}}">Edit</a>
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