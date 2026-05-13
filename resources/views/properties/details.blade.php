<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Property Details</title>

    <link rel="stylesheet"
          href="/assets/css/property.css">

</head>

<body>

<a href="/properties"
   class="home-button">
    ← Property List
</a>

<div class="property-profile-card">

    <div class="property-header">

        <div class="property-avatar">
            🏠
        </div>

        <div>

            <h1>
                {{ $property->property_no }}
            </h1>

            <p>
                Property Details
            </p>

        </div>

    </div>

    <div class="property-info">

        <div class="property-box">

            <span>Street</span>

            <strong>
                {{ $property->street }}
            </strong>

        </div>

        <div class="property-box">

            <span>City</span>

            <strong>
                {{ $property->city }}
            </strong>

        </div>

        <div class="property-box">

            <span>Property Type</span>

            <strong>
                {{ $property->type }}
            </strong>

        </div>

        <div class="property-box">

            <span>Rooms</span>

            <strong>
                {{ $property->rooms }}
            </strong>

        </div>

        <div class="property-box">

            <span>Monthly Rent</span>

            <strong>
                ₱{{ number_format($property->rent, 2) }}
            </strong>

        </div>

    </div>

</div>

</body>
</html>
