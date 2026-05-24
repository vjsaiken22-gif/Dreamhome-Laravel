<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Property List</title>

    <link rel="stylesheet"
          href="/assets/css/property.css">

</head>

<body>

<div class="page-container">

    <a href="/dashboard"
       class="home-button">
        ⬅ Dashboard
    </a>

    <div class="page-header">

        <h1>Property Management</h1>

        @if($role == 'Admin')

        <a href="/properties/create"
           class="add-button">
            + Add Property
        </a>

        @endif

    </div>

    <div class="table-container">

        <table>

            <thead>

                <tr>

                    <th>Property No</th>
                    <th>Street</th>
                    <th>City</th>
                    <th>Type</th>
                    <th>Rooms</th>
                    <th>Rent</th>
                    <th>Actions</th>

                </tr>

            </thead>

            <tbody>

            @foreach($properties as $property)

                <tr>

                    <td>
                        {{ $property->property_no }}
                    </td>

                    <td>
                        {{ $property->street }}
                    </td>

                    <td>
                        {{ $property->city }}
                    </td>

                    <td>
                        {{ $property->type }}
                    </td>

                    <td>
                        {{ $property->rooms }}
                    </td>

                    <td>
                        ₱{{ number_format($property->rent, 2) }}
                    </td>

                    <td class="action-links">

                        <a href="/properties/details/{{ $property->property_no }}">
                            View
                        </a>

                        @if($role == 'Admin')

                        <a href="/properties/edit/{{ $property->property_no }}"
                           class="edit-btn">
                            Edit
                        </a>

                        <a href="/properties/delete/{{ $property->property_no }}"
                           class="delete-btn">
                            Delete
                        </a>

                        @endif

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

<script src="/assets/js/property.js"></script>

</body>
</html>
