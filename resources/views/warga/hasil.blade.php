<!DOCTYPE html>
<html>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <style>
        body {
            background-color: #f5f5dc;
            font-family: 'Courier New', Courier, monospace;
        }

        h1 {
            color: #8B4513;
            font-size: 36px;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .credit {
            position: fixed;
            bottom: 0;
            right: 0;
            padding: 5px;
            background-color: #D2B48C;
            color: #8B4513;
            font-size: 12px;
        }

        .tombol {
            display: inline-block;
            padding: 10px 20px;
            font-size: 15px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #04AA6D;
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px #999;
        }

        .tombol:hover {
            background-color: #aa0404
        }

        .tombol:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        .action {
            display: flex;
            justify-content: space-between;
        }
    </style>
    <title>Hasil Pilihan</title>
</head>

<header class="action">
    <a class="tombol" href="/">Home</a></li>
</header>

<body>
    <h1>Hasil Pilihan</h1>
    <div class="container">
        <canvas id="myChart"></canvas>
    </div>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['PASLON 1', 'PASLON 2', 'PASLON 3'],
                datasets: [{
                    label: 'Jumlah Pilihan',
                    data: [@json($result['PASLON 1']), @json($result['PASLON 2']),
                        @json($result['PASLON 3'])
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                aspectRatio: 2,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Hasil Pilihan Capres dan Cawapres'
                    }
                }
            }
        });
    </script>
    <div class="credit">
        2225230083 - Adelia Putri - 1A
    </div>
</body>

</html>
