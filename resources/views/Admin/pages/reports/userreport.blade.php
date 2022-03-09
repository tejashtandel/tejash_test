@include('Admin.include.header')


<div class="main-content">

    <div class="section__content section__content--p30">
        <div class="container feedback">
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
         <input type="text" id="search">
            <div class="row">
             
                <table class="table table-bordered" id="example">
                    <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Order Id</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Total Amount</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($userss as $user)
                        <tr>
                            <td> {{$user->firstname}}</td>
                          <td>{{$user->id}}</td>
                            <td> {{$user->product_name}}</td>
                            <td> {{$user->totalprice}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('Admin.include.footer')
<script>
      $('#search').on('keyup', function() {
            var search = $(this).val();
            console.log(search);
            $.ajax({
                type: "get",
                url: "{{route('search')}}",
                data: {
                    search: search,

                },

                success: function(response) {
                    if (response.success) {


                        $('.users').html(response.html);
                    }

                }
            });
        })
</script>