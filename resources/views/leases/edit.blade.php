<!DOCTYPE html>
<html>

<head>

    <title>Edit Lease</title>

    <link rel="stylesheet" href="{{ asset('assets/css/leases.css') }}">

</head>

<body>

<div class="fade-in">

    <a href="/leases" class="home-button">
        ← Lease List
    </a>

    <div class="form-container">

        <h1>Edit Lease</h1>

        <form action="/leases/update/{{ $lease->lease_no }}" method="POST">

            @csrf

            <input type="hidden"
                   name="lease_no"
                   value="{{ $lease->lease_no }}">

            <input type="text"
                   name="property_no"
                   value="{{ $lease->property_no }}"
                   required>

            <input type="text"
                   name="renter_no"
                   value="{{ $lease->renter_no }}"
                   required>

            <input type="text"
                   name="staff_no"
                   value="{{ $lease->staff_no }}"
                   required>

            <input type="number"
                   step="0.01"
                   name="rent"
                   value="{{ $lease->rent }}"
                   required>

            <input type="number"
                   step="0.01"
                   name="deposit"
                   value="{{ $lease->deposit }}"
                   required>

            <select name="payment_method" required>

                <option value="Cash"
                    {{ $lease->payment_method == 'Cash' ? 'selected' : '' }}>
                    Cash
                </option>

                <option value="Card"
                    {{ $lease->payment_method == 'Card' ? 'selected' : '' }}>
                    Card
                </option>

            </select>

            <input type="date"
                   name="start_date"
                   value="{{ $lease->start_date }}"
                   required>

            <input type="date"
                   name="end_date"
                   value="{{ $lease->end_date }}"
                   required>

            <button type="submit">
                Update Lease
            </button>

        </form>

    </div>

</div>

<script src="{{ asset('assets/js/lease.js') }}"></script>

</body>

</html>
