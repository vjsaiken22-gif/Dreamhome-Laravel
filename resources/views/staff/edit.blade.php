<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Edit Staff</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/staff.css') }}">

</head>

<body>

<a href="/staff" class="home-button">
    ← Staff List
</a>

<div class="form-container">

<h1>
    Edit Staff
</h1>

<form action="/staff/update/{{ $staff->staff_no }}"
method="POST">

    @csrf

    <input type="hidden"
    name="staff_no"
    value="{{ $staff->staff_no }}">

    <input type="text"
    name="fname"
    value="{{ $staff->fname }}"
    required>

    <input type="text"
    name="lname"
    value="{{ $staff->lname }}"
    required>

    <input type="text"
    name="address"
    value="{{ $staff->address }}"
    required>

    <input type="text"
    name="telephone"
    value="{{ $staff->telephone }}"
    required>

    <select name="sex" required>

        <option value="Male"
        {{ $staff->sex == 'Male' ? 'selected' : '' }}>
            Male
        </option>

        <option value="Female"
        {{ $staff->sex == 'Female' ? 'selected' : '' }}>
            Female
        </option>

    </select>

    <input type="date"
    name="dob"
    value="{{ $staff->dob }}"
    required>

    <input type="text"
    name="nin"
    value="{{ $staff->nin }}"
    required>

    <input type="text"
    name="position"
    value="{{ $staff->position }}"
    required>

    <input type="number"
    step="0.01"
    name="salary"
    value="{{ $staff->salary }}"
    required>

    <input type="text"
    name="branch_no"
    value="{{ $staff->branch_no }}"
    required>

    <input type="date"
    name="date_joined"
    value="{{ $staff->date_joined }}"
    required>

    <input type="text"
    name="username"
    value="{{ $staff->username }}"
    required>

    <input type="text"
    name="password"
    value="{{ $staff->password }}"
    required>

    <select name="role" required>

        <option value="Admin"
        {{ $staff->role == 'Admin' ? 'selected' : '' }}>
            Admin
        </option>

        <option value="Staff"
        {{ $staff->role == 'Staff' ? 'selected' : '' }}>
            Staff
        </option>

    </select>

    <button type="submit">
        Update Staff
    </button>

</form>

</div>

<script src="{{ asset('assets/js/staff.js') }}"></script>

</body>
</html>
