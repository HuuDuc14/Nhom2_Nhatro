<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #101820;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background-color: #1c1f26;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            color: #17a2b8;
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
        }

        label {
            color: #a9b2c3;
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 94%;
            padding: 12px;
            margin-bottom: 15px;
            border: none;
            border-radius: 8px;
            background-color: #282c35;
            color: #fff;
            font-size: 14px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        input:focus {
            outline: none;
            border: 1px solid #17a2b8;
            box-shadow: 0 0 8px rgba(23, 162, 184, 0.5);
        }

        .error-message {
            color: #ff6b6b;
            font-size: 12px;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(145deg, #17a2b8, #138496);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.3s ease;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(23, 162, 184, 0.5);
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Sign Up</h1>
        <form action="{{ url('register') }}" method="POST">
            @csrf

            <label for="username">Tên người dùng:</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" required>
            @error('username')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="phone">Số điện thoại:</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required>
            @error('phone')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="password_confirmation">Xác nhận mật khẩu:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>

            <button type="submit">Đăng ký</button>
        </form>
    </div>
</body>
</html>
