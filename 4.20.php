<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-12">
            <h1>Figure: <?= $get_figure ?></h1>
            <div id="chartdiv26"></div>
            <div id="chartdiv45"></div>
            <div id="chartdiv85"></div>
        </div>
    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script>

    var rcp26ranges10 = [
            ["1986-2005", 10, 10],
            ["2016-2035", 6.95175, 8.226699],
            ["2046-2065", 5.94626, 7.592641],
            ["2081-2100", 6.138349, 7.540551]
        ],
        rcp26averages10 = [
            ["1986-2005", 10],
            ["2016-2035", 7.370648],
            ["2046-2065", 6.813833],
            ["2081-2100", 7.032315]
        ],
        rcp26ranges20 = [
            ["1986-2005", 20, 20],
            ["2016-2035", 13.20029, 15.87905],
            ["2046-2065", 10.7532, 14.46925],
            ["2081-2100", 10.95954, 14.59064]
        ],
        rcp26averages20 = [
            ["1986-2005", 20],
            ["2016-2035", 14.26733],
            ["2046-2065", 13.21746],
            ["2081-2100", 12.9498]
        ],
        rcp26ranges50 = [
            ["1986-2005", 50, 50],
            ["2016-2035", 30.17702, 37.1375],
            ["2046-2065", 24.14273, 33.99439],
            ["2081-2100", 23.47608, 36.06142]
        ],
        rcp26averages50 = [
            ["1986-2005", 50],
            ["2016-2035", 34.66853],
            ["2046-2065", 30.65203],
            ["2081-2100", 30.66176]
        ];


    var rcp45ranges10 = [
            ["1986-2005", 10, 10],
            ["2016-2035", 7.206443, 8.017693],
            ["2046-2065", 5.596905, 6.679194],
            ["2081-2100", 4.910935, 6.083022]
        ],
        rcp45averages10 = [
            ["1986-2005", 10],
            ["2016-2035", 7.5432],
            ["2046-2065", 5.995105],
            ["2081-2100", 5.331378]
        ],
        rcp45ranges20 = [
            ["1986-2005", 20, 20],
            ["2016-2035", 13.63901, 15.47913],
            ["2046-2065", 10.15534, 12.66318],
            ["2081-2100", 8.841315, 10.937638]
        ],
        rcp45averages20 = [
            ["1986-2005", 20],
            ["2016-2035", 14.37801],
            ["2046-2065", 11.2456],
            ["2081-2100", 9.629896]
        ],
        rcp45ranges50 = [
            ["1986-2005", 50, 50],
            ["2016-2035", 31.27406, 36.78302],
            ["2046-2065", 22.46725, 29.61159],
            ["2081-2100", 19.18791, 24.17091]
        ],
        rcp45averages50 = [
            ["1986-2005", 50],
            ["2016-2035", 33.83752],
            ["2046-2065", 25.9082],
            ["2081-2100", 21.20198]
        ];


    var rcp85ranges10 = [
            ["1986-2005", 10, 10],
            ["2016-2035", 6.821162, 7.934995],
            ["2046-2065", 4.73933, 5.4162],
            ["2081-2100", 2.991196, 3.711042]
        ],
        rcp85averages10 = [
            ["1986-2005", 10],
            ["2016-2035", 7.362231],
            ["2046-2065", 5.073068],
            ["2081-2100", 3.379197]
        ],
        rcp85ranges20 = [
            ["1986-2005", 20, 20],
            ["2016-2035", 12.68933, 15.37397],
            ["2046-2065", 8.297236, 9.874147],
            ["2081-2100", 4.800076, 6.050482]
        ],
        rcp85averages20 = [
            ["1986-2005", 20],
            ["2016-2035", 13.87156],
            ["2046-2065", 8.944941],
            ["2081-2100", 5.623722]
        ],
        rcp85ranges50 = [
            ["1986-2005", 50, 50],
            ["2016-2035", 28.96613, 37.37281],
            ["2046-2065", 17.06655, 22.49466],
            ["2081-2100", 9.149894, 12.515886]
        ],
        rcp85averages50 = [
            ["1986-2005", 50],
            ["2016-2035", 32.82727],
            ["2046-2065", 19.47291],
            ["2081-2100", 11.230221]
        ];


    Highcharts.chart('chartdiv26', {

        title: {
            text: '24-Hour Precipitation Extremes (RCP 2.6)'
        },

        subtitle: {
            text: 'Canada'
        },

        xAxis: {
            type: 'category'
        },

        yAxis: {
            type: 'logarithmic',
            title: {
                text: 'Recurrence Time (years)'
            }
        },

        tooltip: {
            crosshairs: false,

            valueDecimals: 2,
            shared: true,
            valueSuffix: ' Years'
            // formatter: function() {
            //     var text = '<b>' + this.points[0].key + '</b>';
            //     console.log(this.points);
            //     text += '<br/> Min: '+ this.points[1].point.low;
            //     text += '<br/> Max: '+ this.points[1].point.high;
            //     text += '<br/> Max: '+ this.points[2].point.high;
            //     return text;
            // }
        },

        legend: {},

        series: [
            {
                name: 'RP10(50%)',
                data: rcp26averages10,
                zIndex: 1,
                dashStyle: 'Dash',
                color: '#0000FF',
                lineColor: '#0000FF',
                marker: {
                    lineWidth: 1,
                    fillColor: '#0000FF',
                    lineColor: '#0000FF'
                }
            }, {

                name: 'RP10(25% - 75%)',
                data: rcp26ranges10,
                type: 'arearange',
                lineWidth: 0,
                linkedTo: ':previous',
                color: '#0000FF',
                fillOpacity: 0.3,
                zIndex: 0,

                marker: {
                    lineWidth: 0,
                    radius: 0
                }
            }, {
                name: 'RP20(50%)',
                data: rcp26averages20,
                zIndex: 1,
                dashStyle: 'Dash',
                color: '#00FF00',
                lineColor: '#00FF00',
                marker: {
                    fillColor: '#00FF00',
                    lineWidth: 1,
                    lineColor: '#00FF00'
                }
            }, {

                name: 'RP20(25% - 75%)',
                data: rcp26ranges20,
                type: 'arearange',
                lineWidth: 0,
                linkedTo: ':previous',
                color: '#00FF00',
                fillOpacity: 0.3,
                zIndex: 0,
                marker: {
                    lineWidth: 0,
                    radius: 0
                }
            }, {
                name: 'RP50(50%)',
                data: rcp26averages50,
                zIndex: 1,
                dashStyle: 'Dash',
                color: '#FF0000',
                lineColor: '#FF0000',
                marker: {
                    lineWidth: 5,
                    fillColor: '#FF0000',
                    lineColor: '#FF0000'
                }
            }, {
                name: 'RP50(25% - 75%)',
                data: rcp26ranges50,
                type: 'arearange',
                lineWidth: 0,
                linkedTo: ':previous',
                color: '#FF0000',
                fillOpacity: 0.3,
                zIndex: 0,
                marker: {
                    lineWidth: 0,
                    radius: 0
                }
            }]
    });


    Highcharts.chart('chartdiv45', {

        title: {
            text: '24-Hour Precipitation Extremes (RCP 4.5)'
        },

        subtitle: {
            text: 'Canada'
        },

        xAxis: {
            type: 'category'
        },

        yAxis: {
            type: 'logarithmic',
            title: {
                text: 'Recurrence Time (years)'
            }
        },

        tooltip: {
            crosshairs: false,

            valueDecimals: 2,
            shared: true,
            valueSuffix: ' Years'
            // formatter: function() {
            //     var text = '<b>' + this.points[0].key + '</b>';
            //     console.log(this.points);
            //     text += '<br/> Min: '+ this.points[1].point.low;
            //     text += '<br/> Max: '+ this.points[1].point.high;
            //     text += '<br/> Max: '+ this.points[2].point.high;
            //     return text;
            // }
        },

        legend: {},

        series: [
            {
                name: 'RP10(50%)',
                data: rcp45averages10,
                zIndex: 1,
                dashStyle: 'Dash',
                color: '#0000FF',
                lineColor: '#0000FF',
                marker: {
                    lineWidth: 1,
                    fillColor: '#0000FF',
                    lineColor: '#0000FF'
                }
            }, {

                name: 'RP10(25% - 75%)',
                data: rcp45ranges10,
                type: 'arearange',
                lineWidth: 0,
                linkedTo: ':previous',
                color: '#0000FF',
                fillOpacity: 0.3,
                zIndex: 0,

                marker: {
                    lineWidth: 0,
                    radius: 0
                }
            }, {
                name: 'RP20(50%)',
                data: rcp45averages20,
                zIndex: 1,
                dashStyle: 'Dash',
                color: '#00FF00',
                lineColor: '#00FF00',
                marker: {
                    fillColor: '#00FF00',
                    lineWidth: 1,
                    lineColor: '#00FF00'
                }
            }, {

                name: 'RP20(25% - 75%)',
                data: rcp45ranges20,
                type: 'arearange',
                lineWidth: 0,
                linkedTo: ':previous',
                color: '#00FF00',
                fillOpacity: 0.3,
                zIndex: 0,
                marker: {
                    lineWidth: 0,
                    radius: 0
                }
            }, {
                name: 'RP50(50%)',
                data: rcp45averages50,
                zIndex: 1,
                dashStyle: 'Dash',
                color: '#FF0000',
                lineColor: '#FF0000',
                marker: {
                    lineWidth: 5,
                    fillColor: '#FF0000',
                    lineColor: '#FF0000'
                }
            }, {
                name: 'RP50(25% - 75%)',
                data: rcp45ranges50,
                type: 'arearange',
                lineWidth: 0,
                linkedTo: ':previous',
                color: '#FF0000',
                fillOpacity: 0.3,
                zIndex: 0,
                marker: {
                    lineWidth: 0,
                    radius: 0
                }
            }]
    });


    Highcharts.chart('chartdiv85', {

        title: {
            text: '24-Hour Precipitation Extremes (RCP 8.5)'
        },

        subtitle: {
            text: 'Canada'
        },

        xAxis: {
            type: 'category'
        },

        yAxis: {
            type: 'logarithmic',
            title: {
                text: 'Recurrence Time (years)'
            }
        },

        tooltip: {
            crosshairs: false,

            valueDecimals: 2,
            shared: true,
            valueSuffix: ' Years'
            // formatter: function() {
            //     var text = '<b>' + this.points[0].key + '</b>';
            //     console.log(this.points);
            //     text += '<br/> Min: '+ this.points[1].point.low;
            //     text += '<br/> Max: '+ this.points[1].point.high;
            //     text += '<br/> Max: '+ this.points[2].point.high;
            //     return text;
            // }
        },

        legend: {},

        series: [
            {
                name: 'RP10(50%)',
                data: rcp85averages10,
                zIndex: 1,
                dashStyle: 'Dash',
                color: '#0000FF',
                lineColor: '#0000FF',
                marker: {
                    lineWidth: 1,
                    fillColor: '#0000FF',
                    lineColor: '#0000FF'
                }
            }, {

                name: 'RP10(25% - 75%)',
                data: rcp85ranges10,
                type: 'arearange',
                lineWidth: 0,
                linkedTo: ':previous',
                color: '#0000FF',
                fillOpacity: 0.3,
                zIndex: 0,

                marker: {
                    lineWidth: 0,
                    radius: 0
                }
            }, {
                name: 'RP20(50%)',
                data: rcp85averages20,
                zIndex: 1,
                dashStyle: 'Dash',
                color: '#00FF00',
                lineColor: '#00FF00',
                marker: {
                    fillColor: '#00FF00',
                    lineWidth: 1,
                    lineColor: '#00FF00'
                }
            }, {

                name: 'RP20(25% - 75%)',
                data: rcp85ranges20,
                type: 'arearange',
                lineWidth: 0,
                linkedTo: ':previous',
                color: '#00FF00',
                fillOpacity: 0.3,
                zIndex: 0,
                marker: {
                    lineWidth: 0,
                    radius: 0
                }
            }, {
                name: 'RP50(50%)',
                data: rcp85averages50,
                zIndex: 1,
                dashStyle: 'Dash',
                color: '#FF0000',
                lineColor: '#FF0000',
                marker: {
                    lineWidth: 5,
                    fillColor: '#FF0000',
                    lineColor: '#FF0000'
                }
            }, {
                name: 'RP50(25% - 75%)',
                data: rcp85ranges50,
                type: 'arearange',
                lineWidth: 0,
                linkedTo: ':previous',
                color: '#FF0000',
                fillOpacity: 0.3,
                zIndex: 0,
                marker: {
                    lineWidth: 0,
                    radius: 0
                }
            }]
    });

</script>
