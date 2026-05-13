<!DOCTYPE html>
<html>

<head>

    <title>Add Lease</title>

    <link rel="stylesheet" href="{{ asset('assets/css/leases.css') }}">

</head>

<body>

<div class="fade-in">

    <a href="/leases" class="home-button">
        ← Lease List
    </a>

    <div class="form-container">

        <h1>Add Lease</h1>

        <form action="/leases/store" method="POST">

            @csrf

            <input type="text"
                   name="lease_no"
                   placeholder="Lease Number"
                   required>

            <input type="text"
                   name="property_no"
                   placeholder="Property Number"
                   required>

            <input type="text"
                   name="renter_no"
                   placeholder="Renter Number"
                   required>

            <input type="text"
                   name="staff_no"
                   placeholder="Staff Number"
                   required>

            <input type="number"
                   step="0.01"
                   name="rent"
                   placeholder="Rent"
                   required>

            <input type="number"
                   step="0.01"
                   name="deposit"
                   placeholder="Deposit"
                   required>

            <select name="payment_method" required>

                <option value="">
                    Select Payment
                </option>

                <option value="Cash">
                    Cash
                </option>

                <option value="Card">
                    Card
                </option>

            </select>

            <input type="date"
                   name="start_date"
                   required>

            <input type="date"
                   name="end_date"
                   required>

            <button type="submit">
                Add Lease
            </button>

        </form>

    </div>

</div>

<script src="{{ asset('assets/js/lease.js') }}"></script>

</body>

</html>
