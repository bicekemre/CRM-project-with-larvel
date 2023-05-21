/*
Template Name: Vuesy - Admin & Dashboard Template
Author: Themesdesign
Website: https://Themesdesign.in/
Contact: themesdesign.in@gmail.com
File: file manager Init Js File
*/

// get colors array from the string
function getChartColorsArray(chartId) {
    console.log(chartId);
    if (document.getElementById(chartId) !== null) {
        var colors = document.getElementById(chartId).getAttribute("data-colors");
        colors = JSON.parse(colors);
        return colors.map(function (value) {
            var newValue = value.replace(" ", "");
            if (newValue.indexOf(",") === -1) {
                var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
                if (color) return color; else return newValue;;
            } else {
                var val = value.split(',');
                if(val.length == 2){
                    var rgbaColor = getComputedStyle(document.documentElement).getPropertyValue(val[0]);
                    rgbaColor = "rgba("+rgbaColor+","+val[1]+")";
                    return rgbaColor;
                } else {
                    return newValue;
                }
            }
        });
    }
}


var chartBarColors = getChartColorsArray("radial-chart");
var options = {
    series: [76],
    chart: {
        height: 250,
        type: 'radialBar',
        sparkline: {
            enabled: true
        }
    },
    colors: chartBarColors,
    plotOptions: {
        radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: {
                background: "#e7e7e7",
                strokeWidth: '90%',
                margin: 5, // margin is in pixels

            },

            hollow: {
                size: '65%',
            },

            dataLabels: {
                name: {
                    show: false
                },
                value: {
                    offsetY: -2,
                    fontSize: '16px'
                }
            }
        }
    },
    grid: {
        padding: {
            top: -10
        }
    },

    labels: ['Storage'],
};
var chart = new ApexCharts(document.querySelector("#radial-chart"), options);
chart.render();