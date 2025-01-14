<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<div class="container">
    <p>Resume removed successfully.</p>
    <form action="{{route('removebackground')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image_file">
        <button type="submit">Remove Background</button>
    </form>

</div>
</body>
</html>
