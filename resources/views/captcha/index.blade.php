<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captcha</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .sb-area {
            float: left;
            width: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .sb-clock {
            float: left;
            width: 200px;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 8px 8px 0px #ccc;
        }

        .sb-clock img {
            border-radius: 50%;
        }

        .sb-clock input[type="number"] {
            float: left;
            width: 50%;
            margin: 0;
            padding: 5px;
            border: 1px solid #BABABA;
        }

        .sb-clock input[type="submit"] {
            float: left;
            width: 100%;
            padding: 10px;
            margin: 5px 0 0 0;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="sb-area">
        <div class="sb-clock">
            <form action="{{ route('check_captcha') }}" method="post">
                @csrf
                <img src="http://localhost/marketplace/clock-captcha/clock.php" alt="What is the time on the Clock?" /><br /><br />
                <input type="number" name="{{ session('captcha_hour_field') }}" value="0" min="0" max="12" />
                <input type="number" name="{{ session('captcha_minute_field') }}" value="0" min="0" max="59" />
                <input type="submit" name="submit" value="Submit" />
            </form>
        </div>
    </div>
</body>

</html>
