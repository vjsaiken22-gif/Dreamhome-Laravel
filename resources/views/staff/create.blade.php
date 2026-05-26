<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Add Staff</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/staff.css') }}">

</head>

<body>

<a href="/staff" class="home-button">
    ← Staff List
</a>

<div class="form-container">

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

<h1>
    Add Staff
</h1>

<form action="/staff/store"
method="POST">

    @csrf

    <input type="text"
    name="staff_no"
    placeholder="Staff Number"
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

    <select name="sex" required>

        <option value="">
            Select Sex
        </option>

        <option value="Male">
            Male
        </option>

        <option value="Female">
            Female
        </option>

    </select>

    <input type="date"
    name="dob"
    required>

    <input type="text"
    name="nin"
    placeholder="NIN"
    required>

    <input type="text"
    name="position"
    placeholder="Position"
    required>

    <input type="number"
    step="0.01"
    name="salary"
    placeholder="Salary"
    required>

    <input type="text"
    name="branch_no"
    placeholder="Branch Number"
    required>

    <input type="date"
    name="date_joined"
    required>

    <input type="text"
    name="username"
    placeholder="Username"
    required>

    <input type="password"
    name="password"
    placeholder="Password"
    required>

    <select name="role" required>

        <option value="">
            Select Role
        </option>

        <option value="Admin">
            Admin
        </option>

        <option value="Staff">
            Staff
        </option>

    </select>

    <button type="submit">
        Add Staff
    </button>

</form>

</div>

</body>
</html>
