<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Edit Renter</title>

    <link rel="stylesheet"
    href="/assets/css/renter.css">

</head>

<body>

<a href="/renters" class="home-button">
    ← Renter List
</a>

<div class="form-container">

    <h1>Edit Renter</h1>

    <form action="/renters/update/{{ $renter->renter_no }}"
    method="POST">

        @csrf

        <input type="hidden"
        name="renter_no"
        value="{{ $renter->renter_no }}">

        <div class="form-group">

            <input type="text"
            name="fname"
            value="{{ $renter->fname }}"
            required>

        </div>

        <div class="form-group">

            <input type="text"
            name="lname"
            value="{{ $renter->lname }}"
            required>

        </div>

        <div class="form-group">

            <input type="text"
            name="address"
            value="{{ $renter->address }}"
            required>

        </div>

        <div class="form-group">

            <input type="text"
            name="telephone"
            value="{{ $renter->telephone }}"
            required>

        </div>

        <div class="form-group">

            <input type="text"
            name="preferred_type"
            value="{{ $renter->preferred_type }}"
            required>

        </div>

        <div class="form-group">

            <input type="number"
            name="max_rent"
            value="{{ $renter->max_rent }}"
            required>

        </div>

        <button type="submit"
        class="submit-btn">

            Update Renter

        </button>

    </form>

</div>

</body>
</html>
