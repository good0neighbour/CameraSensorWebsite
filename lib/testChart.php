    <script>
        var context = document
            .getElementById('myChart')
            .getContext('2d');

        var myChart = new Chart(context, {
            type: 'line',
            data: {
                labels: [ "00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00" ],
                datasets: [
                    {
                        label: 'R',
                        fill: false,
                        data: [ 1, 0.99, 0.98, 0.97, 0.96, 0.95, 0.94, 0.93, 0.92, 0.91 ],
                        backgroundColor: 'rgba(250, 120, 120, 0.2)',
                        borderColor: 'rgba(250, 120, 120, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'G',
                        fill: false,
                        data: [ 0.9, 0.89, 0.88, 0.87, 0.86, 0.85, 0.84, 0.83, 0.82, 0.81 ],
                        backgroundColor: 'rgba(150, 230, 150, 0.2)',
                        borderColor: 'rgba(150, 230, 150, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'B',
                        fill: false,
                        data: [ 0.8, 0.79, 0.78, 0.77, 0.76, 0.75, 0.74, 0.73, 0.72, 0.71 ],
                        backgroundColor: 'rgba(120, 170, 255, 0.2)',
                        borderColor: 'rgba(120, 170, 255, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'H',
                        fill: false,
                        data: [ 0.7, 0.69, 0.68, 0.67, 0.66, 0.65, 0.64, 0.63, 0.62, 0.61 ],
                        backgroundColor: 'rgba(230, 230, 150, 0.2)',
                        borderColor: 'rgba(230, 230, 150, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'V',
                        fill: false,
                        data: [ 0.6, 0.59, 0.58, 0.57, 0.56, 0.55, 0.54, 0.53, 0.52, 0.51 ],
                        backgroundColor: 'rgba(200, 150, 100, 0.2)',
                        borderColor: 'rgba(200, 150, 100, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    yAxes: [
                        {
                            beginAtZero: true,
                            ticks: {
                                fontColor: 'rgb(230, 230, 230)'
                            },
                            gridLines: {
                                color: 'rgb(80, 80, 80)'
                            }
                        }
                    ],
                    xAxes: [
                        {
                            ticks: {
                                fontColor: 'rgb(230, 230, 230)'
                            },
                            gridLines: {
                                color: 'rgb(80, 80, 80)'
                            }
                        }
                    ]
                },
                legend: {
                    labels: {
                        fontColor: 'rgb(230, 230, 230)'
                    }
                }
            }
        });
    </script>