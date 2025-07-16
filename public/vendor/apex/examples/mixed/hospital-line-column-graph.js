document.addEventListener("DOMContentLoaded", function () {
	const dates = window.chartData.dates;
	const counts = window.chartData.counts;

	const options = {
		chart: {
			height: 280,
			type: 'line',
			toolbar: { show: false },
		},
		series: [{
			name: 'Jumlah Pasien',
			type: 'column',
			data: counts
		}],
		xaxis: {
			type: 'category',
			categories: dates,
			labels: {
				rotate: -45,
				format: 'dd MMM'
			}
		},
		fill: {
			type: 'solid',
			opacity: [0.6],
		},
		stroke: {
			width: [2]
		},
		markers: {
			size: 4
		},
		colors: ['#05668D'],
	};

	const chart = new ApexCharts(document.querySelector("#hospital-line-column-graph"), options);
	chart.render();
});
