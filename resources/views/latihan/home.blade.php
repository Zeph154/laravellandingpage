<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniro - Furniture Store</title>
    <link rel="stylesheet" href="CSS 2.css">
</head>
<style>
    /* Base styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Header and Navigation */
header {
    background-color: #fff;
    padding: 20px 0;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo {
    font-size: 24px;
    font-weight: bold;
}

.logo img {
    max-height: 40px;
    width: auto;
}

.nav-links {
    display: flex;
    list-style: none;
    padding: 0;
}

.nav-links li {
    margin-right: 20px;
}

.nav-links a {
    text-decoration: none;
    color: #333;
}

.nav-icons a {
    margin-left: 15px;
    text-decoration: none;
}

/* Hero Section */
.hero {
    background-image: url('hero-bg.jpg');
    background-size: cover;
    background-position: center;
    color: #fff;
    text-align: center;
    padding: 100px 20px;
}

.hero h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    background-color: #e0a80d;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

/* Sections */
.browse-range, .products, .inspiration, .social-proof {
    max-width: 1200px;
    margin: 60px auto;
    padding: 0 20px;
    text-align: center;
}

/* Grids */
.category-images, .product-grid, .inspiration-grid, .social-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 40px;
}

/* Product Cards */
.product-card {
    background-color: #f9f9f9;
    padding: 20px;
    text-align: left;
}

.product-card img, .category img, .inspiration-grid img, .social-grid img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

/* Footer */
footer img {
    width: 100%;
    height: auto;
}

/* Responsive Styles */
@media screen and (max-width: 768px) {
    nav {
        flex-direction: column;
        align-items: flex-start;
    }

    .logo {
        margin-bottom: 20px;
    }

    .nav-links {
        flex-direction: column;
        width: 100%;
    }

    .nav-links li {
        margin-right: 0;
        margin-bottom: 10px;
    }

    .nav-icons {
        margin-top: 20px;
    }

    .hero h1 {
        font-size: 36px;
    }

    .category-images, .product-grid, .inspiration-grid, .social-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
}

@media screen and (max-width: 480px) {
    .hero h1 {
        font-size: 28px;
    }

    .category-images, .product-grid, .inspiration-grid, .social-grid {
        grid-template-columns: 1fr;
    }
}
</style>
<body>
    <header>
        <nav>
            <div class="logo">Furniro</div>
            <img src="c:\Users\USER\OneDrive\Dokumen\cba cba 2\Meubel House_Logos-05.jpg"alt="Furniro">
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
            <div class="nav-icons">
                <a href="#" class="icon">🔍</a>
                <a href="#" class="icon">🛒</a>
                <a href="#" class="icon">👤</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Discover Our New Collection</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn">Shop Now</a>
        </section>

        <section class="browse-range">
            <h2>Browse The Range</h2>
            <div class="category-images">
                <div class="category">
                    <img src="dining.jpg" alt="Dining">
                    <p>Dining</p>
                </div>
                <div class="category">
                    <img src="living.jpg" alt="Living">
                    <p>Living</p>
                </div>
                <div class="category">
                    <img src="bedroom.jpg" alt="Bedroom">
                    <p>Bedroom</p>
                </div>
            </div>
        </section>

        <section class="products">
            <div class="product-grid">
                <!-- Repeat this structure for each product -->
                <div class="product-card">
                    <img src="product1.jpg" alt="Product 1">
                    <h3>Product Name</h3>
                    <p>$299.00</p>
                </div>
                <!-- More product cards -->
            </div>
        </section>

        <section class="inspiration">
            <h2>50+ Beautiful rooms inspiration</h2>
            <p>Our designer already made a lot of beautiful prototipe of rooms that inspire you</p>
            <a href="#" class="btn">Explore More</a>
            <div class="inspiration-grid">
                <img src="c:\Users\USER\OneDrive\Dokumen\cba cba 2\Products.jpg">
            </div>
        </section>

        <section class="social-proof">
            <div class="social-grid">
                <img src="c:\Users\USER\OneDrive\Dokumen\cba cba 2\Share.jpg">
            </div>
        </section>
    </main>

    <footer>
    <img src="c:\Users\USER\OneDrive\Dokumen\cba cba 2\footer.jpg">
    </footer>
</body>
</html>