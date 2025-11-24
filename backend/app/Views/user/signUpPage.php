<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sign Up - Cafenod</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      color: #fff;
      background-color: #111;
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
      box-shadow: 0px 3px 8px rgba(210, 180, 140, 0.4);
    }

    .return-btn:hover {
      background-color: #c19a6b;
      color: #fff;
      transform: translateY(-3px);
      box-shadow: 0px 6px 14px rgba(210, 180, 140, 0.7), 0px 0px 12px rgba(255, 255, 255, 0.1);
    }

    .return-btn:active {
      transform: scale(0.97);
      box-shadow: 0px 2px 6px rgba(210, 180, 140, 0.5);
    }

    /* Login link styling */
    .login-link {
      display: inline-block;
      margin-top: 20px;
      color: #fff;
      font-size: 0.9rem;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .login-link:hover {
      color: #D2B48C;
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <?= view('components/header') ?>
  <div class="form-container">
    <h1>Sign Up</h1>
    <form class="space-y-6 mt-8" action="/signup" method="post" novalidate>
      <?php
      $errors = $errors ?? [];
      $old = $old ?? [];
      ?>

      <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success">
              <?= session()->getFlashdata('success') ?>
          </div>
      <?php endif; ?>

      <?php if (session()->getFlashdata('errors')): ?>
          <div class="alert alert-danger">
              <ul>
                  <?php foreach (session()->getFlashdata('errors') as $error): ?>
                      <li><?= esc($error) ?></li>
                  <?php endforeach; ?>
              </ul>
          </div>
      <?php endif; ?>

      <label for="first_name">First Name:</label>
      <input
          id="first_name"
          name="first_name"
          type="text"
          required
          value="<?= esc($old['first_name'] ?? '') ?>"
          aria-invalid="<?= isset($errors['first_name']) ? 'true' : 'false' ?>"
          aria-describedby="first_name-error"
      >
      <?php if (! empty($errors['first_name'])): ?>
          <p id="first_name-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['first_name']) ?></p>
      <?php endif; ?>

      <label for="last_name">Last Name:</label>
      <input
          id="last_name"
          name="last_name"
          type="text"
          required
          value="<?= esc($old['last_name'] ?? '') ?>"
          aria-invalid="<?= isset($errors['last_name']) ? 'true' : 'false' ?>"
          aria-describedby="last_name-error"
      >
      <?php if (! empty($errors['last_name'])): ?>
          <p id="last_name-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['last_name']) ?></p>
      <?php endif; ?>

      <label for="phone_number">Phone Number:</label>
      <input
          id="phone_number"
          name="phone_number"
          type="text"
          required
          value="<?= esc($old['phone_number'] ?? '') ?>"
          aria-invalid="<?= isset($errors['phone_number']) ? 'true' : 'false' ?>"
          aria-describedby="phone_number-error"
      >
      <?php if (! empty($errors['phone_number'])): ?>
          <p id="phone_number-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['phone_number']) ?></p>
      <?php endif; ?>

      <label for="email">Email:</label>
      <input
          id="email"
          name="email"
          type="email"
          autocomplete="email"
          required
          value="<?= esc($old['email'] ?? '') ?>"
          aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>"
          aria-describedby="email-error"
      >
      <?php if (! empty($errors['email'])): ?>
          <p id="email-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['email']) ?></p>
      <?php endif; ?>

      <label>Password:</label>
      <input type="password" name="password" required>

      <label>Confirm Password:</label>
      <input type="password" name="confirm_password" required>

      <button type="submit">Register</button>

      <!-- Login Link -->
      <p><a href="<?= base_url('loginPage') ?>" class="login-link">Already have an account? Log in here!</a></p>

      <!-- Return Button -->
      <a href="<?= base_url('/') ?>" class="return-btn">☕ Back to Home</a>
    </form>
  </div>
</body>

</html>