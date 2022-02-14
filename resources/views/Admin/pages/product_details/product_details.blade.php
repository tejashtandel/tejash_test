@include('Admin.include.header')
       
            <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                <a href="{{url('create_product') }}" class="btn btn-success btn-lg float-right" type="submit"> Add Product Details</a>
                    <table class="table table-bordered">
                             <thead>
                                 <tr>
                                        
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Brand Name</th>
                                            <th scope="col">Sleeve</th>
                                            <th scope="col">Neck</th>
                                            <th scope="col">Febric</th>
                                            <th scope="col">Length</th>
                                            <th scope="col">Style</th>
                                            <th scope="col">Occasion</th>
                                            <th scope="col">Package Contain</th>
                                            <th scope="col">Product Description</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Bottom Type</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                     </tr>
                             </thead>
                             <tbody>
                           
                             </tbody>
                        </table>   
                </div>
            </div>  
        </div>
</div>
@include('Admin.include.footer')