/*
Template Name: Vuesy - Admin & Dashboard Template
Author: Themesdesign
Website: https://Themesdesign.in/
Contact: themesdesign.in@gmail.com
File: profile init js
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



var barchartColors = getChartColorsArray("overview-chart");
var options = {

    chart: {
    height: 270,
    type: 'bar',
    toolbar: {
        show: false,
    }
    },
    plotOptions: {
    bar: {
        columnWidth: '20%',
        endingShape: 'rounded',
        borderRadius: 6
    }
    },
    dataLabels: {
    enabled: false
    },

    fill: {
        opacity: 1,
      },

    series: [{
    name: 'Overview',
    data: [52, 66, 50, 74, 36, 52, 66]
    }],
    grid: {
        yaxis: {
            lines: {
                show: false,
            }
        }
    },
    yaxis: {
        labels: {
            formatter: function (value) {
                return value + "hrs";
            }
        },
        title: {
            text: '% (Percentage)'
        }
    },
    xaxis: {
        labels: {
            rotate: -90
        },
        categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        title: {
                text: 'Week',
        }
    },
    colors: barchartColors,

    }

    var chart = new ApexCharts(
    document.querySelector("#overview-chart"),
    options
    );

    chart.render();