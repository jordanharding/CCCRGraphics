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
            ["2016-2035", 3.561365, 6.093307],
            ["2046-2065", 2.382192, 4.903873],
            ["2081-2100", 2.692405, 5.432537]
        ],
        rcp26averages10 = [
            ["1986-2005", 10],
            ["2016-2035", 4.046935],
            ["2046-2065", 3.564028],
            ["2081-2100", 3.763829]
        ],
        rcp26ranges20 = [
            ["1986-2005", 20, 20],
            ["2016-2035", 5.932472, 10.267024],
            ["2046-2065", 3.577068, 8.828817],
            ["2081-2100", 4.076127, 9.696565]
        ],
        rcp26averages20 = [
            ["1986-2005", 20],
            ["2016-2035", 6.541041],
            ["2046-2065", 5.428394],
            ["2081-2100", 6.19311]
        ],
        rcp26ranges50 = [
            ["1986-2005", 50, 50],
            ["2016-2035", 11.71546, 22.13218],
            ["2046-2065", 6.213294, 20.780919],
            ["2081-2100", 6.901182, 17.950699]
        ],
        rcp26averages50 = [
            ["1986-2005", 50],
            ["2016-2035", 14.69276],
            ["2046-2065", 10.221622],
            ["2081-2100", 11.53809]
        ];



    var rcp45ranges10 = [
            ["1986-2005", 10, 10],
            ["2016-2035", 3.676541, 5.013533],
            ["2046-2065", 1.877398, 3.266516],
            ["2081-2100", 1.493589, 3.046813]
        ],
        rcp45averages10 = [
            ["1986-2005", 10],
            ["2016-2035", 4.142871],
            ["2046-2065", 2.49836],
            ["2081-2100", 2.10078]
        ],
        rcp45ranges20 = [
            ["1986-2005", 20, 20],
            ["2016-2035", 6.030728, 9.015305],
            ["2046-2065", 2.74805, 5.304176],
            ["2081-2100", 1.976927, 4.854367]
        ],
        rcp45averages20 = [
            ["1986-2005", 20],
            ["2016-2035", 7.076199],
            ["2046-2065", 3.558605],
            ["2081-2100", 2.930375]
        ],
        rcp45ranges50 = [
            ["1986-2005", 50, 50],
            ["2016-2035", 10.79827, 19.13274],
            ["2046-2065", 4.656077, 10.038303],
            ["2081-2100", 2.906115, 8.562261]
        ],
        rcp45averages50 = [
            ["1986-2005", 50],
            ["2016-2035", 14.51843],
            ["2046-2065", 6.160638],
            ["2081-2100", 4.928925]
        ];



    var rcp85ranges10 = [
            ["1986-2005", 10, 10],
            ["2016-2035", 3.339442, 4.590021],
            ["2046-2065", 1.426064, 2.525514],
            ["2081-2100", 1.014925, 1.330198]
        ],
        rcp85averages10 = [
            ["1986-2005", 10],
            ["2016-2035", 3.81113],
            ["2046-2065", 1.707669],
            ["2081-2100", 1.077084]
        ],
        rcp85ranges20 = [
            ["1986-2005", 20, 20],
            ["2016-2035", 5.199376, 8.159927],
            ["2046-2065", 1.880408, 3.602874],
            ["2081-2100", 1.043514, 1.598105]
        ],
        rcp85averages20 = [
            ["1986-2005", 20],
            ["2016-2035", 6.230678],
            ["2046-2065", 2.245584],
            ["2081-2100", 1.170821]
        ],
        rcp85ranges50 = [
            ["1986-2005", 50, 50],
            ["2016-2035", 9.406684, 16.626052],
            ["2046-2065", 2.703189, 5.800275],
            ["2081-2100", 1.107074, 2.042311]
        ],
        rcp85averages50 = [
            ["1986-2005", 50],
            ["2016-2035", 12.077441],
            ["2046-2065", 3.2977],
            ["2081-2100", 1.327656]
        ];


    Highcharts.chart('chartdiv26', {

        title: {
            text: 'Annual Maximum Temperature (RCP 2.6)'
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
            text: 'Annual Maximum Temperature (RCP 4.5)'
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
            text: 'Annual Maximum Temperature (RCP 8.5)'
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
