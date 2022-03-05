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
                            <th scope="col">First Name</th>
                            <th scope="col">Order Id</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Total Amount</th>
                            <!-- <th scope="col">Last Name</th>
                            <th scope="col">Mobile No</th>
                            <th scope="col">Gender</th>
                            <th scope="col">House</th>
                            <th scope="col">Street</th>
                            <th scope="col">Landmark</th>
                            <th scope="col">State</th>
                            <th scope="col">City</th>
                            <th scope="col">Postcode</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($userss as $user)
                        <tr>
                            <td> {{$user->firstname}}</td>
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
                url: "{{route('searchp')}}",
                data: {
                    search: search,

                },

                success: function(response) {
                    if (response.success) {


                        $('.product_table').html(response.html);
                    }

                }
            });
        })
</script>