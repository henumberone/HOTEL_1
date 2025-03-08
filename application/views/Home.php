<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body {
            background: linear-gradient(135deg, #1b1b32, #2a2a40);
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
        }

        .navbar {
            background: linear-gradient(135deg, #004d99, #00264d) !important;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }

        .navbar-brand {
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            transition: 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #ffcc00 !important;
            text-shadow: 0px 0px 10px rgba(255, 204, 0, 0.7);
        }

        .container {
            background: #2d2d3f;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.4);
            max-width: 950px;
        }

        .header {
            color: white;
            text-align: center;
            font-size: 26px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-warning {
            background-color: #ffc107;
            border: none;
            color: black;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #bd2130;
        }

        table {
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
            background: #ffffff;
        }

        .table th {
            background: linear-gradient(135deg, #004d99, #00264d);
            color: white;
            text-align: center;
            padding: 12px;  
        }


        .table td {
            background-color: #4682B4;
            color: black;
            text-align: center;
            padding: 10px;
            font-size: 16px;
        }


        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .text-end .btn {
            box-shadow: 0px 3px 8px rgba(0, 123, 255, 0.4);
        }
    </style>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">RED HOTEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Reservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('gumanakana_controller/page'); ?>">Add</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="header text-center">Reservations</h2>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Date</th>
                    <th scope="col">Arrival</th>
                    <th scope="col">Departure</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <td><?php echo $item['ID']; ?></td>
                        <td><?php echo $item['Fullname']; ?></td>
                        <td><?php echo $item['contact_number']; ?></td>
                        <td><?php echo $item['reservation_date']; ?></td>
                        <td><?php echo $item['arrival_time']; ?></td>
                        <td><?php echo $item['departure_time']; ?></td>
                        <td>
                            <button class="btn btn-warning btn-sm">EDIT</button>
                            <button class="btn btn-danger btn-sm">DELETE</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
