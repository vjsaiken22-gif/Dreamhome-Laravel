<!DOCTYPE html>
<html>

<head>

    <title>
        Owner Profile
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
    Owner Profile
</h1>

<div class="profile-info">

<p>
<b>Owner No:</b>
{{ $owner->owner_no }}
</p>

<p>
<b>First Name:</b>
{{ $owner->fname }}
</p>

<p>
<b>Last Name:</b>
{{ $owner->lname }}
</p>

<p>
<b>Address:</b>
{{ $owner->address }}
</p>

<p>
<b>Telephone:</b>
{{ $owner->telephone }}
</p>

</div>

</div>

</body>
</html>
