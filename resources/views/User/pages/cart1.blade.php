@include('user.include.header')


<div class="container">
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="carddetails">
                <h1>Shopping Cart</h1>

                <div class="details">

                    <div class="container cart">
                        <table class="table table-hover">
                            <thead>
                                <tr>

                                    <th>Product Image</th>
                                    <th>Product name</th>
                                    <th>Product Price</th>
                                    <th>Product Quantity</th>
                                    <th>Total Price</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $val = 0;
                                $j = 1;
                                ?>
                                @foreach ($cart as $cat)
                                    <tr>
                                        {{-- <input type="hidden" value="{{$cat->product_id}}" id="productid"> --}}

                                        <td><img src="{{ asset('User/product/' . $cat->image) }}"></td>
                                        <td>{{ $cat->product_name }}</td>

                                        <td id="productprice" data-label="Price_<?php echo $j; ?>">
                                            {{ $cat->price }}
                                        </td>

                                        <td data-label="Quantity">
                                            <?php
                                            $amount = $cat->totalprice * $cat->quantity;
                                            $amount1 = $cat->totalprice;
                                            $val = $val + $amount;
                                            ?>
                                          
                                            <input type="number" value="{{ $cat->quantity }}"
                                                min="1"
                                                onchange="quantitys(this.value,{{ $cat->price }},<?php echo $j; ?>,{{ $cat->product_id }},{{ Auth::user()->id }})"
                                                name="quantity" id="quantity_<?php echo $j; ?>" class="quantity"
                                                required />

                                            <input type="hidden" id="quantityfinal">
                                          

                                        </td>
                                        <td data-label="Total">
                                            <span class="amount" name="totalprice"
                                                id="totalprice_<?php echo $j; ?>">
                                                <?php echo $amount1 * $cat->quantity; ?>
                                            </span>
                                        </td>

                                        {{-- <form action="{{ route('cart.destroy', ['cart' => $cat->cID]) }}"
                                            method="POST">
                                            
                                            @csrf
                                            @method('DELETE')
                                            <td data-label="Delete">

                                                <button type="submit" value="Delete" class="fa-solid fa-trash"
                                                    style="color:red,background-color:black"></button>
                                                </td>

                                        </form> --}}

                                        <td data-label="Delete">

                                            <button type="button" value="{{ $cat->cID }}" class="fa-solid fa-trash"
                                                id="delete" style="color:red,background-color:black"></button>
                                        </td>

                                    </tr>

                                    <?php
                                    $j++;
                                    ?>
                                @endforeach
                                {{-- <td><a href="{{ route('cart.destroy', ['cart' =>  Auth::user()->id ])}}"><i class="fa-solid fa-trash-can"></i></a></td> --}}
                            </tbody>

                            {{-- <tr>
                                    <td colspan="4" style="font-weight: bold; font-size: 24px;">Total:</td>
                                    <td><span id="totalsum" class="totalsum" readonly></span></td>
                                    <td></td>
                                </tr> --}}
                            {{-- </table> --}}
                            <form action="{{ route('order.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />

                                <tr>
                                    <td colspan="4" style="font-weight: bold; font-size: 24px;">Total:</td>
                                    <td><span id="totalsum" class="totalsum" readonly><?php echo $val; ?></span>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td colspan="5">
                                        <input type="hidden" id="grandtotal" name="totalamount" value="<?php echo $val; ?>">
                                        <button type="submit" class="btn btn-warning" name="checkout">Proceed to
                                            checkout</button>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function quantitys(value, amount, i, id, userid) {

        //  var q =$(this).val();
        //     console.log(q);
        document.getElementById("quantityfinal").value = value;

        var total_price = value * amount;
        $('#totalprice_' + i).text(total_price);
        console.log(total_price);
        var grand_total = totalSum();
        $('#totalsum').val(grand_total);

        document.getElementById('totalsum').innerHTML = grand_total;
        $.ajax({
            type: "post",
            url: "{{ route('cartu') }}",
            data: {
                id: id,
                q: value,
                userid: userid,
                _token: '{{ csrf_token() }}'
            },
            datatype: "json",
            success: function(response) {

            }
        });

        // return false;


    }


    function totalSum() {
        var grand_total = 0;
        jQuery('.amount').each(function() {
            var currentElement = $(this).text();
            grand_total += parseInt(currentElement);
            $('.totalsum').val(grand_total);



            // document.getElementById('totalsum').innerHTML = grand_total;


        });
        return grand_total;
    }
</script>


{{-- <script>
    var q= document.getElementById('quantityfinal').value;
    console.log(q);
    console.log('yash');


    </script> --}}

<script>
    $("#delete").click(function() {

        var id = $(this).val();
        console.log(id);


        $.ajax({
            type: "get",
            url: "{{ route('cartd') }}",
            data: {
                id: id,
            },
            datatype: "json",
            success: function(response) {

            }
        });


    });
</script>
<script>

    var t = document.getElementById('totalsum').value;
    console.log(t);
    </script>

{{-- <script>
   $( ".change" ).click(function() {
    
        var q = document.getElementById('quantityfinal').value;
        console.log(q);
        var id= document.getElementById('productid').value;
        console.log(id);
     



   



});

       


</script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>


@include('User.include.footer')
