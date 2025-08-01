<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We Global Steel Hub">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../build/assets/css/styles.css">
    <!-- Swiper CSS -->
    <link rel="icon" href="../build/assets/images/favicon-16x16.png">
    <link rel="icon" href="../build/assets/images/favicon-32x32.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


    <title>Global Steel Hub</title>
    <style>
        @media screen and (max-width:768px) {
            .whatsapp-toggle {
                position: fixed;
                bottom: 5rem;
                right: 1rem;
                background: #25D366;
                padding: 10px;
                border-radius: 50px;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            }


        }

       


        /* left: 50%; */

        /* area details  */
       

        /* Swiper container size */
        .swiper {
            max-width: 900px;
            margin: 0 auto 48px auto;
            padding: 0 8px;
        }

        .swiper-slide {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(60, 72, 90, 0.06);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 28px 20px 24px;
            text-align: center;
            /* Height can be fixed or auto */
            height: 250px;
            box-sizing: border-box;
        }

        .card-icon {
            font-size: 2.5rem;
            color: #0057d6;
            margin-bottom: 16px;
            user-select: none;
        }

        .swiper-slide h3 {
            margin: 0 0 10px 0;
            font-size: 1.25rem;
            color: #274777;
            user-select: none;
        }

        .swiper-slide p {
            margin: 0;
            color: #596377;
            font-size: 1rem;
            user-select: none;
        }

        /* Swiper navigation buttons styling */
        .swiper-button-next,
        .swiper-button-prev {
            color: #0057d6;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #e0e7ff;
            transition: background-color 0.25s ease;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: #c1d1ff;
            color: #003890;
        }

        /* Smaller icon and padding on mobile */
        @media (max-width: 599px) {
            .swiper-slide {
                height: auto;
                padding: 20px 15px 24px;
            }

            .card-icon {
                font-size: 2rem;
            }

            .swiper-slide h3 {
                font-size: 1.1rem;
            }

            .swiper-slide p {
                font-size: 0.95rem;
            }

            .swiper-button-next,
            .swiper-button-prev {
                width: 30px;
                height: 30px;
            }
        }
    </style>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="left">Welcome to Global Steel Hub</div>
                    <div class="right-social">
                        <div class="contact-detail">

                            <a href="tel:+918882668343"><i class="fa-solid fa-phone"></i>+918882668343</a>
                            <a href="tel:+918882668343" class="header-email">| <i
                                    class="fa-solid fa-envelope"></i>sonukumarsingh.hrc@gmail.com</a>
                        </div>
                        <div class="social-detail">

                            <a href="https://www.facebook.com/profile.php?id=61557274148189" aria-label="Facebook"><i
                                    class="fa-brands fa-facebook"></i></a>
                            <a href="https://twitter.com/share?url=https://www.globalsteelhub.in/"
                                aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/cws/share?url=https://www.globalsteelhub.in/"
                                aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="nav container">
            <div class="nav_data">
                <a href="../index.php" class="nav_logo">
                    <img src="../build/assets/images/logo.png" alt="global steel hub logo">
                </a>

                <div class="nav_toggle" id="nav-toggle">
                    <i class="ri-menu-line nav_toggle-menu"></i>
                    <i class="ri-close-line nav_toggle-close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li>
                        <a href="../index.php" class="nav_link">Home</a>
                    </li>

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown_item">
                        <div class="nav_link dropdown_button">
                            Product <i class="fa-solid fa-caret-down" style="color: hsl(220, 48%, 28%);"></i>
                        </div>

                        <div class="dropdown_container">
                            <div class="dropdown_content">
                                <div class="dropdown_group">
                                    <div class="dropdown_icon">
                                        <i class="ri-shopping-cart-line"></i>
                                    </div>

                                    <span class="dropdown_title">Super Market Racks</span>

                                    <ul class="dropdown_list">
                                        <li>
                                            <a href="#" class="dropdown_link">Wall Rack</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Corner Rack</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Fruits &amp; Vegitable Rack</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Trolly &amp; Baskets</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Glass Rack</a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="dropdown_group">
                                    <div class="dropdown_icon">
                                        <i class="ri-add-box-line"></i>
                                    </div>

                                    <span class="dropdown_title">Additional Racks</span>

                                    <ul class="dropdown_list">
                                        <li>
                                            <a href="#" class="dropdown_link">L Shape Cash Desk Counter</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Cloth Hanging Stand</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Crockery Racks</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">SS Wire Bin Basket</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Garment Shelving</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown_group">
                                    <div class="dropdown_icon">
                                        <i class="ri-building-line"></i>
                                    </div>

                                    <span class="dropdown_title">Storage Racks</span>

                                    <ul class="dropdown_list">
                                        <li>
                                            <a href="#" class="dropdown_link">Industrial Rack</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Book Rack and Shelf</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Wall Mount Rack</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Heavy Duty Racks</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Hook Rack</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown_group">
                                    <div class="dropdown_icon">
                                        <i class="ri-tools-line"></i>
                                    </div>

                                    <span class="dropdown_title">Accessories Rack</span>

                                    <ul class="dropdown_list">
                                        <li>
                                            <a href="#" class="dropdown_link">Checkout Counter</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Glass Rack</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Shopping Basket Trolley</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Shoe Display Rack</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Retail Store Shelves</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--=============== DROPDOWN 2 ===============-->
                    <!-- <li class="dropdown_item">
                        <div class="nav_link dropdown_button">
                            Resources <i class="fa-solid fa-caret-down" style="color: hsl(220, 48%, 28%);"></i>
                        </div>

                        <div class="dropdown_container">
                            <div class="dropdown_content">
                                <div class="dropdown_group">
                                    <div class="dropdown_icon">
                                        <i class="ri-code-line"></i>
                                    </div>

                                    <span class="dropdown_title">Rack</span>

                                    <ul class="dropdown_list">
                                        <li>
                                            <a href="#" class="dropdown_link">Rack</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Rack</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown_group">
                                    <div class="dropdown_icon">
                                        <i class="ri-pen-nib-line"></i>
                                    </div>

                                    <span class="dropdown_title">Designs</span>

                                    <ul class="dropdown_list">
                                        <li>
                                            <a href="#" class="dropdown_link">Rack</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Rack</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Rack</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown_group">
                                    <div class="dropdown_icon">
                                        <i class="ri-apps-2-line"></i>
                                    </div>

                                    <span class="dropdown_title">Others</span>

                                    <ul class="dropdown_list">
                                        <li>
                                            <a href="#" class="dropdown_link">li 1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">li 2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">li 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li> -->
                    <li>
                        <a href="../top-display-rack-products.php" class="nav_link">Top Products</a>
                    </li>
                    <li>
                        <a href="../our-clients.php" class="nav_link">Clients</a>
                    </li>
                    <li>
                        <a href="../about.php" class="nav_link">About us</a>
                    </li>

                    <!--=============== DROPDOWN 3 ===============-->
                    <!-- <li class="dropdown_item">
                        <div class="nav_link dropdown_button">
                            Company <i class="fa-solid fa-caret-down" style="color: hsl(220, 48%, 28%);"></i>
                        </div>

                        <div class="dropdown_container">
                            <div class="dropdown_content">
                                <div class="dropdown_group">
                                    <div class="dropdown_icon">
                                        <i class="ri-community-line"></i>
                                    </div>

                                    <span class="dropdown_title">About us</span>

                                    <ul class="dropdown_list">
                                        <li>
                                            <a href="#" class="dropdown_link">About us</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Support</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Contact us</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown_group">
                                    <div class="dropdown_icon">
                                        <i class="ri-shield-line"></i>
                                    </div>

                                    <span class="dropdown_title">Safety and quality</span>

                                    <ul class="dropdown_list">
                                        <li>
                                            <a href="#" class="dropdown_link">Cookie settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown_link">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li> -->

                    <li><a href="../contactus.php" class="nav_link">Contact us</a></li>

                </ul>
            </div>
        </nav>
    </header>
    
    <main style="margin-top: 11vh;">
        <div class="container">
           <div class="image-overlay-container">
    <img src="../build/assets/images/multi-tier-rack2.webp" alt="Sample Storage Racks in Delhi">
    <div class="overlay-text">
      <h2 style="color: #eb531b;">Best Storage Racks in Delhi</h2>
      <p>Premium quality shelving and display racks for every industry and space.</p>
      <a href="../top-display-rack-products.php" class="overlay-btn">Explore Products</a>
    </div>
  </div>
        </div>

    </main>


    <!-- service  area  -->
    <div class="container">
        <div class="area-row">
            <div class="area-about">
                <span>Global Steel Hub - Leading Display Rack Manufacturer in Delhi</span>
                <h2>Premium Display Racks in Delhi</h2>
                <p>Enhance your retail, supermarket, or commercial space with expertly crafted Display Racks from
                    industry-leading manufacturers in Delhi. Display racks are engineered to boost product visibility,
                    optimize floor space, and create visually appealing store layouts that drive customer engagement and
                    sales.</p>
                <h2>Why Choose Global Steel Hub in Delhi?</h2>
                <p>Our Strengths</p>
                <ul>
                    <li><strong>Supermarket Display Racks:</strong> Ideal for groceries, departmental stores, and retail
                        outlets. These racks are durable, modular, and customizable to fit any store layout or product
                        type.</li>
                    <li><strong>Wall-Mounted Racks:</strong> IPerfect for maximizing wall and floor space, allowing more
                        products to be showcased without crowding aisles.</li>
                    <li><strong>Freestanding and Modular Racks:</strong> Flexible options that can be moved,
                        repositioned, or reconfigured according to changing inventory or promotional needs.</li>
                    <li><strong>Garment Display Racks:</strong> Designed for clothing stores, these racks facilitate
                        organized presentation, easy browsing, and enhance the aesthetic appeal of your merchandise.
                    </li>
                    <li><strong>Countertop and Specialty Racks:</strong> For promoting featured products, small items,
                        or impulse buys near the billing area.</li>
                    <li><strong>Customized Display Solutions:</strong> Tailored designs to match your brand image, store
                        size, and specific business requirements.</li>
                </ul>

                <h2>Benefits of Choosing Quality Display Racks</h2>
                <ul>
                    <li><strong>Maximized Space Efficiency:</strong> Make optimal use of retail space, both wall and
                        floor, for better product organization and flow.</li>
                    <li><strong>Enhanced Product Visibility:</strong> Strategic display increases product prominence,
                        inviting customer interaction and boosting sales</li>
                    <li><strong>Customer Engagement:</strong> Well-designed racks create inviting layouts and contribute
                        to a pleasant shopping environment, encouraging customers to explore more items.</li>
                    <li><strong>Versatility and Customization:</strong> Modular and adjustable racks accommodate changes
                        in store layout, inventory, and promotional campaigns.</li>
                    <li><strong>Robustness and Durability:</strong> Made with premium materials, these racks ensure
                        long-term stability and performance, even in high-traffic retail environments</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="area-section">
        <div class="container area-row">
            <div class="area-left">
                <img src="../build/assets/images/fruits-and-vegetable-racks.webp"
                    alt="Fruits & Vegetable Racks in Delhi | Global Steel Hub">
            </div>
            <div class="area-right">
                <h2 class="area-heading">Leading Storage Racks Supplier in Delhi</h2>
                <div class="area-desc collapsed" id="areaDesc">
                    <strong>Heavy Duty Racks</strong> – Ideal for Delhi warehouses<br>
                    <strong>Supermarket Display Racks</strong> – Perfect for Delhi retailers<br>
                    <strong>Wall Racks</strong> – Versatile for any space<br>
                    <strong>Corner Racks</strong> – Save precious Delhi space<br>
                    <strong>Fruits & Vegetable Racks</strong> – Organize produce with ease<br>
                    <strong>Trolleys & Baskets</strong> – Streamline inventory movement<br>
                    <strong>Glass Racks</strong> – Safe, stylish display solutions<br>
                    <strong>Garment Shelving</strong> – For boutiques and showrooms<br>
                    <strong>Book Rack & Shelf</strong> – Organize libraries and offices<br>
                    <strong>Shoe Display Racks</strong> – Perfect for footwear retailers
                    <span class="readmore-extra">
                        <br><br>
                        From Delhi offices to Delhi supermarkets, hotels, libraries, and industrial units—count on
                        Global Steel Hub for all your storage needs. Our team in Delhi is ready to provide custom solutions,
                        installation, and after-sales support. Contact us today to request your Delhi delivery!
                    </span>
                </div>
                <button class="readmore-btn" onclick="toggleReadmore()">Read More</button>
            </div>
        </div>
    </div>


    <!-- service area end  -->

    <!-- <h2 class="container">Our Features</h2>

    Swiper -->
    <!-- <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" role="group" aria-label="Automation">
                <i class="fas fa-cogs card-icon" aria-hidden="true"></i>
                <h3>Automation</h3>
                <p>Streamline your workflow with our advanced automation tools designed for efficiency.</p>
            </div>
            <div class="swiper-slide" role="group" aria-label="Security">
                <i class="fas fa-shield-alt card-icon" aria-hidden="true"></i>
                <h3>Security</h3>
                <p>Protect your data and operations with best-in-class security solutions.</p>
            </div>
            <div class="swiper-slide" role="group" aria-label="Analytics">
                <i class="fas fa-chart-line card-icon" aria-hidden="true"></i>
                <h3>Analytics</h3>
                <p>Unlock insights and make data-driven decisions with real-time analytics.</p>
            </div>
            <div class="swiper-slide" role="group" aria-label="Collaboration">
                <i class="fas fa-users card-icon" aria-hidden="true"></i>
                <h3>Collaboration</h3>
                <p>Enable seamless teamwork, sharing, and productivity across your organization.</p>
            </div>
        </div> -->
    <!-- Swiper navigation buttons -->
    <!-- <div class="swiper-button-prev" aria-label="Previous slide"></div>
        <div class="swiper-button-next" aria-label="Next slide"></div>
    </div> -->




    <!-- sticky bottom navigation start  -->
    <!-- Sticky Bottom Navigation -->
    <div id="bottomNav">
        <ul class="navItems" id="navItems">
            <li>
                <a href="../index.php" class="active" onclick="setActive(this)">
                    <svg class="icon">
                        <use xlink:href="#icon-home"></use>
                    </svg>
                    <span>Home</span>
                </a>
            </li>

            </li>
            <li>
                <a href="../top-display-rack-products.php">
                    <svg class="icon">
                        <use xlink:href="#icon-menu"></use>
                    </svg>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="../contactus.php" onclick="setActive(this)">
                    <svg class="icon">
                        <use xlink:href="#icon-mail"></use>
                    </svg>
                    <span>Contact</span>
                </a>
            </li>
            <li>
                <a href="tel:08046057640" onclick="setActive(this)">
                    <svg class="icon">
                        <use xlink:href="#icon-phone"></use>
                    </svg>
                    <span>Call</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- SVG Icons -->
    <svg style="display: none;">
        <symbol id="icon-home" viewBox="0 0 24 24">
            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
        </symbol>
        <symbol id="icon-user" viewBox="0 0 24 24">
            <path
                d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
        </symbol>
        <symbol id="icon-menu" viewBox="0 0 24 24">
            <path d="M3 6h18v2H3zm0 5h18v2H3zm0 5h18v2H3z" />
        </symbol>
        <symbol id="icon-mail" viewBox="0 0 24 24">
            <path
                d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z" />
        </symbol>
        <symbol id="icon-phone" viewBox="0 0 24 24">
            <path
                d="M6.6 10.79a15.46 15.46 0 0 0 6.61 6.61l2.2-2.2a1 1 0 0 1 1.11-.21c1.2.48 2.52.74 3.85.74a1 1 0 0 1 1 1v3.5a1 1 0 0 1-1 1C11.85 22 2 12.15 2 2a1 1 0 0 1 1-1H6.5a1 1 0 0 1 1 1c0 1.33.26 2.65.74 3.85a1 1 0 0 1-.21 1.11l-2.2 2.2z" />
        </symbol>
    </svg>

    <!-- ========================================================End Contact form================================= -->
    <footer class="footer">
        <div class="footer-left">
            <img src="../build/assets/images/logo.png" alt="globalsteelhub footer">
            <p>At Global Steel hub, we specialize in manufacturing high-quality display racks tailored for retail
                stores, supermarkets, warehouses, and showrooms. </p>
            <div class="socials">
                <a href="https://www.facebook.com/profile.php?id=61557274148189"><i
                        class="fa-brands fa-facebook"></i></a>
                <a href="https://twitter.com/share?url=https://www.globalsteelhub.in/"><i
                        class="fa-brands fa-twitter"></i></a>
                <a href="https://www.linkedin.com/cws/share?url=https://www.globalsteelhub.in/"><i
                        class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <ul class="footer-right">
            <li>
                <h2 class="footer-head">Product</h2>
                <ul class="box">
                    <li><a href="#">Super Market Racks</a></li>
                    <li><a href="#">Additional Racks</a></li>
                    <li><a href="#">Storage Racks</a></li>
                    <li><a href="#">Accessories Rack</a></li>
                </ul>
            </li>
            <li class="features">
                <h2 class="footer-head">Useful Links</h2>
                <ul class="box">
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Clients</a></li>

                </ul>
            </li>
            <li>
                <h2 class="footer-head">Address</h2>
                <ul class="box">
                    <li><a href="#"><i class="fas fa-phone"></i> : +91 88826 68343</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i> : sonukumarsingh.hrc@gmail.com</a></li>
                    <li><a href="#"><i class="fas fa-map-marker-alt"></i> : D 94, Nanhey Park, Uttam Nagar, Matiala, New
                            Delhi, Delhi, 110059</a></li>

                </ul>
            </li>
        </ul>

        <div class="footer-bottom">
            <hr style="border-top: 1px solid #8c8b8b;">
            <p>All Right Reserved By &copy; Global Steel Hub 2025</p>
        </div>
    </footer>
    <!--=============== MAIN JS ===============-->
    <script src="../build/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            spaceBetween: 16,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // when window width is >= 600px
                600: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                // when window width is >= 900px
                900: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                },
            },
            // Enable keyboard navigation, optional
            keyboard: {
                enabled: true,
            },
            // Enable mousewheel control, optional
            mousewheel: {
                forceToAxis: true,
                releaseOnEdges: true,
            },
        });
    </script>
    <script>
        function toggleReadmore() {
            var desc = document.getElementById('areaDesc');
            var btn = document.querySelector('.readmore-btn');
            desc.classList.toggle('expanded');
            if (desc.classList.contains('expanded')) {
                btn.textContent = "Read Less";
            } else {
                btn.textContent = "Read More";
            }
        }
    </script>
</body>


</html>