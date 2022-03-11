@include('Admin.include.header')


div class="main-content">

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
        <div class="container ">
            <div class="form-group">
                <input type="text" name="search" id="search1" class="form-control search" placeholder="Search Feedback Data" />

            </div>
            <div class="row">
                <div class="container users">
                    <table class="table table-bordered" id="example">
                        <thead>
                            <tr>
                                <th scope="col"> Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subjects</th>
                                <th scope="col">message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($feedback as $fb)
                            <tr>
                                <td> {{$fb->name}}</td>
                                <td> {{$fb->email}}</td>
                                <td> {{$fb->subject}}</td>
                                <td> {{$fb->message}}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('Admin.include.footer')
<script>
    $('#search1').on('keyup', function() {
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

                    console.log(response);
                    $('.users').html(response.html);
                    generatedatatable();

                }

            }
        });
    })
</script>