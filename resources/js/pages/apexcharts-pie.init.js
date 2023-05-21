/*
Template Name: Vuesy - Admin & Dashboard Template
Author: Themesdesign
Website: https://Themesdesign.in/
Contact: themesdesign.in@gmail.com
File: Pie Chart init js
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


//  Simple Pie Charts
var chartBarColors = getChartColorsArray("simple_pie_chart");
var options = {
  series: [44, 55, 13, 43, 22],
  chart: {
    height: 300,
    type: 'pie',
  },
  labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
  legend: {
    position: 'bottom'
  },
  dataLabels: {
    dropShadow: {
      enabled: false,
    }
  },
  colors: chartBarColors,
};

var chart = new ApexCharts(document.querySelector("#simple_pie_chart"), options);
chart.render();


// Simple Donut Charts
var chartBarColors = getChartColorsArray("simple_dount_chart");
var options = {
  series: [44, 55, 41, 17, 15],
  chart: {
    height: 300,
    type: 'donut',
  },
  legend: {
    position: 'bottom'
  },
  dataLabels: {
    dropShadow: {
      enabled: false,
    }
  },
  colors: chartBarColors,
};

var chart = new ApexCharts(document.querySelector("#simple_dount_chart"), options);
chart.render();

// Updating Donut Charts
var chartBarColors = getChartColorsArray("updating_donut_chart");
var options = {
  series: [44, 55, 13, 33],
  chart: {
    height: 280,
    type: 'donut',
  },
  dataLabels: {
    enabled: false
  },
  legend: {
    position: 'bottom'
  },
  colors: chartBarColors,
};

var upadatedonutchart = new ApexCharts(document.querySelector("#updating_donut_chart"), options);
upadatedonutchart.render();

function appendData() {
  var arr = upadatedonutchart.w.globals.series.slice()
  arr.push(Math.floor(Math.random() * (100 - 1 + 1)) + 1)
  return arr;
}

function removeData() {
  var arr = upadatedonutchart.w.globals.series.slice()
  arr.pop()
  return arr;
}

function randomize() {
  return upadatedonutchart.w.globals.series.map(function () {
    return Math.floor(Math.random() * (100 - 1 + 1)) + 1
  })
}

function reset() {
  return options.series
}

document.querySelector("#randomize").addEventListener("click", function () {
  upadatedonutchart.updateSeries(randomize())
})

document.querySelector("#add").addEventListener("click", function () {
  upadatedonutchart.updateSeries(appendData())
})

document.querySelector("#remove").addEventListener("click", function () {
  upadatedonutchart.updateSeries(removeData())
})

document.querySelector("#reset").addEventListener("click", function () {
  upadatedonutchart.updateSeries(reset())
})


// Gradient Donut Chart
var chartBarColors = getChartColorsArray("gradient_chart");
var options = {
  series: [44, 55, 41, 17, 15],
  chart: {
    height: 300,
    type: 'donut',
  },
  plotOptions: {
    pie: {
      startAngle: -90,
      endAngle: 270
    }
  },
  dataLabels: {
    enabled: false
  },
  fill: {
    type: 'gradient',
  },
  legend: {
    formatter: function (val, opts) {
      return val + " - " + opts.w.globals.series[opts.seriesIndex]
    }
  },
  title: {
    text: 'Gradient Donut with custom Start-angle',
    style: {
      fontWeight: 500,
    },
  },
  legend: {
    position: 'bottom'
  },
  colors: chartBarColors,
};

var chart = new ApexCharts(document.querySelector("#gradient_chart"), options);
chart.render();

// Pattern Donut chart
var chartBarColors = getChartColorsArray("pattern_chart");
var options = {
  series: [44, 55, 41, 17, 15],
  chart: {
    height: 300,
    type: 'donut',
    dropShadow: {
      enabled: true,
      color: '#111',
      top: -1,
      left: 3,
      blur: 3,
      opacity: 0.2
    }
  },
  stroke: {
    width: 0,
  },
  plotOptions: {
    pie: {
      donut: {
        labels: {
          show: true,
          total: {
            showAlways: true,
            show: true
          }
        }
      }
    }
  },
  labels: ["Comedy", "Action", "SciFi", "Drama", "Horror"],
  dataLabels: {
    dropShadow: {
      blur: 3,
      opacity: 0.8
    }
  },
  fill: {
    type: 'pattern',
    opacity: 1,
    pattern: {
      enabled: true,
      style: ['verticalLines', 'squares', 'horizontalLines', 'circles', 'slantedLines'],
    },
  },
  states: {
    hover: {
      filter: 'none'
    }
  },
  theme: {
    palette: 'palette2'
  },
  title: {
    text: "Favourite Movie Type",
    style: {
      fontWeight: 500,
    },
  },
  legend: {
    position: 'bottom'
  },
  colors: chartBarColors,
};

var chart = new ApexCharts(document.querySelector("#pattern_chart"), options);
chart.render();

// Pie Chart with Image Fill
var chartBarColors = getChartColorsArray("image_pie_chart");
var options = {
  series: [44, 33, 54, 45],
  chart: {
    height: 300,
    type: 'pie',
  },
  colors: chartBarColors,
  fill: {
    type: 'image',
    opacity: 0.85,
    image: {
      src: ['./assets/images/auth-bg.jpg', './assets/images/profile-bg.jpg', './assets/images/small/img-5.jpg', './assets/images/small/img-2.jpg'],
      width: 25,
      imagedHeight: 25
    },
  },
  stroke: {
    width: 4
  },
  dataLabels: {
    enabled: true,
    style: {
      colors: ['#111']
    },
    background: {
      enabled: true,
      foreColor: '#fff',
      borderWidth: 0
    }
  },
  legend: {
    position: 'bottom'
  }
};

var chart = new ApexCharts(document.querySelector("#image_pie_chart"), options);
chart.render();

// monochrome_pie_chart
var chartBarColors = getChartColorsArray("monochrome_pie_chart");
var options = {
  series: [25, 15, 44, 55, 41, 17],
  chart: {
    height: 300,
    type: 'pie',
  },
  labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
  theme: {
    monochrome: {
      enabled: true,
      color: chartBarColors[0],
      shadeTo: 'light',
      shadeIntensity: 0.6
    }
  },

  plotOptions: {
    pie: {
      dataLabels: {
        offset: -5
      }
    }
  },
  title: {
    text: "Monochrome Pie",
    style: {
      fontWeight: 500,
    },  
  },
  dataLabels: {
    formatter: function (val, opts) {
      var name = opts.w.globals.labels[opts.seriesIndex];
      return [name, val.toFixed(1) + '%'];
    },
    dropShadow: {
      enabled: false,
    }
  },
  legend: {
    show: false
  }
};

var chart = new ApexCharts(document.querySelector("#monochrome_pie_chart"), options);
chart.render();