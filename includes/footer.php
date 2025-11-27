<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="footer-style.css">

      <style>
        /* ===========================
   FOOTER STYLES
=========================== */
.site-footer {
    background: #111;
    color: #ccc;
    padding: 50px 40px;
    font-family: Poppins, sans-serif;
    text-align: center;
    margin-top: 5px;
}

.footer-top {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-wrap: wrap;
    gap: 40px;
    margin-bottom: 40px;
}

.footer-logo h2 {
    font-size: 26px;
    color: #fff;
    margin-bottom: 5px;
}

.footer-logo p {
    font-size: 14px;
    letter-spacing: 1px;
}

.footer-links {
    display: flex;
    gap: 50px;
    flex-wrap: wrap;
}

.footer-links ul {
    list-style: none;
    padding: 0;
    text-align: left;
}

.footer-links ul li {
    font-size: 14px;
    margin-bottom: 10px;
    cursor: pointer;
    color: #bbb;
}

.footer-links ul li:hover {
    color: #fff;
}

.footer-line {
    height: 1px;
    width: 100%;
    background: #333;
    margin: 40px 0;
}

.footer-social {
    display: flex;
    justify-content: center;
    gap: 18px;
    margin-bottom: 20px;
}

.footer-social a {
    font-size: 20px;
    color: #ccc;
    background: #222;
    padding: 10px;
    border-radius: 50%;
    width: 42px;
    height: 42px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.3s;
}

.footer-social a:hover {
    background: #444;
    color: #fff;
}

.footer-copy {
    font-size: 14px;
    color: #aaa;
}

/* ===========================
   RESPONSIVE DESIGN
=========================== */
@media (max-width: 900px) {
    .footer-top {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .footer-links {
        justify-content: center;
    }

    .footer-links ul {
        text-align: center;
    }
}

@media (max-width: 600px) {
    .footer-links {
        flex-direction: column;
        gap: 20px;
    }

    .footer-links ul li {
        font-size: 13px;
    }

    .footer-social a {
        width: 38px;
        height: 38px;
        font-size: 18px;
    }
}

      </style>
</head>
<body>
    <footer class="site-footer">

    <div class="footer-top">

        <!-- LOGO + SLOGAN -->
        <div class="footer-logo">
            <h2>LOGO</h2>
            <p>SOLOGAN COMPANY</p>
        </div>

        <!-- FOOTER LINKS -->
        <div class="footer-links">
            <ul>
                <li>WEEBLY THEMES</li>
                <li>PRE-SALE FAQS</li>
                <li>SUBMIT A TICKET</li>
            </ul>

            <ul>
                <li>SERVICES</li>
                <li>THEME TWEAK</li>
            </ul>

            <ul>
                <li>SHOWCASE</li>
                <li>WIDGETKIT</li>
                <li>SUPPORT</li>
            </ul>

            <ul>
                <li>ABOUT US</li>
                <li>CONTACT US</li>
                <li>AFFILIATES</li>
                <li>RESOURCES</li>
            </ul>
        </div>
    </div>

    <div class="footer-line"></div>

    <!-- SOCIAL ICONS -->
    <div class="footer-social">
        <a href="#">🌐</a>
        <a href="#">🐦</a>
        <a href="#">📡</a>
        <a href="#">📷</a>
        <a href="#">⭐</a>
    </div>

    <!-- COPYRIGHT -->
    <p class="footer-copy">© Copyright. All rights reserved.</p>

</footer>


</body>
</html>