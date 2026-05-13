<!DOCTYPE html>
<html>

<head>

    <title>
        Payment List
    </title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/payment.css') }}">

</head>

<body>

<a href="/dashboard" class="back-btn">
    ← Dashboard
</a>

<div class="container">

    <div class="header-section">

        <h1 class="page-title">
            Payments
        </h1>

        <a href="/payments/create"
        class="add-btn">

            + Add Payment

        </a>

    </div>

    <table>

        <thead>

            <tr>

                <th>Payment ID</th>
                <th>Lease No</th>
                <th>Payment Date</th>
                <th>Amount</th>
                <th>Method</th>
                <th>Status</th>
                <th>Actions</th>

            </tr>

        </thead>

        <tbody>

        @foreach($payments as $payment)

            <tr>

                <td>
                    {{ $payment->payment_id }}
                </td>

                <td>
                    {{ $payment->lease_no }}
                </td>

                <td>
                    {{ $payment->payment_date }}
                </td>

                <td>
                    ₱{{ number_format($payment->amount, 2) }}
                </td>

                <td>
                    {{ $payment->payment_method }}
                </td>

                <td>
                    {{ $payment->payment_status }}
                </td>

                <td class="action-buttons">

                    <a href="/payments/details/{{ $payment->payment_id }}"
                    class="view-btn">

                        View

                    </a>

                    <a href="/payments/edit/{{ $payment->payment_id }}"
                    class="edit-btn">

                        Edit

                    </a>

                    <a href="/payments/delete/{{ $payment->payment_id }}"
                    class="delete-btn"
                    onclick="return confirm('Delete this payment?')">

                        Delete

                    </a>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>

</body>
</html>
