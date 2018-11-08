<h1>Figure: <?= $get_figure ?></h1>
<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-12">Can not recreate map visualizations without the data. csv data provided for charts is fine except that permafrost data needs to be merged into one.
            <br><br>

            <img src="F5.1/figure5.1_dpi1000.png" width="100%">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div id="chartdiv1"></div>
        </div>

        <div class="col-sm-6">
            <div id="chartdiv2"></div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-6">
            <div id="chartdiv3"></div>
        </div>

        <div class="col-sm-6">
            <div id="chartdiv4"></div>
        </div>
    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script>

    $(document).ready(function () {

        var topleft_catarray = [];

        var topleft_options = {
            chart: {
                renderTo: 'chartdiv1'
            },
            title: {
                text: 'Cumulative Thickness'
            },
            xAxis: {
                categories: []
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                series: {
                    marker: {
                        fillColor: '#FFFFFF',
                        lineWidth: 1,
                        radius: 3,
                        lineColor: null // inherit from series
                    }
                }
            },
            yAxis: {
                title: {
                    text: '[m. water equiv.]'
                }
            },
            series: [{
                data: []
            },{
                data: []
            },{
                data: []
            }]
        };


        var topleft = $.get(window.location.origin + '/F5.1/icecap.csv', function (data) {
            var lines = data.split('\n');
            $.each(lines, function (lineNo, line) {
                var items = line.split(',');
                if (lineNo === 0) {


                    var categories = line.split(',');
                    $.each(categories, function (catNo, cat) {
                        console.log(cat);
                        topleft_catarray.push(cat);
                    });

                } else {

                    var series = {
                        data: []
                    };



                    var year = items[0];
                    topleft_options.xAxis.categories.push(year);
                    var one = parseFloat(items[1]);
                    var two = parseFloat(items[2]);
                    var three = parseFloat(items[3]);
                    topleft_options.series[0].name = topleft_catarray[1];
                    topleft_options.series[0].color = '#009b0d';
                    topleft_options.series[0].data.push([year, one]);
                    topleft_options.series[1].name = topleft_catarray[2];
                    topleft_options.series[1].color = '#9b0e00';
                    topleft_options.series[1].data.push([year, two]);
                    topleft_options.series[2].name = topleft_catarray[3];
                    topleft_options.series[2].color = '#030d9b';
                    topleft_options.series[2].data.push([year, three]);
                }
            });

            var topleft_chart = new Highcharts.Chart(topleft_options);
        });

        var topright_catarray = [];

        var topright_options = {
            chart: {
                renderTo: 'chartdiv2'
            },
            title: {
                text: 'Annual Permafrost Temperature'
            },
            xAxis: {
                categories: []
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                series: {
                    marker: {
                        fillColor: '#FFFFFF',
                        lineWidth: 1,
                        radius: 3,
                        lineColor: null // inherit from series
                    }
                }
            },
            yAxis: {
                title: {
                    text: '[deg C]'
                }
            },
            series: [{
                data: []
            },{
                data: []
            },{
                data: []
            }]
        };


        var topright = $.get(window.location.origin + '/F5.1/permafrost.csv', function (data) {
            var lines = data.split('\n');
            $.each(lines, function (lineNo, line) {
                var items = line.split(',');
                if (lineNo === 0) {


                    var categories = line.split(',');
                    $.each(categories, function (catNo, cat) {
                        console.log(cat);
                        topright_catarray.push(cat);
                    });

                } else {

                    var series = {
                        data: []
                    };



                    var year = items[0];
                    topright_options.xAxis.categories.push(year);
                    var one = parseFloat(items[1]);
                    var two = parseFloat(items[2]);
                    var three = parseFloat(items[3]);
                    topright_options.series[0].name = topright_catarray[1];
                    topright_options.series[0].color = '#009b0d';
                    topright_options.series[0].data.push([year, one]);
                    topright_options.series[1].name = topright_catarray[2];
                    topright_options.series[1].color = '#9b0e00';
                    topright_options.series[1].data.push([year, two]);
                    topright_options.series[2].name = topright_catarray[3];
                    topright_options.series[2].color = '#030d9b';
                    topright_options.series[2].data.push([year, three]);
                }
            });

            var topright_chart = new Highcharts.Chart(topright_options);
        });

        var bottomleft_catarray = [];

        var bottomleft_options = {
            chart: {
                renderTo: 'chartdiv3'
            },
            title: {
                text: 'Maximum Lake Ice Thickness'
            },
            xAxis: {
                categories: []
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                series: {
                    marker: {
                        fillColor: '#FFFFFF',
                        lineWidth: 1,
                        radius: 3,
                        lineColor: null // inherit from series
                    }
                }
            },
            yAxis: {
                title: {
                    text: '[m]'
                }
            },
            series: [{
                data: []
            },{
                data: []
            }]
        };


        var bottomleft = $.get(window.location.origin + '/F5.1/lake_ice.csv', function (data) {
            var lines = data.split('\n');
            $.each(lines, function (lineNo, line) {
                var items = line.split(',');
                if (lineNo === 0) {


                    var categories = line.split(',');
                    $.each(categories, function (catNo, cat) {
                        console.log(cat);
                        bottomleft_catarray.push(cat);
                    });

                } else {

                    var series = {
                        data: []
                    };



                    var year = items[0];
                    bottomleft_options.xAxis.categories.push(year);
                    var one = parseFloat(items[1]);
                    var two = parseFloat(items[2]);
                    bottomleft_options.series[0].name = bottomleft_catarray[1];
                    bottomleft_options.series[0].color = '#009b0d';
                    bottomleft_options.series[0].data.push([year, one]);
                    bottomleft_options.series[1].name = bottomleft_catarray[2];
                    bottomleft_options.series[1].color = '#9b0e00';
                    bottomleft_options.series[1].data.push([year, two]);
                }
            });

            var bottomleft_chart = new Highcharts.Chart(bottomleft_options);
        });

        var bottomright_catarray = [];

        var bottomright_options = {
            chart: {
                renderTo: 'chartdiv4'
            },
            title: {
                text: 'Annual River Discharge to Arctic'
            },
            xAxis: {
                categories: []
            },

            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                series: {
                    marker: {
                        fillColor: '#FFFFFF',
                        lineWidth: 1,
                        radius: 3,
                        lineColor: null // inherit from series
                    }
                }
            },
            yAxis: {
                title: {
                    text: '[10³ km³]'
                }
            },
            series: [{
                data: []
            },{
                data: []

            }]
        };


        var bottomright = $.get(window.location.origin + '/F5.1/river_discharge.csv', function (data) {
            var lines = data.split('\n');
            $.each(lines, function (lineNo, line) {
                var items = line.split(',');
                if (lineNo === 0) {


                    var categories = line.split(',');
                    $.each(categories, function (catNo, cat) {
                        console.log(cat);
                        bottomright_catarray.push(cat);
                    });

                } else {

                    var series = {
                        data: []
                    };



                    var year = items[0];
                    bottomright_options.xAxis.categories.push(year);
                    var one = parseFloat(items[1]);
                    var two = parseFloat(items[2]);
                    bottomright_options.series[0].name = bottomright_catarray[1];
                    bottomright_options.series[0].color = '#009b0d';
                    bottomright_options.series[0].data.push([year, one]);
                    bottomright_options.series[1].name = bottomright_catarray[2];
                    bottomright_options.series[1].color = '#9b0e00';
                    bottomright_options.series[1].data.push([year, two]);
                }
            });

            var bottomright_chart = new Highcharts.Chart(bottomright_options);
        });

    });

</script>
