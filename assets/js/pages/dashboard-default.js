'use strict';
document.addEventListener('DOMContentLoaded', function () {
  setTimeout(function () {
    floatchart();
  }, 500);
});

function floatchart() {
  (function () {
    var options1 = {
      chart: { type: 'bar', height: 50, sparkline: { enabled: true } },
      colors: ['#4680FF'],
      plotOptions: { bar: { columnWidth: '80%' } },
      series: [
        {
          data: [10, 30, 40, 20, 60, 50, 20, 15, 20, 25, 30, 25]
        }
      ],
      xaxis: { crosshairs: { width: 1 } },
      tooltip: {
        fixed: { enabled: false },
        x: { show: false },
        y: {
          title: {
            formatter: function (seriesName) {
              return '';
            }
          }
        },
        marker: { show: false }
      }
    };
    var chart = new ApexCharts(document.querySelector('#all-earnings-graph'), options1);
    chart.render();
    var options2 = {
      chart: { type: 'bar', height: 50, sparkline: { enabled: true } },
      colors: ['#E58A00'],
      plotOptions: { bar: { columnWidth: '80%' } },
      series: [
        {
          data: [10, 30, 40, 20, 60, 50, 20, 15, 20, 25, 30, 25]
        }
      ],
      xaxis: { crosshairs: { width: 1 } },
      tooltip: {
        fixed: { enabled: false },
        x: { show: false },
        y: {
          title: {
            formatter: function (seriesName) {
              return '';
            }
          }
        },
        marker: { show: false }
      }
    };
    var chart = new ApexCharts(document.querySelector('#page-views-graph'), options2);
    chart.render();
    var options3 = {
      chart: { type: 'bar', height: 50, sparkline: { enabled: true } },
      colors: ['#2CA87F'],
      plotOptions: { bar: { columnWidth: '80%' } },
      series: [
        {
          data: [10, 30, 40, 20, 60, 50, 20, 15, 20, 25, 30, 25]
        }
      ],
      xaxis: { crosshairs: { width: 1 } },
      tooltip: {
        fixed: { enabled: false },
        x: { show: false },
        y: {
          title: {
            formatter: function (seriesName) {
              return '';
            }
          }
        },
        marker: { show: false }
      }
    };
    var chart = new ApexCharts(document.querySelector('#total-task-graph'), options3);
    chart.render();
    var options4 = {
      chart: { type: 'bar', height: 50, sparkline: { enabled: true } },
      colors: ['#DC2626'],
      plotOptions: { bar: { columnWidth: '80%' } },
      series: [
        {
          data: [10, 30, 40, 20, 60, 50, 20, 15, 20, 25, 30, 25]
        }
      ],
      xaxis: { crosshairs: { width: 1 } },
      tooltip: {
        fixed: { enabled: false },
        x: { show: false },
        y: {
          title: {
            formatter: function (seriesName) {
              return '';
            }
          }
        },
        marker: { show: false }
      }
    };
    var chart = new ApexCharts(document.querySelector('#download-graph'), options4);
    chart.render();


    // CHART FOR REKAPITULASI SURAT MASUK DAN KELUAR
    var options5 = {
        chart: {
            fontFamily: 'Inter var, sans-serif',
            type: 'area',
            height: 370,
            toolbar: {
                show: false
            }
        },
        colors: ['#28a745', '#dc2626'],
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                type: 'vertical',
                inverseColors: false,
                opacityFrom: 0.2,
                opacityTo: 0
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: 3
        },
        plotOptions: {
            bar: {
                columnWidth: '45%',
                borderRadius: 4
            }
        },
        grid: {
            show: true,
            borderColor: '#F3F5F7',
            strokeDashArray: 2
        },
        series: [
            {
                name: 'Surat Masuk',
                data: [20, 70, 40, 70, 70, 90, 50, 55, 45, 60, 50, 65]
            },
            {
                name: 'Surat Keluar',
                data: [10, 40, 20, 40, 50, 70, 80, 30, 15, 32, 90, 30]
            }
        ],
        xaxis: {
            categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            }
        }
    };
    var chart = new ApexCharts(document.querySelector('#customer-rate-graph'), options5);
    chart.render();
    //END OF CHART FOR REKAPITULASI SURAT



    var options6 = {
      chart: {
        type: 'area',
        height: 60,
        stacked: true,
        sparkline: { enabled: true }
      },
      colors: ['#4680FF'],
      fill: {
        type: 'gradient',
        gradient: {
          shadeIntensity: 1,
          type: 'vertical',
          inverseColors: false,
          opacityFrom: 0.5,
          opacityTo: 0
        }
      },
      stroke: { curve: 'smooth', width: 2 },
      series: [{ data: [5, 25, 3, 10, 4, 50, 0] }]
    };
    var chart = new ApexCharts(document.querySelector('#total-tasks-graph'), options6);
    chart.render();
    var options7 = {
      chart: {
        type: 'area',
        height: 60,
        stacked: true,
        sparkline: { enabled: true }
      },
      colors: ['#DC2626'],
      fill: {
        type: 'gradient',
        gradient: {
          shadeIntensity: 1,
          type: 'vertical',
          inverseColors: false,
          opacityFrom: 0.5,
          opacityTo: 0
        }
      },
      stroke: { curve: 'smooth', width: 2 },
      series: [{ data: [0, 50, 4, 10, 3, 25, 5] }]
    };
    var chart = new ApexCharts(document.querySelector('#pending-tasks-graph'), options7);
    chart.render();
    var options8 = {
      chart: {
        height: 320,
        type: 'donut'
      },
      series: [27, 23, 20, 17],
      colors: ['#4680FF', '#E58A00', '#2CA87F', '#4680FF'],
      labels: ['Total income', 'Total rent', 'Download', 'Views'],
      fill: {
        opacity: [1, 1, 1, 0.3]
      },
      legend: {
        show: false
      },
      plotOptions: {
        pie: {
          donut: {
            size: '65%',
            labels: {
              show: true,
              name: {
                show: true
              },
              value: {
                show: true
              }
            }
          }
        }
      },
      dataLabels: {
        enabled: false
      },
      responsive: [
        {
          breakpoint: 480,
          options: {
            plotOptions: {
              pie: {
                donut: {
                  size: '65%',
                  labels: {
                    show: true
                  }
                }
              }
            }
          }
        }
      ]
    };
    var chart = new ApexCharts(document.querySelector('#total-income-graph'), options8);
    chart.render();
  })();
}
