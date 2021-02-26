<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:image" content="https://i.imgur.com/fzHn54A.png" />
    <meta name="twitter:image" content="https://i.imgur.com/fzHn54A.png" />
    <meta property="og:title" content="Central.so" />
    <meta property="og:url" content="https://central.so" />
    <meta property="og:description" content="All what's needed for companies to run. High end hardware, speeds, support, and care." />
    <meta name="description" content="All what's needed for companies to run. High end hardware, speeds, support, and care." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php 
            $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            if ( strpos($url, 'dedicated.php') !== false ) {
                echo('Premium Dedicated Servers - CentralSo');
            }
            elseif ( strpos($url, 'index.php') !== false ) {
                echo('Central Server Solutions - Home');
            }
            elseif ( strpos($url, 'vps.php') !== false ) {
                echo('Virtual Private Servers - CentralSo');
            }
            elseif ( strpos($url, 'windows-servers.php') !== false ) {
                echo('Windows RDP Servers - CentralSo');
            }
            elseif ( strpos($url, 'about-us.php') !== false ) {
                echo('About Us - CentralSo');
            }
            elseif ( strpos($url, 'terms-of-services.php') !== false ) {
                echo('Terms of services - CentralSo');
            }
            else echo('Central Server Solutions - Home')
        ?>
    
    </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/d70f8cdd06.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
</head>

<body>
<header id="mobile-hide" class="header-screen text-white body-font" data-aos="fade-down" data-aos-duration="900">
    <div id="navbar" class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center mb-4 md:mb-0" href="index.php">
                    <img class="logo w-52 mr-24" src="img/side_white.png" alt="">
                </a>
                <div class="flex flex-col ml-auto hidden lg:block text-right">
                    <nav class="ml-auto md:ml-autotext-base mb-2">
                        <a class="text-sm mr-5" href="/index.html"><span class="spinner-grow"></span>Status</a>
                        <a class="text-sm mr-5 active" href="/about/">VPS Panel</a>
                        <a class="text-sm" href="/order/">Support</a>
                    </nav>
                    <nav class=" md:ml-auto flex flex-wrap items-center text-base">
                        <a class="nav-link mr-8" href="index.php">Home</a>
                        <a class="nav-link mr-8 active" href="/about/">About</a>
                        <a class="nav-link mr-8" href="/order/">Order</a>
                        <a class="nav-link mr-8" href="#services">Services</a>
                        <a class="btn-login border-0 focus:outline-none rounded-full text-base" href="https://status.central.so/">ClientArea</a>
                    </nav>
                </div>
            </div>
        </header>
    </div>