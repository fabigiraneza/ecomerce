<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - REDY-MED</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../css/productopen.css">
   <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
   
</head>
<body>
    <!-- Hero Section -->
    <div class="hero">
        <h1><i class="fas fa-heartbeat"></i> Medical Product Details</h1>
        <div class="breadcrumb">
            <a href="#"><i class="fas fa-home"></i> Home</a>
            <span>/</span>
            <a href="#">Cables</a>
            <span>/</span>
            <a href="#">IBP Cables</a>
            <span>/</span>
            <span>Product Details</span>
        </div>
    </div>

    <!-- Main Container -->
    <div class="container">
        <div class="product-grid">
            <!-- Image Gallery -->
            <div class="image-gallery">
                <div class="main-image">
                    <img src="https://via.placeholder.com/500x500/ffffff/00e600?text=Product+Image" alt="Product Main Image" id="mainImage">
                </div>
                <div class="thumbnail-strip">
                    <div class="thumbnail active" onclick="changeImage(this, 'https://via.placeholder.com/500x500/ffffff/00e600?text=Product+Image')">
                        <img src="https://via.placeholder.com/80x80/ffffff/00e600?text=1" alt="Thumbnail 1">
                    </div>
                    <div class="thumbnail" onclick="changeImage(this, 'https://via.placeholder.com/500x500/ffffff/00b300?text=Detail+View')">
                        <img src="https://via.placeholder.com/80x80/ffffff/00b300?text=2" alt="Thumbnail 2">
                    </div>
                    <div class="thumbnail" onclick="changeImage(this, 'https://via.placeholder.com/500x500/ffffff/009900?text=Packaging')">
                        <img src="https://via.placeholder.com/80x80/ffffff/009900?text=3" alt="Thumbnail 3">
                    </div>
                    <div class="thumbnail" onclick="changeImage(this, 'https://via.placeholder.com/500x500/ffffff/007700?text=Technical')">
                        <img src="https://via.placeholder.com/80x80/ffffff/007700?text=4" alt="Thumbnail 4">
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="product-info">
                <div class="product-header">
                    <div class="product-sku">
                        <i class="fas fa-barcode"></i> SKU: BA-IBP-PH-UT-001
                    </div>
                    <h2 class="product-title">IBP Invasive Blood Pressure Cable - Utah Connector</h2>
                    <span class="product-brand"><i class="fas fa-certificate"></i> REDY-MED</span>
                </div>

                <div class="product-price">
                    <i class="fas fa-dollar-sign"></i>129.99
                </div>

                <div class="stock-status">
                    <i class="fas fa-check-circle"></i>
                    <span><strong>In Stock</strong> - Ships within 24 hours</span>
                </div>

                <div class="purchase-section">
                    <div class="quantity-selector">
                        <label for="quantity"><i class="fas fa-shopping-cart"></i> Quantity:</label>
                        <div class="quantity-controls">
                            <button onclick="decrementQuantity()"><i class="fas fa-minus"></i></button>
                            <input type="number" id="quantity" value="1" min="1" max="100">
                            <button onclick="incrementQuantity()"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <button class="btn-primary">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>

                <!-- Quick Features -->
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Latex-Free</h4>
                            <p>Safe for sensitive patients</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Universal Compatibility</h4>
                            <p>Works with multiple devices</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="feature-text">
                            <h4>12 Month Warranty</h4>
                            <p>Quality guaranteed</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Fast Shipping</h4>
                            <p>Quick delivery worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs Section -->
        <div class="tabs-container">
            <div class="tabs">
                <button class="tab active" onclick="openTab(event, 'description')">
                    <i class="fas fa-info-circle"></i> Description
                </button>
                <button class="tab" onclick="openTab(event, 'specifications')">
                    <i class="fas fa-list-ul"></i> Specifications
                </button>
                <button class="tab" onclick="openTab(event, 'compatibility')">
                    <i class="fas fa-plug"></i> Compatibility
                </button>
                <button class="tab" onclick="openTab(event, 'certifications')">
                    <i class="fas fa-certificate"></i> Certifications
                </button>
            </div>

            <!-- Description Tab -->
            <div id="description" class="tab-content active">
                <div class="description-content">
                    <h3>Product Overview</h3>
                    <p>The REDY-MED IBP Invasive Blood Pressure Cable with Utah connector is a high-quality medical accessory designed for accurate and reliable blood pressure monitoring. This professional-grade cable ensures stable signal transmission and is compatible with a wide range of patient monitors.</p>
                    
                    <h3>Key Features</h3>
                    <ul style="padding-left: 2rem; margin-top: 1rem;">
                        <li style="margin-bottom: 0.5rem;">High-quality materials for durability and longevity</li>
                        <li style="margin-bottom: 0.5rem;">Latex-free construction for patient safety</li>
                        <li style="margin-bottom: 0.5rem;">Utah connector type for universal compatibility</li>
                        <li style="margin-bottom: 0.5rem;">Flexible cable design for ease of use</li>
                        <li style="margin-bottom: 0.5rem;">Medical-grade quality with CE and ISO certifications</li>
                    </ul>
                </div>
            </div>

            <!-- Specifications Tab -->
            <div id="specifications" class="tab-content">
                <table class="spec-table">
                    <tr>
                        <td><i class="fas fa-palette"></i> Cable Color</td>
                        <td>Blue</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-ruler"></i> Total Cable Length</td>
                        <td>3.0 meters</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-circle"></i> Cable Diameter</td>
                        <td>4.0 mm</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-layer-group"></i> Trunk Cable Material</td>
                        <td>Medical Grade TPU</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-plug"></i> Connector Distal</td>
                        <td>Utah (6-pin)</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-link"></i> Connector Proximal</td>
                        <td>Standard Monitor Connection</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-weight"></i> Weight</td>
                        <td>0.15 kg</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-shield-virus"></i> Latex-free</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-box"></i> Packaging Type</td>
                        <td>Individual sealed package</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-boxes"></i> Packaging Unit</td>
                        <td>1 piece per box</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-certificate"></i> Warranty</td>
                        <td>12 months</td>
                    </tr>
                </table>
            </div>

            <!-- Compatibility Tab -->
            <div id="compatibility" class="tab-content">
                <h3 style="margin-bottom: 1.5rem;"><i class="fas fa-check-double"></i> Compatible Devices</h3>
                <div class="compatibility-grid">
                    <div class="manufacturer-card">
                        <h4><i class="fas fa-hospital"></i> Philips</h4>
                        <ul>
                            <li>IntelliVue MP Series</li>
                            <li>IntelliVue MX Series</li>
                            <li>SureSigns VM Series</li>
                            <li>M3001A</li>
                        </ul>
                    </div>
                    <div class="manufacturer-card">
                        <h4><i class="fas fa-hospital"></i> GE Healthcare</h4>
                        <ul>
                            <li>DASH Series</li>
                            <li>Solar Series</li>
                            <li>Tram Series</li>
                            <li>ApexPro</li>
                        </ul>
                    </div>
                    <div class="manufacturer-card">
                        <h4><i class="fas fa-hospital"></i> Mindray</h4>
                        <ul>
                            <li>BeneView Series</li>
                            <li>uMEC Series</li>
                            <li>DPM Series</li>
                            <li>iPM Series</li>
                        </ul>
                    </div>
                    <div class="manufacturer-card">
                        <h4><i class="fas fa-hospital"></i> Spacelabs</h4>
                        <ul>
                            <li>Ultraview SL Series</li>
                            <li>Xprezzon Series</li>
                            <li>91369</li>
                            <li>90369</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Certifications Tab -->
            <div id="certifications" class="tab-content">
                <h3 style="margin-bottom: 1.5rem;"><i class="fas fa-award"></i> Product Certifications</h3>
                <div class="cert-badges">
                    <div class="cert-badge">
                        <i class="fas fa-certificate"></i>
                        <strong>ISO 13485</strong>
                        <p style="text-align: center; color: var(--gray-dark); margin-top: 0.5rem;">Medical Device Quality Management</p>
                    </div>
                    <div class="cert-badge">
                        <i class="fas fa-check-circle"></i>
                        <strong>CE Certified</strong>
                        <p style="text-align: center; color: var(--gray-dark); margin-top: 0.5rem;">European Conformity</p>
                    </div>
                    <div class="cert-badge">
                        <i class="fas fa-shield-alt"></i>
                        <strong>FDA Approved</strong>
                        <p style="text-align: center; color: var(--gray-dark); margin-top: 0.5rem;">US Food & Drug Administration</p>
                    </div>
                </div>
                <div style="margin-top: 2rem; padding: 1.5rem; background: var(--gray-light); border-radius: var(--border-radius);">
                    <p><i class="fas fa-info-circle" style="color: var(--primary-color);"></i> <strong>Quality Assurance:</strong> All REDY-MED products undergo rigorous testing and quality control procedures to ensure they meet the highest international standards for medical devices.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products Section -->
    <div class="container" style="margin-top: 4rem;">
        <div class="section-header">
            <h2><i class="fas fa-th-large"></i> Related Products</h2>
            <p>Browse our selection of compatible medical equipment</p>
        </div>
        
        <div class="products-grid">
            <div class="product-card">
                <div class="product-image">
                    <span class="badge badge-new">NEW</span>
                    <img src="https://via.placeholder.com/300x300/ffffff/00e600?text=ECG+Cable" alt="ECG Cable">
                    <div class="product-overlay">
                        <button class="overlay-btn"><i class="fas fa-eye"></i> Quick View</button>
                    </div>
                </div>
                <div class="product-card-body">
                    <div class="product-category">ECG CABLES</div>
                    <h3 class="product-card-title">5-Lead ECG Cable - Snap Type</h3>
                    <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(24)</span>
                    </div>
                    <div class="product-card-footer">
                        <div class="product-card-price">
                            <span class="price-current">$89.99</span>
                            <span class="price-old">$109.99</span>
                        </div>
                        <button class="btn-add-cart"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="badge badge-sale">SALE</span>
                    <img src="https://via.placeholder.com/300x300/ffffff/00b300?text=SpO2+Sensor" alt="SpO2 Sensor">
                    <div class="product-overlay">
                        <button class="overlay-btn"><i class="fas fa-eye"></i> Quick View</button>
                    </div>
                </div>
                <div class="product-card-body">
                    <div class="product-category">SPO2 SENSORS</div>
                    <h3 class="product-card-title">Adult SpO2 Finger Sensor</h3>
                    <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>(18)</span>
                    </div>
                    <div class="product-card-footer">
                        <div class="product-card-price">
                            <span class="price-current">$45.99</span>
                            <span class="price-old">$65.99</span>
                        </div>
                        <button class="btn-add-cart"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="https://via.placeholder.com/300x300/ffffff/009900?text=NIBP+Cuff" alt="NIBP Cuff">
                    <div class="product-overlay">
                        <button class="overlay-btn"><i class="fas fa-eye"></i> Quick View</button>
                    </div>
                </div>
                <div class="product-card-body">
                    <div class="product-category">NIBP ACCESSORIES</div>
                    <h3 class="product-card-title">Reusable NIBP Cuff - Adult</h3>
                    <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(32)</span>
                    </div>
                    <div class="product-card-footer">
                        <div class="product-card-price">
                            <span class="price-current">$34.99</span>
                        </div>
                        <button class="btn-add-cart"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="badge badge-new">NEW</span>
                    <img src="https://via.placeholder.com/300x300/ffffff/007700?text=Temperature+Probe" alt="Temperature Probe">
                    <div class="product-overlay">
                        <button class="overlay-btn"><i class="fas fa-eye"></i> Quick View</button>
                    </div>
                </div>
                <div class="product-card-body">
                    <div class="product-category">TEMPERATURE</div>
                    <h3 class="product-card-title">Disposable Temperature Probe</h3>
                    <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(15)</span>
                    </div>
                    <div class="product-card-footer">
                        <div class="product-card-price">
                            <span class="price-current">$19.99</span>
                        </div>
                        <button class="btn-add-cart"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews/Comments Section -->
    <div class="container" style="margin-top: 4rem; margin-bottom: 4rem;">
        <div class="section-header">
            <h2><i class="fas fa-comments"></i> Customer Reviews</h2>
            <p>See what our customers are saying about this product</p>
        </div>

        <div class="reviews-container">
            <!-- Review Summary -->
            <div class="review-summary">
                <div class="rating-overview">
                    <div class="rating-score">4.5</div>
                    <div class="rating-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="rating-count">Based on 28 reviews</div>
                </div>
                <div class="rating-breakdown">
                    <div class="rating-bar-item">
                        <span>5 <i class="fas fa-star"></i></span>
                        <div class="rating-bar">
                            <div class="rating-bar-fill" style="width: 75%"></div>
                        </div>
                        <span>21</span>
                    </div>
                    <div class="rating-bar-item">
                        <span>4 <i class="fas fa-star"></i></span>
                        <div class="rating-bar">
                            <div class="rating-bar-fill" style="width: 15%"></div>
                        </div>
                        <span>4</span>
                    </div>
                    <div class="rating-bar-item">
                        <span>3 <i class="fas fa-star"></i></span>
                        <div class="rating-bar">
                            <div class="rating-bar-fill" style="width: 7%"></div>
                        </div>
                        <span>2</span>
                    </div>
                    <div class="rating-bar-item">
                        <span>2 <i class="fas fa-star"></i></span>
                        <div class="rating-bar">
                            <div class="rating-bar-fill" style="width: 3%"></div>
                        </div>
                        <span>1</span>
                    </div>
                    <div class="rating-bar-item">
                        <span>1 <i class="fas fa-star"></i></span>
                        <div class="rating-bar">
                            <div class="rating-bar-fill" style="width: 0%"></div>
                        </div>
                        <span>0</span>
                    </div>
                </div>
            </div>

            <!-- Review List -->
            <div class="reviews-list">
                <div class="review-item">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="reviewer-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h4>Dr. Sarah Johnson</h4>
                                <div class="review-meta">
                                    <span class="review-date"><i class="far fa-calendar"></i> October 15, 2025</span>
                                    <span class="verified-badge"><i class="fas fa-check-circle"></i> Verified Purchase</span>
                                </div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="review-body">
                        <h5>Excellent Quality Cable</h5>
                        <p>This IBP cable has been working perfectly in our ICU for the past 3 months. The Utah connector fits securely and the cable is durable. Signal quality is consistent and reliable. Great value for the price!</p>
                    </div>
                    <div class="review-footer">
                        <button class="review-action"><i class="far fa-thumbs-up"></i> Helpful (12)</button>
                        <button class="review-action"><i class="far fa-comment"></i> Reply</button>
                    </div>
                </div>

                <div class="review-item">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="reviewer-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h4>Michael Chen</h4>
                                <div class="review-meta">
                                    <span class="review-date"><i class="far fa-calendar"></i> October 8, 2025</span>
                                    <span class="verified-badge"><i class="fas fa-check-circle"></i> Verified Purchase</span>
                                </div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="review-body">
                        <h5>Good Product, Fast Shipping</h5>
                        <p>Compatible with our Philips monitors as advertised. The cable feels sturdy and well-made. Only minor issue is that it's slightly shorter than our previous cables, but still functional for our needs.</p>
                    </div>
                    <div class="review-footer">
                        <button class="review-action"><i class="far fa-thumbs-up"></i> Helpful (8)</button>
                        <button class="review-action"><i class="far fa-comment"></i> Reply</button>
                    </div>
                </div>

                <div class="review-item">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="reviewer-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h4>Emily Rodriguez</h4>
                                <div class="review-meta">
                                    <span class="review-date"><i class="far fa-calendar"></i> September 28, 2025</span>
                                    <span class="verified-badge"><i class="fas fa-check-circle"></i> Verified Purchase</span>
                                </div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="review-body">
                        <h5>Perfect Replacement</h5>
                        <p>Needed a replacement cable urgently and this arrived within 24 hours. Works flawlessly with our GE monitors. The latex-free material is important for our patient care standards. Highly recommend!</p>
                    </div>
                    <div class="review-footer">
                        <button class="review-action"><i class="far fa-thumbs-up"></i> Helpful (15)</button>
                        <button class="review-action"><i class="far fa-comment"></i> Reply</button>
                    </div>
                </div>
            </div>

            <!-- Add Review Form -->
            <div class="add-review-section">
                <h3><i class="fas fa-edit"></i> Write a Review</h3>
                <form class="review-form">
                    <div class="form-group">
                        <label>Your Rating *</label>
                        <div class="star-rating-input">
                            <i class="far fa-star" data-rating="1"></i>
                            <i class="far fa-star" data-rating="2"></i>
                            <i class="far fa-star" data-rating="3"></i>
                            <i class="far fa-star" data-rating="4"></i>
                            <i class="far fa-star" data-rating="5"></i>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="reviewName">Name *</label>
                            <input type="text" id="reviewName" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="reviewEmail">Email *</label>
                            <input type="email" id="reviewEmail" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="reviewTitle">Review Title *</label>
                        <input type="text" id="reviewTitle" placeholder="Give your review a title" required>
                    </div>
                    <div class="form-group">
                        <label for="reviewText">Your Review *</label>
                        <textarea id="reviewText" rows="5" placeholder="Share your experience with this product..." required></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="width: auto; padding: 0.8rem 2.5rem;">
                        <i class="fas fa-paper-plane"></i> Submit Review
                    </button>
                </form>
            </div>
        </div>
    </div>

   
</body>
</html>