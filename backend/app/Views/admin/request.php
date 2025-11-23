<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Requests</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
            background-color: #222;
            /* Replaced background image with solid color */
        }

        .requests {
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .request-card {
            background-color: rgba(180, 180, 180, 0.1);
            border-radius: 8px;
            padding: 20px;
            margin: 10px 0;
            width: 80%;
            box-shadow: 0px 2px 6px rgba(212, 231, 177, 0.4);
            font-family: 'Montserrat', sans-serif;
        }

        .request-card h3 {
            margin: 0 0 10px;
            font-family: 'Pacifico', cursive;
        }

        .request-card p {
            font-size: 0.9em;
            color: #ccc;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            box-shadow: 0px 2px 6px rgba(212, 231, 177, 0.4);
        }

        .btn-approve {
            background-color: #4CAF50;
            color: #fff;
        }

        .btn-reject {
            background-color: #f44336;
            color: #fff;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>



    <div class="requests">
        <h1>Incoming Requests</h1>

        <!-- Example Request Card -->
        <div class="request-card">
            <h3>Request from John Doe</h3>
            <p>Email: john.doe@example.com</p>
            <p>Message: I would like to inquire about your services.</p>
            <button class="btn btn-approve">Approve</button>
            <button class="btn btn-reject">Reject</button>
        </div>

        <div class="request-card">
            <h3>Request from Jane Smith</h3>
            <p>Email: jane.smith@example.com</p>
            <p>Message: Can I schedule a meeting to discuss?</p>
            <button class="btn btn-approve">Approve</button>
            <button class="btn btn-reject">Reject</button>
        </div>
    </div>

    <?= view('components/footer') ?>

</body>

</html>