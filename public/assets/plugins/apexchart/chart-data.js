'use strict';
$(document).ready(function() {

if ($('#apexcharts-area').length > 0) {
     var options = {
     chart: {
          height: 350,
          type: "line",
          toolbar: {
                    show: false
          },
     },
     dataLabels: {
          enabled: false
     },
     stroke: {
          curve: "smooth"
     },
     series: [
          {
                    name: "Teachers",
                    color: '#F4CE14',
                    data: [45, 60, 75, 51, 42, 42, 30]
          },
          {
                    name: "Students",
                    color: '#1A8B93',
                    data: [24, 48, 56, 32, 34, 52, 25]
          }
     ],
     xaxis: {
          categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
     }
     };

     var chart = new ApexCharts(document.querySelector("#apexcharts-area"), options);
     chart.render();
}

if ($('#school-area').length > 0) {
     var optionsSchoolArea = {
     chart: {
          height: 350,
          type: "area",
          toolbar: {
                    show: false
          },
     },
     dataLabels: {
          enabled: false
     },
     stroke: {
          curve: "straight"
     },
     series: [
          {
                    name: "Teachers",
                    color: '#F4CE14',
                    data: [45, 60, 75, 51, 42, 42, 30]
          },
          {
                    name: "Students",
                    color: '#1A8B93',
                    data: [24, 48, 56, 32, 34, 52, 25]
          }
     ],
     xaxis: {
          categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
     }
     };

     var chartSchoolArea = new ApexCharts(document.querySelector("#school-area"), optionsSchoolArea);
     chartSchoolArea.render();
}

if ($('#bar').length > 0) {
     var optionsBar = {
     chart: {
          type: 'bar',
          height: 350,
          width: '100%',
          stacked: false,
          toolbar: {
                    show: false
          },
     },
     dataLabels: {
          enabled: false
     },
     plotOptions: {
          bar: {
                    columnWidth: '55%',
                    endingShape: 'rounded'
          },
     },
     stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
     },
     series: [
          {
                    name: "Boys",
                    color: '#1A8B93',
                    data: [420, 532, 516, 575, 519, 517]
          },
          {
                    name: "Girls",
                    color: '#F4CE14',
                    data: [336, 612, 344, 647, 345, 563]
          }
     ],
     labels: ["CITE", "CEA", "CAHS", "CCJE", "CELA", "CMA"],
     xaxis: {
          labels: {
                    show: false
          },
          axisBorder: {
                    show: false
          },
          axisTicks: {
                    show: false
          },
     },
     yaxis: {
          axisBorder: {
                    show: false
          },
          axisTicks: {
                    show: false
          },
          labels: {
                    style: {
                    colors: '#777'
                    }
          }
     },
     title: {
          text: '',
          align: 'left',
          style: {
                    fontSize: '18px'
          }
     }
     };

     var chartBar = new ApexCharts(document.querySelector('#bar'), optionsBar);
     chartBar.render();
     }
});