<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Edit Inspection</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/inspection.css') }}">

</head>

<body>

<a href="/inspections" class="back-button">
    ← Inspection List
</a>

<div class="form-container fade-in">

    <h1 class="page-title">
        Edit Inspection
    </h1>

    <form action="/inspections/update/{{ $inspection->inspection_id }}"
    method="POST"
    id="editInspectionForm">

        @csrf

        <input type="hidden"
        name="inspection_id"
        value="{{ $inspection->inspection_id }}">

        <div class="form-group">

            <label>Property No</label>

            <input type="text"
            name="property_no"
            value="{{ $inspection->property_no }}"
            required>

        </div>

        <div class="form-group">

            <label>Staff No</label>

            <input type="text"
            name="staff_no"
            value="{{ $inspection->staff_no }}"
            required>

        </div>

        <div class="form-group">

            <label>Inspection Date</label>

            <input type="date"
            name="inspection_date"
            value="{{ $inspection->inspection_date }}"
            required>

        </div>

        <div class="form-group">

            <label>Comments</label>

            <textarea name="comments"
            required>{{ $inspection->comments }}</textarea>

        </div>

        <button type="submit"
        class="submit-btn">

            Update Inspection

        </button>

    </form>

</div>

<script src="{{ asset('assets/js/inspection.js') }}"></script>

</body>
</html>
