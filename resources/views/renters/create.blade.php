<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Add Renter</title>

    <link rel="stylesheet"
    href="/assets/css/renter.css">

</head>

<body>

<a href="/renters" class="home-button">
    ← Renter List
</a>

<div class="form-container">

    @if(session('error'))
        <div style="color:red; margin-bottom:10px;">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div style="color:green; margin-bottom:10px;">
            {{ session('success') }}
        </div>
    @endif

    <h1>Add Renter</h1>

    <form action="/renters/store"
    method="POST">

        @csrf

        <div class="form-group">

            <input type="text"
            name="renter_no"
            placeholder="Renter Number"
            required>

        </div>

        <div class="form-group">

            <input type="text"
            name="fname"
            placeholder="First Name"
            required>

        </div>

        <div class="form-group">

            <input type="text"
            name="lname"
            placeholder="Last Name"
            required>

        </div>

        <div class="form-group">

            <input type="text"
            name="address"
            placeholder="Address"
            required>

        </div>

        <div class="form-group">

            <input type="text"
            name="telephone"
            placeholder="Telephone Number"
            required>

        </div>

        <div class="form-group">

            <input type="text"
            name="preferred_type"
            placeholder="Preferred Property Type"
            required>

        </div>

        <div class="form-group">

            <input type="number"
            name="max_rent"
            placeholder="Maximum Rent"
            required>

        </div>

        <button type="submit"
        class="submit-btn">

            Add Renter

        </button>

    </form>

</div>

</body>
</html>
