<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Add Inspection</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/inspection.css') }}">

</head>

<body>

<a href="/inspections" class="back-button">
    ← Inspection List
</a>

<div class="form-container fade-in">

    <h1 class="page-title">
        Add Inspection
    </h1>

    <form action="/inspections/store"
    method="POST">

        @csrf

        <div class="form-group">

            <label>Property No</label>

            <input type="text"
            name="property_no"
            required>

        </div>

        <div class="form-group">

            <label>Staff No</label>

            <input type="text"
            name="staff_no"
            required>

        </div>

        <div class="form-group">

            <label>Inspection Date</label>

            <input type="date"
            name="inspection_date"
            required>

        </div>

        <div class="form-group">

            <label>Comments</label>

            <textarea name="comments"
            required></textarea>

        </div>

        <button type="submit"
        class="submit-btn">

            Add Inspection

        </button>

    </form>

</div>

<script src="{{ asset('assets/js/inspection.js') }}"></script>

</body>
</html>
