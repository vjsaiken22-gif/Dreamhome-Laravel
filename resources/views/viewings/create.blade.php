<!DOCTYPE html>
<html>

<head>

    <title>Add Viewing</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/viewing.css') }}">

</head>

<body>

<a href="/viewings" class="back-btn">
    ← Viewing List
</a>

<br><br>

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

    <h1 class="page-title">
        Add Viewing
    </h1>

    <form action="/viewings/store"
    method="POST"
    onsubmit="return confirm('Add this viewing record?')">

        @csrf

        <div class="form-group">

            <label>Renter No</label>

            <input type="text"
            name="renter_no"
            required>

        </div>

        <div class="form-group">

            <label>Property No</label>

            <input type="text"
            name="property_no"
            required>

        </div>

        <div class="form-group">

            <label>View Date</label>

            <input type="date"
            name="view_date"
            required>

        </div>

        <div class="form-group">

            <label>Comments</label>

            <textarea name="comments"></textarea>

        </div>

        <button type="submit"
        class="submit-btn">

            Save Viewing

        </button>

    </form>

</div>

</body>
</html>
