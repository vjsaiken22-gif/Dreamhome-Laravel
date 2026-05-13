<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Renter Profile</title>

    <link rel="stylesheet"
    href="/assets/css/renter.css">

</head>

<body>

<a href="/renters" class="home-button">
    ← Renter List
</a>

<div class="profile-card">

    <div class="profile-header">

        <div class="profile-avatar">

            {{ strtoupper(substr($renter->fname, 0, 1)) }}

        </div>

        <div>

            <h1>

                {{ $renter->fname }}
                {{ $renter->lname }}

            </h1>

            <p>

                Renter ID:
                {{ $renter->renter_no }}

            </p>

        </div>

    </div>

    <div class="profile-info">

        <div class="info-box">

            <span>Address</span>

            <strong>

                {{ $renter->address }}

            </strong>

        </div>

        <div class="info-box">

            <span>Telephone</span>

            <strong>

                {{ $renter->telephone }}

            </strong>

        </div>

        <div class="info-box">

            <span>Preferred Type</span>

            <strong>

                {{ $renter->preferred_type }}

            </strong>

        </div>

        <div class="info-box">

            <span>Maximum Rent</span>

            <strong>

                ₱{{ number_format($renter->max_rent, 2) }}

            </strong>

        </div>

    </div>

</div>

</body>
</html>
