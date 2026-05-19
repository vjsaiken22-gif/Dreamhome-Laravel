<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Staff Report</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/rp-staff.css') }}">

</head>

<body>

<div class="report-container">

    <div class="report-card">

        <div class="top-bar">

            <a href="/dashboard"
            class="back-btn">

                ← Dashboard

            </a>

            <button class="print-btn"
            onclick="window.print()">

                Print Report

            </button>

        </div>

        <div class="report-header">

            <h1>Staff Report</h1>

            <p>DreamHome Management System</p>

        </div>

        <div class="stats-box">

            <div class="stat-card blue">

                <h2>{{ $totalStaff }}</h2>

                <p>Total Staff</p>

            </div>

            <div class="stat-card green">

                <h2>
                    ₱{{ number_format($avgSalary, 2) }}
                </h2>

                <p>Average Salary</p>

            </div>

        </div>

        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>Staff No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Position</th>
                        <th>Sex</th>
                        <th>DOB</th>
                        <th>Salary</th>
                        <th>Branch No</th>

                    </tr>

                </thead>

                <tbody>

                @if($staffs->count() > 0)

                    @foreach($staffs as $staff)

                        <tr>

                            <td>{{ $staff->staff_no }}</td>

                            <td>{{ $staff->fname }}</td>

                            <td>{{ $staff->lname }}</td>

                            <td>{{ $staff->position }}</td>

                            <td>{{ $staff->sex }}</td>

                            <td>{{ $staff->dob }}</td>

                            <td>
                                ₱{{ number_format($staff->salary, 2) }}
                            </td>

                            <td>{{ $staff->branch_no }}</td>

                        </tr>

                    @endforeach

                @else

                    <tr>

                        <td colspan="8"
                        class="empty">

                            No staff records found.

                        </td>

                    </tr>

                @endif

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>
