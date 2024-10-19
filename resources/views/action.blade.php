<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
</head>
<body>
    @php
        
        $age = isset($age) ? $age : 20;
        $name = isset($name) ? $name : 'Jonel';
    @endphp

    @isset($name)

    @if ($age >= 18)
        <h2>Hello {{ $name }}, you are an adult. age {{$age}}</h2>
    @elseif ($age < 18)
        <h2>Hello {{ $name }}, you are a child.age {{$age}}</h2>
    @endif

    @for ($i = 1; $i <= $age; $i++)
        <div class="radio-group">
            <input type="radio" name="age_option_{{ $i }}" value="{{ $i }}" id="age_option_{{ $i }}"> <label for="age_option_{{ $i }}">{{ $i }}</label>

            <input type="radio" name="age_option_{{ $i }}" value="{{ $i }}" id="age_option_{{ $i }}_2"> <label for="age_option_{{ $i }}_2">{{ $i }}</label>

            <input type="radio" name="age_option_{{ $i }}" value="{{ $i }}" id="age_option_{{ $i }}_3"> <label for="age_option_{{ $i }}_3">{{ $i }}</label>

            <input type="radio" name="age_option_{{ $i }}" value="{{ $i }}" id="age_option_{{ $i }}_4"> <label for="age_option_{{ $i }}_4">{{ $i }}</label>

            <input type="radio" name="age_option_{{ $i }}" value="{{ $i }}" id="age_option_{{ $i }}_5"> <label for="age_option_{{ $i }}_5">{{ $i }}</label>
        </div>
        <br>
    @endfor
    @endisset
</body>
</html>
