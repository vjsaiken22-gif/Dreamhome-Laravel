<!DOCTYPE html>
<html>

<head>

    <title>
        Dashboard Analytics
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
        Dashboard Analytics
    </h1>

    <div class="card-grid">

        <div class="analytics-card blue">

            <h2>{{ $totalProperties }}</h2>

            <p>Total Properties</p>

        </div>

        <div class="analytics-card green">

            <h2>{{ $totalRenters }}</h2>

            <p>Total Renters</p>

        </div>

        <div class="analytics-card orange">

            <h2>{{ $totalStaff }}</h2>

            <p>Total Staff</p>

        </div>

        <div class="analytics-card red">

            <h2>{{ $totalPayments }}</h2>

            <p>Total Payments</p>

        </div>

    </div>

    <div class="chart-box">

        <h2 class="chart-title">
            System Overview
        </h2>

        <canvas id="dashboardChart"></canvas>

    </div>

</div>

<script>

const ctx = document.getElementById('dashboardChart');

new Chart(ctx, {

    type: 'bar',

    data: {

        labels: [
            'Properties',
            'Renters',
            'Staff',
            'Payments'
        ],

        datasets: [{

            label: 'System Records',

            data: [
                {{ $totalProperties }},
                {{ $totalRenters }},
                {{ $totalStaff }},
                {{ $totalPayments }}
            ],

            backgroundColor: [
                '#3b82f6',
                '#10b981',
                '#f59e0b',
                '#ef4444'
            ],

            borderRadius: 10

        }]

    },

    options: {

        responsive: true,

        plugins: {

            legend: {
                display: false
            }

        }

    }

});

</script>

<script src="{{ asset('js/analytics.js') }}"></script>

</body>
</html>
