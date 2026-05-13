<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>DreamHome Dashboard</title>

    <link rel="stylesheet"
    href="/assets/css/style.css">

    <link rel="stylesheet"
    href="/assets/css/dashboard.css">

</head>

<body>

<h2>{{ $role }}</h2>

<div class="container">

    <!-- SIDEBAR -->

    <div class="sidebar">

        <div class="logo">

            <img src="/assets/images/logo/logo.png"
            alt="DreamHome Logo">

        </div>

        <ul>

            <li class="active">
                <a href="/dashboard">🏠 Dashboard</a>
            </li>

            <h4>MANAGEMENT</h4>

            @if($role == 'Admin')

            <li>
                <a href="/properties">🏠 Property</a>
            </li>

            <li>
                <a href="/renters">👥 Renters</a>
            </li>

            <li>
                <a href="/leases">📄 Leases</a>
            </li>

            <li>
                <a href="/viewings">👁️ Viewings</a>
            </li>

            <li>
                <a href="/inspections">📝 Inspections</a>
            </li>

            <li>
                <a href="/ads">📢 Ads</a>
            </li>

            <!-- TEMP ADMIN SECTION -->

            <li>
                <a href="/staff">🧑‍💼 Staff</a>
            </li>

            <li>
                <a href="/payments">💳 Payments</a>
            </li>

            <h4>MASTERS</h4>

            <li>
                <a href="/owners">👤 Owners</a>
            </li>

            <li>
                <a href="/branches">🏢 Branches</a>
            </li>

            <h4>REPORTS</h4>

            <li>
                <a href="/analytics">📈 Analytics</a>
            </li>

            <li>
                <a href="/property">📊 Property</a>
            </li>

            <li>
                <a href="/renters">📋 Renters</a>
            </li>

            <li>
                <a href="/staff">🧾 Staff</a>
            </li>

            <li>
                <a href="/lease">📑 Lease</a>
            </li>

            <li>
                <a href="/payments">💳 Payments</a>
            </li>

            @endif

            @if($role == 'Staff')

            <li>
                <a href="/properties">🏠 Property</a>
            </li>

            <li>
                <a href="/renters">👥 Renters</a>
            </li>

            <li>
                <a href="/leases">📄 Leases</a>
            </li>

            <li>
                <a href="/payments">💳 Payments</a>
            </li>

            @endif

        </ul>

        <div class="logout">

            <a href="/logout" class="sidebar-link">
                Logout
            </a>

        </div>

    </div>

    <!-- MAIN CONTENT -->

    <div class="main-content">

        <!-- BANNER -->

        <div class="top-banner">

            <div class="banner-content">

                <p class="small-text">
                    DreamHome Management System 🏡
                </p>

                <h1>
                    Manage Your<br>
                    <span>Dream</span> Home
                </h1>

                <p class="description">

                    Efficiently manage properties,
                    renters, staff, leases,
                    inspections, and advertisements
                    all in one place.

                </p>

                <div class="welcome-panel">

                    <h2>
                        Welcome Back, {{ $role }} 👋
                    </h2>

                    <p>

                        Monitor system records,
                        manage operations, and
                        oversee daily real estate
                        activities through the
                        DreamHome dashboard.

                    </p>

                </div>

            </div>

        </div>

        <!-- STAT CARDS -->

        <div class="cards">

            <div class="card">

                <h2>{{ $propertyCount }}</h2>

                <p>Total Properties</p>

            </div>

            <div class="card">

                <h2>{{ $renterCount }}</h2>

                <p>Total Renters</p>

            </div>

            <div class="card">

                <h2>{{ $staffCount }}</h2>

                <p>Total Staff</p>

            </div>

        </div>

        <!-- RECENT PROPERTIES -->

        <div class="table-section">

            <div class="table-header">

                <h3>Recent Properties</h3>

                <a href="#"
                class="view-all-btn">

                    View All

                </a>

            </div>

            <table>

                <thead>

                    <tr>

                        <th>Property No</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>Type</th>
                        <th>Rooms</th>
                        <th>Rent</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>PG4</td>
                        <td>Main Street</td>
                        <td>Davao</td>
                        <td>Apartment</td>
                        <td>3</td>
                        <td>₱15,000</td>

                    </tr>

                    <tr>

                        <td>PG5</td>
                        <td>Rose Avenue</td>
                        <td>Cebu</td>
                        <td>House</td>
                        <td>5</td>
                        <td>₱25,000</td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>
