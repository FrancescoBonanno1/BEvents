<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Statistiche messaggi</h1>
        <form action="{{ route('admin.my-statistics-message', $operator_id) }}" method="GET">
            @csrf
            <select name="month">
                <option value="0">Nessun mese</option>
                @for($i=0; $i<sizeof($months); $i++)
                    <option value="{{ $i + 1 }}">{{ $months[$i] }}</option>
                @endfor
            </select>
            <select name="year">
                @for($i=$this_year; $i>=2020; $i--)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <input type="submit" value="Cerca">
        </form>
        @if(isset($number_messages))
            @if($also_month == true)
                <div>Nel mese di {{ $selected_month_name }} dell'anno {{ $selected_year }} hai ricevuto {{ $number_messages }} messaggi/o</div>
            @else
                <div>Nell'anno {{ $selected_year }} hai ricevuto {{ $number_messages }} messaggi/o</div>
            @endif
        @endif
    </div>
</body>
</html>