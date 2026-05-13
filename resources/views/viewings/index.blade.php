<!DOCTYPE html>
<html>

<head>

    <title>Viewing List</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/viewing.css') }}">

</head>

<body>

<div class="top-bar">

    <h1 class="page-title">
        Viewing List
    </h1>

    <div style="display:flex; gap:15px;">

        <a href="/dashboard" class="back-btn">
            ← Dashboard
        </a>

        <a href="/viewings/create" class="add-btn">
            + Add Viewing
        </a>

    </div>

</div>

<div class="table-container">

    <table>

        <thead>

            <tr>

                <th>ID</th>
                <th>Renter No</th>
                <th>Property No</th>
                <th>View Date</th>
                <th>Actions</th>

            </tr>

        </thead>

        <tbody>

        @foreach($viewings as $row)

            <tr>

                <td>
                    {{ $row->viewing_id }}
                </td>

                <td>
                    {{ $row->renter_no }}
                </td>

                <td>
                    {{ $row->property_no }}
                </td>

                <td>
                    {{ $row->view_date }}
                </td>

                <td class="action-links">

                    <a class="view-link"
                    href="/viewings/details/{{ $row->viewing_id }}">
                        View
                    </a>

                    <a class="edit-link"
                    href="/viewings/edit/{{ $row->viewing_id }}">
                        Edit
                    </a>

                    <a class="delete-link"
                    href="/viewings/delete/{{ $row->viewing_id }}"
                    onclick="return confirm('Delete this viewing record?')">
                        Delete
                    </a>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>

<script src="{{ asset('assets/js/viewing.js') }}"></script>

</body>
</html>
