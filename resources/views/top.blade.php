<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Top</title>
    </head>
    <body class="antialiased">
        <form action="/" method="post">
            @csrf
            <input type="text" name="lastName">
            <input type="text" name="firstName">
            <button type="submit">登録</button>
        </form>
        <ul>
            @foreach ($data as $item)
                <li>
                    <span>{{ $item->last_name }}</span>
                    <span>{{ $item->first_name }}</span>
                </li>
            @endforeach
        </ul>
    </body>
</html>
