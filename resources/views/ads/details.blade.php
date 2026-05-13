<!DOCTYPE html>
<html>

<head>

    <title>Advertisement Details</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/ads.css') }}">

</head>

<body>

<a href="/ads" class="back-btn">
    ← Advertisement List
</a>

<div class="details-container">

    <h1 class="page-title">
        Advertisement Details
    </h1>

    <div class="detail-row">

        <span class="label">
            Ad ID
        </span>

        {{ $ad->ad_id }}

    </div>

    <div class="detail-row">

        <span class="label">
            Property No
        </span>

        {{ $ad->property_no }}

    </div>

    <div class="detail-row">

        <span class="label">
            Platform
        </span>

        {{ $ad->platform }}

    </div>

    <div class="detail-row">

        <span class="label">
            Ad Date
        </span>

        {{ $ad->ad_date }}

    </div>

</div>

</body>
</html>
