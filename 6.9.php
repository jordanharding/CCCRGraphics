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
<script src="regression.js"></script>

<script>

    $(document).ready(function () {

        var options = {
            chart: {
                type: 'line',
                zoomType: 'x'
            },

            plotOptions: {
                series: {
                    lineWidth: 0.5
                }
            },

            xAxis: {
                type: 'datetime',
                categories: []
            },
            tooltip: {
                valueDecimals: 2,
                shared: true,
                valueSuffix: 'mm'
            },
            title: {
                text: 'Lake Superior'
            },
            yAxis: {
                title: {
                    text: 'Units'
                }
            },
            series: []
        };

        $.get('/csvs/6.9a.csv', function (data) {
            // Split the lines
            var lines = data.split('\n');

            // Iterate over the lines and add categories or series
            $.each(lines, function (lineNo, line) {
                var items = line.split(',');


                // header line contains categories
                if (lineNo === 0) {



                    $.each(items, function (itemNo, item) {

                        if (itemNo === 1) {
                            lc = '#346cbc';
                        }
                        if (itemNo === 2) {
                            lc = '#ff2a21';
                        }
                        if (itemNo === 3) {
                            lc = '#00640c';
                        }

                        if (itemNo > 0) {
                            options.series.push({
                                name: item,
                                id: item,
                                color: lc,
                                type: 'line',
                                data: []
                            });
                            options.series.push({
                                name: item + ' Trend',
                                id: item + 'Trend',
                                color: lc,
                                type: 'line',
                                data: []
                            });
                        }
                    });

                } else {
                    $.each(items, function (itemNo, item) {
                        if (itemNo === 1) {
                            seriesNo = 0
                        }
                        if (itemNo === 2) {
                            seriesNo = 2
                        }
                        if (itemNo === 3) {
                            seriesNo = 4
                        }
                        if (itemNo === 0) {
                            options.xAxis.categories.push(item);
                        } else if (parseFloat(item)) {
                            options.series[seriesNo].data.push(parseFloat(item));
                        } else if (item === "null") { /* adding nulls */
                            options.series[seriesNo].data.push(null);
                        }
                    });


                }
            });


            var chart = new Highcharts.Chart('chartdiv', options);


            /* add regression line dynamically */
            chart.series[1].update({
                type: 'line',
                name: 'Precipitation Trend',
                lineWidth: 1,
                linkedTo: 'Precipitation',
                marker: {enabled: false},
                /* function returns data for trend-line */
                data: (function () {
                    return fitOneDimensionalData(options.series[0].data);
                })()
            }, true); //true / false to redraw


            chart.series[3].update({
                type: 'line',
                name: 'Evaporation Trend',
                lineWidth: 1,
                linkedTo: 'Evaporation',
                marker: {enabled: false},
                /* function returns data for trend-line */
                data: (function () {
                    return fitOneDimensionalData(options.series[2].data);
                })()
            }, true); //true / false to redraw


            chart.series[5].update({
                name: 'Runoff Trend',
                lineWidth: 1,
                linkedTo: ':previous',
                marker: {enabled: false},
                /* function returns data for trend-line */
                data: (function () {
                    return fitOneDimensionalData(options.series[4].data);
                })()
            }, true); //true / false to redraw



        });


    });


    function fitOneDimensionalData(source_data) {
        var trend_source_data = [];
        for (var i = source_data.length; i-- > 0;) {
            trend_source_data[i] = [i, source_data[i]]
        }
        var regression_data = fitData(trend_source_data).data;
        var trend_line_data = [];
        for (var i = regression_data.length; i-- > 0;) {
            trend_line_data[i] = regression_data[i][1];
        }
        return trend_line_data;
    }

</script>
