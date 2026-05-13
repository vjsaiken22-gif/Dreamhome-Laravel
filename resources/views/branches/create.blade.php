<!DOCTYPE html>
<html>

<head>

<title>
    Add Branch
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
    Add Branch
</h1>

<form action="/branches/store"
method="POST"
class="update-form">

@csrf

<input type="text"
name="branch_no"
placeholder="Branch No"
required>

<input type="text"
name="street"
placeholder="Street"
required>

<input type="text"
name="area"
placeholder="Area"
required>

<input type="text"
name="city"
placeholder="City"
required>

<input type="text"
name="postcode"
placeholder="Postcode"
required>

<input type="text"
name="telephone"
placeholder="Telephone"
required>

<input type="text"
name="fax"
placeholder="Fax">

<button type="submit"
class="submit-btn">

    Add Branch

</button>

</form>

</div>

</body>
</html>
