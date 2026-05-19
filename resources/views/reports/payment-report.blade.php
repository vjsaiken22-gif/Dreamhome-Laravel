<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Payment Report</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/rp-payment.css') }}">

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

            <h1>Payment Report</h1>

            <p>DreamHome Management System</p>

        </div>

        <div class="stats-box">

            <div class="stat-card blue">

                <h2>{{ $totalPayments }}</h2>

                <p>Total Payments</p>

            </div>

            <div class="stat-card green">

                <h2>
                    ₱{{ number_format($totalRevenue, 2) }}
                </h2>

                <p>Total Revenue</p>

            </div>

        </div>

        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>Payment ID</th>
                        <th>Lease No</th>
                        <th>Payment Date</th>
                        <th>Amount</th>
                        <th>Method</th>
                        <th>Status</th>

                    </tr>

                </thead>

                <tbody>

                @if($payments->count() > 0)

                    @foreach($payments as $payment)

                        <tr>

                            <td>{{ $payment->payment_id }}</td>

                            <td>{{ $payment->lease_no }}</td>

                            <td>{{ $payment->payment_date }}</td>

                            <td>
                                ₱{{ number_format($payment->amount, 2) }}
                            </td>

                            <td>{{ $payment->payment_method }}</td>

                            <td>{{ $payment->payment_status }}</td>

                        </tr>

                    @endforeach

                @else

                    <tr>

                        <td colspan="6"
                        class="empty">

                            No payment records found.

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
