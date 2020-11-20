<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title><?php echo "$pageTitle" ?></title>
    <script src="https://kit.fontawesome.com/ec34e9393d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="js/slick/slick.css">
    <link rel="stylesheet" href="js/slick/slick-theme.css">
    <link rel="stylesheet" href="js/pushy-1.3.0/css/pushy.css">
    <link href="js/dist/hamburgers.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
</head>

<div id='stop-scroll' class='menu-btn'></div>
    <div id='scrollbar' class=''>
<div class="navbar-fixed-top">
<body id='body' class='body'>



        <!-- <div class="navbar-fixed-top"> -->
        <!-- Replace div below with commented one above -->
        <!-- <div> -->
            <header>
                <div class="header-items">
                    <div class="logo-container">
                        <a class="logo" href="index.php"><img src="img/nm-logo.png" alt="Netmatters logo"></a>
                    </div>
                    <a class="phone" href="tel:01603704020"><i class="fas fa-phone-alt"></i></a>
                    <button class="support-button"><i class="fas fa-mouse"></i>support</button>
                    <a class="cntct-link" href="contact-page.php"><button class="contact-button"><i
                                class="fas fa-paper-plane"></i>contact</button> </a>
                    <div class="search-container-lrg">
                        <input class="search-box" type="search" placeholder="Search...">
                        <i class="fa fa-search search-icon-2"></i>
                    </div>
                    <button class="search-button"><i class="fa fa-search"></i></button>


                    <button class="menu-btn hamburger--spin hamburger" id="burger" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                        <p>Menu</p>
                    </button>
                </div>
                <div class="search-container">
                    <input class="search-box" type="search" placeholder="Search...">
                    <i class="fa fa-search search-icon"></i>
                </div>
            </header>
            <div class="navbar">
                <div class="navbar-buttons">
                    <div class="nav-button nav-bar-web"><i class="fas fa-code nav-icn"></i>
                        <p>Web</p>Design
                        <div class="nav-hover-contents nav-hover-web">
                            <div class="content">
                                <a href="">Stylish Websites</a><span class="content-dash"></span>
                                <a href="">Ecommerce Stores</a><span class="content-dash"></span>
                                <a href="">Branding</a><span class="content-dash"></span>
                                <a href="">Mobile Apps</a><span class="content-dash"></span>
                                <a href="">Web Hosting</a><span class="content-dash"></span>
                                <a href="">Pay Monthly Websites</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-button nav-bar-it"><i class="fas fa-desktop nav-icn"></i>
                        <p>IT</p>Support
                        <div class="nav-hover-contents nav-hover-it">
                            <div class="content">
                                <a href="">Managed IT Support</a><span class="content-dash"></span>
                                <a href="">Business IT Support</a><span class="content-dash"></span>
                                <a href="">Office 365</a><span class="content-dash"></span>
                                <a href="">Consultancy</a><span class="content-dash"></span>
                                <a href="">Cloud Provider</a><span class="content-dash"></span>
                                <a href="">Data Backup</a>
                            </div>
                        </div>
                    </div>


                    <div class="nav-button nav-bar-telecoms"> <i class="fas fa-phone-volume nav-icn"></i>
                        <p>Telecoms</p>Services
                        <div class="nav-hover-contents nav-hover-telecoms">
                            <div class="content">
                                <a href="">Gigabit Voucher</a><span class="content-dash"></span>
                                <a href="">Hosted VOIP</a><span class="content-dash"></span>
                                <a href="">Business VOIP</a><span class="content-dash"></span>
                                <a href="">Business Broadband</a><span class="content-dash"></span>
                                <a href="">Leased Line</a><span class="content-dash"></span>
                                <a href="">3CX Systems</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-button nav-bar-bespoke"><i class="fas fa-th nav-icn"></i>
                        <p>Bespoke</p>Software
                        <div class="nav-hover-contents nav-hover-bespoke">
                            <div class="content">
                                <a href="">Workflow Solutions</a><span class="content-dash"></span>
                                <a href="">Automation</a><span class="content-dash"></span>
                                <a href="">System Integration</a><span class="content-dash"></span>
                                <a href="">Database Management</a><span class="content-dash"></span>
                                <a href="">Sharepoint</a><span class="content-dash"></span>
                                <a href="">ERP</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-button nav-bar-digital"><i class="fas fa-chart-bar nav-icn"></i>
                        <p>Digital</p>Marketing
                        <div class="nav-hover-contents nav-hover-digital">
                            <div class="content">
                                <a href="">SEO</a><span class="content-dash"></span>
                                <a href="">PPC</a><span class="content-dash"></span>
                                <a href="">CRO</a><span class="content-dash"></span>
                                <a href="">Email</a><span class="content-dash"></span>
                                <a href="">Social</a><span class="content-dash"></span>
                                <a href="">Content</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-button nav-bar-cyber"><i class="fas fa-shield-alt nav-icn"></i>
                        <p>Cyber</p>Security
                        <div class="nav-hover-contents nav-hover-cyber">
                            <div class="content">
                                <a href="">Assessment</a><span class="content-dash"></span>
                                <a href="">Management</a><span class="content-dash"></span>
                                <a href="">Penetration Testing</a><span class="content-dash"></span>
                                <a href="">Cyber Essentials</a><span class="content-dash"></span>
                                <a href="">PCI/DSS</a><span class="content-dash"></span>
                                <a href="">Hacker Prevention</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="pushy pushy-right">
            <div class="pushy-content">
                <ul>
                    <div class="pushy-mob-menu">
                        <li class="pushy-link pushy-head top-sub"><a href="#">Contact Us</a></li>
                        <div class="nav-button nav-bar-web">
                            <div><i class="fas fa-code nav-icn"></i>
                                <p>Web</p>Design
                            </div>
                        </div>
                        <div class="sub-menu-pushy">
                            <li class="pushy-link pushy-head"><a href="#">Stylish Websites</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Eccommerce Stores</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Branding</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Mobile Apps</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Web Hosting</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Pay Monthly Websites</a></li>
                        </div>
                        <div class="nav-button nav-bar-it"><i class="fas fa-desktop nav-icn"></i>
                            <p>IT</p>Support
                        </div>
                        <div class="sub-menu-pushy">
                            <li class="pushy-link pushy-head"><a href="#">Managed IT Support</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Business IT Support</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Office 365</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Consultancy</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Cloud Provider</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Data Backup</a></li>
                        </div>
                        <div class="nav-button nav-bar-telecoms"> <i class="fas fa-phone-volume nav-icn"></i>
                            <p>Telecoms</p>Services
                        </div>
                        <div class="sub-menu-pushy">
                            <li class="pushy-link pushy-head"><a href="#">Gigabit Voucher</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Hosted Voip</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Business Voip</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Business Broadband</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Leased Line</a></li>
                            <li class="pushy-link pushy-head"><a href="#">3CX Systems</a></li>
                        </div>
                        <div class="nav-button nav-bar-bespoke"><i class="fas fa-th nav-icn"></i>
                            <p>Bespoke</p>Software
                        </div>
                        <div class="sub-menu-pushy">
                            <li class="pushy-link pushy-head"><a href="#">Workflow Solutions</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Automation</a></li>
                            <li class="pushy-link pushy-head"><a href="#">System Intergration</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Database Management</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Sharepoint</a></li>
                            <li class="pushy-link pushy-head"><a href="#">ERP</a></li>
                        </div>
                        <div class="nav-button nav-bar-digital"><i class="fas fa-chart-bar nav-icn"></i>
                            <p>Digital</p>Marketing
                        </div>
                        <div class="sub-menu-pushy">
                            <li class="pushy-link pushy-head"><a href="#">SEO</a></li>
                            <li class="pushy-link pushy-head"><a href="#">PPC</a></li>
                            <li class="pushy-link pushy-head"><a href="#">CRO</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Email</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Social</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Content</a></li>
                        </div>
                        <div class="nav-button nav-bar-cyber"><i class="fas fa-shield-alt nav-icn"></i>
                            <p>Cyber</p>Security
                        </div>
                        <div class="sub-menu-pushy">
                            <li class="pushy-link pushy-head"><a href="#">Assessment</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Management</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Penetration Testing</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Cyber Essentials</a></li>
                            <li class="pushy-link pushy-head"><a href="#">PCI/DSS</a></li>
                            <li class="pushy-link pushy-head"><a href="#">Hacker Pevention</a></li>
                        </div>
                    </div>
                    <!-- Submenu -->
                    <li class="pushy-link pushy-head"><a href="#">Training</a></li>
                    <li class="pushy-link pushy-sub"><a href="#"> <i class="fas fa-angle-double-right"></i>Wed Developer
                            Course</a></li>
                    <li class="pushy-link pushy-head"><a href="#">Events</a></li>
                    <li class="pushy-link pushy-sub"><a href="#"> <i class="fas fa-angle-double-right"></i>Business
                            Automation Seminar</a></li>
                    <li class="pushy-link pushy-head"><a href="#">Our Company</a></li>
                    <li class="pushy-link pushy-sub"><a href="#"> <i class="fas fa-angle-double-right"></i>Our
                            Culture</a></li>
                    <li class="pushy-link pushy-sub"><a href="#"> <i class="fas fa-angle-double-right"></i>Our Team</a>
                    </li>
                    <li class="pushy-link pushy-sub"><a href="#"> <i class="fas fa-angle-double-right"></i>Our
                            Careers</a></li>
                    <li class="pushy-link pushy-sub"><a href="#"> <i class="fas fa-angle-double-right"></i>Our
                            Benefits</a></li>
                    <li class="pushy-link pushy-sub"><a href="#"> <i class="fas fa-angle-double-right"></i>Our Great
                            Yarmouth Office</a></li>
                    <li class="pushy-link pushy-head"><a href="#">Our Work</a></li>
                    <li class="pushy-link pushy-sub"><a href="#"> <i class="fas fa-angle-double-right"></i>Case
                            Studies</a></li>
                    <li class="pushy-link pushy-head"><a href="#">Our Knowledge</a></li>
                    <li class="pushy-link pushy-sub"><a href="#"> <i class="fas fa-angle-double-right"></i>Guides</a>
                    </li>
                    <li class="pushy-link pushy-sub"><a href="#"> <i class="fas fa-angle-double-right"></i>News</a></li>
                    <li class="pushy-link pushy-sub"><a href="#"> <i class="fas fa-angle-double-right"></i>Insights</a>
                    </li>

                </ul>
            </div>
        </nav>

