<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
<h2><b>English - Vietnamese Dictionary</b></h2>
<form method="post" >
    @csrf
    <input type="text" name="search" placeholder="Enter words to find"/>
    <input type="submit" value="Find"/>
</form>

</body>
</html>
