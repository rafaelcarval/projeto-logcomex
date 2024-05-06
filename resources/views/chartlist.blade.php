<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Vue Component</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    @vite(['resources/js/app.js'])
</head>
<body id="app">
    <menulist></menulist>
    <div class="container mt-4">
        <!-- Conteúdo Principal -->
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <sidebar @update-charts="updateCharts"></sidebar>
                    </div>
                </div>
            </div>
            
            <!-- Chart List -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <line-chart></line-chart>
                        </div>
                        <div class="col-md-6">
                        <bar-chart :chart-data="chartData.bar"></bar-chart>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                        <radar-chart></radar-chart>
                        </div>
                        <div class="col-md-6">
                        <doughnut-chart></doughnut-chart>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                        <polar-area-chart></polar-area-chart>
                        </div>
                        <div class="col-md-6">
                        <pie-chart></pie-chart>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

