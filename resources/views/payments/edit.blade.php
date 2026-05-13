<!DOCTYPE html>
<html>

<head>

    <title>
        Edit Payment
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
    Edit Payment
</h1>

<form action="/payments/update/{{ $payment->payment_id }}"
method="POST"
class="update-form"
onsubmit="return confirm('Update this payment?')">

    @csrf

    <input type="hidden"
    name="payment_id"
    value="{{ $payment->payment_id }}">

    <input type="text"
    name="lease_no"
    value="{{ $payment->lease_no }}"
    required>

    <input type="date"
    name="payment_date"
    value="{{ $payment->payment_date }}"
    required>

    <input type="number"
    step="0.01"
    name="amount"
    value="{{ $payment->amount }}"
    required>

    <input type="text"
    name="payment_method"
    value="{{ $payment->payment_method }}"
    required>

    <input type="text"
    name="payment_status"
    value="{{ $payment->payment_status }}"
    required>

    <button type="submit"
    class="submit-btn">

        Update Payment

    </button>

</form>

</div>

</body>
</html>
