<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Renter Report</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/rp-renter.css') }}">

</head>

<body>

<div class="report-container">

    <div class="report-card">

        <div class="top-bar">

            <a href="/dashboard"
            class="back-btn">

                ← Dashboard

            </a>

            <button class="print-btn"
            onclick="window.print()">

                Print Report

            </button>

        </div>

        <div class="report-header">

            <h1>Renter Report</h1>

            <p>DreamHome Management System</p>

        </div>

        <div class="stats-box">

            <div class="stat-card blue">

                <h2>{{ $totalRenters }}</h2>

                <p>Total Renters</p>

            </div>

            <div class="stat-card green">

                <h2>
                    ₱{{ number_format($avgRent, 2) }}
                </h2>

                <p>Average Max Rent</p>

            </div>

        </div>

        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>Renter No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Telephone</th>
                        <th>Preferred Type</th>
                        <th>Max Rent</th>

                    </tr>

                </thead>

                <tbody>

                @if($renters->count() > 0)

                    @foreach($renters as $renter)

                        <tr>

                            <td>{{ $renter->renter_no }}</td>

                            <td>{{ $renter->fname }}</td>

                            <td>{{ $renter->lname }}</td>

                            <td>{{ $renter->address }}</td>

                            <td>{{ $renter->telephone }}</td>

                            <td>{{ $renter->preferred_type }}</td>

                            <td>
                                ₱{{ number_format($renter->max_rent, 2) }}
                            </td>

                        </tr>

                    @endforeach

                @else

                    <tr>

                        <td colspan="7"
                        class="empty">

                            No renter records found.

                        </td>

                    </tr>

                @endif

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>
