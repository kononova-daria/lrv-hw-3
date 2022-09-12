<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HW-3</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .container {
            display: flex;
        }

        label {
            display: block;
        }

        input {
            display: block;
        }

    </style>
</head>
<body>
    <form action="/todo/save" method="post">
        @csrf
        <div class="container">
            <div>
                <label for="title">Наименование</label>
                <input type="text" id="title" name="title">
            </div>

            <div style="margin: 0px 12px;">
                <label for="description">Описание</label>
                <input type="text" id="description" name="description">
            </div>

            <button type="submit">Сохранить</button>
        </div>
    </form>
</body>
</html>
