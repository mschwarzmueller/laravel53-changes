<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body>
<div class="flex-center position-ref full-height">
    <form action="{{ route('sendmail') }}" method="post">
        <input type="email" name="mail" placeholder="mail address">
        <input type="text" name="title" placeholder="title">
        <button type="submit">Send me a Mail</button>
        {{ csrf_field() }}
    </form>
</div>
</body>
</html>
