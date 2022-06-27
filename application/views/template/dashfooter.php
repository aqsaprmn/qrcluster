<script src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?= base_url() ?>vendor/js/jquery.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
<script src="<?= base_url() ?>asset/js/dashboard
.js"></script>
<script>
    const xhr = new XMLHttpRequest;

    xhr.addEventListener('load', function() {
        const jsonRes = JSON.parse(xhr.response);
        const totalcluster = jsonRes['kawasan'];
        const month = document.getElementById('month');
        const day = document.getElementById('day');

        month.addEventListener('change', function() {
            const xhr = new XMLHttpRequest;
            xhr.open('POST', '<?= base_url() ?>' + 'dashapi/tanggal');
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send('month=' + this.value + "&day=" + day.value);
            xhr.addEventListener('load', function() {
                const jsonRes = JSON.parse(xhr.response);
                const total = jsonRes['tanggal'];

                const date = [];
                // const datelabel = [];

                jsonRes['tanggal'].forEach((val, index, arr) => {
                    date.push({
                        x: Date.parse(val['tanggal'] + 'T00:00:00'),
                        y: val['total']
                    })

                    // datelabel.push(val['total']);
                });

                updateChart(myBarChart, date);
            })
        })

        day.addEventListener('change', function() {
            const xhr = new XMLHttpRequest;
            xhr.open('POST', '<?= base_url() ?>' + 'dashapi/tanggal');
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send('month=' + month.value + "&day=" + this.value);
            xhr.addEventListener('load', function() {
                const jsonRes = JSON.parse(xhr.response);
                const total = jsonRes['tanggal'];

                const labelsDay = [];
                const totalDay = [];

                jsonRes['jam'].forEach((val, index, arr) => {
                    labelsDay.push(val['tanggal'] + 'T' + val['jam'] + ':00:00');
                    totalDay.push(val['total']);
                });

                updateChartDL(myLineChart, labelsDay, totalDay);
            })
        })

        const doughnutLabelLines = {
            id: 'doughnutLabelLines',
            afterDraw(chart, args, options) {
                const {
                    ctx,
                    chartArea: {
                        top,
                        bottom,
                        left,
                        right,
                        width,
                        height
                    }
                } = chart;
                chart.data.datasets.forEach((dataset, i) => {
                    chart.getDatasetMeta(i).data.forEach((datapoint, index) => {
                        const {
                            x,
                            y
                        } = datapoint.tooltipPosition();

                        console.log(x);

                        const halfwidth = width / 2;
                        const halfheight = height / 2;

                        const xLine = x >= halfwidth ? x + 15 : x - 15;
                        const yLine = x >= halfheight ? y + 15 : y - 15;
                        const extraLine = x >= halfwidth ? 15 : -15;

                        ctx.beginPath();
                        ctx.moveTo(x, y);
                        ctx.lineTo(xLine, yLine);
                        ctx.lineTo(xLine + extraLine, yLine);
                        ctx.strokeStyle = dataset.borderColor[index];
                        ctx.stroke();

                        const textwidth = ctx.measureText(chart.data.labels[index]).width;
                        const textPosition = x >= halfwidth ? 'left' : 'right';
                        const plusFivePx = x >= halfwidth ? 5 : -5;
                        ctx.textAlign = textPosition;
                        ctx.textBaseLine = 'middle';
                        ctx.fillstyle = dataset.borderColor[index];
                        ctx.fillText(chart.data.labels[index], xLine + extraLine + plusFivePx, yLine);
                    })
                })
            }
        }

        let label = [];

        totalcluster.forEach((val, key, arr) => {
            label.push(val['kawasan']);
        });

        let data = [];

        totalcluster.forEach((val, key, arr) => {
            data.push(parseInt(val['total']));
        });

        const stateDonat = document.querySelector('.stateDonat');
        const tableDonat = stateDonat.querySelector('table');

        let trDonat = ``;
        let colorDonat = getColorLabel(data.length);

        data.forEach((val, index, arr) => {
            trDonat += `<tr>
                        <td style="padding:10px"><span style="position:relative; display: block; width:20px; height: 20px; background-color:${colorDonat[index]}; border:1px solid black;"><span></td>
                        <td>${label[index]} </td>
                        <td colspan="3" class="text-center"> = </td>
                        <td class="text-center"><b>${data[index]}</b></td>
                </tr>`;
        });

        tableDonat.innerHTML = trDonat;

        const myDonatChart = new Chart(
            document.getElementById('donat'), {
                type: 'doughnut',
                data: {
                    labels: label,
                    datasets: [{
                        label: 'My First Dataset',
                        data: data,
                        backgroundColor: getColorLabel(data.length),
                        borderColor: 'black',
                        borderWidth: 1,
                        hoverOffset: 4,
                        cutout: '80%',
                        borderRadius: 20,
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    layout: {
                        padding: 10,
                    },
                    plugins: {
                        legend: {
                            display: false,
                        },
                        datalabels: {
                            color: 'black'
                        },
                        title: {
                            display: false,
                            text: 'Total Per Kawasan',
                            padding: {
                                top: 10,
                                bottom: 30
                            },
                            font: {
                                size: 20
                            }

                        }
                    }
                },
                plugins: [ChartDataLabels],
            }
        );

        const date = [];
        // const datelabel = [];

        jsonRes['tanggal'].forEach((val, index, arr) => {
            date.push({
                x: Date.parse(val['tanggal'] + 'T00:00:00'),
                y: val['total']
            })

            // datelabel.push(val['total']);
        });

        const myBarChart = new Chart(
            document.getElementById('bar'), {
                type: 'bar',
                data: {
                    datasets: [{
                        label: 'Total Per Tanggal',
                        data: date,
                        backgroundColor: 'rgb(75, 192, 192,0.5)',
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0,
                        borderWidth: 2
                    }]
                },
                plugins: [ChartDataLabels],
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    parsing: {
                        xAksisKey: 'x',
                        yAksisKey: 'y'
                    },
                    layout: {
                        padding: {
                            top: 30,
                            // bottom: 30
                        },
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: false,
                            text: 'Total Per Tanggal',
                            // padding: {
                            //     top: 10,
                            //     bottom: 30
                            // },
                            font: {
                                size: 20
                            }
                        },
                        datalabels: {
                            anchor: 'end',
                            align: 'top',
                            // labels: datelabel,
                            formatter: function(value, context) {
                                return context.dataset.data[context.dataIndex].y
                            }
                        },

                    },
                    scales: {
                        x: {
                            type: 'time',
                            time: {
                                unit: 'day',
                                // parser: 'dd-mm-yyyy'
                            },
                        },
                        y: {
                            stacked: true,
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        },
                    }
                },
            }
        );

        const labelsDay = [];
        const totalDay = [];

        jsonRes['jam'].forEach((val, index, arr) => {
            labelsDay.push(val['tanggal'] + 'T' + val['jam'] + ':00:00');
            totalDay.push(val['total']);
        });

        const myLineChart = new Chart(
            document.getElementById('line'), {
                type: 'line',
                data: {
                    labels: labelsDay,
                    datasets: [{
                        label: 'Total Per Jam',
                        data: totalDay,
                        backgroundColor: 'rgb(75, 192, 192,0.5)',
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0,
                        borderWidth: 2
                    }]
                },
                plugins: [ChartDataLabels],
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    parsing: {
                        xAksisKey: 'x',
                        yAksisKey: 'y'
                    },
                    layout: {
                        padding: {
                            top: 30,
                            // bottom: 30
                        },
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: false,
                            text: 'Total Per Tanggal',
                            // padding: {
                            //     top: 10,
                            //     bottom: 30
                            // },
                            font: {
                                size: 20
                            }
                        },
                        datalabels: {
                            anchor: 'end',
                            align: 'top',
                            // labels: datelabel,
                            formatter: function(value, context) {
                                return context.dataset.data[context.dataIndex].y
                            }
                        },

                    },
                    scales: {
                        x: {
                            type: 'time',
                        },
                        y: {
                            stacked: true,
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        },
                    }
                },
            }
        );
    })

    xhr.open('POST', '<?= base_url() ?>' + 'dashapi/tanggal');
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("month=" + month.value + "&day=" + day.value);

    $(document).ready(function() {
        $("#table").DataTable();
    });

    function updateChart(chart, mydata) {
        chart.data.datasets.forEach((dataset) => {
            dataset.data = mydata;
        });
        chart.update();
    }

    function updateChartDL(chart, label, data) {
        chart.data.labels = label;
        chart.data.datasets.forEach((dataset) => {
            dataset.data = data;
        });
        chart.update();
    }
</script>
</body>

</html>