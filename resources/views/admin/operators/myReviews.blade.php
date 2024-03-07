<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @for($i=0; $i<sizeof($reviews); $i++)
        <div>{{ $reviews[$i]->comment }}</div>
        <div>{{ $reviews[$i]->author }}</div>
        <div>{{ $reviews[$i]->user_email }}</div>
        <div>{{ $reviews[$i]->vote }}</div>
        <br><br><br>
    @endfor
</body>
</html>