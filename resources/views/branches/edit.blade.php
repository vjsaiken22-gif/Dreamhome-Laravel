<!DOCTYPE html>
<html>

<head>

<title>
    Edit Branch
</title>

<link rel="stylesheet"
href="{{ asset('assets/css/branch.css') }}">

</head>

<body>

<a href="/branches"
class="back-btn">

← Branch List

</a>

<div class="container">

<h1 class="page-title">
    Edit Branch
</h1>

<form action="/branches/update/{{ $branch->branch_no }}"
method="POST"
class="update-form"
onsubmit="return confirm('Update this branch?')">

@csrf

<input type="hidden"
name="branch_no"
value="{{ $branch->branch_no }}">

<input type="text"
name="street"
value="{{ $branch->street }}"
required>

<input type="text"
name="area"
value="{{ $branch->area }}"
required>

<input type="text"
name="city"
value="{{ $branch->city }}"
required>

<input type="text"
name="postcode"
value="{{ $branch->postcode }}"
required>

<input type="text"
name="telephone"
value="{{ $branch->telephone }}"
required>

<input type="text"
name="fax"
value="{{ $branch->fax }}">

<button type="submit"
class="submit-btn">

    Update Branch

</button>

</form>

</div>

</body>
</html>
