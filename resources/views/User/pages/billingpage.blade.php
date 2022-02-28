<!DOCTYPE html>
@include('User.include.header')


<div class="container">
    <div class="row">
        <div class="col-lg-6">
            {{-- <div class="card"> --}}
            <div class="head">
                <h1> Billing Details</h1>
            </div>
            <div class="product_info">
                <h3>Product Details</h3>
                <table class="table">
                    <tr>
                        <th>Sr.No</th>
                        <th>Product name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>

                    </tr>
                </table>
            </div>
            <div class="userinfo">
                <ul>
                    <li>
                        <label>Address:</label>
                        <input type="textbox">
                    </li>

                    <li>
                        <label>Phone No:</label>
                        <input type="number">
                    </li>

                    <li>
                        <label></label>
                        <input type="number">
                    </li>
                </ul>

            </div>
            {{-- </div> --}}
        </div>
        <div class="col-lg-6">
            {{-- <div class="card"> --}}
            <div class="head">
                <h1>Billing Amount</h1>
            </div>
            
            <hr>

            {{-- </div> --}}
        </div>

    </div>
</div>
@include('User.include.footer')
