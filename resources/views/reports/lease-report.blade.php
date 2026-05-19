<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Lease Report</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/rp-lease.css') }}">

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

            <h1>Lease Report</h1>

            <p>DreamHome Management System</p>

        </div>

        <div class="stats-box">

            <div class="stat-card blue">

                <h2>{{ $totalLeases }}</h2>

                <p>Total Leases</p>

            </div>

            <div class="stat-card green">

                <h2>
                    ₱{{ number_format($totalRent, 2) }}
                </h2>

                <p>Total Lease Revenue</p>

            </div>

        </div>

        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>Lease No</th>
                        <th>Property No</th>
                        <th>Renter No</th>
                        <th>Staff No</th>
                        <th>Rent</th>
                        <th>Deposit</th>
                        <th>Payment Method</th>
                        <th>Start Date</th>
                        <th>End Date</th>

                    </tr>

                </thead>

                <tbody>

                @if($leases->count() > 0)

                    @foreach($leases as $lease)

                        <tr>

                            <td>{{ $lease->lease_no }}</td>

                            <td>{{ $lease->property_no }}</td>

                            <td>{{ $lease->renter_no }}</td>

                            <td>{{ $lease->staff_no }}</td>

                            <td>
                                ₱{{ number_format($lease->rent, 2) }}
                            </td>

                            <td>
                                ₱{{ number_format($lease->deposit, 2) }}
                            </td>

                            <td>{{ $lease->payment_method }}</td>

                            <td>{{ $lease->start_date }}</td>

                            <td>{{ $lease->end_date }}</td>

                        </tr>

                    @endforeach

                @else

                    <tr>

                        <td colspan="9"
                        class="empty">

                            No lease records found.

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
