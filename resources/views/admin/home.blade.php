@extends('admin.dashboard')
@section('content')
    
    <div id="chartColumn" class="col-xl-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">                                
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Simple Column</h4> 
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div id="s-col" class=""></div>

                <div class="code-section-container">
                            
                    <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                    <div class="code-section text-left">
                            <pre>
                                var sCol = {
                                chart: {
                                height: 350,
                                type: 'bar',
                                toolbar: {
                                show: false,
                                }
                                },
                                plotOptions: {
                                bar: {
                                horizontal: false,
                                columnWidth: '55%',
                                endingShape: 'rounded'  
                                },
                                },
                                dataLabels: {
                                enabled: false
                                },
                                stroke: {
                                show: true,
                                width: 2,
                                colors: ['transparent']
                                },
                                series: [{
                                name: 'Net Profit',
                                data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                                }, {
                                name: 'Revenue',
                                data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                                }],
                                xaxis: {
                                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                                },
                                yaxis: {
                                title: {
                                text: '$ (thousands)'
                                }
                                },
                                fill: {
                                opacity: 1

                                },
                                tooltip: {
                                y: {
                                formatter: function (val) {
                                return "$ " + val + " thousands"
                                }
                                }
                                }
                                }

                                var chart = new ApexCharts(
                                document.querySelector("#s-col"),
                                sCol
                                );

                                chart.render();
                                </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

 

@endsection