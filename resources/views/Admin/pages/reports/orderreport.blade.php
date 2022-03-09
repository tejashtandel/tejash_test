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
                <table class="table table-bordered" id="example">
                    <thead>
                        <tr>
                            <th scope="col">User Name</th>
                            <th scope="col">Order Id</th>
                            <th scope="col">Product Name</th>
                      
                            <th scope="col">Total Amount</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->firstname}}</td>
                            <td>{{$order->id}}</td>
                            <td> {{$order->product_name}}</td>
                            <td>{{$order->totalprice}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('Admin.include.footer')