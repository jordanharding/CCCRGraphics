<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-12">
            <h1>Figure: <?= $get_figure ?></h1>

            this data has over 800,000 data points, loading from csv is not feasible, the only way to render this chart quickly is to downscale the data using a dataloader via database.
            <div id="chartdiv"></div>
        </div>
    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/boost-canvas.js"></script>
<script src="https://code.highcharts.com/modules/boost.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script>

    Highcharts.chart('chartdiv', {
        chart: {
            type: 'column',
            zoomType: 'x'
        },

        boost: {
            useGPUTranslations: true
        },
        title: {
            text: ''
        },

        data: {
            csvURL: window.location.origin + '/F7.19/parsed.csv',
            parsed: function(columns) {
                var newColumns = [];
                Highcharts.each(columns, function(c, j) {
                    newColumns.push([]);
                    Highcharts.each(c, function(p, i) {
                        //console.log(p);
                        newColumns[j].push(parseFloat(p) || null)
                    })
                });
                this.columns = newColumns;
            }
        },
        xAxis: {
            type: 'datetime',
            title: {
                text: 'Dates'
            },
            "labels": {
                "format": "{value:%Y-%m-%d}"
            }
        },
        yAxis: {
            title: {
                text: 'Meters above chart datum'
            }
        },
        plotOptions:{
            series:{
                connectNulls:true,
                turboThreshold: 1
            }
        },
    });

</script>
