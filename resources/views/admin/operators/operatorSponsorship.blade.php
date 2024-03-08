<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('admin.operator-sponsorship.store', $operator_id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="sponsorship">Inserisci sponsorizzazione</label>
            <select id="sponsorship" name="sponsorship">
                <option value="0">Nessuna sponsorizzazione</option>
                @for($i=0; $i<sizeof($sponsorships); $i++)
                    <option value="{{ $sponsorships[$i]->id }}">{{ $sponsorships[$i]->duration }}</option>
                @endfor    
            </select>
            <input type="submit" value="Invia">
        </div>
    </form>
</body>
</html>