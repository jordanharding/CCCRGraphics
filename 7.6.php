<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-12">
            <h1>Figure: <?= $get_figure ?></h1>
            <div id="chartdiv"></div>
        </div>
    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script>

    $(document).ready(function () {

        var catarray = [];

        var options = {
            chart: {
                renderTo: 'chartdiv',
                defaultSeriesType: 'line'
            },
            title: {
                text: ''
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
                data: []
            }, {
                data: []
            }, {
                data: []
            }]
        };


        var jqxhr = $.get(window.location.origin + '/F7.6/parsed.csv', function (data) {
            var lines = data.split('\n');



            $.each(lines, function (lineNo, line) {
                var items = line.split(',');
                if (lineNo === 0) {


                    var categories = line.split(',');
                    $.each(categories, function (catNo, cat) {
                        console.log(cat);
                        catarray.push(cat);
                    });

                } else {

                    var series = {
                        data: []
                    };
                    var year = items[0];
                    options.xAxis.categories.push(year);
                    var one = parseFloat(items[1]);
                    var two = parseFloat(items[2]);
                    var three = parseFloat(items[3]);
                    // if (!isNaN(one) && !isNaN(two) && !isNaN(three)) {
                        options.series[0].name = catarray[1];
                        options.series[0].color = '#009b0d';
                        options.series[0].data.push([year, one]);
                        options.series[1].name = catarray[2];
                        options.series[1].color = '#dc0200';
                        options.series[1].data.push([year, two]);
                        options.series[2].name = catarray[3];
                        options.series[2].color = '#1968ff';
                        options.series[2].data.push([year, three]);
                    // }
                }
            });

            var chart = new Highcharts.Chart(options);
        });


    });


</script>
