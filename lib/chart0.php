    <script>
        var context = document
            .getElementById('chart0')
            .getContext('2d');

        var myChart = new Chart(context, {
            type: 'line',
            data: {
                labels: <?=json_encode($time)?>,
                datasets: [
                    {
                        label: 'R',
                        fill: false,
                        data: <?=json_encode($r)?>,
                        backgroundColor: 'rgba(<?=$r_colour?>, 0.05)',
                        borderColor: 'rgba(<?=$r_colour?>, 1)',
                        borderWidth: <?=$borderWidth?>,
                        pointRadius: <?=$pointRadius?>
                    },
                    {
                        label: 'G',
                        fill: false,
                        data: <?=json_encode($g)?>,
                        backgroundColor: 'rgba(<?=$g_colour?>, 0.05)',
                        borderColor: 'rgba(<?=$g_colour?>, 1)',
                        borderWidth: <?=$borderWidth?>,
                        pointRadius: <?=$pointRadius?>
                    },
                    {
                        label: 'B',
                        fill: false,
                        data: <?=json_encode($b)?>,
                        backgroundColor: 'rgba(<?=$b_colour?>, 0.05)',
                        borderColor: 'rgba(<?=$b_colour?>, 1)',
                        borderWidth: <?=$borderWidth?>,
                        pointRadius: <?=$pointRadius?>
                    },
                    {
                        label: 'Q',
                        fill: true,
                        data: <?=json_encode($q)?>,
                        backgroundColor: 'rgba(<?=$q_colour?>, 0.05)',
                        borderColor: 'rgba(<?=$q_colour?>, 1)',
                        borderWidth: <?=$borderWidth?>,
                        pointRadius: <?=$pointRadius?>,
                        yAxisID: 'y_sub'
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        position: 'left',
                        grid: {
                            color: 'rgb(<?=$gray?>)',
                            tickColor: 'rgb(<?=$dark_gray?>)'
                        },
                        ticks: {
                            color: 'rgb(<?=$white?>)'
                        },
                        title: {
                            display: true,
                            text: "R, G, B",
                            color: 'rgb(<?=$white?>)'
                        }
                    },
                    x: {
                        grid: {
                            color: 'rgba(<?=$dark_gray?>)',
                            tickColor: 'rgb(<?=$gray?>)'
                        },
                        ticks: {
                            color: 'rgb(<?=$white?>)'
                        }
                    },
                    y_sub: {
                        position: 'right',
                        ticks: {
                            color: 'rgb(<?=$white?>)'
                        },
                        title: {
                            display: true,
                            text: "Q",
                            color: 'rgb(<?=$white?>)'
                        }
                    }
                },
                legend: {
                    labels: {
                        fontColor: 'rgb(<?=$white?>)'
                    }
                }
            }
        });
    </script>