/*
Template Name: Vuesy - Admin & Dashboard Template
Author: Themesdesign
Website: https://Themesdesign.in/
Contact: themesdesign.in@gmail.com
File: dashboard Analytics Init Js File
*/

// get colors array from the string
function getChartColorsArray(chartId) {
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


// mini-1
var chartBarColors = getChartColorsArray("mini-1");
var options = {
    series: [{
      data: [2, 36, 22, 30, 12, 38]
    }],
    chart: {
      type: 'line',
      width:130,
      height: 55,
      sparkline: {
        enabled: true
      }  
    },
    colors: chartBarColors,
    stroke: {
      curve: 'smooth',
      width: 2.5,
    },
    tooltip: {
      fixed: {
        enabled: false
      },
      x: {
        show: false
      },
      y: {
        title: {
          formatter: function (seriesName) {
            return ''
          }
        }
      },
      marker: {
        show: false
      }
    }
  };
  var chart = new ApexCharts(document.querySelector("#mini-1"), options);
chart.render();


var chartBarColors = getChartColorsArray("chart-area");
var options = {
    chart: {
        height: 159,
        type: 'area',
        toolbar: {
            show: false,
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
        width: 2.5
    },
    series: [{
        name: 'Previous',
        data: [55, 36, 61, 40, 58]
    }],

    colors: chartBarColors,
    legend: {
        show: false,
    },
    
    fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            inverseColors: false,
            opacityFrom: 0.45,
            opacityTo: 0.05,
            stops: [20, 100, 100, 100]
          },
    },
    yaxis: {
        show: false,
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
    },

}

var chart = new ApexCharts(document.querySelector("#chart-area"),options);
chart.render();

// Basic Column Chart
var chartBarColors = getChartColorsArray("column_chart");
var options = {
    chart: {
      height: 410,
      type: 'bar',
      toolbar: {
        show: false,
      }
    },
    plotOptions: {
      bar: {
        borderRadius: 3,
        horizontal: false,
        columnWidth: '64%',
        endingShape: 'rounded'
      },
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
    },
    series: [{
      name: 'Net Profit',
      data: [95, 40, 73, 60, 51, 37, 30]
    }, {
      name: 'Revenue',
      data: [75, 26, 53, 44, 37, 26, 23]
    }],
    colors: chartBarColors,
    // colors: ["#776acf", "#e4e1f5"],
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July'],
    },
    grid: {
      borderColor: '#f1f1f1',
    },
    fill: {
      opacity: 1
    },
    legend: {
        show: false,
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return "$ " + val + " thousands"
        }
      }
    }
  }
  
  var chart = new ApexCharts(
    document.querySelector("#column_chart"),
    options
  );
  
  chart.render();


  // Donut chart
  var chartBarColors = getChartColorsArray("chart-donut");
var options = {
    chart: {
        height: 287,
        type: 'donut',
    },
    plotOptions: {
        pie: {
            donut: {
                size: '75%',
            },
        }
    },
    dataLabels: {
        enabled: false,
    },
    series: [60, 15, 8],
    labels: ["Completed", "Processing", "Cancel"],
    colors: chartBarColors,
    // colors: ["#776acf", "#6dcba3" ,"#e1665d"],
    legend: {
        show: false
    }
}

var chart = new ApexCharts(document.querySelector("#chart-donut"), options);
chart.render();

// sparkline-1
var chartBarColors = getChartColorsArray("chart-sparkline1");
var sparklineoptions1 = {
  series: [{
    data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54 ,84]
  }],
  chart: {
    type: 'area',
    width: 120,
    height: 40,
    sparkline: {
      enabled: true
    }
  },
  fill: {
    type: 'gradient',
    gradient: {
      shadeIntensity: 1,
      inverseColors: false,
      opacityFrom: 0.45,
      opacityTo: 0.05,
      stops: [20, 100, 100, 100]
    },
  },
  stroke: {
    curve: 'smooth',
    width: 2,
  },
  colors: chartBarColors,
  tooltip: {
    fixed: {
      enabled: false
    },
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function (seriesName) {
          return ''
        }
      }
    },
    marker: {
      show: false
    }
  }
};

var sparklinechart1 = new ApexCharts(document.querySelector("#chart-sparkline1"), sparklineoptions1);
sparklinechart1.render();


// sparkline-2
var chartBarColors = getChartColorsArray("chart-sparkline2");
var sparklineoptions1 = {
  series: [{
    data: [50, 15, 35, 62, 23, 56, 44, 12, 36, 9, 54,23]
  }],
  chart: {
    type: 'area',
    width: 120,
    height: 40,
    sparkline: {
      enabled: true
    }
  },
  fill: {
    type: 'gradient',
    gradient: {
      shadeIntensity: 1,
      inverseColors: false,
      opacityFrom: 0.45,
      opacityTo: 0.05,
      stops: [20, 100, 100, 100]
    },
  },
  stroke: {
    curve: 'smooth',
    width: 2,
  },
  colors: chartBarColors,
  tooltip: {
    fixed: {
      enabled: false
    },
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function (seriesName) {
          return ''
        }
      }
    },
    marker: {
      show: false
    }
  }
};

var sparklinechart1 = new ApexCharts(document.querySelector("#chart-sparkline2"), sparklineoptions1);
sparklinechart1.render();


// sparkline-3
var chartBarColors = getChartColorsArray("chart-sparkline3");
var sparklineoptions1 = {
  series: [{
    data: [25, 35, 35, 89, 63, 25, 44, 12, 36, 9, 54, 25]
  }],
  chart: {
    type: 'area',
    width: 120,
    height: 40,
    sparkline: {
      enabled: true
    }
  },
  fill: {
    type: 'gradient',
    gradient: {
      shadeIntensity: 1,
      inverseColors: false,
      opacityFrom: 0.45,
      opacityTo: 0.05,
      stops: [20, 100, 100, 100]
    },
  },
  stroke: {
    curve: 'smooth',
    width: 2,
  },
  colors: chartBarColors,
  tooltip: {
    fixed: {
      enabled: false
    },
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function (seriesName) {
          return ''
        }
      }
    },
    marker: {
      show: false
    }
  }
};

var sparklinechart1 = new ApexCharts(document.querySelector("#chart-sparkline3"), sparklineoptions1);
sparklinechart1.render();


// sparkline-4
var chartBarColors = getChartColorsArray("chart-sparkline4");
var sparklineoptions1 = {
  series: [{
    data: [50, 15, 35, 34, 23, 56, 65, 41, 36, 41, 32, 25]
  }],
  chart: {
    type: 'area',
    width: 120,
    height: 40,
    sparkline: {
      enabled: true
    }
  },
  fill: {
    type: 'gradient',
    gradient: {
      shadeIntensity: 1,
      inverseColors: false,
      opacityFrom: 0.45,
      opacityTo: 0.05,
      stops: [20, 100, 100, 100]
    },
  },
  stroke: {
    curve: 'smooth',
    width: 2,
  },
  colors: chartBarColors,
  tooltip: {
    fixed: {
      enabled: false
    },
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function (seriesName) {
          return ''
        }
      }
    },
    marker: {
      show: false
    }
  }
};

var sparklinechart1 = new ApexCharts(document.querySelector("#chart-sparkline4"), sparklineoptions1);
sparklinechart1.render();


// sparkline-5
var chartBarColors = getChartColorsArray("chart-sparkline5");
var sparklineoptions1 = {
  series: [{
    data: [45, 53, 24, 89, 63, 60, 36, 50, 36, 32, 54, 63]
  }],
  chart: {
    type: 'area',
    width: 120,
    height: 40,
    sparkline: {
      enabled: true
    }
  },
  fill: {
    type: 'gradient',
    gradient: {
      shadeIntensity: 1,
      inverseColors: false,
      opacityFrom: 0.45,
      opacityTo: 0.05,
      stops: [20, 100, 100, 100]
    },
  },
  stroke: {
    curve: 'smooth',
    width: 2,
  },
  colors: chartBarColors,
  tooltip: {
    fixed: {
      enabled: false
    },
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function (seriesName) {
          return ''
        }
      }
    },
    marker: {
      show: false
    }
  }
};

var sparklinechart1 = new ApexCharts(document.querySelector("#chart-sparkline5"), sparklineoptions1);
sparklinechart1.render();



// Sales Countries
var options = {
  series: [{
  data: [1040, 1320, 1560, 1280,1480]
}],
  chart: {
  type: 'bar',
  height: 234,
  toolbar: {
    show: false,
  },
},
labels: ['Canada', 'Russia','Brazil','United States','Egypt'],
colors: ["#776acf"],
plotOptions: {
  bar: {
    borderRadius: 3,
    horizontal: true,
  }
},
dataLabels: {
  enabled: false
},
xaxis: {
  categories: ['Canada', 'Russia', 'Brazil', 'US','Egypt'],
}
};

var chart = new ApexCharts(document.querySelector("#sales-countries"), options);
chart.render();


// MAP
var map = new jsVectorMap({
  map: "world_merc",
  selector: "#world-map-markers",
  zoomOnScroll: false,
  zoomButtons: false,
  opacity:1,
  regionStyle : {
    initial : {
        fill : '#f0f2f3'
    }
},
  markerStyle:{
	  initial: { fill: "#3cbf87" },
	  selected: { fill: "#3cbf87" }
	},
  markers: [
      {
          name: "Canada",
          coords: [56.1304, -106.3468]
      },
      {
          name: "Brazil",
          coords: [-14.2350, -51.9253]
      },
      {
          name: "Egypt",
          coords: [26.8206, 30.8025]
      },
      {
          name: "Russia",
          coords: [61, 105]
      },
      {
          name: "United States",
          coords: [37.0902, -95.7129]
      },
  ],
  lines: [{
          from: "Canada",
          to: "Egypt"
      },
      {
          from: "Russia",
          to: "Egypt"
      },
      {
          from: "Brazil",
          to: "Egypt"
      },
      {
          from: "United States",
          to: "Egypt"
      },
  ],
  lineStyle: {
      animation: true,
      strokeDasharray: "6 3 6",
  },
})

// Swiper
var swiper = new Swiper('.swiper-container', {
  spaceBetween: 10,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
      576: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1500: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
    }
});

