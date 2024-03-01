const ctx = document.getElementById('myChart');
new Chart(ctx, {
	type: 'line',
	data: {
		labels: ['Red', 'Green', 'Blue', 'Purple', 'Orange'],
		datasets: [{
			label: 'Red',
			data: [20, 10, 5, 15, 25],
			borderWidth: 1,
			backgroundColor: 'transparent',
			borderColor: '#E53935',
			borderWidth: 2,
			lineTension: 0,
			pointRadius: 4,
			pointBackgroundColor: 'rgba(255,255,255,1)',
			pointBorderWidth: 2,
		},
		{
			label: "Green",
			data: [5, 15, 20, 25, 15],
			borderWidth: 1,
			backgroundColor: 'transparent',
			borderColor: '#388E3C',
			borderWidth: 2,
			lineTension: 0,
			pointRadius: 4,
			pointBackgroundColor: 'rgba(255,255,255,1)',
			pointBorderWidth: 2,
		},
		{
			label: "Blue",
			data: [10, 5, 10, 5, 15],
			borderWidth: 1,
			backgroundColor: 'transparent',
			borderColor: '#1976D2',
			borderWidth: 2,
			lineTension: 0,
			pointRadius: 4,
			pointBackgroundColor: 'rgba(255,255,255,1)',
			pointBorderWidth: 2,
		},
		{
			label: "Purple",
			data: [15, 20, 25, 15, 5],
			borderWidth: 1,
			backgroundColor: 'transparent',
			borderColor: '#7B1FA2',
			borderWidth: 2,
			lineTension: 0,
			pointRadius: 4,
			pointBackgroundColor: 'rgba(255,255,255,1)',
			pointBorderWidth: 2,
		},
		{
			label: "Orange",
			data: [30, 20, 15, 5, 0],
			borderWidth: 1,
			backgroundColor: 'transparent',
			borderColor: '#E64A19',
			borderWidth: 2,
			lineTension: 0,
			pointRadius: 4,
			pointBackgroundColor: 'rgba(255,255,255,1)',
			pointBorderWidth: 2,
		},]
	},
	options: {
		responsive: true,
		plugins: {
			legend: {
				position: 'bottom',
				display: true,
				labels: {
					color: '#000000',
					boxWidth: 30,
					boxHeight: 2,
					padding: 20,
					font: {
						family: "'Plus Jakarta Sans', sans-serif",
						size: 14,
						weight: 400,
					},
				}
			},
			title: {
				display: true,
				text: 'Line Chart',
				color: '#000000',
				padding: 10,
				font: {
					family: "'Plus Jakarta Sans', sans-serif",
					size: 16,
					weight: 700,
				},
			}
		},
		layout: {
			padding: {
				left: 0,
				bottom: 0,
			}
		},
		scales: {
			y: {
				beginAtZero: true,
				min: 0,
				max: 30,
				ticks: {
					color: '#000000',
					font: {
						family: "'Plus Jakarta Sans', sans-serif",
						size: 12,
						weight: 400,
					},
				},
			},
			x: {
				ticks: {
					color: '#000000',
					font: {
						family: "'Plus Jakarta Sans', sans-serif",
						size: 14,
						weight: 400,
					},
				},
			}
		}
	}
});