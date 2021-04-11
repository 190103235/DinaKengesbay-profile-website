<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create blog</title>
</head>
<body>
    <form method="POST" action="{{route('add-post')}}">
        @csrf
        <!-- <input type="text" name="title" placeholder="title">
        <input type="text" name="body" placeholder="body">
        <button type="submit">create</button> -->

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="surname">Surname:</label>
            <input type="text" class="form-control" id="surname" name="surname">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="photo">Photo:</label>
            <input type="file" class="form-control" id="photo" name="img" multiple>
            <br>
            <button type="submit">create</button>
        </div>
    </form>
</body>
</html>