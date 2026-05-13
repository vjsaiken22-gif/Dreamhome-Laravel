<!DOCTYPE html>
<html>

<head>

    <title>
        Edit Owner
    </title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/owner.css') }}">

</head>

<body>

<a href="/owners" class="back-btn">
    ← Owner List
</a>

<div class="container">

<h1 class="page-title">
    Edit Owner
</h1>

<form action="/owners/update/{{ $owner->owner_no }}"
method="POST"
class="update-form">

    @csrf

    <input type="hidden"
    name="owner_no"
    value="{{ $owner->owner_no }}">

    <input type="text"
    name="fname"
    value="{{ $owner->fname }}"
    required>

    <input type="text"
    name="lname"
    value="{{ $owner->lname }}"
    required>

    <input type="text"
    name="address"
    value="{{ $owner->address }}"
    required>

    <input type="text"
    name="telephone"
    value="{{ $owner->telephone }}"
    required>

    <button type="submit"
    class="submit-btn">

        Update Owner

    </button>

</form>

</div>

<script src="{{ asset('js/owner.js') }}"></script>

</body>
</html>
