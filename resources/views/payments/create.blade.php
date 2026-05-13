<!DOCTYPE html>
<html>

<head>

    <title>
        Add Payment
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
        Add Payment
    </h1>

    <form action="/payments/store"
    method="POST"
    class="update-form">

        @csrf

        <input type="text"
        name="lease_no"
        placeholder="Lease No"
        required>

        <input type="date"
        name="payment_date"
        required>

        <input type="number"
        step="0.01"
        name="amount"
        placeholder="Amount"
        required>

        <input type="text"
        name="payment_method"
        placeholder="Payment Method"
        required>

        <input type="text"
        name="payment_status"
        placeholder="Payment Status"
        required>

        <button type="submit"
        class="submit-btn">

            Add Payment

        </button>

    </form>

</div>

</body>
</html>
