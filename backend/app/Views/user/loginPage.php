<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Log In</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      color: #fff;
      background-color: #111; /* Dark theme */
      background-image: url('/images/coffee_login.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .form-container {
      background-color: rgba(129, 102, 67, 0.8);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 2px 8px rgba(255, 255, 255, 0.6);
      width: 350px;
      text-align: center;
    }

    h1 {
      font-size: 2rem;
      color: #D2B48C;
      margin-bottom: 20px;
      text-transform: uppercase;
      font-weight: bold;
    }

    label {
      display: block;
      margin: 10px 0 5px;
      text-align: left;
      font-family: 'Pacifico', cursive;
    }

    input {
      width: 90%;
      padding: 10px;
      margin-bottom: 15px;
      border: none;
      border-radius: 5px;
      background-color: #c19a6b;
      color: #fff;
    }

    input:focus {
      outline: 2px solid #D2B48C;
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background-color: #D2B48C;
      color: #222;
      font-weight: bold;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.3s;
      box-shadow: 0px 2px 6px rgba(255, 255, 255, 1);
    }

    button:hover {
      background-color: #c19a6b;
      color: white;
      box-shadow: 0px 4px 10px rgba(134, 106, 69, 0.6);
    }

    /* Return Button */
    .return-btn {
      display: inline-block;
      padding: 12px 25px;
      background-color: #D2B48C;
      color: #222;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      text-decoration: none;
      transition: all 0.3s ease;
      font-family: 'Montserrat', sans-serif;
      margin-top: 30px;
      box-shadow: 0px 3px 8px rgba(210,180,140,0.4);
    }

    .return-btn:hover {
      background-color: #c19a6b;
      color: #fff;
      transform: translateY(-3px);
      box-shadow: 0px 6px 14px rgba(210,180,140,0.7), 0px 0px 12px rgba(255, 255, 255, 0.1);
    }

    .return-btn:active {
      transform: scale(0.97);
      box-shadow: 0px 2px 6px rgba(210,180,140,0.5);
    }

    /* Sign Up link styling */
    .signup-link {
      display: inline-block;
      margin-top: 20px;
      color: #fff;
      font-size: 0.9rem;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .signup-link:hover {
      color: #D2B48C;
      text-decoration: underline;
    }

  </style>
</head>
<body>
<?= view('components/header') ?>
  <div class="form-container">
    <h1>Login Page</h1>
    <form method="post" action="">
      <label>Email:</label>
      <input type="email" name="email" required>

      <label>Password:</label>
      <input type="password" name="password" required>

      <button type="submit">Login</button>

      <!-- Sign Up Link -->
      <p><a href="<?= base_url('signUpPage') ?>" class="signup-link">Don’t have an account? Sign up here!</a></p>

      <!-- Return Button -->
      <a href="<?= base_url('/') ?>" class="return-btn">☕ Back to Home</a>
    </form>
  </div>
</body>
</html>
