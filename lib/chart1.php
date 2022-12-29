    <script>
        var context = document
            .getElementById('chart1')
            .getContext('2d');

        var myChart = new Chart(context, {
            type: 'line',
            data: {
                labels: <?=json_encode($time)?>,
                datasets: [
                    {
                        label: 'H',
                        fill: false,
                        data: <?=json_encode($h)?>,
                        backgroundColor: 'rgba(<?=$h_colour?>, 0.05)',
                        borderColor: 'rgba(<?=$h_colour?>, 1)',
                        borderWidth: <?=$borderWidth?>,
                        pointRadius: <?=$pointRadius?>
                    },
                    {
                        label: 'V',
                        fill: false,
                        data: <?=json_encode($v)?>,
                        backgroundColor: 'rgba(<?=$v_colour?>, 0.05)',
                        borderColor: 'rgba(<?=$v_colour?>, 1)',
                        borderWidth: <?=$borderWidth?>,
                        pointRadius: <?=$pointRadius?>
                    },
                    {
                        label: 'S',
                        fill: true,
                        data: <?=json_encode($s)?>,
                        backgroundColor: 'rgba(<?=$s_colour?>, 0.07)',
                        borderColor: 'rgba(<?=$s_colour?>, 1)',
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
                            text: "H, V",
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
                            text: "S",
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