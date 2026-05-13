<!DOCTYPE html>
<html>

<head>

    <title>
        Branch Analytics
    </title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/analytics.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

<a href="/analytics"
class="back-btn">

    ← Analytics

</a>

<div class="analytics-container">

    <h1 class="page-title">
        Branch Analytics
    </h1>

    <div class="card-grid">

        <div class="analytics-card blue">

            <h2>{{ $branchCount }}</h2>

            <p>Total Branches</p>

        </div>

        <div class="analytics-card orange">

            <h2>{{ $topBranch }}</h2>

            <p>Top Performing Branch</p>

        </div>

    </div>

    <div class="chart-box">

        <h2 class="chart-title">
            Branch Performance
        </h2>

        <canvas id="branchChart"></canvas>

    </div>

</div>

<script>

const branchChart = document.getElementById('branchChart');

new Chart(branchChart, {

    type: 'pie',

    data: {

        labels: @json($branchLabels),

        datasets: [{

            data: @json($branchData),

            backgroundColor: [
                '#3b82f6',
                '#10b981',
                '#f59e0b',
                '#ef4444',
                '#8b5cf6',
                '#f97316'
            ]

        }]

    },

    options: {

        responsive: true

    }

});

</script>

<script src="{{ asset('js/analytics.js') }}"></script>

</body>
</html>
