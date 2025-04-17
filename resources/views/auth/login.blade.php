<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <style>
        @font-face {
            font-family: 'PROMPT';
            src: url('{{ asset('fonts/PROMPT-LIGHT.TTF') }}') format('truetype');
            font-weight: normal;
        }

        @font-face {
            font-family: 'PROMPT';
            src: url('{{ asset('fonts/PROMPT-SEMIBOLD.TTF') }}') format('truetype');
            font-weight: bold;
        }

        body {
            font-family: 'PROMPT', sans-serif;
            background-image: url('{{ asset('login/BG6.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 2rem 0px;

        }
        
        .form {
            --input-focus: #2d8cf0;
            --font-color: #323232;
            --font-color-sub: #666;
            --bg-color: beige;
            --main-color: black;
            padding: 20px;
            background: lightblue;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            gap: 20px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            box-shadow: 4px 4px var(--main-color);
        }

        .title {
            color: var(--font-color);
            font-weight: 900;
            font-size: 20px;
            margin-bottom: 25px;
            text-align: center;
        }

        .title span {
            color: var(--font-color-sub);
            font-weight: 600;
            font-size: 17px;
        }

        .input {
            width: 250px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            font-size: 15px;
            font-weight: 600;
            color: var(--font-color);
            padding: 5px 10px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .input::placeholder {
            color: var(--font-color-sub);
            opacity: 0.8;
        }

        .input:focus {
            border: 2px solid var(--input-focus);
        }

        .login-with {
            display: flex;
            gap: 20px;
        }

        .button-log {
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 100%;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            color: var(--font-color);
            font-size: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }

        .icon {
            width: 24px;
            height: 24px;
            fill: var(--main-color);
        }

        .button-log:active,
        .button-confirm:active {
            box-shadow: 0px 0px var(--main-color);
            transform: translate(3px, 3px);
        }

        .button-confirm {
            margin: 50px auto 0 auto;
            width: 120px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            font-size: 17px;
            font-weight: 600;
            color: var(--font-color);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button-confirm:hover {
            background-color: var(--input-focus);
            color: white;
            box-shadow: 6px 6px var(--main-color);

        }

        .input:hover {
            border-color: var(--input-focus);

        }

        .button-log:hover {
            background-color: var(--input-focus);
            color: white;
            box-shadow: 6px 6px var(--main-color);
        }
    </style>

    <div class="container min-vh-100 d-flex justify-content-center align-items-center p-3">
        <div class="d-flex justify-content-center align-items-center">
            <form class="form" action="{{ route('authenticate') }}" method="POST">
                @csrf
                <div class="title w-100 text-center">
                    <h4 class="mb-2 fs-4 fw-bold">ลงชื่อเข้าใช้งานระบบ</h4>
                    <h6 class="text-muted fs-5">สำนักงานเทศบาลตำบลเกวียนหัก</h6>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <input class="input" name="email" placeholder="อีเมล" type="email" required>
                <input class="input" name="password" placeholder="รหัสผ่าน" type="password" required>

                <button type="submit" class="button-confirm">เข้าสู่ระบบ →</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
