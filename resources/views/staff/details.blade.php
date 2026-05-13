<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<title>
    Staff Profile
</title>

<link rel="stylesheet"
href="{{ asset('assets/css/staff.css') }}">

</head>

<body>

<a href="/staff" class="home-button">
    ← Staff List
</a>

<div class="profile-container fade-in">

    <h1>
        Staff Profile
    </h1>

    <div class="profile-info">

        <div class="info-box">
            <span>Staff No</span>

            <strong>
                {{ $staff->staff_no }}
            </strong>
        </div>

        <div class="info-box">
            <span>Name</span>

            <strong>
                {{ $staff->fname }} {{ $staff->lname }}
            </strong>
        </div>

        <div class="info-box">
            <span>Telephone</span>

            <strong>
                {{ $staff->telephone }}
            </strong>
        </div>

        <div class="info-box">
            <span>Address</span>

            <strong>
                {{ $staff->address }}
            </strong>
        </div>

        <div class="info-box">
            <span>Sex</span>

            <strong>
                {{ $staff->sex }}
            </strong>
        </div>

        <div class="info-box">
            <span>Date of Birth</span>

            <strong>
                {{ $staff->dob }}
            </strong>
        </div>

        <div class="info-box">
            <span>Position</span>

            <strong>
                {{ $staff->position }}
            </strong>
        </div>

        <div class="info-box">
            <span>Salary</span>

            <strong>
                ₱{{ number_format($staff->salary, 2) }}
            </strong>
        </div>

        <div class="info-box">
            <span>NIN</span>

            <strong>
                {{ $staff->nin }}
            </strong>
        </div>

        <div class="info-box">
            <span>Branch No</span>

            <strong>
                {{ $staff->branch_no }}
            </strong>
        </div>

        <div class="info-box">
            <span>Date Joined</span>

            <strong>
                {{ $staff->date_joined }}
            </strong>
        </div>

        <div class="info-box">
            <span>Username</span>

            <strong>
                {{ $staff->username }}
            </strong>
        </div>

        <div class="info-box">
            <span>Role</span>

            <strong>
                {{ $staff->role }}
            </strong>
        </div>

    </div>

</div>

<script src="{{ asset('assets/js/staff.js') }}"></script>

</body>
</html>
