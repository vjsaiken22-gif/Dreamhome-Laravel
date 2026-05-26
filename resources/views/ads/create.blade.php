<!DOCTYPE html>
<html>

<head>

    <title>Add Advertisement</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/ads.css') }}">

</head>

<body>

<a href="/ads" class="back-btn">
    ← Advertisement List
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

    <h1 class="page-title">
        Add Advertisement
    </h1>

    <form action="/ads/store"
    method="POST"
    onsubmit="return confirm('Add this advertisement?')">

        @csrf

        <div class="form-group">

            <label>Property No</label>

            <input type="text"
            name="property_no"
            required>

        </div>

        <div class="form-group">

            <label>Platform</label>

            <input type="text"
            name="platform"
            required>

        </div>

        <div class="form-group">

            <label>Ad Date</label>

            <input type="date"
            name="ad_date"
            required>

        </div>

        <button type="submit"
        class="submit-btn"
        onclick="return confirmAdd()">

            Add Advertisement

        </button>

    </form>

</div>

<script src="{{ asset('assets/js/ads.js') }}"></script>

</body>
</html>
