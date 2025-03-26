<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .form-container {
            display: flex;
            flex-direction: column;
        }
        h2 {
            color: #333;
        }
        label, input, button {
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            width: 100%;
        }
        input {
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background: #0056b3;
        }
        p {
            margin-top: 10px;
        }
        a {
            color: #007bff;
            text-decoration: none;
            cursor: pointer;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container" id="login-form">
            <h2>Login</h2>
            <form>
                <label for="login-email">Email:</label>
                <input type="email" id="login-email" required>
                
                <label for="login-password">Password:</label>
                <input type="password" id="login-password" required>
                
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="#" onclick="showSignup()">Sign Up</a></p>
            </form>
        </div>

        <div class="form-container" id="signup-form" style="display: none;">
            <h2>Sign Up</h2>
            <form>
                <label for="signup-name">Full Name:</label>
                <input type="text" id="signup-name" required>
                
                <label for="signup-email">Email:</label>
                <input type="email" id="signup-email" required>
                
                <label for="signup-password">Password:</label>
                <input type="password" id="signup-password" required>
                
                <button type="submit">Sign Up</button>
                <p>Already have an account? <a href="#" onclick="showLogin()">Login</a></p>
            </form>
        </div>
    </div>
    
    <script>
        function showSignup() {
            document.getElementById('login-form').style.display = 'none';
            document.getElementById('signup-form').style.display = 'block';
        }
        function showLogin() {
            document.getElementById('signup-form').style.display = 'none';
            document.getElementById('login-form').style.display = 'block';
        }
    </script>
</body>
</html>