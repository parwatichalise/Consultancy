<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $setting->name ?? 'Consultancy' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .login-page {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: stretch;
        }
        .right-side {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50%;
        }

        .login-form-container {
            width: 100%;
            max-width: 400px;
            padding: 40px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        .login-form-container h5 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-primary {
            width: 100%;
        }

        @media (max-width: 767px) {
            .login-page {
                flex-direction: column;
            }

         
            .right-side {
                width: 100%;
                background-color: transparent;
                justify-content: center;
                padding: 20px;
            }

            .login-form-container {
                max-width: 90%;
                padding: 20px;
                box-shadow: none;
            }
        }
    </style>
</head>

<body>

    <div class="login-page">


        <div class="right-side">
            <div class="login-form-container">
                <div style="display:flex; align-items:center; justify-content:center">
                        @if ($setting->image)
                            <img src="{{ asset('storage/' . $setting->image) }}" style="width:60px" alt="">
                        @else
                            <img src="{{ asset('dist/img/logo.jpg') }}" style="width:60px" alt="">
                        @endif
                </div><br>
                <h5>Login</h5>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybUp2jL8fn7HngPo8I+Qp3vf8hWcVq0m2Qtc2frIWZCrqM7d6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-gt4l0V12Wr/x33r0uMt3sm+hq3CZCq5o5J/6nEgt8MNCg21TZf99xnAPeVdO0Y8y" crossorigin="anonymous">
    </script>
</body>

</html>
