<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      width: 100%;
      max-width: 400px;
    }

    .signup-form {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    .signup-form h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .input-group {
      margin-bottom: 15px;
    }

    .input-group label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
      color: #555;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      outline: none;
    }

    .input-group input:focus {
      border-color: #2575fc;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #2575fc;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #1a5edb;
    }

    .login-text {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .login-text a {
      color: #2575fc;
      text-decoration: none;
    }
  </style>

</head>

<body>

  <div class="container">
    <form class="signup-form" method="POST" action="">
      @csrf

      <h2>Create Account</h2>

      <div class="input-group">
        <label>Full Name</label>
        <input type="text" name="name" placeholder="Enter your name" required>
      </div>

      <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter your email" required>
      </div>

      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password" required>
      </div>

      <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" placeholder="Confirm password" required>
      </div>

      <button type="submit">Sign Up</button>

      <p class="login-text">
        Already have an account? <a href="#">Login</a>
      </p>
    </form>
  </div>

</body>
</html>