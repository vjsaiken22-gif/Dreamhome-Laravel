<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Property</title>

    <link rel="stylesheet"
          href="/assets/css/property.css">

</head>

<body>

<a href="/properties"
   class="home-button">
    ⬅ Property List
</a>

<div class="form-container">

    <h1>Edit Property</h1>

    <form action="/properties/update/{{ $property->property_no }}"
          method="POST">

        @csrf

        <input type="text"
               name="street"
               value="{{ $property->street }}"
               required>

        <input type="text"
               name="city"
               value="{{ $property->city }}"
               required>

        <input type="text"
               name="type"
               value="{{ $property->type }}"
               required>

        <input type="number"
               name="rooms"
               value="{{ $property->rooms }}"
               required>

        <input type="number"
               step="0.01"
               name="rent"
               value="{{ $property->rent }}"
               required>

        <button type="submit">
            Update Property
        </button>

    </form>

</div>

</body>
</html>
