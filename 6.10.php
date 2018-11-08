<h1>Figure: <?= $get_figure ?></h1>
<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-12">Please specify which columns belong to which groups.

            <br><br>

            <pre>

Lake michhur				Monthly averages (mm)
month   GLERL	aey	aez	afa	aet	aev	agx	ahi	agw
	1	2.9	9.6	12.6	8.9	9.9	17.3	-5.0	-6.3
	2	18.7	23.0	20.9	7.3	26.0	2.2	19.8	4.4
	3	38.0	20.0	34.2	29.3	37.5	12.4	-3.4	10.5
	4	0.1	0.1	-4.4	-14.6	16.9	-2.3	-28.6	3.4
	5	13.2	14.3	17.7	17.7	33.8	27.2	7.1	14.8
	6	-10.6	-3.3	-11.2	-0.2	-11.3	-9.7	7.3	-11.9
	7	-38.5	-39.7	-36.4	-18.8	-47.0	-0.2	-2.4	-17.5
	8	-32.1	-36.7	-42.9	-30.1	-36.7	-17.9	-16.1	-17.5
	9	-29.4	-11.2	-26.6	-32.1	-19.1	-15.6	-21.3	-13.5
	10	5.3	-4.9	-3.6	-11.2	-14.0	-5.3	-15.3	-11.3
	11	8.2	6.8	24.1	-9.5	-0.4	-0.8	-2.5	-4.0
	12	12.1	-0.8	15.9	24.6	7.1	-2.3	-5.0	0.2

	Total	-12.0	-22.9	0.4	-28.6	2.9	5.0	-65.5	-48.7


            </pre>

            <img src="F6.10/Figure 6.10.png" width="100%">

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
                renderTo: 'chartdiv'
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
                pointStart: Date.UTC(1976, 05, 15),
                pointInterval: 31* 24 * 3600 * 1000 // one day
            }]
        };


        var topleft = $.get(window.location.origin + '/F2.7/co2test.csv', function (data) {
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


    var bottomright = $.get(window.location.origin + '/F2.7/co2test.csv', function (data) {
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
