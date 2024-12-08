<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepagina</title>
</head>
<body>
    <h1>Homepagina van de website</h1>
    <p>Dit is mijn homepagina. Je bereikt deze via localhost:8000/home</p>
    <a href="{{route('about')}}">Link naar about pagina, gebruik makend van een named route</a>
</body>
</html>