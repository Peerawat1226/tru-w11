<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Program Chart</title>
</head>
<body>
    <div class="container mx-auto" style="width: 80%; margin: auto; text-align: center;">
        <h1>Student in each Program Report</h1>
        <canvas id="myChart" height="100px"></canvas>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        var labels = {{ Js::from($labels) }};
        var datas = {{ Js::from($data) }};

        const data = {
            labels: labels,
            datasets: [{
                label: 'Student Count',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.4)',
                    'rgba(255, 159, 64, 0.4)',
                    'rgba(255, 205, 86, 0.4)',
                    'rgba(75, 192, 192, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                ],
                borderColor: 'rgb(255, 99, 132)',
                borderWidth: 1,
                data: datas,
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
</body>
</html>
