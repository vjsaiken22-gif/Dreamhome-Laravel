<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Add Property</title>

    <link rel="stylesheet"
          href="/assets/css/property.css">

</head>

<body>

<a href="/properties"
   class="home-button">
    ⬅ Property List
</a>

<div class="form-container">

    <h1>Add Property</h1>

    <form action="/properties/store"
          method="POST">

        @csrf

        <input type="text"
               name="property_no"
               placeholder="Property Number"
               required>

        <input type="text"
               name="street"
               placeholder="Street"
               required>

        <input type="text"
               name="city"
               placeholder="City"
               required>

        <input type="text"
               name="type"
               placeholder="Property Type"
               required>

        <input type="number"
               name="rooms"
               placeholder="Rooms"
               required>

        <input type="number"
               step="0.01"
               name="rent"
               placeholder="Monthly Rent"
               required>

        <button type="submit">
            Add Property
        </button>

    </form>

</div>

</body>
</html>
