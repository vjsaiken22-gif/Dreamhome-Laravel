<!DOCTYPE html>
<html>

<head>

    <title>
        Add Owner
    </title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/owner.css') }}">

</head>

<body>

<a href="/owners" class="back-btn">
    ← Owner List
</a>

<div class="container">

    @if(session('error'))
        <div style="color:red; margin-bottom:10px;">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div style="color:green; margin-bottom:10px;">
            {{ session('success') }}
        </div>
    @endif

<h1 class="page-title">
    Add Owner
</h1>

<form action="/owners/store"
method="POST">

    @csrf

    <input type="text"
    name="owner_no"
    placeholder="Owner Number"
    required>

    <input type="text"
    name="fname"
    placeholder="First Name"
    required>

    <input type="text"
    name="lname"
    placeholder="Last Name"
    required>

    <input type="text"
    name="address"
    placeholder="Address"
    required>

    <input type="text"
    name="telephone"
    placeholder="Telephone"
    required>

    <button type="submit"
    class="submit-btn">

        Add Owner

    </button>

</form>

</div>

</body>
</html>
