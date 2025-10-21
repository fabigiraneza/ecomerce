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
     <!-- Products Section -->
    <section class="products-section">
        <div class="section-header">
            <div class="section-label">Main Products</div>
            <h2 class="section-title">What We Do</h2>
            <a href="#" class="view-all-btn">
                View All Products
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="products-grid">
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=400&h=300&fit=crop" alt="Medical Equipment" class="product-image">
                    <div class="product-badge">Popular</div>
                </div>
                <div class="product-content">
                    <div class="product-name">Factory Price!! Reusable NIBP Cuff/ Blood Pressure Cuff Adult/ Child/ Infant/ Neonate/ Large Adult/ Adult Thigh Reusable NIBP Cuff</div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=400&h=300&fit=crop" alt="Medical Equipment" class="product-image">
                    <div class="product-badge">Popular</div>
                </div>
                <div class="product-content">
                    <div class="product-name">Compatible With Nellcor Oximax DB9 9Pin Disposable Spo2 Sensor</div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=400&h=300&fit=crop" alt="Medical Equipment" class="product-image">
                    <div class="product-badge">Popular</div>
                </div>
                <div class="product-content">
                    <div class="product-name">For Nellcor Oxi-Max Disposable Spo2 Sensor Compatible PVC Material for Neonatal/Adult Use</div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=400&h=300&fit=crop" alt="Medical Equipment" class="product-image">
                    <div class="product-badge">Popular</div>
                </div>
                <div class="product-content">
                    <div class="product-name">Compatible With Zoll/Mindray/Edan/Comen/Welch Allyn ECG Cable AAMI 6pin 3 Lead/5 Lead One-Piece ECG Cable</div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=400&h=300&fit=crop" alt="Medical Equipment" class="product-image">
                    <div class="product-badge">Popular</div>
                </div>
                <div class="product-content">
                    <div class="product-name">Compatible With Nihon Kohden Cardiofax GEM 9020K Cardiofax S 10 Lead EKG Cable</div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=400&h=300&fit=crop" alt="Medical Equipment" class="product-image">
                    <div class="product-badge">Popular</div>
                </div>
                <div class="product-content">
                    <div class="product-name">Reusable Blood Pressure Cuff Single Tube Adult Use 25-35cm Arm Circumference REDY-MED</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Section -->
    <section class="company-section">
        <div class="company-container">
            <div class="company-content">
                <h2>SHENZHEN REDY-MED TECHNOLOGY CO.,LTD</h2>
                <p>Shenzhen Redy-Med is a professional Monitor Accessories manufacturer and main products have reusable spo2sensor, disposable spo2 sensor, spo2extension cable, ECG cable, EKGCable, NIBP Cuff, IBP Cable, temperature probe, Fetal Toco Probe, Medical Machine Battery and different types monitor's OEM and ODM projects services etc.</p>
                <a href="#" class="explore-btn">
                    Explore more
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="company-image">
                <img src="https://via.placeholder.com/600x400/1a1a1a/00e600?text=Company+Booth" alt="Company Booth">
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-number">221+</div>
                <div class="stat-label">Founding Time</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">6+</div>
                <div class="stat-label">Employee Count</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">220m²</div>
                <div class="stat-label">Factory Covered</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">11+</div>
                <div class="stat-label">Countries Served</div>
            </div>
        </div>
    </section>
 <section class="product-showcase">
    <div class="showcase-container">
      <div class="showcase-image">
        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=800&h=1000&fit=crop" alt="Lodge Flush Mount">
        <div class="image-hotspot hotspot-1">
          <i class="fas fa-plus"></i>
        </div>
        <div class="image-hotspot hotspot-2">
          <i class="fas fa-plus"></i>
        </div>
        <div class="image-hotspot hotspot-3">
          <i class="fas fa-plus"></i>
        </div>
      </div>

      <div class="showcase-content">
        <div class="product-price">$500.00</div>
        
        <h1 class="product-title">Lodge Flush Mount</h1>

        <div class="product-features">
          <div class="feature-item">
            <div class="feature-icon">
              <i class="fas fa-layer-group"></i>
            </div>
            <div class="feature-content">
              <h3>Origin From</h3>
              <p>Sweden</p>
            </div>
          </div>

          <div class="feature-item">
            <div class="feature-icon">
              <i class="fas fa-layer-group"></i>
            </div>
            <div class="feature-content">
              <h3>Material</h3>
              <p>Aluminum</p>
            </div>
          </div>

          <div class="feature-item">
            <div class="feature-icon">
              <i class="fas fa-layer-group"></i>
            </div>
            <div class="feature-content">
              <h3>Designer</h3>
              <p>Basictheme</p>
            </div>
          </div>
        </div>

        <p class="product-description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.
        </p>

        <div class="product-actions">
          <button class="btn btn-primary">Shop Now</button>
          <button class="btn btn-secondary">Details</button>
        </div>

        <div class="countdown-timer">
          <div class="countdown-item">
            <span class="countdown-number">0</span>
            <span class="countdown-label">Days</span>
          </div>
          <div class="countdown-item">
            <span class="countdown-number">0</span>
            <span class="countdown-label">Hour</span>
          </div>
          <div class="countdown-item">
            <span class="countdown-number">00</span>
            <span class="countdown-label">Min</span>
          </div>
          <div class="countdown-item">
            <span class="countdown-number">00</span>
            <span class="countdown-label">Sec</span>
          </div>
        </div>
      </div>
    </div>
  </section>
    <?php include 'include/footer.php'; ?>
    <script src="js/main.js"></script>
    <script src="js/home.js"></script>
</body>
</html>