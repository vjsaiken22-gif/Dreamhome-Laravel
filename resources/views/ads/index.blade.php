<!DOCTYPE html>
<html>

<head>

    <title>Advertisement List</title>

    <link rel="stylesheet"
    href="{{ asset('assets/css/ads.css') }}">

</head>

<body>

<a href="/dashboard" class="back-btn">
    ← Dashboard
</a>

<div class="list-container">

    <div class="list-header">

        <h1 class="page-title">
            Advertisement List
        </h1>

        <a href="/ads/create" class="add-button">
            + Add Advertisement
        </a>

    </div>

    <table>

        <tr>

            <th>ID</th>
            <th>Property No</th>
            <th>Platform</th>
            <th>Ad Date</th>
            <th>Actions</th>

        </tr>

        @foreach($ads as $row)

        <tr>

            <td>
                {{ $row->ad_id }}
            </td>

            <td>
                {{ $row->property_no }}
            </td>

            <td>
                {{ $row->platform }}
            </td>

            <td>
                {{ $row->ad_date }}
            </td>

            <td class="actions">

                <a href="/ads/details/{{ $row->ad_id }}"
                class="view-btn">

                    View

                </a>

                <a href="/ads/edit/{{ $row->ad_id }}"
                class="edit-btn">

                    Edit

                </a>

                <a href="/ads/delete/{{ $row->ad_id }}"
                class="delete-btn"
                onclick="return confirm('Delete this advertisement permanently?')">

                    Delete

                </a>

            </td>

        </tr>

        @endforeach

    </table>

</div>

<script src="{{ asset('assets/js/ads.js') }}"></script>

</body>
</html>
