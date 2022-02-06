<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <style>
    html,
    body {
        height: 100%;
    }

    .global-container {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f5f5f5;
    }

    form {
        padding-top: 10px;
        font-size: 14px;
        margin-top: 30px;
    }

    .card-title {
        font-weight: 300;
    }

    .btn {
        font-size: 14px;
        margin-top: 20px;
    }

    .login-form {
        width: 330px;
        margin: 20px;
    }

    .sign-up {
        text-align: center;
        padding: 20px 0 0;
    }

    .alert {
        margin-bottom: -30px;
        font-size: 13px;
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <h1>Poll System Bnao</h1>

    {{ Session::get('username') }}
    <div class="container">

        <form action="/pollCount" method="get">
            <h1>Rate Your Friend Kamina :devil:</h1>
            @if ($pollresult == null)
            <input type="radio" name="friend" value="a" >Devsagar <br>
            <input type="radio" name="friend" value="b" >Laxminarayan <br>
            <input type="radio" name="friend" value="c" >Arjun <br>
            <input type="radio" name="friend" value="d" >Krunal <br><br>
            <input type="hidden" name="id" value="1001">
            <input type="submit" value="submit">
            @endif
            @if($pollresult != null)
            <input type="radio" name="friend" value="a" ><progress id="file" value="{{ $pollresult->a }}" max="{{ $totl }}"> 32% </progress>Devsagar -- <br>
            <input type="radio" name="friend" value="b" ><progress id="file" value="{{ $pollresult->b }}" max="{{ $totl }}"> 32% </progress>Laxminarayan -- <br>
            <input type="radio" name="friend" value="c" ><progress id="file" value="{{ $pollresult->c }}" max="{{ $totl }}"> 32% </progress>Arjun -- <br>
            <input type="radio" name="friend" value="d" ><progress id="file" value="{{ $pollresult->d }}" max="{{ $totl }}"> 32% </progress>Krunal -- <br><br>
            <input type="hidden" name="id" value="1001">
            <input type="submit" value="submit">
            @endif
        </form>
    </div>

</body>

</html>