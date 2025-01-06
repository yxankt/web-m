<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stay.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajamangala University Login</title>
    <style>
         /* ปรับตำแหน่งลูกศร */
         .carousel-control-prev,
        .carousel-control-next {
            width: auto;
            height: auto;
        }

        .carousel-control-prev {
            left: -60px;
            top: 950%; 
            transform: translateY(-50%);
        }

        .carousel-control-next {
            right: -60px; 
            top: 950%; 
            transform: translateY(-50%);
        }

        /* ปรับสีและรูปทรงลูกศร */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black; 
            border-radius: 50%; 
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="logo_rmutsb_transparent.gif" width=50px height=100px  alt="University Logo">
        <h1>มหาวิทยาลัยเทคโนโลยีราชมงคลสุวรรณภูมิ<br>Rajamangala University of Technology Suvarnabhumi</h1>
    </div>
    
    <div class="container mt-5">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image1.jpg" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="image2.jpg" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="image3.jpg" class="d-block w-100" alt="Image 3">
                </div>
                <div class="carousel-item">
                    <img src="image4.jpg" class="d-block w-100" alt="Image 3">
                </div>
                <div class="carousel-item">
                    <img src="image5.jpg" class="d-block w-100" alt="Image 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="navbar">
        <div class="input-container">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Username...">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password">
            
        </div>
        <div class="input-group">
        <a href="login.html" class="btn btn-dark btn-sm" style="border-radius: 20px;">login</a>
        <a href="#" class="btn btn-secondary btn-sm" style="border-radius: 20px;">register</a>
        </div>
        <a href="#" class="btn btn-link btn-sm">Forgot password</a>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
