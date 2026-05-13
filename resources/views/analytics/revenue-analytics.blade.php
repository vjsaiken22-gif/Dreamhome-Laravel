<!DOCTYPE html>
<html>

<head>

    <title>
        Revenue Analytics
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
        Revenue Analytics
    </h1>

    <div class="card-grid">

        <div class="analytics-card green">

            <h2>
                ₱{{ number_format($totalRevenue ? $totalRevenue : 0, 2) }}
            </h2>

            <p>Total Revenue</p>

        </div>

        <div class="analytics-card purple">

            <h2>{{ $successfulPayments }}%</h2>

            <p>Successful Payments</p>

        </div>

    </div>

    <div class="chart-box">

        <h2 class="chart-title">
            Monthly Revenue
        </h2>

        <canvas id="revenueChart"></canvas>

    </div>

</div>

<script>

const revenueChart = document.getElementById('revenueChart');

new Chart(revenueChart, {

    type: 'line',

    data: {

        labels: @json($months),

        datasets: [{

            label: 'Revenue',

            data: @json($monthlyRevenue),

            borderColor: '#7c3aed',

            backgroundColor: 'rgba(124,58,237,0.2)',

            tension: 0.4,

            fill: true

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
