<!DOCTYPE html>
<html>

<head>

<title>
    Branch List
</title>

<link rel="stylesheet"
href="{{ asset('assets/css/branch.css') }}">

</head>

<body>

<a href="/dashboard"
class="back-btn">

← Dashboard

</a>

<div class="container">

<h1 class="page-title">
    Branches
</h1>

<a href="/branches/create"
class="add-btn">

    + Add Branch

</a>

<table>

<tr>

<th>Branch No</th>
<th>Street</th>
<th>Area</th>
<th>City</th>
<th>Postcode</th>
<th>Telephone</th>
<th>Fax</th>
<th>Actions</th>

</tr>

@foreach($branches as $branch)

<tr>

<td>{{ $branch->branch_no }}</td>
<td>{{ $branch->street }}</td>
<td>{{ $branch->area }}</td>
<td>{{ $branch->city }}</td>
<td>{{ $branch->postcode }}</td>
<td>{{ $branch->telephone }}</td>
<td>{{ $branch->fax }}</td>

<td>

<div class="action-buttons">

<a href="/branches/details/{{ $branch->branch_no }}"
class="view-btn">

View

</a>

<a href="/branches/edit/{{ $branch->branch_no }}"
class="edit-btn">

Edit

</a>

<a href="/branches/delete/{{ $branch->branch_no }}"
class="delete-btn"
onclick="return confirm('Delete this branch?')">

Delete

</a>

</div>

</td>

</tr>

@endforeach

</table>

</div>

</body>
</html>
