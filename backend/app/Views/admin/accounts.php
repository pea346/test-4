<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts - Cafenod</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
            background-color: #1a1a1a;
            /* Slightly lighter than the default dark theme */
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background-color: rgba(17, 17, 17, 0.9);
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

        .accounts {
            padding: 120px 40px 40px 40px;
            text-align: center;
        }

        .accounts h1 {
            font-family: 'Pacifico', cursive;
            color: #D2B48C;
            margin-bottom: 30px;
        }

        .table-container {
            margin: 0 auto;
            max-width: 900px;
            background-color: rgba(34, 34, 34, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.5);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #444;
        }

        th {
            background-color: #333;
            color: #D2B48C;
        }

        tr:hover {
            background-color: rgba(210, 180, 140, 0.1);
        }

        .btn {
            display: inline-block;
            padding: 8px 15px;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            box-shadow: 0px 2px 6px rgba(212, 231, 177, 0.4);
            transition: 0.3s ease;
        }

        .btn-edit {
            background-color: #D2B48C;
            color: #222;
        }

        .btn-delete {
            background-color: #c19a6b;
            color: #fff;
        }

        .btn-edit:hover {
            background-color: #c19a6b;
            color: #fff;
        }

        .btn-delete:hover {
            background-color: #a67c52;
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

    <?= view('components/header') ?>

    <div class="accounts">
        <h1>User Accounts</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                        <td>User</td>
                        <td>
                            <a href="#" class="btn btn-edit">Edit</a>
                            <a href="#" class="btn btn-delete">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>Editor</td>
                        <td>
                            <a href="#" class="btn btn-edit">Edit</a>
                            <a href="#" class="btn btn-delete">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <a href="<?= base_url('/') ?>" class="return-btn">☕ Back to Home</a>
    </div>

</body>

</html>