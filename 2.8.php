<h1>Figure: <?= $get_figure ?></h1>
<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-12">No data provided, only pictures, not sure what to do here.
            <br><br>

            <img src="F2.8/CCCR Fig 2.8_source 1_IPCCFigTS-06.jpg" width="100%">
            <img src="F2.8/CCCR Fig 2.8_source 2_IPCCFig8-15.jpg" width="100%">
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
                text: 'Temperature'
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        Highcharts.dateFormat('%b %e, %Y',
                            new Date(this.x))
                        + '  <br/>' + this.y + ' .';
                }
            },
            xAxis: {
                type: 'datetime'
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
                    text: 'Temperature (°C)'
                }
            },
            series: [{
                data: [],
                pointStart: Date.UTC(2011, 10, 1),
                pointInterval: 24 * 3600 * 1000 // one day
            }]
        };


        var topleft = $.get(window.location.origin + '/F6.7/6.7a.csv', function (data) {
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
                    var one = parseFloat(items[1]);
                    topleft_options.series[0].name = topleft_catarray[1];
                    topleft_options.series[0].color = '#009b0d';
                    topleft_options.series[0].data.push([year, one]);
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
                text: 'Temperature'
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        Highcharts.dateFormat('%b %e, %Y',
                            new Date(this.x))
                        + '  <br/>' + this.y + ' .';
                }
            },
            xAxis: {
                type: 'datetime'
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
                    text: 'Temperature (°C)'
                }
            },
            series: [{
                data: [],
                pointStart: Date.UTC(2011, 10, 1),
                pointInterval: 24 * 3600 * 1000 // one day
            }]
        };


        var topright = $.get(window.location.origin + '/F6.7/6.7b.csv', function (data) {
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
                    var one = parseFloat(items[1]);
                    topright_options.series[0].name = topright_catarray[1];
                    topright_options.series[0].color = '#009b0d';
                    topright_options.series[0].data.push([year, one]);
                }
            });

            var topright_chart = new Highcharts.Chart(topright_options);
        });

    });


    var bottomleft_catarray = [];

    var bottomleft_options = {
        chart: {
            renderTo: 'chartdiv3'
        },
        title: {
            text: 'Temperature'
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    Highcharts.dateFormat('%b %e, %Y',
                        new Date(this.x))
                    + '  <br/>' + this.y + ' .';
            }
        },
        xAxis: {
            type: 'datetime'
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
                text: 'Temperature (°C)'
            }
        },
        series: [{
            data: [],
            pointStart: Date.UTC(2011, 10, 1),
            pointInterval: 24 * 3600 * 1000 // one day
        }]
    };


    var bottomleft = $.get(window.location.origin + '/F6.7/6.7c.csv', function (data) {
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
                var one = parseFloat(items[1]);
                bottomleft_options.series[0].name = bottomleft_catarray[1];
                bottomleft_options.series[0].color = '#009b0d';
                bottomleft_options.series[0].data.push([year, one]);
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
            text: 'Temperature'
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    Highcharts.dateFormat('%b %e, %Y',
                        new Date(this.x))
                    + '  <br/>' + this.y + ' .';
            }
        },
        xAxis: {
            type: 'datetime'
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
                text: 'Temperature (°C)'
            }
        },
        series: [{
            data: [],
            pointStart: Date.UTC(2011, 10, 1),
            pointInterval: 24 * 3600 * 1000 // one day
        }]
    };


    var bottomright = $.get(window.location.origin + '/F6.7/6.7d.csv', function (data) {
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
                var one = parseFloat(items[1]);
                bottomright_options.series[0].name = bottomright_catarray[1];
                bottomright_options.series[0].color = '#009b0d';
                bottomright_options.series[0].data.push([year, one]);
            }
        });

        var bottomright_chart = new Highcharts.Chart(bottomright_options);
    });


</script>
