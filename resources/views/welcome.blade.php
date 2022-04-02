<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <form action="{{ route('stringChecker') }}">
        <div class="form-group">
            <label for="email">Master string:</label>
            <input class="form-control" name="masterString" id="masterString">
        </div>
        <div class="form-group">
            <label for="pwd">String 1:</label>
            <input class="form-control" name="strings[]" id="stringOne">
        </div>
        <div class="form-group">
            <label for="pwd">String 2:</label>
            <input class="form-control" name="strings[]" id="stringTwo">
        </div>
        <div class="form-group">
            <label for="pwd">String 3:</label>
            <input class="form-control" name="strings[]" id="stringThree">
        </div>
        <div class="form-group">
            <label for="pwd">String 4:</label>
            <input class="form-control" name="strings[]" id="stringFour">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</body>

</html>