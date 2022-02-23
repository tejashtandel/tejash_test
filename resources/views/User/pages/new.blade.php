<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Document</title>
    <style>
        #products {
            display: grid;
            grid-template-columns: repeat(auto-fit, min-max(20rem, 1fr));
        }

    </style>
</head>


<body>

    <div class="filter-box">
        <a class="btn btn-primary active filter-button" data-filter="all">All</a>
        <a class="btn btn-primary filter-button" data-filter="lengis">lengis</a>
        <a class="btn btn-primary filter-button" data-filter="kurta">kurta</a>
        <a class="btn btn-primary filter-button" data-filter="jeans">Jeans</a>

    </div>
    <div class="slider-container">
        <section class="container" id="store-prodects">
            <div class="product jeans">
                <img src="{{ asset('User/images/CT2.jpg') }}">
                {{-- <div class="product _details"> --}}
                    <h1>yash</h1>
                    <h1>52222
                    </h1>
                {{-- </div> --}}
            </div>
            <div class="product plazo">
                <img src="{{ asset('User/images/CT2.jpg') }}">
                {{-- <div class="product _details"> --}}
                    <h1>priyansh</h1>
                    <h1>52222
                    </h1>
                {{-- </div> --}}
            </div>
            <div class="product kurta">
                <img src="{{ asset('User/images/CT2.jpg') }}">
                {{-- <div class="product _details"> --}}
                    <h1>darsh</h1>
                    <h1>52222
                    </h1>
                {{-- </div> --}}
            </div>
            <div class="product lengis">
                <img src="{{ asset('User/images/CT2.jpg') }}">
                {{-- <div class="product _details"> --}}
                    <h1>dharit</h1>
                    <h1>52222
                    </h1>
                {{-- </div> --}}
            </div>
        </section>
    </div>

    {{-- <script>
        var btns = document.querySelectorAll(".btn");
        var storeproducts = document.querySelectorAll(".store-prodects");


        for (i = 0; i <= btns.length; i++) {


            btns[i].addEventListener("click", (e) => {



                e.preventDefault();


                const filter = e.target.dataset.filter;
                // console.log(filter);
              
                storeproducts.forEach((product) => {


                 
                   
                    if (filter == "all") {
                        product.style.display = "block"
                        // console.log("all");
                    } else {

                        if (product.classList.contains(filter)) {
                            product.style.display = "block"
                            // console.log(filter);

                        }

                         else {
                            product.style.display = "none"
                        }
                    }
                })
            });
           
        }
    </script> --}}
    <script>
        $(document).ready(function() {

            $(".filter").click(function() {
                var value = $(this).attr('data-filter');

                if (value == "all") {
                    //$('.filter').removeClass('hidden');
                    $('.product').show('1000');
                } else {
                    //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                    //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".product").not('.' + value).hide('3000');
                    $('.product').filter('.' + value).show('3000');

                }
            });

        });
    </script>


</body>

</html>
