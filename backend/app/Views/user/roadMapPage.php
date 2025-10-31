<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafenod Roadmap</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
            background-color: #111;
            background-image: url('/images/coffee_roadMap2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        header, footer {
            background-color: rgba(17,17,17,0.7);
            padding: 20px;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav li {
            margin-left: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        section {
            padding: 40px;
            text-align: center;
        }

        .roadmap {
            background-color: rgba(0,0,0,0.7);
            color: #fff;
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.6);
        }

        .roadmap h1 {
            font-size: 2.5rem;
            color: #D2B48C;
            margin-bottom: 25px;
            text-transform: uppercase;
            font-family: 'Pacifico', cursive;
        }

        .roadmap ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }

        .roadmap li {
            margin-bottom: 20px;
            padding: 20px;
            border-left: 4px solid #D2B48C;
            background-color: rgba(68,68,68,0.7);
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        /* 🔸 Hover effect for each list item */
        .roadmap li:hover {
            background-color: rgba(210,180,140,0.2);
            transform: translateX(5px);
            box-shadow: 0 4px 12px rgba(210,180,140,0.5);
            border-left-color: #c19a6b;
        }

        .roadmap li strong {
            font-size: 1.2rem;
            color: #fff;
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

        /* 🔸 Enhanced hover style for the button */
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

    </style>
</head>
<body>

<?= view('components/header') ?>

<section class="roadmap">
    <h1>Project Road Map</h1>
    <ul>
        <li>
            <strong>User Management</strong><br>
            Manage users with sign up, login, profile update, and account deletion.
        </li>
        <li>
            <strong>Product Management</strong><br>
            Manage coffee items with add, view, edit, and delete options.
        </li>
        <li>
            <strong>Order Management</strong><br>
            Handle cart, checkout, order history, and cancellations.
        </li>
    </ul>

    <!-- Return Button -->
    <a href="<?= base_url('/') ?>" class="return-btn">☕ Back to Home</a>
</section>

</body>
</html>
