<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css"> 
</head>
<body>
    <?php include 'include/header.php'; ?>
    <div class="hero-slider">
        <!-- Slide 1 -->
        <div class="slide active" data-slide="0">
            <div class="slide-content">
                <p class="small-title">Medical Equipment</p>
                <h1 class="main-title">Professional Stethoscopes For Healthcare</h1>
                <div class="button-group">
                    <button class="btn btn-primary">Shop Now</button>
                    <button class="btn btn-secondary">Category</button>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide" data-slide="1">
            <div class="slide-content">
                <p class="small-title">Surgical Supplies</p>
                <h1 class="main-title">Premium Medical Instruments & Tools</h1>
                <div class="button-group">
                    <button class="btn btn-primary">Shop Now</button>
                    <button class="btn btn-secondary">Category</button>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide" data-slide="2">
            <div class="slide-content">
                <p class="small-title">Patient Care</p>
                <h1 class="main-title">Complete Healthcare Solutions & Support</h1>
                <div class="button-group">
                    <button class="btn btn-primary">Shop Now</button>
                    <button class="btn btn-secondary">Category</button>
                </div>
            </div>
        </div>

        <!-- Arrow Navigation -->
        <div class="arrow arrow-left" onclick="changeSlide(-1)">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="arrow arrow-right" onclick="changeSlide(1)">
            <i class="fas fa-chevron-right"></i>
        </div>

        <!-- Navigation Dots -->
        <div class="navigation-dots">
            <div class="dot active" onclick="goToSlide(0)"></div>
            <div class="dot" onclick="goToSlide(1)"></div>
            <div class="dot" onclick="goToSlide(2)"></div>
        </div>
    </div>

  


    <?php include 'include/footer.php'; ?>
</body>
</html>