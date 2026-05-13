<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Renter List</title>

    <link rel="stylesheet" href="/assets/css/renter.css">

</head>

<body>

<a href="/dashboard" class="home-button">
    ← Dashboard
</a>

<div class="page-container">

    <div class="page-header">

        <h1 class="page-title">
            Renter List
        </h1>

        <a href="/renters/create" class="add-btn">
            + Add Renter
        </a>

    </div>

    <div class="table-container">

        <table>

            <thead>

                <tr>

                    <th>Renter No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Telephone</th>
                    <th>Preferred Type</th>
                    <th>Max Rent</th>
                    <th>Actions</th>

                </tr>

            </thead>

            <tbody>

            @foreach($renters as $row)

                <tr>

                    <td>{{ $row->renter_no }}</td>

                    <td>
                        {{ $row->fname }} {{ $row->lname }}
                    </td>

                    <td>{{ $row->address }}</td>

                    <td>{{ $row->telephone }}</td>

                    <td>{{ $row->preferred_type }}</td>

                    <td>
                        ₱{{ number_format($row->max_rent, 2) }}
                    </td>

                    <td class="action-links">

                        <a class="view-link"
                        href="/renters/details/{{ $row->renter_no }}">
                            View
                        </a>

                        <a class="edit-link edit-btn"
                        href="/renters/edit/{{ $row->renter_no }}">
                            Edit
                        </a>

                        <a class="delete-link delete-btn"
                        href="/renters/delete/{{ $row->renter_no }}">
                            Delete
                        </a>

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

<script src="/assets/js/renter.js"></script>

</body>
</html>
