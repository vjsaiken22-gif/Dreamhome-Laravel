<!DOCTYPE html>
<html>

<head>

    <title>Edit Advertisement</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/ads.css') }}">

</head>

<body>

<a href="/ads" class="back-btn">
    ← Advertisement List
</a>

<div class="form-container">

    <h1 class="page-title">
        Edit Advertisement
    </h1>

    <form action="/ads/update/{{ $ad->ad_id }}"
    method="POST"
    onsubmit="return confirm('Update this advertisement?')">

        @csrf

        <input type="hidden"
        name="ad_id"
        value="{{ $ad->ad_id }}">

        <div class="form-group">

            <label>Property No</label>

            <input type="text"
            name="property_no"
            value="{{ $ad->property_no }}"
            required>

        </div>

        <div class="form-group">

            <label>Platform</label>

            <input type="text"
            name="platform"
            value="{{ $ad->platform }}"
            required>

        </div>

        <div class="form-group">

            <label>Ad Date</label>

            <input type="date"
            name="ad_date"
            value="{{ $ad->ad_date }}"
            required>

        </div>

        <button type="submit"
        class="submit-btn"
        onclick="return confirmUpdate()">

            Update Advertisement

        </button>

    </form>

</div>

<script src="{{ asset('assets/js/ads.js') }}"></script>

</body>
</html>
