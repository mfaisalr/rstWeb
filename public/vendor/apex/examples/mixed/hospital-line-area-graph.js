document.addEventListener("DOMContentLoaded", function () {
	const names = window.poliklinikChartData.names;
	const counts = window.poliklinikChartData.counts;

	const options = {
		chart: {
			type: 'bar',
			height: 280,
			toolbar: {
				show: false,
			},
		},
		series: [{
			name: 'Jumlah Pasien',
			data: counts
		}],
		xaxis: {
			categories: names,
			labels: {
				rotate: -45,
			}
		},
		colors: ['#00A896'],
		plotOptions: {
			bar: {
				borderRadius: 4,
				horizontal: false,
			}
		},
		dataLabels: {
			enabled: true
		},
		tooltip: {
			y: {
				formatter: function (val) {
					return val + " pasien";
				}
			}
		}
	};

	const chart = new ApexCharts(document.querySelector("#hospital-line-area-graph"), options);
	chart.render();
});
