<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin page</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ URL::asset('/css/admin_view.css') }}">

</head>
<body>
<div class="container">
    <h1>Gebruikers toevoegen</h1>

    <div id="selector">
        <ul class="selector">
            <li>student</li>
            <li>docent</li>
            <li>coach</li>
        </ul>
    </div>

        <form id="student" action="{{ URL('/login')}}" method="POST">
                Student E-mail:<br> <input type="text" name="s_email"><br>
                Student Naam:<br> <input type="text" name="s_name"><br>
                Student Nummer:<br> <input type="text" name="s_number"><br>
                <input type="submit" class="submit" value="toevoegen">
        </form>
</div>
</body>
</html>
