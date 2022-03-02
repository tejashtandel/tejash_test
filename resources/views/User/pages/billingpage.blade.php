<!DOCTYPE html>
@include('User.include.header')


<div class="container bill">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 col-12">
            <div class="header">
                <h2>Billing Page</h2>
            </div>
            <div class="card">
                <div class="companydetails">
                    <ul>
                        @foreach ($footer as $foot)
                            <li>
                                <h4>Shop name: <span> Ethics Beauty</span></h4>
                            </li>
                            <li>
                                <h4>Address Of Shop: <span> {{ $foot->address }}</span></h4>
                            </li>
                            <li>
                                <h4>Shop Email: <span> {{ $foot->email }}</span></h4>
                            </li>
                            <li>
                                <h4>Shop Contactno: <span> {{ $foot->phone }}</span></h4>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <hr>
                <div class="userdetails">
                    @foreach($user as $us)
                    <ul>
                     
                        <li>
                            <h4>User name:   <span>{{$us->firstname}}</span>     <span>{{$us->lastname}}</span> </h4>
                        </li>
                        <li>
                            <h4>Address Of User:  <span>{{$us->street}}</span></h4>
                        </li>
                        <li>
                            <h4>User Email:  <span>{{$us->email}}</span></h4>
                        </li>
                        <li>
                            <h4>User Contactno:  <span>{{$us->mobile_no}}</span></h4>
                        </li>

                    </ul>
                    @endforeach

                </div>
                <hr>
                <div class="billdetails">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Product Total cost</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tr>
                            <td colspan="2">Total Cost:</td>
                            <td><span id="totalsum" class="totalsum"></span></td>
                            
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('User.include.footer')
