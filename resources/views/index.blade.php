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

        td {
            margin: 0px;
            padding: 3px 6px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="todo-table">
            <thead>
                <tr>
                    <td style="min-width: 50px">ID</td>
                    <td style="min-width: 150px">Title</td>
                    <td style="min-width: 300px">Description</td>
                    <td style="min-width: 150px">Created at</td>
                    <td style="min-width: 150px">Updated at</td>
                </tr>
            </thead>
            <tbody>
                @foreach($todo as $key=>$value)
                    <tr>
                        <td style="min-width: 50px">{{ $value->id }}</td>
                        <td style="min-width: 150px">{{ $value->title }}</td>
                        <td style="min-width: 300px">{{ $value->description }}</td>
                        <td style="min-width: 150px">{{ $value->created_at }}</td>
                        <td style="min-width: 150px">{{ $value->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
