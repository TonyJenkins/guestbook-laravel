<!DOCTYPE HTML>
<html>
<head>
    <title>Guestbook</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="/css/main.css" />
</head>
    <body>

        <img src="/img/laravel.png"/>

        <h1>Guestbook</h1>

        <div>@include('guestbookdisplay')</div>

        <h1>Change Comment</h1>
        <form method="post">
            <p>User: <input type="text" size="32" name="user" value="{{$entry->user}}" />
               Comment: <input type="text" size="128" name="comment" value="{{$entry->comment}}" /></p>

                @if ($errors->has('user')) 
                    <p class="warning">User cannot be empty.</p>
                @endif

                @if ($errors->has('comment'))
                    <p class="warning">Comment cannot be empty.</p>
                @endif

            <p><input type="submit" value="Submit" /> <input type="reset" value="Reset" /></p>
            {{ csrf_field() }}
        </form>

    </body>
</html>