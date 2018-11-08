<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-12">
            <h1>Figure: <?= $get_figure ?></h1>
            <div id="chartdiv"></div>
        </div>
    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script>

    var ranges = [
            ["1991",8.3,-7.4],
            ["1992",8.4,-4.7],
            ["1993",10.4,-5.1],
            ["1994",11.8,-4.2],
            ["1995",10.6,-2.8],
            ["1996",4.9,-3.6],
            ["1997",11.9,-1.7],
            ["1998",15.5,1.6],
            ["1999",8,-0.3],
            ["2000",1.8,-6.8],
            ["2001",1.5,-4.1],
            ["2002",1.8,-7.1],
            ["2003",0.9,-5.6],
            ["2004",-2,-7.3],
            ["2005",-0.3,-9.1],
            ["2006",4.7,-0.5],
            ["2007",1.3,-3.2],
            ["2008",-0.6,-6.4],
            ["2009",3.3,-3.8],
            ["2010",4.2,-1.3],
            ["2011",5.8,-0.8],
            ["2012",11.8,1],
            ["2013",11.1,-2.8],
            ["2014",8.4,-1.8],
            ["2015",10,-0.8],
            ["2016",15.1,-2.6]
        ],
        lines = [
            ["1991", 0.4],
            ["1992", 1.9],
            ["1993", 2.7],
            ["1994", 3.8],
            ["1995", 3.9],
            ["1996", 0.7],
            ["1997", 5.1],
            ["1998", 8.5],
            ["1999", 3.9],
            ["2000", -2.5],
            ["2001", -1.3],
            ["2002", -2.6],
            ["2003", -2.3],
            ["2004", -4.6],
            ["2005", -4.7],
            ["2006", 2.1],
            ["2007", -1],
            ["2008", -3.5],
            ["2009", -0.2],
            ["2010", 1.5],
            ["2011", 2.5],
            ["2012", 6.4],
            ["2013", 4.2],
            ["2014", 3.3],
            ["2015", 4.6],
            ["2016", 6.3]
        ];






    Highcharts.chart('chartdiv', {

        title: {
            text: 'Departure'
        },

        xAxis: {
            type: 'category'
        },

        yAxis: {
            title: {
                text: 'Departure (%)'
            }
        },

        tooltip: {
            crosshairs: false,
            valueDecimals: 2,
            shared: true,
            valueSuffix: '%'
        },

        legend: {},

        series: [
            {
                name: 'Average Departure from 2003-2012 Mean',
                data: lines,
                zIndex: 1,
                color: '#4F81BD',
                lineColor: '#4F81BD',
                marker: {
                    lineWidth: 2,
                    symbol: 'square',
                    radius: 3,
                    fillColor: '#4F81BD',
                    lineColor: '#4F81BD'
                }
            }, {

                name: 'Standard Deviation',
                data: ranges,
                type: 'arearange',
                dashStyle: 'dot',
                lineWidth: 1.5,
                linkedTo: ':previous',
                color: '#000',
                fillOpacity: 0,
                zIndex: 0,

                marker: {
                    lineWidth: 0,
                    radius: 0
                }
            }]
    });


</script>
