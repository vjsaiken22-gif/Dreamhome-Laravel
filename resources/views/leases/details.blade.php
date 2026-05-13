<!DOCTYPE html>
<html>

<head>

    <title>Lease Details</title>

    <link rel="stylesheet" href="{{ asset('assets/css/leases.css') }}">

</head>

<body>

<div class="fade-in">

    <a href="/leases" class="home-button">
        ← Lease List
    </a>

    <div class="profile-container">

        <h1>Lease Details</h1>

        <div class="profile-info">

            <div class="info-box">

                <span>Lease No</span>

                <strong>
                    {{ $lease->lease_no }}
                </strong>

            </div>

            <div class="info-box">

                <span>Property</span>

                <strong>
                    {{ $lease->property_no }}
                </strong>

            </div>

            <div class="info-box">

                <span>Renter</span>

                <strong>
                    {{ $lease->renter_no }}
                </strong>

            </div>

            <div class="info-box">

                <span>Staff</span>

                <strong>
                    {{ $lease->staff_no }}
                </strong>

            </div>

            <div class="info-box">

                <span>Rent</span>

                <strong>
                    ₱{{ number_format($lease->rent, 2) }}
                </strong>

            </div>

            <div class="info-box">

                <span>Deposit</span>

                <strong>
                    ₱{{ number_format($lease->deposit, 2) }}
                </strong>

            </div>

            <div class="info-box">

                <span>Payment Method</span>

                <strong>
                    {{ $lease->payment_method }}
                </strong>

            </div>

            <div class="info-box">

                <span>Start Date</span>

                <strong>
                    {{ $lease->start_date }}
                </strong>

            </div>

            <div class="info-box">

                <span>End Date</span>

                <strong>
                    {{ $lease->end_date }}
                </strong>

            </div>

        </div>

    </div>

</div>

<script src="{{ asset('assets/js/lease.js') }}"></script>

</body>

</html>
