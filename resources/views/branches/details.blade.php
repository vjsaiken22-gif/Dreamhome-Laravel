<!DOCTYPE html>
<html>

<head>

<title>
    Branch Details
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
    Branch Details
</h1>

<div class="details-box">

<p>
<strong>Branch No:</strong>
{{ $branch->branch_no }}
</p>

<p>
<strong>Street:</strong>
{{ $branch->street }}
</p>

<p>
<strong>Area:</strong>
{{ $branch->area }}
</p>

<p>
<strong>City:</strong>
{{ $branch->city }}
</p>

<p>
<strong>Postcode:</strong>
{{ $branch->postcode }}
</p>

<p>
<strong>Telephone:</strong>
{{ $branch->telephone }}
</p>

<p>
<strong>Fax:</strong>
{{ $branch->fax }}
</p>

</div>

</div>

</body>
</html>
