document.addEventListener("DOMContentLoaded", function () {
	const data = window.ageGenderChart;

	const options = {
		chart: {
			height: 400,
			type: 'bar',
			stacked: true,
			toolbar: { show: false },
		},
		colors: ['#05668D', '#028090'],
		plotOptions: {
			bar: {
				horizontal: true,
				barHeight: '80%',
			},
		},
		series: [
			{ name: 'Perempuan', data: data.female },
			{ name: 'Laki-Laki', data: data.male }
		],
		xaxis: {
			categories: data.categories,
			title: { text: 'Persentase (%)' },
			labels: {
				formatter: val => Math.abs(Math.round(val)) + '%'
			}
		},
		yaxis: {
			title: { text: 'Kelompok Umur' }
		},
		tooltip: {
			shared: false,
			y: {
				formatter: val => Math.abs(val) + '%'
			}
		},
		fill: { opacity: 0.9 },
		stroke: {
			width: 1,
			colors: ['#fff']
		},
		title: {
			text: 'Distribusi Pasien Berdasarkan Usia & Gender',
			align: 'center'
		}
	};

	const chart = new ApexCharts(document.querySelector("#hospital-patients-by-age"), options);
	chart.render();
});
