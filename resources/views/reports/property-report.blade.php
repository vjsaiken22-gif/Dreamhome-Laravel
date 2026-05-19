<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>
        Property Report
    </title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/report-property.css') }}">

</head>

<body>

<div class="report-container">

    <a href="/dashboard"
    class="back-btn">

        ← Dashboard

    </a>

    <div class="header">

        <h1>
            Property Report
        </h1>

        <button onclick="window.print()"
        class="print-btn">

            Print Report

        </button>

    </div>

    <div class="summary-cards">

        <div class="card">

            <h2>{{ $totalProperties }}</h2>

            <p>Total Properties</p>

        </div>

        <div class="card green">

            <h2>
                ₱{{ number_format($averageRent, 2) }}
            </h2>

            <p>Average Rent</p>

        </div>

    </div>

    <div class="table-container">

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

            @foreach($properties as $property)

                <tr>

                    <td>{{ $property->property_no }}</td>

                    <td>{{ $property->street }}</td>

                    <td>{{ $property->city }}</td>

                    <td>{{ $property->type }}</td>

                    <td>{{ $property->rooms }}</td>

                    <td>
                        ₱{{ number_format($property->rent, 2) }}
                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

</body>
</html>
