<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Reservation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #1b1b32, #2a2a40);
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
        }

        /* 🔹 NAVBAR STYLING */
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
            max-width: 600px;
            margin: auto;
        }

        h2 {
            text-align: center;
            color: white;
            text-transform: uppercase;
            font-weight: 600;
        }

        .form-label {
            color: white;
            font-weight: 500;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: 0.3s;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">RED HOTEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('gumanakana_controller'); ?>">Reservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('gumanakana_controller/page'); ?>">Add</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2>Add Reservation</h2>
        <form action="<?php echo site_url('gumanakana_controller/add_item'); ?>" method="post">
            
            <div class="mb-3">
                <label for="Fullname" class="form-label">Full Name:</label>
                <input type="text" name="Fullname" id="Fullname" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="contact_number" class="form-label">Contact Number:</label>
                <input type="text" name="contact_number" id="contact_number" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="reservation_date" class="form-label">Reservation Date:</label>
                <input type="date" name="reservation_date" id="reservation_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="arrival_time" class="form-label">Arrival Time:</label>
                <input type="time" name="arrival_time" id="arrival_time" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="departure_time" class="form-label">Departure Time:</label>
                <input type="time" name="departure_time" id="departure_time" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="<?php echo base_url('gumanakana_controller'); ?>" class="btn btn-secondary">Back</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
