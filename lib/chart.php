    <script>
        var context = document
            .getElementById('myChart')
            .getContext('2d');

        var myChart = new Chart(context, {
            type: 'line',
            data: {
                labels: <?=json_encode(array_reverse($time))?>,
                datasets: [
                    {
                        label: 'Q',
                        fill: false,
                        data: <?=json_encode(array_reverse($q))?>,
                        backgroundColor: 'rgba(<?=$q_colour?>, 0.2)',
                        borderColor: 'rgba(<?=$q_colour?>, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'R',
                        fill: false,
                        data: <?=json_encode(array_reverse($r))?>,
                        backgroundColor: 'rgba(<?=$r_colour?>, 0.2)',
                        borderColor: 'rgba(<?=$r_colour?>, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'G',
                        fill: false,
                        data: <?=json_encode(array_reverse($g))?>,
                        backgroundColor: 'rgba(<?=$g_colour?>, 0.2)',
                        borderColor: 'rgba(<?=$g_colour?>, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'B',
                        fill: false,
                        data: <?=json_encode(array_reverse($b))?>,
                        backgroundColor: 'rgba(<?=$b_colour?>, 0.2)',
                        borderColor: 'rgba(<?=$b_colour?>, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'H',
                        fill: false,
                        data: <?=json_encode(array_reverse($h))?>,
                        backgroundColor: 'rgba(<?=$h_colour?>, 0.2)',
                        borderColor: 'rgba(<?=$h_colour?>, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'S',
                        fill: false,
                        data: <?=json_encode(array_reverse($s))?>,
                        backgroundColor: 'rgba(<?=$s_colour?>, 0.2)',
                        borderColor: 'rgba(<?=$s_colour?>, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'V',
                        fill: false,
                        data: <?=json_encode(array_reverse($v))?>,
                        backgroundColor: 'rgba(<?=$v_colour?>, 0.2)',
                        borderColor: 'rgba(<?=$v_colour?>, 1)',
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
                                fontColor: 'rgb(<?=$white?>)'
                            },
                            gridLines: {
                                color: 'rgb(<?=$grid_colour?>)'
                            }
                        }
                    ],
                    xAxes: [
                        {
                            ticks: {
                                fontColor: 'rgb(<?=$white?>)'
                            },
                            gridLines: {
                                color: 'rgb(<?=$grid_colour?>)'
                            }
                        }
                    ]
                },
                legend: {
                    labels: {
                        fontColor: 'rgb(<?=$white?>)'
                    }
                }
            }
        });
    </script>