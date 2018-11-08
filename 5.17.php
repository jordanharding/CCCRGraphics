<h1>Figure: <?= $get_figure ?></h1>
<div class="container" style="margin-top:30px">


    <div class="row">
        <div class="col-sm-12">
            <div id="chartdiv1"></div>
            <div id="chartdiv2"></div>
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
                text: ''
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
                    text: 'Temperature °C'
                }
            },
            series: [{
                data: []
            },{
                data: []
            },{
                data: []
            },{
                data: []
            },{
                data: []
            }]
        };


        var topleft = $.get(window.location.origin + '/F5.17/Fig5_17a.csv', function (data) {
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
                    var four = parseFloat(items[4]);
                    var five = parseFloat(items[5]);
                    topleft_options.series[0].name = topleft_catarray[1];
                    topleft_options.series[0].color = '#009b0d';
                    topleft_options.series[0].data.push([year, one]);
                    topleft_options.series[1].name = topleft_catarray[2];
                    topleft_options.series[1].color = '#9b0e00';
                    topleft_options.series[1].data.push([year, two]);
                    topleft_options.series[2].name = topleft_catarray[3];
                    topleft_options.series[2].color = '#030d9b';
                    topleft_options.series[2].data.push([year, three]);
                    topleft_options.series[3].name = topleft_catarray[4];
                    topleft_options.series[3].color = '#9b0b69';
                    topleft_options.series[3].data.push([year, four]);
                    topleft_options.series[4].name = topleft_catarray[5];
                    topleft_options.series[4].color = '#00909b';
                    topleft_options.series[4].data.push([year, five]);
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
                text: ''
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
                    text: 'Temperature °C'
                }
            },
            series: [{
                data: []
            },{
                data: []
            },{
                data: []
            },{
                data: []
            },{
                data: []
            },{
                data: []
            },{
                data: []
            },{
                data: []
            }]
        };


        var topright = $.get(window.location.origin + '/F5.17/Fig5_17b.csv', function (data) {
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
                    var four = parseFloat(items[4]);
                    var five = parseFloat(items[5]);
                    var six = parseFloat(items[6]);
                    var seven = parseFloat(items[7]);
                    var eight = parseFloat(items[8]);
                    topright_options.series[0].name = topright_catarray[1];
                    topright_options.series[0].color = '#009b0d';
                    topright_options.series[0].data.push([year, one]);
                    topright_options.series[1].name = topright_catarray[2];
                    topright_options.series[1].color = '#9b0e00';
                    topright_options.series[1].data.push([year, two]);
                    topright_options.series[2].name = topright_catarray[3];
                    topright_options.series[2].color = '#00909b';
                    topright_options.series[2].data.push([year, three]);
                    topright_options.series[3].name = topright_catarray[4];
                    topright_options.series[3].color = '#030d9b';
                    topright_options.series[3].data.push([year, four]);
                    topright_options.series[4].name = topright_catarray[5];
                    topright_options.series[4].color = '#b16921';
                    topright_options.series[4].data.push([year, five]);
                    topright_options.series[5].name = topright_catarray[6];
                    topright_options.series[5].color = '#9b2e91';
                    topright_options.series[5].data.push([year, six]);
                    topright_options.series[6].name = topright_catarray[7];
                    topright_options.series[6].color = '#5c419b';
                    topright_options.series[6].data.push([year, seven]);
                    topright_options.series[7].name = topright_catarray[8];
                    topright_options.series[7].color = '#9b9819';
                    topright_options.series[7].data.push([year, eight]);
                }
            });

            var topright_chart = new Highcharts.Chart(topright_options);
        });


    });

</script>
