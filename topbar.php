<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Top Bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .top-bar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: green;
            z-index: 1000;
        }
        .top-bar .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            color: white;
        }
        .top-bar .col-lg-7 {
            display: flex;
            align-items: center;
        }
        .top-bar .fa {
            margin-right: 5px;
        }
        .top-bar .btn-square {
            display: inline-block;
            padding: 5px;
            margin-left: 5px;
            color: white;
        }
        .content {
            margin-top: 60px; /* Adjust based on the height of your top bar */
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="top-bar">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>College of Administrative Studies and Social Sciences, Sabo Campus, Kaduna Polytechnic</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <!-- Your page content goes here -->
    </div>

</body>
</html>
