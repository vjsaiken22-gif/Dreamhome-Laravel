<!DOCTYPE html>
<html>

<head>

    <title>
        Analytics Dashboard
    </title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/analytics.css') }}">

</head>

<body>

<a href="/dashboard"
class="back-btn">

    ← Dashboard

</a>

<div class="analytics-container">

    <h1 class="page-title">
        Analytics Center
    </h1>

    <div class="card-grid">

        <a href="/analytics/dashboard"
        class="analytics-link">

            <div class="analytics-card blue">

                <h2>📊</h2>

                <p>Dashboard Analytics</p>

            </div>

        </a>

        <a href="/analytics/revenue"
        class="analytics-link">

            <div class="analytics-card green">

                <h2>💰</h2>

                <p>Revenue Analytics</p>

            </div>

        </a>

        <a href="/analytics/branch"
        class="analytics-link">

            <div class="analytics-card orange">

                <h2>🏢</h2>

                <p>Branch Analytics</p>

            </div>

        </a>

    </div>

</div>

<script src="{{ asset('js/analytics.js') }}"></script>

</body>
</html>
