<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafenod Header</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #111;
            color: white;
            padding-top: 100px; /* prevents overlap with fixed header */
        }

        /* Header layout */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px 15px 40px; /* added more space on right */
            background-color: rgba(17, 17, 17, 0.0);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            backdrop-filter: blur(4px);
        }

        /* Logo styling */
        .logo img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            transition: transform 0.3s ease;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }

        .logo img:hover {
            transform: scale(1.1);
        }

        /* Navigation styling */
        nav ul {
            list-style: none;
            display: flex;
            gap: 35px;
            margin: 0;
            padding-right: 30px; /* extra breathing space for last item */
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #D2B48C;
        }

        /* Responsive tweak */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
                padding: 15px 30px;
            }

            nav ul {
                flex-wrap: wrap;
                gap: 15px;
                justify-content: flex-start;
                padding-right: 0;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <a href="<?= base_url('/') ?>">
            <img src="<?= base_url('images/CAFENOD.png') ?>" alt="Cafenod Logo">
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="<?= base_url('/') ?>">HOME</a></li>
            <li><a href="<?= base_url('moodBoardPage') ?>">MOOD BOARD</a></li>
            <li><a href="<?= base_url('roadMapPage') ?>">ROAD MAP</a></li>
            <li><a href="<?= base_url('loginPage') ?>">LOG IN</a></li>
            <li><a href="<?= base_url('signUpPage') ?>">SIGN UP</a></li>
        </ul>
    </nav>
</header>

</body>
</html>
