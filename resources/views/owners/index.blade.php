<!DOCTYPE html>
<html>

<head>

    <title>
        Owner Management
    </title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/owner.css') }}">

</head>

<body>

<a href="/dashboard" class="back-btn">
    ← Dashboard
</a>

<div class="container">

<h1 class="page-title">
    Property Owners
</h1>

<a href="/owners/create"
class="add-btn">

    + Add Owner

</a>

<table>

<thead>

<tr>

    <th>Owner No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Telephone</th>
    <th>Actions</th>

</tr>

</thead>

<tbody>

@foreach($owners as $owner)

<tr>

    <td>
        {{ $owner->owner_no }}
    </td>

    <td>
        {{ $owner->fname }}
    </td>

    <td>
        {{ $owner->lname }}
    </td>

    <td>
        {{ $owner->address }}
    </td>

    <td>
        {{ $owner->telephone }}
    </td>

    <td>

        <a href="/owners/details/{{ $owner->owner_no }}"
        class="action-btn view-btn">

            View

        </a>

        <a href="/owners/edit/{{ $owner->owner_no }}"
        class="action-btn edit-btn">

            Edit

        </a>

        <a href="/owners/delete/{{ $owner->owner_no }}"
        class="action-btn delete-btn"
        onclick="return confirm('Delete this owner?')">

            Delete

        </a>

    </td>

</tr>

@endforeach

</tbody>

</table>

</div>

<script src="{{ asset('assets/js/owner.js') }}"></script>

</body>
</html>
