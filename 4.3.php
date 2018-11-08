<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-12">
            <h1>Figure: <?= $get_figure ?></h1>
            <div id="chartdiva"></div>
            <div id="chartdivb"></div>
        </div>
    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script>

    $(document).ready(function () {

        var catarraya = [];

        var optionsa = {
            chart: {
                renderTo: 'chartdiva',
                defaultSeriesType: 'line',
                zoomType: 'xy'
            },
            title: {
                text: '1948-2016'
            },

            xAxis: {
                categories: [],
                type: 'datetime',
                title: {
                    text: 'Year'
                }
            },


            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                line: {
                    negativeColor: '#00F',
                    threshold: 0
                },
                series: {
                    marker: {
                        fillColor: '#FFFFFF',
                        lineWidth: 1,
                        radius: 0,
                        lineColor: null // inherit from series
                    }
                }
            },

            yAxis: {
                title: {
                    text: 'Temperature Anomaly (°C)'
                }
            },
            series: [{
                type: 'line',
                data: []
            }, {
                type: 'line',
                data: []
            }]
        };


        var chartadata = $.get(window.location.origin + '/csvs/4.3a.csv', function (data) {
            var lines = data.split('\n');



            $.each(lines, function (lineNo, line) {
                var items = line.split(',');
                if (lineNo === 0) {


                    var categories = line.split(',');
                    $.each(categories, function (catNo, cat) {
                        console.log(cat);
                        catarraya.push(cat);
                    });

                } else {

                    var series = {
                        data: []
                    };
                    var year = items[0];
                    optionsa.xAxis.categories.push(year);
                    var one = parseFloat(items[1]);
                    var two = parseFloat(items[2]);
                    var three = parseFloat(items[3]);
                    // if (!isNaN(one) && !isNaN(two) && !isNaN(three)) {
                        optionsa.series[0].name = catarraya[1];
                        optionsa.series[0].color = '#F00';
                        optionsa.series[0].data.push([year, one]);
                        optionsa.series[1].name = catarraya[2];
                        optionsa.series[1].color = '#000';
                        optionsa.series[1].data.push([year, two]);
                    // }
                }
            });

            var charta = new Highcharts.Chart(optionsa);
        });


        var catarrayb = [];

        var optionsb = {
            chart: {
                renderTo: 'chartdivb',
                defaultSeriesType: 'line',
                zoomType: 'xy'
            },
            title: {
                text: '1900-2016'
            },

            xAxis: {
                categories: [],
                type: 'datetime',
                title: {
                    text: 'Year'
                }
            },


            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                line: {
                    negativeColor: '#00F',
                    threshold: 0
                },
                series: {
                    marker: {
                        fillColor: '#FFFFFF',
                        lineWidth: 1,
                        radius: 0,
                        lineColor: null // inherit from series
                    }
                }
            },

            yAxis: {
                title: {
                    text: 'Temperature Anomaly (°C)'
                }
            },
            series: [{
                type: 'line',
                data: []
            }, {
                type: 'line',
                data: []
            }]
        };


        var chartbdata = $.get(window.location.origin + '/csvs/4.3b.csv', function (data) {
            var lines = data.split('\n');



            $.each(lines, function (lineNo, line) {
                var items = line.split(',');
                if (lineNo === 0) {


                    var categories = line.split(',');
                    $.each(categories, function (catNo, cat) {
                        console.log(cat);
                        catarrayb.push(cat);
                    });

                } else {

                    var series = {
                        data: []
                    };
                    var year = items[0];
                    optionsb.xAxis.categories.push(year);
                    var one = parseFloat(items[1]);
                    var two = parseFloat(items[2]);
                    var three = parseFloat(items[3]);
                    // if (!isNaN(one) && !isNaN(two) && !isNaN(three)) {
                    optionsb.series[0].name = catarrayb[1];
                    optionsb.series[0].color = '#F00';
                    optionsb.series[0].data.push([year, one]);
                    optionsb.series[1].name = catarrayb[2];
                    optionsb.series[1].color = '#000';
                    optionsb.series[1].data.push([year, two]);
                    // }
                }
            });

            var chartb = new Highcharts.Chart(optionsb);
        });

    });


</script>
