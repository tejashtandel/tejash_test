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
                                        <td><img src="{{ asset('User/product/' . $cat->image) }}"></td>
                                        <td>{{ $cat->product_name }}</td>

                                        <td id="productprice" data-label="Price_<?php echo $j; ?>">
                                            {{ $cat->price }}
                                        </td>

                                        <td data-label="Quantity">
                                            <?php
                                            $amount = $cat->totalprice;
                                            $val = $val + $amount;
                                            ?>
                                            <input type="number" value="{{ $cat->quantity }}" min="1"
                                                onchange="quantitys(this.value,{{ $cat->price }},<?php echo $j; ?> )"
                                                name="quantity" id="quantity_<?php echo $j; ?>" class="quantity"
                                                required />

                                        </td>
                                        <td data-label="Total">
                                            <span class="amount" name="totalprice"
                                                id="totalprice_<?php echo $j; ?>">
                                                <?php echo $amount * $cat->quantity; ?>
                                            </span>
                                        </td>
                                       
                                        <form action="{{ route('cart.destroy', ['cart' => $cat->cID]) }}"
                                            method="POST">
                                            
                                            @csrf
                                            @method('DELETE')
                                            <td data-label="Delete">

                                                <button type="submit" value="Delete" class="fa-solid fa-trash"
                                                    style="color:red"></button>
                                                </td>

                                        </form>
                                  </tr>
                                   
                                        <?php
                                        $j++;
                                        ?>
 @endforeach
                                    {{-- <td><a href="{{ route('cart.destroy', ['cart' =>  Auth::user()->id ])}}"><i class="fa-solid fa-trash-can"></i></a></td> --}}
                                </tbody>
                               
                                <tr>
                                    <td colspan="4" style="font-weight: bold; font-size: 24px;">Total:</td>
                                    <td><span id="totalsum" class="totalsum"><?php echo $val; ?></span></td>
                                    <td></td>
                                </tr>
                               
                            </table>
                            <div class="chekout">
                                <a href="{{route('bill.index')}}" class="btn btn-success">Buy NoW</a>

                            </div>
                        </div>
                   
                      </div>
            </div>
        </div>
    </div>
</div>


<script>
    function quantitys(value, amount, i) {

        var total_price = value * amount;
        $('#totalprice_' + i).text(total_price);
        console.log(total_price);
        var grand_total = totalSum();
        $('#totalsum').val(grand_total);

        document.getElementById('totalsum').innerHTML = grand_total;

        return false;


    }


    function totalSum() {
        var grand_total = 0;
        jQuery('.amount').each(function() {
            var currentElement = $(this).text();
            grand_total += parseInt(currentElement);
            $('.totalsum').val(grand_total);
        });
        return grand_total;
    }
</script>


@include('User.include.footer')
