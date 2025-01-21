<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylized Login Form</title>
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
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: bold;
            position: relative;
            z-index: 2;
        }

        form {
            position: relative;
            width: 320px;
            background-color: #112240;
            padding: 30px;
            border-radius: 15px;
            z-index: 2;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        form label {
            display: block;
            font-size: 14px;
            color: #a9b2c3;
            margin-bottom: 5px;
            text-align: left;
        }

        form input {
            width: 90%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 20px;
            font-size: 14px;
            background-color: #1c2c3b;
            color: #00d9ff;
            text-align: center;
            box-shadow: inset 0 0 5px rgba(0, 217, 255, 0.6);
        }

        form input:focus {
            outline: none;
            box-shadow: 0 0 10px #00d9ff, inset 0 0 10px #00d9ff;
        }

        form button {
            width: 100%;
            padding: 12px;
            background-color: #00d9ff;
            color: #0d1b2a;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        form button:hover {
            background-color: #00a8cc;
            box-shadow: 0 0 15px #00d9ff;
        }

        .form-links {
            margin-top: 15px;
            font-size: 14px;
        }

        .form-links a {
            color: #00d9ff;
            text-decoration: none;
            margin: 0 5px;
            transition: color 0.3s ease;
        }

        .form-links a:hover {
            color: #00a8cc;
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
            animation: spin 4s linear infinite;
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
        <h1>Login</h1>
        <form action="#" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            
            <button type="submit">Login</button>

            <div class="form-links">
                <a href="{{route('recoverpassword')}}">Forgot your password?</a>
                <a href="{{route('register')}}">Signup</a>
            </div>
        </form>
    </div>
</body>
</html>
