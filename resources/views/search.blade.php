<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Project1</title>
</head>
<body>

<div id="cover">

    <form method="post" action="{{route('search')}}">
        @csrf
        <div class="tb">
            <div class="td">
            <input type="text" name="key" placeholder="dkp-1234567" required></div>
            <div class="td" id="s-cover">
                <button type="submit">
                    <div id="s-circle"></div>
                    <span></span>
                </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>


