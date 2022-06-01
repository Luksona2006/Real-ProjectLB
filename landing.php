<?php 
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="icon" href="logo.ico">
    <title>Sailors</title>
</head>

<body>
    <header>
        
        <div class="header-info">
            <div class="container">
            <div class="header-Infowraper">
                <div class="header-left">
                    <div class="header-location">
                        <a href="https://www.google.com/maps/place/33+%E1%83%9C%E1%83%98%E1%83%99%E1%83%9D%E1%83%9A%E1%83%9D%E1%83%96+%E1%83%91%E1%83%90%E1%83%A0%E1%83%90%E1%83%97%E1%83%90%E1%83%A8%E1%83%95%E1%83%98%E1%83%9A%E1%83%98+%E1%83%A5%E1%83%A3%E1%83%A9%E1%83%90,+%E1%83%91%E1%83%90%E1%83%97%E1%83%A3%E1%83%9B%E1%83%98/@41.6482912,41.6360532,17z/data=!3m1!4b1!4m5!3m4!1s0x4067863fcacc141b:0xada29649bebbb04c!8m2!3d41.6482912!4d41.6382472"
                            target="_blank">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.8867 6.97769C13.1945 6.97769 12.5178 7.18296 11.9422 7.56755C11.3667 7.95213 10.918 8.49876 10.6531 9.1383C10.3882 9.77784 10.3189 10.4816 10.454 11.1605C10.589 11.8394 10.9224 12.4631 11.4118 12.9526C11.9013 13.442 12.525 13.7754 13.2039 13.9104C13.8828 14.0455 14.5866 13.9762 15.2261 13.7113C15.8657 13.4464 16.4123 12.9978 16.7969 12.4222C17.1814 11.8466 17.3867 11.1699 17.3867 10.4777C17.3857 9.54976 17.0166 8.66013 16.3604 8.00398C15.7043 7.34784 14.8147 6.97875 13.8867 6.97769V6.97769ZM13.8867 12.2277C13.5406 12.2277 13.2023 12.1251 12.9145 11.9328C12.6267 11.7405 12.4024 11.4672 12.2699 11.1474C12.1375 10.8276 12.1028 10.4757 12.1703 10.1363C12.2379 9.79682 12.4045 9.485 12.6493 9.24025C12.894 8.99551 13.2058 8.82884 13.5453 8.76132C13.8848 8.69379 14.2366 8.72845 14.5564 8.8609C14.8762 8.99336 15.1495 9.21766 15.3418 9.50544C15.5341 9.79323 15.6367 10.1316 15.6367 10.4777C15.6362 10.9417 15.4516 11.3865 15.1236 11.7145C14.7955 12.0426 14.3507 12.2272 13.8867 12.2277V12.2277Z"
                                    fill="white" />
                                <path
                                    d="M20.6111 3.74691C18.9482 2.08444 16.7284 1.09686 14.3802 0.974781C12.032 0.852704 9.72175 1.60478 7.89543 3.08587C6.06911 4.56695 4.85614 6.67204 4.49064 8.99485C4.12513 11.3177 4.633 13.6935 5.91622 15.6639L12.5283 25.8146C12.6755 26.0405 12.8767 26.2261 13.1136 26.3545C13.3506 26.483 13.616 26.5503 13.8855 26.5503C14.1551 26.5503 14.4204 26.483 14.6574 26.3545C14.8944 26.2261 15.0956 26.0405 15.2427 25.8146L21.8551 15.6639C23.0457 13.8361 23.5719 11.6546 23.3455 9.48491C23.119 7.31527 22.1536 5.28942 20.6111 3.74691ZM20.3888 14.7087L13.8856 24.6919L7.38228 14.7087C5.39166 11.6528 5.8186 7.56328 8.39745 4.98433C9.11815 4.2636 9.97375 3.6919 10.9154 3.30184C11.8571 2.91179 12.8663 2.71103 13.8856 2.71103C14.9048 2.71103 15.9141 2.91179 16.8557 3.30184C17.7974 3.6919 18.653 4.2636 19.3737 4.98433C21.9525 7.56328 22.3794 11.6528 20.3888 14.7087Z"
                                    fill="white" />
                            </svg>

                            <p> Batumi, Baratashvili 33 </p>
                        </a>
                    </div>
                    <div class="header-call">
                        <a href="tel:0422277303">
                            <svg width="19" height="28" viewBox="0 0 19 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.36272 1.25201L4.79739 0.793344C6.14272 0.364011 7.58005 1.05868 8.15605 2.41601L9.30272 5.12001C9.80139 6.29734 9.52405 7.68268 8.61739 8.54401L6.09072 10.9413C6.24672 12.376 6.72939 13.788 7.53739 15.1773C8.30468 16.5215 9.33388 17.6981 10.5641 18.6373L13.5987 17.624C14.7481 17.2413 16.0014 17.6827 16.7054 18.7187L18.3494 21.132C19.1694 22.3373 19.0214 23.9987 18.0041 25.02L16.9147 26.1147C15.8294 27.204 14.2787 27.6 12.8454 27.152C9.45872 26.096 6.34805 22.9613 3.50805 17.748C0.664053 12.5267 -0.339947 8.09468 0.497386 4.45734C0.849386 2.92668 1.93872 1.70668 3.36272 1.25201V1.25201Z"
                                    fill="#EBEBEB" />
                            </svg>
                            <p> 0 422 277 303 </p>
                    </div>

                </div>
                <div class="header-right">
                    <div>
                        <a href="#">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.9778 28V16.7385H14V12.6838H16.9778V9.2206C16.9778 6.49917 18.7368 4 22.7898 4C24.4309 4 25.6443 4.15732 25.6443 4.15732L25.5487 7.9437C25.5487 7.9437 24.3112 7.93166 22.9607 7.93166C21.4991 7.93166 21.2649 8.60522 21.2649 9.72316V12.6838H25.6649L25.4734 16.7385H21.2649V28H16.9778Z"
                                    fill="white" fill-opacity="0.9" />
                            </svg>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.9148 11.3628H15.3716V13.5828C16.0136 12.306 17.66 11.1588 20.1332 11.1588C24.8744 11.1588 26 13.7004 26 18.3636V27H21.2V19.4256C21.2 16.77 20.558 15.2724 18.9236 15.2724C16.6568 15.2724 15.7148 16.8864 15.7148 19.4244V27H10.9148V11.3628ZM2.684 26.796H7.484V11.1588H2.684V26.796ZM8.1716 6.06C8.17178 6.46233 8.09199 6.86068 7.93686 7.2319C7.78174 7.60313 7.55438 7.93982 7.268 8.2224C6.68768 8.79915 5.90217 9.12198 5.084 9.12C4.26727 9.11945 3.48357 8.79744 2.9024 8.2236C2.61705 7.94006 2.39046 7.60299 2.23561 7.23172C2.08076 6.86045 2.00069 6.46227 2 6.06C2 5.2476 2.324 4.47 2.9036 3.8964C3.48426 3.32179 4.26829 2.99964 5.0852 3C5.9036 3 6.6884 3.3228 7.268 3.8964C7.8464 4.47 8.1716 5.2476 8.1716 6.06Z"
                                    fill="white" fill-opacity="0.9" />
                            </svg>
                        </a>
                    </div>
                    <div>
                        <a id="instagram" href="https://www.instagram.com/gruzia_medica_batumi/">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.05273 2.072C10.3324 2.01309 10.7404 2 14 2C17.2596 2 17.6676 2.01418 18.9462 2.072C20.2247 2.12982 21.0975 2.33382 21.8611 2.62945C22.6607 2.93164 23.3862 3.404 23.9862 4.01491C24.5971 4.61382 25.0684 5.33818 25.3695 6.13891C25.6662 6.90255 25.8691 7.77527 25.928 9.05164C25.9869 10.3335 26 10.7415 26 14C26 17.2596 25.9858 17.6676 25.928 18.9473C25.8702 20.2236 25.6662 21.0964 25.3695 21.86C25.0684 22.6608 24.5963 23.3864 23.9862 23.9862C23.3862 24.5971 22.6607 25.0684 21.8611 25.3695C21.0975 25.6662 20.2247 25.8691 18.9484 25.928C17.6676 25.9869 17.2596 26 14 26C10.7404 26 10.3324 25.9858 9.05273 25.928C7.77636 25.8702 6.90364 25.6662 6.14 25.3695C5.33919 25.0683 4.61362 24.5963 4.01382 23.9862C3.40332 23.3869 2.93089 22.6617 2.62945 21.8611C2.33382 21.0975 2.13091 20.2247 2.072 18.9484C2.01309 17.6665 2 17.2585 2 14C2 10.7404 2.01418 10.3324 2.072 9.05382C2.12982 7.77527 2.33382 6.90255 2.62945 6.13891C2.93133 5.33827 3.40413 4.61307 4.01491 4.01382C4.61386 3.40346 5.3387 2.93103 6.13891 2.62945C6.90255 2.33382 7.77527 2.13091 9.05164 2.072H9.05273ZM18.8491 4.232C17.5836 4.17418 17.204 4.16218 14 4.16218C10.796 4.16218 10.4164 4.17418 9.15091 4.232C7.98036 4.28545 7.34545 4.48073 6.92218 4.64545C6.36255 4.86364 5.96218 5.12218 5.54218 5.54218C5.14405 5.92951 4.83765 6.40104 4.64545 6.92218C4.48073 7.34545 4.28545 7.98036 4.232 9.15091C4.17418 10.4164 4.16218 10.796 4.16218 14C4.16218 17.204 4.17418 17.5836 4.232 18.8491C4.28545 20.0196 4.48073 20.6545 4.64545 21.0778C4.83745 21.5982 5.144 22.0705 5.54218 22.4578C5.92945 22.856 6.40182 23.1625 6.92218 23.3545C7.34545 23.5193 7.98036 23.7145 9.15091 23.768C10.4164 23.8258 10.7949 23.8378 14 23.8378C17.2051 23.8378 17.5836 23.8258 18.8491 23.768C20.0196 23.7145 20.6545 23.5193 21.0778 23.3545C21.6375 23.1364 22.0378 22.8778 22.4578 22.4578C22.856 22.0705 23.1625 21.5982 23.3545 21.0778C23.5193 20.6545 23.7145 20.0196 23.768 18.8491C23.8258 17.5836 23.8378 17.204 23.8378 14C23.8378 10.796 23.8258 10.4164 23.768 9.15091C23.7145 7.98036 23.5193 7.34545 23.3545 6.92218C23.1364 6.36255 22.8778 5.96218 22.4578 5.54218C22.0705 5.14408 21.5989 4.83768 21.0778 4.64545C20.6545 4.48073 20.0196 4.28545 18.8491 4.232V4.232ZM12.4673 17.6993C13.3233 18.0556 14.2764 18.1037 15.1639 17.8353C16.0514 17.567 16.8182 16.9988 17.3334 16.2279C17.8485 15.457 18.0801 14.5311 17.9884 13.6085C17.8968 12.6858 17.4876 11.8236 16.8309 11.1691C16.4123 10.7507 15.9061 10.4303 15.3487 10.2311C14.7914 10.0318 14.1968 9.95858 13.6078 10.0167C13.0188 10.0748 12.45 10.2627 11.9423 10.5671C11.4347 10.8714 11.0008 11.2844 10.672 11.7766C10.3431 12.2687 10.1275 12.8276 10.0406 13.413C9.95365 13.9985 9.99762 14.596 10.1693 15.1624C10.341 15.7288 10.6362 16.2501 11.0335 16.6888C11.4309 17.1275 11.9205 17.4726 12.4673 17.6993ZM9.63855 9.63855C10.2113 9.06579 10.8913 8.61146 11.6396 8.30149C12.3879 7.99151 13.19 7.83197 14 7.83197C14.81 7.83197 15.6121 7.99151 16.3604 8.30148C17.1087 8.61146 17.7887 9.06579 18.3615 9.63855C18.9342 10.2113 19.3885 10.8913 19.6985 11.6396C20.0085 12.3879 20.168 13.19 20.168 14C20.168 14.81 20.0085 15.6121 19.6985 16.3604C19.3885 17.1087 18.9342 17.7887 18.3615 18.3615C17.2047 19.5182 15.6359 20.168 14 20.168C12.3641 20.168 10.7953 19.5182 9.63855 18.3615C8.48182 17.2047 7.83197 15.6359 7.83197 14C7.83197 12.3641 8.48182 10.7953 9.63855 9.63855V9.63855ZM21.536 8.75055C21.6779 8.61666 21.7916 8.45565 21.8702 8.27706C21.9487 8.09847 21.9907 7.90593 21.9935 7.71083C21.9964 7.51574 21.9601 7.32205 21.8867 7.14125C21.8134 6.96044 21.7045 6.79619 21.5665 6.65822C21.4285 6.52026 21.2643 6.41137 21.0835 6.33802C20.9027 6.26467 20.709 6.22834 20.5139 6.23118C20.3188 6.23403 20.1263 6.27599 19.9477 6.35458C19.7691 6.43317 19.6081 6.5468 19.4742 6.68873C19.2138 6.96476 19.0712 7.33141 19.0768 7.71083C19.0823 8.09026 19.2355 8.4526 19.5038 8.72092C19.7721 8.98924 20.1345 9.14243 20.5139 9.14796C20.8933 9.15349 21.26 9.01093 21.536 8.75055V8.75055Z"
                                    fill="white" fill-opacity="0.9" />
                            </svg>
                        </a>
                    </div>
                    <div class="lang-menu">
                        <div class="selected-lang">
                            <a href="#"><img src="image-landing/England.svg" alt="English Flag"></a>
                        </div>
                        <ul>
                            <li>
                                <a href="#" class="ge"><img src="image-landing/Georgia.svg" alt="Georgian Flag"></a>
                            </li>
                            <li>
                                <a href="#" class="en"><img src="image-landing/England.svg" alt="English Flag"></a>
                            </li>
                            <li>
                                <a href="#" class="ru"><img src="image-landing/Russia.svg" alt="Georgian Flag"></a>
                            </li>
                        </ul>                   
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="container">
        <nav class="navigation">
            <div class="nav-wraper">
                <div>
                    <a href="landing.html"><img src="image-landing/Logo.svg" alt="Medical Logo"> </a>
                </div>
                <div class="nav-links" id="navLinks">
                    <svg class="fa-solid fa-xmark" onclick="hidemenu()" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path
                            d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z" />
                    </svg>
                    <ul>
                        <li> <a href="about-us.html">About us</a></li>
                        <li> <a href="departments.html">Departments</a></li>
                        <li> <a href="doctors.html">Doctors</a></li>
                        <li> <a href="contact.html">Contact</a></li>
                        <li> <a href="career.html">Careers</a></li>
                        <li> <a href="#">3D Clinic</a></li>
                        <li class="ul-newsli"> <a href="#">News</a></li>
                        <li class="ul-newsli"> <a href="#">Appointment</a></li>
                    </ul>
                    
                </div>
                <svg class="fa-solid fa-bars" onclick="showmenu()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                </svg>
                <div class="navButton">
                    <a href="">
                        <button>
                            Make an appointment
                        </button>
                    </a>
                </div>
            </div>
        </nav>
        </div>
</header>


    <main>

            <div class="slider">

                <div class="slide">
                    <div class="textSlider">
                        <h2> ULTRAMODERN & HIGH-TECH <br>
                            UROLOGY DEPARTMENT <br>
                            STAFFED WITH HIGHLY-SKILLED <br> EXPERTS. </h2>
                        <div class="slidebuttons-div">
                            <a href="#">
                                <button class="skyblue-button">
                                    PATIENT GUIDE
                                </button>
                            </a>
                            <a href="#">
                                <button class="darkblue-button">
                                    HEALTH GUIDE
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="textSlider">
                        <h2> ULTRAMODERN & HIGH-TECH <br>
                            UROLOGY DEPARTMENT <br>
                            STAFFED WITH HIGHLY-SKILLED <br> EXPERTS. </h2>
                        <div class="slidebuttons-div">
                            <a href="#">
                                <button class="skyblue-button">
                                    PATIENT GUIDE
                                </button>
                            </a>
                            <a href="#">
                                <button class="darkblue-button">
                                    HEALTH GUIDE
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container">
            <div class="centers-section">
                <div>
                    <h2> Centers Of Excellence </h2>
                </div>

                <div class="centersMain-div">
                    <a href="#">
                        <div class="centers-div">
                            <img src="image-landing/Centers-section/image-4.png" alt="image">
                            <div>
                                <p> Arthrit Center </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="centers-div">
                            <img src="image-landing/Centers-section/image-5.png" alt="image">
                            <div>
                                <p> Arthrit Center </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="centers-div">
                            <img src="image-landing/Centers-section/image-3.png" alt="image">
                            <div>
                                <p> Arthrit Center </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="centers-div">
                            <img src="image-landing/Centers-section/image-4.png" alt="image">
                            <div>
                                <p> Arthrit Center </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="centers-div">
                            <img src="image-landing/Centers-section/image-5.png" alt="image">
                            <div>
                                <p> Arthrit Center </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            </div>

            <div class="news-section">
                <div>
                    <h2>
                        News
                    </h2>
                </div>
                <div class="news-slider">
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/News-section/image-1.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/News-section/image-2.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/News-section/image-3.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/News-section/image-4.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/News-section/image-5.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/News-section/image-6.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/News-section/image-7.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/News-section/image-8.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="feedback-section">
                <div>
                    <h2>
                        99%
                    </h2>
                    <p>
                        Positive Feedback
                    </p>
                </div>
                <div class="feedback-line"> </div>
                <div>
                    <h2>
                        5000+
                    </h2>
                    <p>
                        Happy Patients a Week
                    </p>
                </div>
                <div class="feedback-line"> </div>
                <div>
                    <h2>
                        43
                    </h2>
                    <p>
                        Proffesional Doctors
                    </p>
                </div>
            </div>

            <div class="news-section">
                <div>
                    <h2>
                        Corporate News
                    </h2>
                </div>
                <div class="news-slider">
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/Corporate-news/image-1.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/Corporate-news/image-2.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/Corporate-news/image-3.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/Corporate-news/image-4.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/Corporate-news/image-5.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/Corporate-news/image-6.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/Corporate-news/image-7.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-slide">
                            <img src="image-landing/Corporate-news/image-8.png" alt="image">
                            <div class="news-textdiv">
                                <span> May 24,2022</span>
                                <h4>
                                    #AHT: THYROID CANCER – SYMPTOMS, <br>
                                    CAUSES AND PREVENTION
                                </h4>
                                <p>
                                    Vestibulum tempus imperdiet sem ac porttitor. Vivamus
                                    pulvinar commodo orci, suscipit porttitorc
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="checkUp-section">
                <h2>
                    AHT Check-Up – Early diagnosis and prevention <br>
                    in accordance with the international standards!
                </h2>
                <a href="#">
                    <button>
                        Read More <svg width="23" height="18" viewBox="0 0 23 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14 1.50018C13.9998 1.34377 14.0648 1.19123 14.186 1.0639C14.3071 0.936574 14.4783 0.840837 14.6755 0.790087C14.8728 0.739337 15.0863 0.736114 15.2861 0.780868C15.486 0.825623 15.6621 0.916115 15.79 1.03968L22.79 7.78968C22.9265 7.92134 23.0007 8.08338 23.0007 8.25018C23.0007 8.41698 22.9265 8.57902 22.79 8.71068L15.79 15.4607C15.6621 15.5842 15.486 15.6747 15.2861 15.7195C15.0863 15.7643 14.8728 15.761 14.6755 15.7103C14.4783 15.6595 14.3071 15.5638 14.186 15.4365C14.0648 15.3091 13.9998 15.1566 14 15.0002V12.0077C8.62099 12.0917 6.03699 12.8574 4.73899 13.6899C3.50499 14.4812 3.27899 15.4119 3.04399 16.3869L2.98299 16.6382C2.93812 16.818 2.80719 16.9792 2.61485 17.0917C2.42251 17.2041 2.18201 17.26 1.9386 17.2488C1.69519 17.2375 1.46564 17.1599 1.29315 17.0306C1.12066 16.9014 1.01712 16.7292 1.00199 16.5467C0.830993 14.4857 1.08799 11.4992 3.02899 9.00093C4.91299 6.57618 8.30599 4.71168 14 4.51668V1.50018Z"
                                fill="white" />
                        </svg>

                    </button>
                </a>
            </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-mainWraper">
                <div class="footer-left">
                    <div class="logo-name">
                        <img src="image-landing/Logo.svg" alt="Logo">
                        <p> <span> Sailors <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="8" height="8" rx="4" fill="white" />
                                </svg> </span> Family Medical Regional Center LTD. </p>
                    </div>
                    <div class="footer-contact">
                        <div class="footer-locationAndcall">
                            <div class="footer-location">
                                <a href="https://www.google.com/maps/place/33+%E1%83%9C%E1%83%98%E1%83%99%E1%83%9D%E1%83%9A%E1%83%9D%E1%83%96+%E1%83%91%E1%83%90%E1%83%A0%E1%83%90%E1%83%97%E1%83%90%E1%83%A8%E1%83%95%E1%83%98%E1%83%9A%E1%83%98+%E1%83%A5%E1%83%A3%E1%83%A9%E1%83%90,+%E1%83%91%E1%83%90%E1%83%97%E1%83%A3%E1%83%9B%E1%83%98/@41.6482912,41.6360532,17z/data=!3m1!4b1!4m5!3m4!1s0x4067863fcacc141b:0xada29649bebbb04c!8m2!3d41.6482912!4d41.6382472"
                                    target="_blank">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8867 6.97769C13.1945 6.97769 12.5178 7.18296 11.9422 7.56755C11.3667 7.95213 10.918 8.49876 10.6531 9.1383C10.3882 9.77784 10.3189 10.4816 10.454 11.1605C10.589 11.8394 10.9224 12.4631 11.4118 12.9526C11.9013 13.442 12.525 13.7754 13.2039 13.9104C13.8828 14.0455 14.5866 13.9762 15.2261 13.7113C15.8657 13.4464 16.4123 12.9978 16.7969 12.4222C17.1814 11.8466 17.3867 11.1699 17.3867 10.4777C17.3857 9.54976 17.0166 8.66013 16.3604 8.00398C15.7043 7.34784 14.8147 6.97875 13.8867 6.97769V6.97769ZM13.8867 12.2277C13.5406 12.2277 13.2023 12.1251 12.9145 11.9328C12.6267 11.7405 12.4024 11.4672 12.2699 11.1474C12.1375 10.8276 12.1028 10.4757 12.1703 10.1363C12.2379 9.79682 12.4045 9.485 12.6493 9.24025C12.894 8.99551 13.2058 8.82884 13.5453 8.76132C13.8848 8.69379 14.2366 8.72845 14.5564 8.8609C14.8762 8.99336 15.1495 9.21766 15.3418 9.50544C15.5341 9.79323 15.6367 10.1316 15.6367 10.4777C15.6362 10.9417 15.4516 11.3865 15.1236 11.7145C14.7955 12.0426 14.3507 12.2272 13.8867 12.2277V12.2277Z"
                                            fill="white" />
                                        <path
                                            d="M20.6111 3.74691C18.9482 2.08444 16.7284 1.09686 14.3802 0.974781C12.032 0.852704 9.72175 1.60478 7.89543 3.08587C6.06911 4.56695 4.85614 6.67204 4.49064 8.99485C4.12513 11.3177 4.633 13.6935 5.91622 15.6639L12.5283 25.8146C12.6755 26.0405 12.8767 26.2261 13.1136 26.3545C13.3506 26.483 13.616 26.5503 13.8855 26.5503C14.1551 26.5503 14.4204 26.483 14.6574 26.3545C14.8944 26.2261 15.0956 26.0405 15.2427 25.8146L21.8551 15.6639C23.0457 13.8361 23.5719 11.6546 23.3455 9.48491C23.119 7.31527 22.1536 5.28942 20.6111 3.74691ZM20.3888 14.7087L13.8856 24.6919L7.38228 14.7087C5.39166 11.6528 5.8186 7.56328 8.39745 4.98433C9.11815 4.2636 9.97375 3.6919 10.9154 3.30184C11.8571 2.91179 12.8663 2.71103 13.8856 2.71103C14.9048 2.71103 15.9141 2.91179 16.8557 3.30184C17.7974 3.6919 18.653 4.2636 19.3737 4.98433C21.9525 7.56328 22.3794 11.6528 20.3888 14.7087Z"
                                            fill="white" />
                                    </svg>

                                    <p> Batumi, Baratashvili 33 </p>
                                </a>
                            </div>
                            <div class="footer-call">
                                <a href="tel:0422277303">
                                    <svg width="19" height="28" viewBox="0 0 19 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.36272 1.25201L4.79739 0.793344C6.14272 0.364011 7.58005 1.05868 8.15605 2.41601L9.30272 5.12001C9.80139 6.29734 9.52405 7.68268 8.61739 8.54401L6.09072 10.9413C6.24672 12.376 6.72939 13.788 7.53739 15.1773C8.30468 16.5215 9.33388 17.6981 10.5641 18.6373L13.5987 17.624C14.7481 17.2413 16.0014 17.6827 16.7054 18.7187L18.3494 21.132C19.1694 22.3373 19.0214 23.9987 18.0041 25.02L16.9147 26.1147C15.8294 27.204 14.2787 27.6 12.8454 27.152C9.45872 26.096 6.34805 22.9613 3.50805 17.748C0.664053 12.5267 -0.339947 8.09468 0.497386 4.45734C0.849386 2.92668 1.93872 1.70668 3.36272 1.25201V1.25201Z"
                                            fill="#EBEBEB" />
                                    </svg>
                                    <p> 0 422 277 303 </p>
                                </a>
                            </div>
                        </div>
                        <div class="footer-social">
                            <a href="https://www.instagram.com/gruzia_medica_batumi/">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="22" cy="22" r="22" fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.5425 9.077C17.911 9.014 18.3473 9 21.8333 9C25.3193 9 25.7557 9.01517 27.123 9.077C28.4903 9.13883 29.4237 9.357 30.2403 9.67317C31.0955 9.99633 31.8713 10.5015 32.513 11.1548C33.1663 11.7953 33.6703 12.57 33.9923 13.4263C34.3097 14.243 34.5267 15.1763 34.5897 16.5413C34.6527 17.9122 34.6667 18.3485 34.6667 21.8333C34.6667 25.3193 34.6515 25.7557 34.5897 27.1242C34.5278 28.4892 34.3097 29.4225 33.9923 30.2392C33.6703 31.0956 33.1655 31.8716 32.513 32.513C31.8713 33.1663 31.0955 33.6703 30.2403 33.9923C29.4237 34.3097 28.4903 34.5267 27.1253 34.5897C25.7557 34.6527 25.3193 34.6667 21.8333 34.6667C18.3473 34.6667 17.911 34.6515 16.5425 34.5897C15.1775 34.5278 14.2442 34.3097 13.4275 33.9923C12.5711 33.6703 11.7951 33.1655 11.1537 32.513C10.5008 31.8721 9.99553 31.0965 9.67317 30.2403C9.357 29.4237 9.14 28.4903 9.077 27.1253C9.014 25.7545 9 25.3182 9 21.8333C9 18.3473 9.01517 17.911 9.077 16.5437C9.13883 15.1763 9.357 14.243 9.67317 13.4263C9.99601 12.5701 10.5016 11.7945 11.1548 11.1537C11.7954 10.5009 12.5706 9.99568 13.4263 9.67317C14.243 9.357 15.1763 9.14 16.5413 9.077H16.5425ZM27.0192 11.387C25.6658 11.3252 25.2598 11.3123 21.8333 11.3123C18.4068 11.3123 18.0008 11.3252 16.6475 11.387C15.3957 11.4442 14.7167 11.653 14.264 11.8292C13.6655 12.0625 13.2373 12.339 12.7882 12.7882C12.3624 13.2024 12.0347 13.7067 11.8292 14.264C11.653 14.7167 11.4442 15.3957 11.387 16.6475C11.3252 18.0008 11.3123 18.4068 11.3123 21.8333C11.3123 25.2598 11.3252 25.6658 11.387 27.0192C11.4442 28.271 11.653 28.95 11.8292 29.4027C12.0345 29.9592 12.3623 30.4643 12.7882 30.8785C13.2023 31.3043 13.7075 31.6322 14.264 31.8375C14.7167 32.0137 15.3957 32.2225 16.6475 32.2797C18.0008 32.3415 18.4057 32.3543 21.8333 32.3543C25.261 32.3543 25.6658 32.3415 27.0192 32.2797C28.271 32.2225 28.95 32.0137 29.4027 31.8375C30.0012 31.6042 30.4293 31.3277 30.8785 30.8785C31.3043 30.4643 31.6322 29.9592 31.8375 29.4027C32.0137 28.95 32.2225 28.271 32.2797 27.0192C32.3415 25.6658 32.3543 25.2598 32.3543 21.8333C32.3543 18.4068 32.3415 18.0008 32.2797 16.6475C32.2225 15.3957 32.0137 14.7167 31.8375 14.264C31.6042 13.6655 31.3277 13.2373 30.8785 12.7882C30.4642 12.3624 29.96 12.0347 29.4027 11.8292C28.95 11.653 28.271 11.4442 27.0192 11.387V11.387ZM20.1942 25.7895C21.1096 26.1706 22.1289 26.222 23.0781 25.935C24.0272 25.648 24.8473 25.0404 25.3982 24.216C25.9491 23.3915 26.1967 22.4013 26.0987 21.4146C26.0007 20.4279 25.5632 19.5058 24.8608 18.8058C24.4131 18.3584 23.8717 18.0158 23.2757 17.8027C22.6797 17.5896 22.0438 17.5113 21.4139 17.5734C20.784 17.6355 20.1757 17.8365 19.6328 18.162C19.0899 18.4874 18.6259 18.9292 18.2742 19.4555C17.9225 19.9818 17.6919 20.5795 17.5989 21.2056C17.506 21.8317 17.553 22.4707 17.7366 23.0764C17.9203 23.6822 18.2359 24.2397 18.6608 24.7088C19.0858 25.178 19.6095 25.547 20.1942 25.7895ZM17.169 17.169C17.7815 16.5565 18.5087 16.0706 19.309 15.7391C20.1093 15.4076 20.9671 15.237 21.8333 15.237C22.6996 15.237 23.5573 15.4076 24.3577 15.7391C25.158 16.0706 25.8851 16.5565 26.4977 17.169C27.1102 17.7815 27.5961 18.5087 27.9276 19.309C28.2591 20.1093 28.4297 20.9671 28.4297 21.8333C28.4297 22.6996 28.2591 23.5573 27.9276 24.3577C27.5961 25.158 27.1102 25.8851 26.4977 26.4977C25.2606 27.7347 23.5828 28.4297 21.8333 28.4297C20.0839 28.4297 18.4061 27.7347 17.169 26.4977C15.9319 25.2606 15.237 23.5828 15.237 21.8333C15.237 20.0839 15.9319 18.4061 17.169 17.169V17.169ZM29.8927 16.2193C30.0445 16.0761 30.166 15.904 30.25 15.713C30.3341 15.522 30.3789 15.3161 30.382 15.1074C30.385 14.8988 30.3462 14.6916 30.2677 14.4983C30.1893 14.3049 30.0728 14.1293 29.9253 13.9817C29.7777 13.8342 29.6021 13.7177 29.4087 13.6393C29.2154 13.5608 29.0082 13.522 28.7996 13.525C28.5909 13.5281 28.385 13.5729 28.194 13.657C28.003 13.741 27.8309 13.8625 27.6877 14.0143C27.4092 14.3095 27.2567 14.7016 27.2627 15.1074C27.2686 15.5132 27.4324 15.9007 27.7194 16.1877C28.0063 16.4746 28.3938 16.6384 28.7996 16.6443C29.2054 16.6503 29.5975 16.4978 29.8927 16.2193V16.2193Z"
                                        fill="#061A40" />
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="22" cy="22" r="22" fill="white" />
                                    <path
                                        d="M18.9396 33.6923V22.5752H16V18.5725H18.9396V15.1537C18.9396 12.4671 20.676 10 24.6771 10C26.2971 10 27.495 10.1553 27.495 10.1553L27.4006 13.8931C27.4006 13.8931 26.179 13.8813 24.8458 13.8813C23.403 13.8813 23.1718 14.5462 23.1718 15.6498V18.5725H27.5153L27.3263 22.5752H23.1718V33.6923H18.9396Z"
                                        fill="#061A40" />
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="22" cy="22" r="22" fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.429 18.969H23.143V20.819C23.678 19.755 25.05 18.799 27.111 18.799C31.062 18.799 32 20.917 32 24.803V32H28V25.688C28 23.475 27.465 22.227 26.103 22.227C24.214 22.227 23.429 23.572 23.429 25.687V32H19.429V18.969ZM12.57 31.83H16.57V18.799H12.57V31.83ZM17.143 14.55C17.1431 14.8853 17.0767 15.2172 16.9474 15.5266C16.8181 15.8359 16.6287 16.1165 16.39 16.352C15.9064 16.8326 15.2518 17.1017 14.57 17.1C13.8894 17.0995 13.2363 16.8312 12.752 16.353C12.5142 16.1167 12.3254 15.8358 12.1963 15.5264C12.0673 15.217 12.0006 14.8852 12 14.55C12 13.873 12.27 13.225 12.753 12.747C13.2369 12.2682 13.8902 11.9997 14.571 12C15.253 12 15.907 12.269 16.39 12.747C16.872 13.225 17.143 13.873 17.143 14.55Z"
                                        fill="#061A40" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="footer-right">
                    <div class="footer-nav">
                        <h2> Menu </h2>
                        <ul class="menu">
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="departments.html">Departments</a></li>
                            <li><a href="doctors.html">Doctors</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="career.html">Careers</a></li>
                            <li><a href="#">3D Clinic</a></li>
                        </ul>
                    </div>
                    <div class="footer-nav">
                        <h2> Services </h2>
                        <ul class="menu">
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-footer">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 0.625C5.728 0.625 0.625 5.728 0.625 12C0.625 18.272 5.728 23.375 12 23.375C18.272 23.375 23.375 18.272 23.375 12C23.375 5.728 18.272 0.625 12 0.625ZM12 2.375C17.3253 2.375 21.625 6.67475 21.625 12C21.625 17.3253 17.3253 21.625 12 21.625C6.67475 21.625 2.375 17.3253 2.375 12C2.375 6.67475 6.67475 2.375 12 2.375ZM11.9178 6.75C9.00925 6.75 6.66775 9.0915 6.66775 12C6.66775 14.9085 9.00925 17.25 11.9178 17.25C14.0169 17.25 15.8115 15.9917 16.648 14.2146L15.0625 13.477C14.4981 14.6757 13.3195 15.5 11.9178 15.5C9.92537 15.5 8.41775 13.9924 8.41775 12C8.41775 10.0076 9.92537 8.5 11.9178 8.5C13.3195 8.5 14.499 9.32337 15.0625 10.5239L16.6489 9.78537C15.8106 8.00825 14.0169 6.75 11.9169 6.75H11.9178Z" fill="white" fill-opacity="0.9"/>
                </svg>
                
            <p>Copyrights 2022</p> 
        </div>
    </footer>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- SLIDES -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('.slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,

                fade: true,
                dots: true,
                autoplay: true,
                autoplaySpeed: 2000,
                speed: 800,
            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('.news-slider').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1160,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 920,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

        });
    </script>
    <!-- NAVIGATION  -->
    <script>
        let navLinks = document.getElementById("navLinks");

        function showmenu() {
            navLinks.style.right = "0";
        }
        function hidemenu() {
            navLinks.style.right = "-200px";
        }

    </script>
</body>

</html>