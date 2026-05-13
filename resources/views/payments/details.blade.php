<!DOCTYPE html>
<html>

<head>

    <title>
        Payment Details
    </title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/payment.css') }}">

</head>

<body>

<a href="/payments" class="back-btn">
    ← Payment List
</a>

<div class="container">

    <h1 class="page-title">
        Payment Details
    </h1>

    <div class="details-box">

        <p>
            <strong>Payment ID:</strong>
            {{ $payment->payment_id }}
        </p>

        <p>
            <strong>Lease No:</strong>
            {{ $payment->lease_no }}
        </p>

        <p>
            <strong>Payment Date:</strong>
            {{ $payment->payment_date }}
        </p>

        <p>
            <strong>Amount:</strong>
            ₱{{ number_format($payment->amount, 2) }}
        </p>

        <p>
            <strong>Payment Method:</strong>
            {{ $payment->payment_method }}
        </p>

        <p>
            <strong>Status:</strong>
            {{ $payment->payment_status }}
        </p>

    </div>

</div>

</body>
</html>
