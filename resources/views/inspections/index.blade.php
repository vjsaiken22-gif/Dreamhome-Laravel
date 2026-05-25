<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Inspection Management</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/inspection.css') }}">

</head>

<body>

<a href="/dashboard" class="back-btn">
    ← Dashboard
</a>

<div class="list-container fade-in">

    <div class="list-header">

        <h1 class="page-title">
            Inspection List
        </h1>

        <a href="/inspections/create" class="add-button">
            + Add Inspection
        </a>

    </div>

    <table>

        <thead>

            <tr>

                <th>ID</th>
                <th>Property No</th>
                <th>Staff No</th>
                <th>Inspection Date</th>
                <th>Comments</th>
                <th>Actions</th>

            </tr>

        </thead>

        <tbody>

        @foreach($inspections as $row)

            <tr>

                <td>
                    {{ $row->inspection_id }}
                </td>

                <td>
                    {{ $row->property_no }}
                </td>

                <td>
                    {{ $row->staff_no }}
                </td>

                <td>
                    {{ $row->inspection_date }}
                </td>

                <td>
                    {{ $row->comments }}
                </td>

                <td class="actions">

                    <a href="/inspections/details/{{ $row->inspection_id }}"
                    class="view-btn">

                        View

                    </a>

                    <a href="/inspections/edit/{{ $row->inspection_id }}"
                    class="edit-btn">

                        Edit

                    </a>

                    <a href="/inspections/delete/{{ $row->inspection_id }}"
                    class="delete-btn delete-link">

                        Delete

                    </a>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>

<script src="{{ asset('assets/js/inspection.js') }}"></script>

</body>
</html>
