<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <style>
        html, body {
            padding: 100px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .list-header {
            margin: auto;
            padding: 15px;
            width: 300px;
            border: 1px solid #ccc;
            border-bottom: none;
            background-color: #426cff;
            color: white;
            font-size: 26px;
            font-weight: bold;
            text-align: center;
        }

        .list {
            margin: auto;
            padding: 0 15px;
            width: 300px;
            box-shadow: #ccc 3px 3px 3px;
            border: 1px solid #ccc;
            border-top: none;
            font-weight: bold;
        }

        .list .nested {
            padding-left: 25px;
            font-weight: normal;
        }

        .list .highlighted {
            background-color: #abc3f4;
            margin: 0 -15px;
            padding-left: 40px;
            font-weight: bold;
        }

        .list > div {
            padding: 5px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="list-header">
        New Projects
    </div>
    <div class="list">
        @foreach($projects as $project)
            @if (is_array($project))
                @foreach($project as $video)
                    <div class="nested {{ $loop->index == 1 ? 'highlighted' : '' }}">{{$video}} - {{ $loop->depth }}</div>
                @endforeach
            @else
                <div>{{$project}} - {{ $loop->depth }}</div>
            @endif
        @endforeach
    </div>
</div>
</body>
</html>
