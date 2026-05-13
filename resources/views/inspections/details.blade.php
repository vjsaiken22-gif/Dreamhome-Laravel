<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Inspection Details</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/inspection.css') }}">

</head>

<body>

<a href="/inspections" class="back-button">
    ← Inspection List
</a>

<div class="details-container fade-in">

    <h1 class="page-title">
        Inspection Details
    </h1>

    <div class="details-card">

        <div class="detail-row">

            <span class="label">
                Inspection ID
            </span>

            <span>
                {{ $inspection->inspection_id }}
            </span>

        </div>

        <div class="detail-row">

            <span class="label">
                Property No
            </span>

            <span>
                {{ $inspection->property_no }}
            </span>

        </div>

        <div class="detail-row">

            <span class="label">
                Staff No
            </span>

            <span>
                {{ $inspection->staff_no }}
            </span>

        </div>

        <div class="detail-row">

            <span class="label">
                Inspection Date
            </span>

            <span>
                {{ $inspection->inspection_date }}
            </span>

        </div>

        <div class="detail-row">

            <span class="label">
                Comments
            </span>

            <span>
                {{ $inspection->comments }}
            </span>

        </div>

    </div>

</div>

<script src="{{ asset('assets/js/inspection.js') }}"></script>

</body>
</html>
