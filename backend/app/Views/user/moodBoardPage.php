<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mood Board - Cafenod</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Pacifico&display=swap');

        /* === HEADER STYLING === */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 80px 15px 40px; /* more space on the right */
            background-color: rgba(17, 17, 17, 0.0); /* transparent */
            position: fixed; /* stays visible on scroll */
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 120px 40px 40px 40px; /* extra top space for fixed header */
            color: #fff;
            background-color: #111;
            background-image: url('/images/coffee_roadMap.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .logo img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            transition: transform 0.3s ease;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }

        .logo img:hover {
            transform: scale(1.1);
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 35px;
            margin: 0;
            padding: 0;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-family: 'Montserrat', sans-serif;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #D2B48C;
        }

        /* === MOOD BOARD STYLING === */
        h1, h2, h3 {
            font-family: 'Pacifico', cursive;
            color: #D2B48C;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
        }

        .section {
            background-color: rgba(17, 17, 17, 0.7);
            padding: 25px;
            margin-bottom: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(210, 180, 140, 0.3);
            transition: 0.3s ease;
        }

        .section:hover {
            box-shadow: 0 6px 14px rgba(210, 180, 140, 0.5);
        }

        .palette {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .color {
            width: 90px;
            height: 90px;
            border-radius: 8px;
            border: 2px solid #fff;
            box-shadow: 0 2px 6px rgba(0,0,0,0.5);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .color:hover {
            transform: scale(1.1);
            box-shadow: 0px 4px 10px rgba(210, 180, 140, 0.8);
        }

        .typography p {
            margin: 10px 0;
            font-size: 1.1em;
        }

        .buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            font-weight: bold;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            box-shadow: 0px 2px 6px rgba(212, 231, 177, 0.4);
            transition: 0.3s ease;
        }

        .btn-primary { background-color: #D2B48C; color: #222; }
        .btn-secondary { background-color: #555; color: #fff; }
        .btn-border { background-color: transparent; border: 2px solid #D2B48C; color: #D2B48C; }
        .btn-disabled { background-color: #444; color: #777; cursor: not-allowed; }

        .btn-primary:hover {
            background-color: #c19a6b; color: #fff;
            box-shadow: 0px 4px 10px rgba(210, 180, 140, 0.8);
            transform: scale(1.05);
        }

        .btn-secondary:hover {
            background-color: #777;
            box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.4);
            transform: scale(1.05);
        }

        .btn-border:hover {
            background-color: #D2B48C; color: #222;
            box-shadow: 0px 4px 10px rgba(210, 180, 140, 0.6);
            transform: scale(1.05);
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            background-color: rgba(180, 180, 180, 0.1);
            border-radius: 10px;
            text-align: center;
            width: 250px;
            height: 250px;
            overflow: hidden;
            box-shadow: 0px 2px 6px rgba(212, 231, 177, 0.4);
            transition: 0.3s ease;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .card:hover img {
            transform: scale(1.1);
        }

        .logos {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .logo-box {
            width: 120px;
            height: 120px;
            border: 2px solid #D2B48C;
            overflow: hidden;
            box-shadow: 0px 2px 8px rgba(210, 180, 140, 0.4);
            transition: 0.4s ease;
        }

        .logo-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo-box.circle {
            border-radius: 50%;
        }

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
            box-shadow: 0px 6px 14px rgba(210,180,140,0.7);
        }
    </style>
</head>
<body>

<?= view('components/header') ?>

<h1>Mood Board</h1>

<h2>Color Palette</h2>
<div class="palette">
    <div class="color" style="background:#6b4f4f;"></div>
    <div class="color" style="background:#d2b48c;"></div>
    <div class="color" style="background:#f5f5dc;"></div>
</div>

<h2>Typography</h2>
<div class="typography">
    <p style="font-family:sans-serif;">Font 1: Sans-serif</p>
    <p style="font-family:serif;">Font 2: Serif</p>
</div>

<div class="section">
    <h2>Buttons</h2>
    <div class="buttons">
        <?= view('components/button/primaryButton') ?>
        <?= view('components/button/secondaryButton') ?>
        <?= view('components/button/borderButton') ?>
        <?= view('components/button/disabledButton') ?>
    </div>
</div>

<div class="section">
    <h2>Cards</h2>
    <div class="cards">
        <div class="card"><img src="<?= base_url('images/croissant.jpg') ?>" alt="Croissant"></div>
        <div class="card"><img src="<?= base_url('images/croissant2.jpg') ?>" alt="Croissant 2"></div>
        <div class="card"><img src="<?= base_url('images/espresso.jpg') ?>" alt="Espresso"></div>
    </div>
</div>

<div class="section">
    <h2>Logos</h2>
    <div class="logos">
        <div class="logo-box"><img src="<?= base_url('images/CAFENOD.png') ?>" alt="Cafenod Logo Square"></div>
        <div class="logo-box circle"><img src="<?= base_url('images/CAFENOD.png') ?>" alt="Cafenod Logo Circle"></div>
    </div>
</div>

<a href="<?= base_url('/') ?>" class="return-btn">☕ Back to Home</a>

</body>
</html>
