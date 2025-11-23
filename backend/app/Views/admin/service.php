<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Services - Cafenod</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
            background-color: #111;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background-color: rgba(17, 17, 17, 0.8);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
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

        .services {
            padding: 120px 40px 40px 40px;
            text-align: center;
        }

        .services h1 {
            font-family: 'Pacifico', cursive;
            color: #D2B48C;
            margin-bottom: 30px;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background-color: rgba(180, 180, 180, 0.1);
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            max-width: 250px;
            box-shadow: 0px 2px 6px rgba(212, 231, 177, 0.4);
            transition: 0.3s ease;
        }

        .card:hover {
            box-shadow: 0px 4px 10px rgba(210, 180, 140, 0.6);
        }

        .card h3 {
            font-family: 'Pacifico', cursive;
            margin: 10px 0;
        }

        .card p {
            font-size: 0.9em;
            color: #ccc;
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
            box-shadow: 0px 3px 8px rgba(210, 180, 140, 0.4);
        }

        .return-btn:hover {
            background-color: #c19a6b;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0px 6px 14px rgba(210, 180, 140, 0.7);
        }
    </style>
</head>

<body>



    <div class="services">
        <h1>Admin Services</h1>
        <div class="cards">
            <div class="card">
                <h3>Manage Users</h3>
                <p>View, edit, and delete user accounts.</p>
            </div>
            <div class="card">
                <h3>Manage Products</h3>
                <p>Add, update, and remove coffee items.</p>
            </div>
            <div class="card">
                <h3>Manage Orders</h3>
                <p>Track and process customer orders.</p>
            </div>
        </div>

        <a href="<?= base_url('/') ?>" class="return-btn">☕ Back to Home</a>
    </div>

</body>

</html>