var chartBarColors = getChartColorsArray("simple_pie_chart_day"), options = {
    series: [ 44, 55, 13, 43, 22 ],
    chart: {height: 300, type: "pie"},
    labels: [ "instagram", "Facebook", "Pinterest", "Linkedin", "Website" ],
    legend: {position: "bottom"},
    dataLabels: {dropShadow: {enabled: !1}},
    colors: chartBarColors
}, chart = new ApexCharts(document.querySelector("#simple_pie_chart_day"), options);
chart.render();


var chartBarColors = getChartColorsArray("simple_pie_chart_week"), options = {
    series: [ 44, 55, 13, 43, 22 ],
    chart: {height: 300, type: "pie"},
    labels:  [ "instagram", "Facebook", "Pinterest", "Linkedin", "Website" ],
    legend: {position: "bottom"},
    dataLabels: {dropShadow: {enabled: !1}},
    colors: chartBarColors
}, chart = new ApexCharts(document.querySelector("#simple_pie_chart_week"), options);
chart.render();


var chartBarColors = getChartColorsArray("simple_pie_chart_month"), options = {
    series: [ 44, 55, 13, 43, 22 ],
    chart: {height: 300, type: "pie"},
    labels: [ "instagram", "Facebook", "Pinterest", "Linkedin", "Website" ],
    legend: {position: "bottom"},
    dataLabels: {dropShadow: {enabled: !1}},
    colors: chartBarColors
}, chart = new ApexCharts(document.querySelector("#simple_pie_chart_month"), options);
chart.render();