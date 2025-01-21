<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remember Your Password</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #0d1b2a;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            text-align: center;
            color: #00d9ff;
            font-size: 30px;
            margin-bottom: 25px;
            font-weight: bold;
            position: relative;
            z-index: 2;
        }

        form {
            position: relative;
            width: 350px;
            background-color: #112240;
            padding: 40px;
            border-radius: 20px;
            z-index: 2;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        form label {
            display: block;
            font-size: 15px;
            color: #a9b2c3;
            margin-bottom: 8px;
            text-align: left;
        }

        form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 25px;
            font-size: 14px;
            background-color: #1c2c3b;
            color: #00d9ff;
            text-align: center;
            box-shadow: inset 0 0 5px rgba(0, 217, 255, 0.6);
        }

        form input:focus {
            outline: none;
            box-shadow: 0 0 12px #00d9ff, inset 0 0 12px #00d9ff;
        }

        form a {
            display: inline-block;
            width: 100%;
            padding: 12px;
            background-color: #00d9ff;
            color: #0d1b2a;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        form a:hover {
            background-color: #00a8cc;
            box-shadow: 0 0 15px #00d9ff;
        }

        .form-links {
            margin-top: 15px;
            font-size: 14px;
        }

        .form-links a {
            background-color: #00a8cc;
            text-decoration: none;
            margin: 0px;
            transition: color 0.3s ease;
            
        }

        .form-links a:hover {
            background-color: #00a8cc;
            box-shadow: 0 0 15px #00d9ff;
            
        }

        /* Circular Animation */
        .circle {
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            border: 10px solid transparent;
            border-top: 10px solid #00d9ff;
            border-bottom: 10px solid #0078ff;
            animation: spin 6s linear infinite;
            z-index: 1;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="circle"></div>
        <h1>Remember Your Password</h1>
        <form action="#" method="POST">
            <label for="password">Enter Your Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your current password" required>
            
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" required>
            
            <a href="{{route('login')}}">Submit</a>

            <div class="form-links">
                <a href="{{route('recoverpassword')}}">Recover Password</a>
            </div>
        </form>
    </div>
</body>
</html>
