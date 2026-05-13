<!DOCTYPE html>
<html>

<head>

    <title>Lease List</title>

    <link rel="stylesheet" href="{{ asset('assets/css/leases.css') }}">

</head>

<body>

<div class="fade-in">

    <a href="/dashboard" class="home-button">
        ← Dashboard
    </a>

    <div class="page-header">

        <h1>Lease List</h1>

        <a href="/leases/create" class="add-btn">
            + Add Lease
        </a>

    </div>

    <div class="table-container">

        <table>

            <thead>

                <tr>

                    <th>Lease No</th>
                    <th>Property</th>
                    <th>Renter</th>
                    <th>Staff</th>
                    <th>Rent</th>
                    <th>Deposit</th>
                    <th>Payment</th>
                    <th>Actions</th>

                </tr>

            </thead>

            <tbody>

            @foreach($leases as $lease)

                <tr>

                    <td>{{ $lease->lease_no }}</td>

                    <td>{{ $lease->property_no }}</td>

                    <td>{{ $lease->renter_no }}</td>

                    <td>{{ $lease->staff_no }}</td>

                    <td>
                        ₱{{ number_format($lease->rent, 2) }}
                    </td>

                    <td>
                        ₱{{ number_format($lease->deposit, 2) }}
                    </td>

                    <td>{{ $lease->payment_method }}</td>

                    <td class="action-links">

                        <a href="/leases/details/{{ $lease->lease_no }}">
                            View
                        </a>

                        <a href="/leases/edit/{{ $lease->lease_no }}">
                            Edit
                        </a>

                        <a href="/leases/delete/{{ $lease->lease_no }}">
                            Delete
                        </a>

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

<script src="{{ asset('assets/js/lease.js') }}"></script>

</body>

</html>
