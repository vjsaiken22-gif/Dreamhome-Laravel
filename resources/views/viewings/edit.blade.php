<!DOCTYPE html>
<html>

<head>

    <title>Edit Viewing</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/viewing.css') }}">

</head>

<body>

<a href="/viewings" class="back-btn">
    ← Viewing List
</a>

<br><br>

<div class="form-container">

    <h1 class="page-title">
        Edit Viewing
    </h1>

    <form action="/viewings/update/{{ $viewing->viewing_id }}"
    method="POST"
    onsubmit="return confirm('Save changes to this viewing?')">

        @csrf

        <input type="hidden"
        name="viewing_id"
        value="{{ $viewing->viewing_id }}">

        <div class="form-group">

            <label>Renter No</label>

            <input type="text"
            name="renter_no"
            value="{{ $viewing->renter_no }}"
            required>

        </div>

        <div class="form-group">

            <label>Property No</label>

            <input type="text"
            name="property_no"
            value="{{ $viewing->property_no }}"
            required>

        </div>

        <div class="form-group">

            <label>View Date</label>

            <input type="date"
            name="view_date"
            value="{{ $viewing->view_date }}"
            required>

        </div>

        <div class="form-group">

            <label>Comments</label>

            <textarea name="comments">{{ $viewing->comments }}</textarea>

        </div>

        <button type="submit"
        class="submit-btn">

            Update Viewing

        </button>

    </form>

</div>

</body>
</html>
