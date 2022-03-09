    @include('Admin.include.header')
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">overview</h2>
                            <button class="au-btn au-btn-icon au-btn--blue">
                                <!-- <i class="zmdi zmdi-plus"></i>add item</button> -->
                        </div>
                    </div>
                </div>
                <div class="row m-t-25">
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c1">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                    <div class="text">
                                        <h2></h2>
                                        <span><a href="userreport">Users</a></span>

                                    </div>
                                </div>

                                <div class="overview-chart">

                                    <span class="counter">{{$try->count()}}
                                    </span>
                                    <!-- <canvas id="widgetChart1"></canvas> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                    <div class="text">
                                        <h2></h2>
                                        <span><a href="proreport">Products</a></span>

                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <span class="counter">{{$data->count()}}
                                    </span>
                                    <!-- <canvas id="widgetChart2"></canvas> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c3">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                    <div class="text">
                                        <h2></h2>
                                        <span><a href="orderreport">Orders</a></span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <span class="counter">{{$checkouts->count()}}
                                    </span>

                                    <!-- <canvas id="widgetChart3"></canvas> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-twitch"></i>
                                    </div>
                                    <div class="text">
                                        <h2></h2>
                                        <span><a href="feedbackreport">Feedback</a></span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <span class="counter">{{$feedbacks->count()}}
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-6">
                        <h5 style="text-align: center;">Pie Chart</h5>
                        <div class="panel panel-primary">
                            <div class="panel-heading">Pie Chart</div>
                            <div class="panel-body">
                                <div id="pie-chart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h5 style="text-align: center;">Bar Chart</h5>
                        <div class="panel panel-primary">
                            <div class="panel-heading">Bar Chart</div>
                            <div class="panel-body">
                                <div id="bar-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <h5 style="text-align: center;">Line Chart</h5>
                    <div class="panel panel-primary">
                        <div class="panel-heading">Line Chart</div>
                        <div class="panel-body">
                            <div id="line-chart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h5 style="text-align: center;">pie Chart</h5>
                    <div class="panel panel-primary">
                        <div class="panel-heading">Pie Chart</div>
                        <div class="panel-body">
                            <div id="pie-chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        @include('Admin.include.footer')

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <script type="text/javascript">
            $(function() {
                $.ajax({
                    url: "getdata",
                    method: "get",
                    success: function(response) {
                        var data = JSON.parse(response.data)
                        console.log(data)
                        Highcharts.chart('pie-chart', {
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'pie'
                            },
                            title: {
                                text: 'pie chart for category wise products'
                            },
                            tooltip: {
                                pointFormat: '{series.category_name}: <b>{point.percentage:.1f}%</b>'
                            },
                            accessibility: {
                                point: {
                                    valueSuffix: '%'
                                }
                            },
                            plotOptions: {
                                pie: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    dataLabels: {
                                        enabled: true,
                                        format: '<b>{point.category_name}</b>: {point.percentage:.1f} %'
                                    }
                                }
                            },
                            series: [{
                                type: 'pie',
                                name: 'Browsers',
                                colorByPoint: true,
                                data: data
                            }]
                        });
                    }
                })

            });
        </script>





        <script type="text/javascript">
            $(function() {
                $.ajax({
                    url: "getdata3",
                    method: "get",
                    success: function(response) {
                        var data = JSON.parse(response.data)
                        console.log(data)
                        Highcharts.chart('pie-chart1', {
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'pie'
                            },
                            title: {
                                text: 'pie chart for subcategory wise products'
                            },
                            tooltip: {
                                pointFormat: '{series.subcategoryname}: <b>{point.percentage:.1f}%</b>'
                            },
                            accessibility: {
                                point: {
                                    valueSuffix: '%'
                                }
                            },
                            plotOptions: {
                                pie: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    dataLabels: {
                                        enabled: true,
                                        format: '<b>{point.subcategoryname}</b>: {point.percentage:.1f} %'
                                    }
                                }
                            },
                            series: [{
                                type: 'pie',
                                name: 'Browsers',
                                colorByPoint: true,
                                data: data
                            }]
                        });
                    }
                })

            });
        </script>






        <script type="text/javascript">
            $(function() {
                $.ajax({
                    url: "getdata2",
                    method: "get",
                    success: function(response) {
                        var data = JSON.parse(response.data)
                        var data1 = JSON.parse(response.data1)
                        console.log(data)
                        Highcharts.chart('bar-chart', {
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'bar'
                            },
                            title: {
                                text: 'category wise sales'
                            },
                            yAxis: {
                                title: {
                                    text: 'Stock per Order Quantity'
                                }
                            },
                            tooltip: {
                                pointFormat: '{series.product_name}: <b>{point.percentage:.1f}%</b>',

                            },
                            accessibility: {
                                point: {
                                    valueSuffix: '%'
                                }
                            },
                            plotOptions: {
                                bar: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    dataLabels: {
                                        enabled: true,
                                        format: '<b>{point.product_name}</b>: {point.percentage:.1f} %'
                                    }
                                }
                            },
                            series: [{
                                    name: 'products',
                                    colorByPoint: true,
                                    data: data

                                }, {
                                    name: 'sales',
                                    colorByPoint: true,
                                    data: data1
                                }

                            ]
                        });
                    }
                })

            });
        </script>




        <script type="text/javascript">
            $(function() {
                $.ajax({
                    url: "getdata1",
                    method: "get",
                    success: function(response) {
                        var data = JSON.parse(response.data)

                        console.log(data)
                        Highcharts.chart('line-chart', {
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'line'
                            },
                            title: {
                                text: 'Months wise products sale(quantity)'
                            },
                            tooltip: {
                                pointFormat: '{series.firstname}: <b>{point.percentage:.1f}%</b>'
                            },
                            accessibility: {
                                point: {
                                    valueSuffix: '%'
                                }
                            },
                            plotOptions: {
                                Donut: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    dataLabels: {
                                        enabled: true,
                                        format: '<b>{point.firstname}</b>: {point.percentage:.1f} %'
                                    }
                                }
                            },
                            series: [{
                                type: 'line',
                                name: 'Product',
                                colorByPoint: true,
                                data: data
                            }]
                        });
                    }
                })

            });
        </script>

        <script>
            $(document).ready(function() {

                $('.counter').each(function() {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 4000,
                        easing: 'swing',
                        step: function(now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });

            });
        </script>