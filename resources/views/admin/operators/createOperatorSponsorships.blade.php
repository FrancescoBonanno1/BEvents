<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('admin.operator-sponsorships.store') }}" method="POST">
        @csrf
        <select name="sponsorship">
        @for ($i=0; $i<sizeof($sponsorships); $i++)
            <option value="{{ $sponsorships[$i]->id }}">{{ $sponsorships[$i]->duration }}</option>
        @endfor
        </select>
        <input type="submit" value="Invia">
    </form>
</body>
</html>