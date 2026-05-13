<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Staff List</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/staff.css') }}">

</head>

<body>

<a href="/dashboard" class="home-button">
    ← Dashboard
</a>

<div class="page-header">

    <h1>
        Staff List
    </h1>

    <a href="/staff/create" class="add-btn">
        + Add Staff
    </a>

</div>

<div class="table-container">

<table>

    <thead>

        <tr>

            <th>Staff No</th>
            <th>Name</th>
            <th>Telephone</th>
            <th>Position</th>
            <th>Branch</th>
            <th>Salary</th>
            <th>Actions</th>

        </tr>

    </thead>

    <tbody>

    @foreach($staffs as $row)

        <tr>

            <td>
                {{ $row->staff_no }}
            </td>

            <td>
                {{ $row->fname }} {{ $row->lname }}
            </td>

            <td>
                {{ $row->telephone }}
            </td>

            <td>
                {{ $row->position }}
            </td>

            <td>
                {{ $row->branch_no }}
            </td>

            <td>
                ₱{{ number_format($row->salary, 2) }}
            </td>

            <td class="action-links">

                <a href="/staff/details/{{ $row->staff_no }}">
                    View
                </a>

                <a href="/staff/edit/{{ $row->staff_no }}"
                class="edit-btn">

                    Edit

                </a>

                <a href="/staff/delete/{{ $row->staff_no }}"
                class="delete-btn">

                    Delete

                </a>

            </td>

        </tr>

    @endforeach

    </tbody>

</table>

</div>

<script src="{{ asset('assets/js/staff.js') }}"></script>

</body>
</html>
