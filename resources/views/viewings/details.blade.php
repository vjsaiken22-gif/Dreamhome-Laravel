<!DOCTYPE html>
<html>

<head>

    <title>Viewing Details</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/viewing.css') }}">

</head>

<body>

<a href="/viewings" class="back-btn">
    ← Viewing List
</a>

<br><br>

<div class="details-container">

    <h1 class="page-title" style="color:#222;">
        Viewing Details
    </h1>

    <div class="detail-row">

        <div class="detail-label">
            Viewing ID
        </div>

        <div class="detail-value">
            {{ $viewing->viewing_id }}
        </div>

    </div>

    <div class="detail-row">

        <div class="detail-label">
            Renter No
        </div>

        <div class="detail-value">
            {{ $viewing->renter_no }}
        </div>

    </div>

    <div class="detail-row">

        <div class="detail-label">
            Property No
        </div>

        <div class="detail-value">
            {{ $viewing->property_no }}
        </div>

    </div>

    <div class="detail-row">

        <div class="detail-label">
            View Date
        </div>

        <div class="detail-value">
            {{ $viewing->view_date }}
        </div>

    </div>

    <div class="detail-row">

        <div class="detail-label">
            Comments
        </div>

        <div class="detail-value">
            {{ $viewing->comments }}
        </div>

    </div>

</div>

</body>
</html>
