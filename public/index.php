<?php
//// Autoload dependencies
////require '../vendor/autoload.php';
//header('Content-Type: text/html');
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST');
//header("Access-Control-Allow-Headers: X-Requested-With");
////
////// Include your router and other necessary files
//require '../src/Route/routes.php';
//?>
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <title>MAGELLINE</title>-->
<!--    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">-->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>-->
<!--    <link rel="stylesheet" href="css/rangeSlider.css">-->
<!--    <link rel="stylesheet" href="css/style.css">-->
<!--</head>-->
<!--<body>-->
<!--<header>-->
<!--    <div class="header-top">-->
<!--        <div class="container">-->
<!--            <div class="header-top-section">-->
<!--                <select name="currency" id="currency-section" class="currency-section">-->
<!--                    <option value="">USD $</option>-->
<!--                    <option value="">EUR €</option>-->
<!--                    <option value="">GBP</option>-->
<!--                    <option value="">AMD</option>-->
<!--                </select>-->
<!--                <select name="language" id="lang-section" class="lang-section">-->
<!--                    <option value="">ARM</option>-->
<!--                    <option value="">EN</option>-->
<!--                    <option value="">GER</option>-->
<!--                    <option value="">RU</option>-->
<!--                    <option value="">SP</option>-->
<!--                </select>-->
<!--                <button type="button" class="login-btn">-->
<!--                    Log In-->
<!--                    <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                        <path d="M5.19198 7.95567C5.45612 10.6903 7.22481 12.4963 9.73281 12.4963C12.2407 12.4963 14.0092 10.6902 14.2734 7.95567L14.6479 5.00119C14.8802 2.0985 12.5115 0 9.73281 0C6.95401 0 4.58537 2.0985 4.8175 5.00119L5.19198 7.95567Z" fill="#91A7A8"/>-->
<!--                        <path d="M19.4457 19.8079L19.2664 18.6665C19.1163 17.7095 18.5148 16.8833 17.6504 16.4465L13.8782 14.539C13.7601 14.4793 13.664 14.3893 13.5834 14.2888C12.4914 15.4434 11.1647 16.1225 9.73265 16.1225C8.30066 16.1225 6.97377 15.4434 5.88177 14.2888C5.80119 14.3893 5.70505 14.4793 5.58698 14.539L1.81485 16.4465C0.950382 16.8833 0.348975 17.7095 0.198835 18.6665L0.0194908 19.8079C-0.0443998 20.2154 0.0399283 20.8133 0.404897 21.1122C0.892866 21.5113 2.69544 24 9.73265 24C16.7698 24 18.5722 21.5113 19.0602 21.1122C19.4253 20.8133 19.5096 20.2154 19.4457 19.8079Z" fill="#91A7A8"/>-->
<!--                    </svg>-->
<!--                </button>-->
<!--                <div class="login-window">-->
<!--                    <button type="button"  class="login-window__close">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="16.121" height="16.121" viewBox="0 0 16.121 16.121">-->
<!--                            <g id="Group_13118" data-name="Group 13118" transform="translate(1.061 1.061)">-->
<!--                                <line id="Line_356" data-name="Line 356" x2="14" y2="14" fill="none" stroke="#8f8b8f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></line>-->
<!--                                <line id="Line_357" data-name="Line 357" y1="14" x2="14" fill="none" stroke="#8f8b8f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></line>-->
<!--                            </g>-->
<!--                        </svg>-->
<!--                    </button>-->
<!---->
<!--                    <div class="login-window-container">-->
<!--                        <h6 class="login-window__title">Welcome to your <span>account</span></h6>-->
<!--                        <p class="login-window__info">Lorem ipsum dolor sit ametconsectetur adipiscing elit. Proin </p>-->
<!--                        <form id="loginForm" class="login-window-form">-->
<!--                            <div class="login-window-form__item">-->
<!--                                <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                    <path d="M5.19198 7.95567C5.45612 10.6903 7.22481 12.4963 9.73281 12.4963C12.2407 12.4963 14.0092 10.6902 14.2734 7.95567L14.6479 5.00119C14.8802 2.0985 12.5115 0 9.73281 0C6.95401 0 4.58537 2.0985 4.8175 5.00119L5.19198 7.95567Z" fill="#91A7A8"/>-->
<!--                                    <path d="M19.4457 19.8079L19.2664 18.6665C19.1163 17.7095 18.5148 16.8833 17.6504 16.4465L13.8782 14.539C13.7601 14.4793 13.664 14.3893 13.5834 14.2888C12.4914 15.4434 11.1647 16.1225 9.73265 16.1225C8.30066 16.1225 6.97377 15.4434 5.88177 14.2888C5.80119 14.3893 5.70505 14.4793 5.58698 14.539L1.81485 16.4465C0.950382 16.8833 0.348975 17.7095 0.198835 18.6665L0.0194908 19.8079C-0.0443998 20.2154 0.0399283 20.8133 0.404897 21.1122C0.892866 21.5113 2.69544 24 9.73265 24C16.7698 24 18.5722 21.5113 19.0602 21.1122C19.4253 20.8133 19.5096 20.2154 19.4457 19.8079Z" fill="#91A7A8"/>-->
<!--                                </svg>-->
<!--                                <input type="email" name="email" placeholder="Login" value="" required>-->
<!--                            </div>-->
<!--                            <div class="login-window-form__item">-->
<!--                                <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.43619 1.60254C0.166992 2.87176 0.166992 4.9145 0.166992 9.00001C0.166992 13.0855 0.166992 15.1283 1.43619 16.3974C2.7054 17.6667 4.74815 17.6667 8.83366 17.6667H13.167C17.2525 17.6667 19.2953 17.6667 20.5644 16.3974C21.8337 15.1283 21.8337 13.0855 21.8337 9.00001C21.8337 4.9145 21.8337 2.87176 20.5644 1.60254C19.2953 0.333343 17.2525 0.333344 13.167 0.333344H8.83366C4.74815 0.333344 2.7054 0.333343 1.43619 1.60254ZM6.66699 10.0833C7.2653 10.0833 7.75033 9.59833 7.75033 9.00001C7.75033 8.40168 7.2653 7.91668 6.66699 7.91668C6.06869 7.91668 5.58366 8.40168 5.58366 9.00001C5.58366 9.59833 6.06869 10.0833 6.66699 10.0833ZM12.0837 9.00001C12.0837 9.59833 11.5986 10.0833 11.0003 10.0833C10.402 10.0833 9.91699 9.59833 9.91699 9.00001C9.91699 8.40168 10.402 7.91668 11.0003 7.91668C11.5986 7.91668 12.0837 8.40168 12.0837 9.00001ZM15.3337 10.0833C15.932 10.0833 16.417 9.59833 16.417 9.00001C16.417 8.40168 15.932 7.91668 15.3337 7.91668C14.7353 7.91668 14.2503 8.40168 14.2503 9.00001C14.2503 9.59833 14.7353 10.0833 15.3337 10.0833Z" fill="#91A7A8"/>-->
<!--                                </svg>-->
<!--                                <input type="password" name="password" placeholder="Password" value="" required>-->
<!--                            </div>-->
<!--                            <button type="submit" class="login-window__btn">-->
<!--                                Log In-->
<!--                            </button>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                    <div class="login-window-footer">-->
<!--                        <a href="" class="login-window-footer__link login-window-footer__link_orange">-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="#ff6b00" class="bi bi-circle-fill" viewBox="0 0 16 16" style="margin-right: 4px;">-->
<!--                                <circle cx="8" cy="8" r="8"/>-->
<!--                            </svg>-->
<!--                            Registration-->
<!--                        </a>-->
<!--                        <a href="" class="login-window-footer__link">Forget password</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="container">-->
<!--        <a class="header-logo" href="">-->
<!--            <img src="./img/main-logo.png" alt="" class="img">-->
<!--        </a>-->
<!--        <div class="navigation-section">-->
<!--            <nav class="navigation">-->
<!--                <button class="menu-burger-close" type="button">-->
<!--                    <svg xmlns="http://www.w3.org/2000/svg" width="16.121" height="16.121" viewBox="0 0 16.121 16.121">-->
<!--                        <g id="Group_13118" data-name="Group 13118" transform="translate(1.061 1.061)">-->
<!--                            <line id="Line_356" data-name="Line 356" x2="14" y2="14" fill="none" stroke="#8f8b8f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>-->
<!--                            <line id="Line_357" data-name="Line 357" y1="14" x2="14" fill="none" stroke="#8f8b8f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>-->
<!--                        </g>-->
<!--                    </svg>-->
<!--                </button>-->
<!--                <ul class="header-menu">-->
<!--                    <li class="header-menu__item">-->
<!--                        <a href="" class="header-menu__link menu-active"> HOME</a>-->
<!--                    </li>-->
<!--                    <li class="header-menu__item">-->
<!--                        <a href="" class="header-menu__link"> FLIGHTS </a>-->
<!--                    </li>-->
<!--                    <li class="header-menu__item">-->
<!--                        <a href="" class="header-menu__link"> HOTELS </a>-->
<!--                    </li>-->
<!--                    <li class="header-menu__item">-->
<!--                        <a href="" class="header-menu__link"> ACTIVITIES </a>-->
<!--                    </li>-->
<!--                    <li class="header-menu__item">-->
<!--                        <a href="" class="header-menu__link"> EXPERIENCES </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </nav>-->
<!--            <button class="menu-burger" type="button">-->
<!--                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="21" viewBox="0 0 26 21">-->
<!--                    <path id="Union_18" data-name="Union 18" d="M12977,12700a1,1,0,0,1,0-2h14a1,1,0,1,1,0,2Zm-5-9a1,1,0,1,1,0-2h24a1,1,0,1,1,0,2Zm5-10a1,1,0,0,1,0-2h14a1,1,0,1,1,0,2Z" transform="translate(-12971 -12678.999)" fill="#fff"/>-->
<!--                </svg>-->
<!--            </button>-->
<!--        </div>-->
<!--    </div>-->
<!--</header>-->
<!---->
<!--<main>-->
<!--    <section class="slider-section">-->
<!--        <div class="main-slide swiper">-->
<!--            <div class="swiper-wrapper">-->
<!--                <div class="main-slide__item swiper-slide">-->
<!--                    <img src="./img/main-img.png" alt="" class="img">-->
<!--                    <div class="container">-->
<!--                        <div class="main-slide-info">-->
<!--                            <p class="main-slide-info__title"> HOT OFFERS </p>-->
<!--                            <p class="main-slide-info__title">  LOWEST PRICE  </p>-->
<!--                            <h2 class="main-slide-info__title"> MAGELLINE</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="main-slide__item swiper-slide">-->
<!--                    <img src="./img/main-img.png" alt="" class="img">-->
<!--                    <div class="container">-->
<!--                        <div class="main-slide-info">-->
<!--                            <p class="main-slide-info__title"> HOT OFFERS </p>-->
<!--                            <p class="main-slide-info__title">  LOWEST PRICE  </p>-->
<!--                            <h2 class="main-slide-info__title"> MAGELLINE</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="main-slide__item swiper-slide">-->
<!--                    <img src="./img/main-img.png" alt="" class="img">-->
<!--                </div>-->
<!--                <div class="main-slide__item swiper-slide">-->
<!--                    <img src="./img/main-img.png" alt="" class="img">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!---->
<!--    <section class="about-us-section">-->
<!--        <div class="container">-->
<!--            <div class="about-us-row">-->
<!--                <div class="about-us-info">-->
<!--                    <h1 class="about-us-info__title">WELCOME TO OUR <span>COMPANY</span></h1>-->
<!--                    <div class="about-us-info__des editor">-->
<!--                        MAGELLINE is a metasearch engine for flights, hotel bookings, tours/activities as well as other travel services, which can be searched by price and location. The brand was born in 2018. MAGELLINE operates the magelline.com website.-->
<!--                        Under the slogan, "Keep Traveling!" MAGELLINE has been endeavoring to provide travelers with the best travel deals and more distinguished services than any other OTA (Online Travel Agency) in the world.-->
<!--                    </div>-->
<!--                    <a class="arrow-link-btn" href="">-->
<!--                        Read MORE-->
<!--                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                            <path d="M2 2L15 15M15 15H3.62471M15 15V3.62471" stroke="#FF6B00" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                        </svg>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="about-us-img">-->
<!--                    <img src="./img/about-us-img.png" alt="" class="img">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="bottom-line-and-name">-->
<!--                <div class="bottom-line"></div>-->
<!--                <p class="bottom-line-name">MAGELLINE</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!---->
<!--    <section class="popular-hotels-section slider-section">-->
<!--        <div class="container">-->
<!--            <div class="popular-hotels-row">-->
<!--                <div class="popular-hotels-info">-->
<!--                    <h2 class="main-title">-->
<!--                        Most popular <span>hotels</span>-->
<!--                        <svg width="54" height="28" viewBox="0 0 54 28" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                            <path d="M53 14L0.999998 14M53 14L40 0.999999M53 14L40 27" stroke="#FF6B00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                        </svg>-->
<!--                    </h2>-->
<!--                    <div class="popular-hotels-info__des editor">-->
<!--                        Lorem ipsum dolor sit ametconsectetur adipiscing elit. Proin-->
<!--                        Lorem ipsum dolor sit ametconsectetur adipiscing elit. Proin-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, est ut viverra eleifend, augue nunc vehicula erat, sit amet molestie orci purus vel erat...-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="popular-hotels-slide">-->
<!--                    <div class="hotels-slide swiper">-->
<!--                        <div class="swiper-wrapper">-->
<!--                            <a href="" class="hotels-slide__item swiper-slide">-->
<!--                                <img src="./img/hotels-slide-item.png" alt="" class="img">-->
<!--                                <div class="hotels-slide-info">-->
<!--                                    <p class="hotels-slide-info__title">-->
<!--                                        Hotel name-->
<!--                                        <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left: 8px;">-->
<!--                                            <path d="M1 3.5L12 3.5M1 3.5L3.75 6M1 3.5L3.75 1" stroke="#142A38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                        </svg>-->
<!--                                    </p>-->
<!--                                    <span class="hotels-slide-info__price">Sins 500 $</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="" class="hotels-slide__item swiper-slide">-->
<!--                                <img src="./img/hotels-slide-item.png" alt="" class="img">-->
<!--                                <div class="hotels-slide-info">-->
<!--                                    <p class="hotels-slide-info__title">-->
<!--                                        Hotel name-->
<!--                                        <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left: 8px;">-->
<!--                                            <path d="M1 3.5L12 3.5M1 3.5L3.75 6M1 3.5L3.75 1" stroke="#142A38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                        </svg>-->
<!--                                    </p>-->
<!--                                    <span class="hotels-slide-info__price">Sins 500 $</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="" class="hotels-slide__item swiper-slide">-->
<!--                                <img src="./img/hotels-slide-item.png" alt="" class="img">-->
<!--                                <div class="hotels-slide-info">-->
<!--                                    <p class="hotels-slide-info__title">-->
<!--                                        Hotel name-->
<!--                                        <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left: 8px;">-->
<!--                                            <path d="M1 3.5L12 3.5M1 3.5L3.75 6M1 3.5L3.75 1" stroke="#142A38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                        </svg>-->
<!--                                    </p>-->
<!--                                    <span class="hotels-slide-info__price">Sins 500 $</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="" class="hotels-slide__item swiper-slide">-->
<!--                                <img src="./img/hotels-slide-item.png" alt="" class="img">-->
<!--                            </a>-->
<!--                            <a href="" class="hotels-slide__item swiper-slide">-->
<!--                                <img src="./img/hotels-slide-item.png" alt="" class="img">-->
<!--                            </a>-->
<!--                            <a href="" class="hotels-slide__item swiper-slide">-->
<!--                                <img src="./img/hotels-slide-item.png" alt="" class="img">-->
<!--                            </a>-->
<!--                            <a href="" class="hotels-slide__item swiper-slide">-->
<!--                                <img src="./img/hotels-slide-item.png" alt="" class="img">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="swiper-pagination"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!---->
<!--    <section class="popular-tours-section">-->
<!--        <div class="container">-->
<!--            <h2 class="main-title">-->
<!--                MOST POPULAR <span>TOURS</span>-->
<!--                <svg width="54" height="28" viewBox="0 0 54 28" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <path d="M53 14L0.999998 14M53 14L40 0.999999M53 14L40 27" stroke="#FF6B00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                </svg>-->
<!--            </h2>-->
<!--            <div class="popular-tours-content-row">-->
<!--                <div class="popular-tours-row">-->
<!--                    <div class="popular-tours__item">-->
<!--                        <a href="" class="popular-tours__link">-->
<!--                            <div class="hotels-slide-info">-->
<!--                                <h3 class="hotels-slide-info__title">-->
<!--                                    Dubai-->
<!--                                    <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left: 8px;">-->
<!--                                        <path d="M1 3.5L12 3.5M1 3.5L3.75 6M1 3.5L3.75 1" stroke="#142A38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                    </svg>-->
<!--                                </h3>-->
<!--                                <span class="hotels-slide-info__price">Sins 500 $</span>-->
<!--                            </div>-->
<!--                            <img src="./img/hotels-slide-item.png" alt="" class="img">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="popular-tours__item">-->
<!--                        <a href="" class="popular-tours__link">-->
<!--                            <div class="hotels-slide-info">-->
<!--                                <h3 class="hotels-slide-info__title">-->
<!--                                    Dubai-->
<!--                                    <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left: 8px;">-->
<!--                                        <path d="M1 3.5L12 3.5M1 3.5L3.75 6M1 3.5L3.75 1" stroke="#142A38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                    </svg>-->
<!--                                </h3>-->
<!--                                <span class="hotels-slide-info__price">Sins 500 $</span>-->
<!--                            </div>-->
<!--                            <img src="./img/hotels-slide-item.png" alt="" class="img">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="popular-tours__item">-->
<!--                        <a href="" class="popular-tours__link">-->
<!--                            <div class="hotels-slide-info">-->
<!--                                <h3 class="hotels-slide-info__title">-->
<!--                                    Dubai-->
<!--                                    <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left: 8px;">-->
<!--                                        <path d="M1 3.5L12 3.5M1 3.5L3.75 6M1 3.5L3.75 1" stroke="#142A38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                    </svg>-->
<!--                                </h3>-->
<!--                                <span class="hotels-slide-info__price">Sins 500 $</span>-->
<!--                            </div>-->
<!--                            <img src="./img/hotels-slide-item.png" alt="" class="img">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="popular-tours__item">-->
<!--                        <a href="" class="popular-tours__link">-->
<!--                            <div class="hotels-slide-info">-->
<!--                                <h3 class="hotels-slide-info__title">-->
<!--                                    Dubai-->
<!--                                    <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left: 8px;">-->
<!--                                        <path d="M1 3.5L12 3.5M1 3.5L3.75 6M1 3.5L3.75 1" stroke="#142A38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                    </svg>-->
<!--                                </h3>-->
<!--                                <span class="hotels-slide-info__price">Sins 500 $</span>-->
<!--                            </div>-->
<!--                            <img src="./img/hotels-slide-item.png" alt="" class="img">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="popular-tours-info">-->
<!--                    <div class="popular-tours-info__des editor">-->
<!--                        LOREM IPSUM DOOR SUMITH-->
<!--                        Lorem ipsum dolor sit ametconsectetur adipiscing elit. Proin-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, est ut viverra eleifend, augue nunc vehicula erat, sit amet molestie orci purus vel erat. Maecenas vitae sagittis leo. Ut efficitur tristique ex a convallis. Pellentesque habitant morbi tristique senectus et netus et-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!---->
<!--    <section class="countrys-section">-->
<!--        <div class="container">-->
<!--            <div class="countrys-row">-->
<!--                <div class="countrys-row-info">-->
<!--                    <h4 class="countrys-row-info__title">YOUR PREFERRED <span>COUNTRYS</span></h4>-->
<!--                    <div class="countrys-row-info__text editor">-->
<!--                        Find the best deals on flights, hotels or car rental and go on an unforgettable journey-->
<!--                    </div>-->
<!--                    <a class="arrow-link-btn" href="">-->
<!--                        Go-->
<!--                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                            <path d="M2 2L15 15M15 15H3.62471M15 15V3.62471" stroke="#FF6B00" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>-->
<!--                        </svg>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="countrys-row-img">-->
<!--                    <img src="./img/location-icons.png" alt="" class="img">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!---->
<!--    <section class="guidebook-section">-->
<!--        <div class="container">-->
<!--            <div class="guidebook-row">-->
<!--                <div class="guidebook-card">-->
<!--                    <div class="guidebook-title-and-link">-->
<!--                        <h2 class="guidebook-title">Guidebook</h2>-->
<!--                        <a href="" class="guidebook-btn">-->
<!--                            View all-->
<!--                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M2 2L13 13M13 13H3.37476M13 13V3.37476" stroke="#FF6B00" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                            </svg>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <a href="" class="guidebook-card__item">-->
<!--                        <img class="img guidebook-card-img" src="./img/guidebook-card-img.png" alt="">-->
<!--                        <div class="guidebook-card-info">-->
<!--                            <p class="guidebook-card-info__data">01.06.2024</p>-->
<!--                            <p class="guidebook-card-info__text">-->
<!--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, est ut viverra eleifend, augue nunc vehicula erat, sit amet molestie orci purus vel erat...-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                    <a href="" class="guidebook-card__item">-->
<!--                        <img class="img guidebook-card-img" src="./img/guidebook-card-img.png" alt="">-->
<!--                        <div class="guidebook-card-info">-->
<!--                            <p class="guidebook-card-info__data">01.06.2024</p>-->
<!--                            <p class="guidebook-card-info__text">-->
<!--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, est ut viverra eleifend, augue nunc vehicula erat, sit amet molestie orci purus vel erat...-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                    <a href="" class="guidebook-card__item">-->
<!--                        <img class="img guidebook-card-img" src="./img/guidebook-card-img.png" alt="">-->
<!--                        <div class="guidebook-card-info">-->
<!--                            <p class="guidebook-card-info__data">01.06.2024</p>-->
<!--                            <p class="guidebook-card-info__text">-->
<!--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, est ut viverra eleifend, augue nunc vehicula erat, sit amet molestie orci purus vel erat...-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="guidebook-airlines">-->
<!--                    <h3 class="guidebook-airlines__title"> Leading Airlines In The World</h3>-->
<!--                    <div class="guidebook-airlines__text editor">-->
<!--                        We build products and technology solutions that connect the dots and remove barriers to power more travel for everyone, everywhere.-->
<!--                        We build products and technology solutions that connect the dots and remove barriers to power more travel for everyone, everywhere.-->
<!--                        We build products and technology solutions that connect the dots and remove barriers to power more travel for everyone, everywhere.-->
<!--                    </div>-->
<!--                    <div class="company-row">-->
<!--                        <div class="company-row__item">-->
<!--                            <img class="img" src="./img/airlines-img.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="company-row__item">-->
<!--                            <img class="img" src="./img/airlines-img.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="company-row__item">-->
<!--                            <img class="img" src="./img/airlines-img.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="company-row__item">-->
<!--                            <img class="img" src="./img/airlines-img.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="company-row__item">-->
<!--                            <img class="img" src="./img/airlines-img.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="company-row__item">-->
<!--                            <img class="img" src="./img/airlines-img.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="company-row__item">-->
<!--                            <img class="img" src="./img/airlines-img.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="company-row__item">-->
<!--                            <img class="img" src="./img/airlines-img.png" alt="">-->
<!--                        </div>-->
<!--                        <a class="arrow-link-btn" href="" style="margin: 0 0 0 12px;">-->
<!--                            View MORE-->
<!--                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M2 2L15 15M15 15H3.62471M15 15V3.62471" stroke="#FF6B00" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>-->
<!--                            </svg>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--</main>-->
<!---->
<!--<footer>-->
<!--    <div class="background-blue">-->
<!--        <div class="container">-->
<!--            <div class="footer-top-menu-row">-->
<!--                <div class="footer-menu-left">-->
<!--                    <ul class="footer-menu">-->
<!--                        <li class="footer-menu__item">-->
<!--                            <a href="" class="footer-menu__link footer-menu-active">HOME</a>-->
<!--                        </li>-->
<!--                        <li class="footer-menu__item">-->
<!--                            <a href="" class="footer-menu__link">COMPANY</a>-->
<!--                        </li>-->
<!--                        <li class="footer-menu__item">-->
<!--                            <a href="" class="footer-menu__link">FLIGHTS</a>-->
<!--                        </li>-->
<!--                        <li class="footer-menu__item">-->
<!--                            <a href="" class="footer-menu__link">HOTELS</a>-->
<!--                        </li>-->
<!--                        <li class="footer-menu__item">-->
<!--                            <a href="" class="footer-menu__link">ACTIVITIES</a>-->
<!--                        </li>-->
<!--                        <li class="footer-menu__item">-->
<!--                            <a href="" class="footer-menu__link">EXPERIENCES</a>-->
<!--                        </li>-->
<!--                        <li class="footer-menu__item">-->
<!--                            <a href="" class="footer-menu__link">Guidebook</a>-->
<!--                        </li>-->
<!--                        <li class="footer-menu__item">-->
<!--                            <a href="" class="footer-menu__link">Airlines</a>-->
<!--                        </li>-->
<!--                        <li class="footer-menu__item">-->
<!--                            <a href="" class="footer-menu__link">CONTACT</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="footer-menu-right">-->
<!--                    <ul class="footer-menu">-->
<!--                        <li class="footer-menu__item">-->
<!--                            <a href="" class="footer-menu__link">FAQ</a>-->
<!--                        </li>-->
<!--                        <li class="footer-menu__item">-->
<!--                            <a href="" class="footer-menu__link">Instruction</a>-->
<!--                        </li>-->
<!--                        <li class="footer-menu__item">-->
<!--                            <a href="" class="footer-menu__link">Terms & Conditions</a>-->
<!--                        </li>-->
<!--                        <li class="footer-menu__item">-->
<!--                            <a href="" class="footer-menu__link">Partners</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="footer-content-row">-->
<!--                <div class="footer-contact">-->
<!--                    <div class="footer-contact__item">-->
<!--                        <a href="" class="footer-contact__link">-->
<!--                            <svg width="20" height="28" viewBox="0 0 20 28" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M9.62243 0C4.30576 0.00169531 0.00169531 4.30834 0 9.62243C0.00344531 10.4043 0.165758 11.1887 0.413601 12.0176C0.849406 13.4634 1.56718 15.0433 2.39772 16.6412C4.88944 21.4187 8.43128 26.3423 8.45097 26.3697L9.62243 28L10.7923 26.3696C10.8059 26.3525 12.8687 23.4797 14.9494 20.0113C15.9893 18.2741 17.0352 16.3883 17.8384 14.605C18.24 13.7128 18.581 12.8455 18.8313 12.0175C19.0791 11.1887 19.2398 10.4042 19.2432 9.62237C19.2414 4.30834 14.9373 0.00169531 9.62243 0ZM16.0713 11.1887C15.7244 12.3457 15.0732 13.8086 14.2888 15.3099C13.1139 17.5667 11.6484 19.9242 10.4812 21.7058C10.1684 22.1826 9.88132 22.6141 9.62243 22.9961C8.80808 21.793 7.67588 20.0652 6.56846 18.1973C5.59945 16.5618 4.65095 14.8203 3.96227 13.2617C3.61791 12.4858 3.33933 11.7552 3.15394 11.1238C2.9668 10.4949 2.8805 9.95996 2.88307 9.62243C2.88394 7.75709 3.63502 6.08229 4.85609 4.85609C6.08059 3.63502 7.7554 2.88389 9.62243 2.8822C11.4878 2.88389 13.1634 3.63502 14.3871 4.85609C15.6098 6.08229 16.3601 7.75709 16.361 9.62243C16.3635 9.97194 16.2712 10.5308 16.0713 11.1887Z" fill="#B6B6B6"/>-->
<!--                                <path d="M9.62233 6.49219C7.89453 6.49219 6.49316 7.89443 6.49316 9.62217C6.49316 11.3508 7.89453 12.7513 9.62233 12.7513C11.3492 12.7513 12.7515 11.3508 12.7515 9.62217C12.7514 7.89438 11.3492 6.49219 9.62233 6.49219Z" fill="#52ABE6"/>-->
<!--                            </svg>-->
<!---->
<!--                            5 Office, 4th Floor, 45 Orbeli Brothers, Yerevan, 0028, Armenia-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="footer-contact__item">-->
<!--                        <a href="tel:+374 43 110700" class="footer-contact__link">-->
<!--                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M15.4727 17.5348L17.1721 15.8346C17.4336 15.5699 17.745 15.3595 18.0882 15.2161C18.4315 15.0726 18.7998 14.9989 19.1717 14.9989C19.5438 14.9989 19.912 15.0726 20.2554 15.2161C20.5986 15.3595 20.9099 15.5699 21.1714 15.8346L23.1646 17.8288C23.4292 18.0903 23.6394 18.4016 23.7828 18.745C23.9261 19.0884 24 19.457 24 19.8291C24 20.2013 23.9261 20.5699 23.7828 20.9133C23.6394 21.2567 23.4292 21.5679 23.1646 21.8294L22.2574 22.7498C21.6324 23.3812 20.8239 23.7992 19.9474 23.9438C19.0709 24.0883 18.1711 23.9525 17.3765 23.5552C10.5385 20.0338 4.96884 14.4662 1.44327 7.62839C1.04581 6.83259 0.910854 5.93118 1.05779 5.05381C1.20473 4.17642 1.626 3.36816 2.26104 2.74542L3.16818 1.82512C3.69962 1.29667 4.41851 1 5.16782 1C5.91714 1 6.63602 1.29667 7.16747 1.82512L9.17352 3.83204C9.70176 4.36371 9.99827 5.0828 9.99827 5.83242C9.99827 6.58204 9.70176 7.30113 9.17352 7.8328L7.47411 9.53296C8.59776 11.0535 9.832 12.4888 11.1667 13.8276C12.4938 15.1575 13.9205 16.3841 15.4344 17.4964L15.4727 17.5348Z" stroke="#B6B6B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                <path d="M17 8L24 1" stroke="#52ABE5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                <path d="M19 1H24V7" stroke="#52ABE5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                            </svg>-->
<!--                            +374 43 110700-->
<!--                        </a>-->
<!--                        <a href="mailto:info@magelline.com" class="footer-contact__link">-->
<!--                            <svg width="29" height="23" viewBox="0 0 29 23" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M25 11.5V5.66667C25 4.429 24.4942 3.24194 23.5941 2.36676C22.694 1.4916 21.473 1 20.2 1H5.79999C4.52695 1 3.30605 1.4916 2.40588 2.36676C1.5057 3.24194 1 4.429 1 5.66667V17.3333C1 18.571 1.5057 19.7579 2.40588 20.6331C3.30605 21.5083 4.52695 22 5.79999 22H13" stroke="#B6B6B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                <path d="M23 4C16.6042 14.6717 8.39579 14.6617 2 4" stroke="#B6B6B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                <path d="M17 19H26" stroke="#52ABE5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                <path d="M24 16L28 19L24 22" stroke="#52ABE5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                            </svg>-->
<!--                            info@magelline.com-->
<!--                        </a>-->
<!--                        <div class="footer-social-icons">-->
<!--                            <a href="https://www.linkedin.com/" class="footer-social-icons__link" target="_blank">-->
<!--                                <img src="./img/linkedin.png" class="img" alt="">-->
<!--                            </a>-->
<!--                            <a href="https://www.linkedin.com/" class="footer-social-icons__link" target="_blank">-->
<!--                                <img src="./img/instagram.png" class="img" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="footer-payment">-->
<!--                    <div class="payment__item">-->
<!--                        <img src="./img/applePay.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="payment__item">-->
<!--                        <img src="./img/visa.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="payment__item">-->
<!--                        <img src="./img/MasterCard.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="payment__item">-->
<!--                        <img src="./img/american-express.png" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="background-white">-->
<!--        <div class="container">-->
<!--            <div class="footer-bottom-row">-->
<!--                <a href="/" class="footer-logo">-->
<!--                    <img src="./img/main-logo.png" alt="" class="img">-->
<!--                </a>-->
<!--                <p class="copy-right-text">&#169 2024 Magelline. All rights reserved.</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->
<!--<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>-->
<!--<script src="js/rangeSlider.js"></script>-->
<!--<script src="js/script.js"></script>-->
<!---->
<!--<script>-->
<!--    document.getElementById('loginForm').addEventListener('submit', function (event) {-->
<!--        event.preventDefault(); // Prevent the default form submission-->
<!---->
<!--        // Get form data-->
<!--        const formData = new FormData(event.target);-->
<!--        const email = formData.get('email');-->
<!--        const password = formData.get('password');-->
<!---->
<!--        // Send the AJAX request-->
<!--        fetch('/?resource=user&action=login', {-->
<!--            method: 'POST',-->
<!--            headers: {-->
<!--                'Content-Type': 'application/json'-->
<!--            },-->
<!--            body: JSON.stringify({-->
<!--                email: email,-->
<!--                password: password-->
<!--            })-->
<!--        })-->
<!--            .then(response => response.json())-->
<!--            .then(data => {-->
<!--                // Handle the response data-->
<!--                console.log(data);-->
<!--                if (data.success) {-->
<!--                    // Redirect or update the UI on successful login-->
<!--                } else {-->
<!--                    // Show error message-->
<!--                }-->
<!--            })-->
<!--            .catch(error => {-->
<!--                console.error('Error:', error);-->
<!--                // Show error message-->
<!--            });-->
<!--    });-->
<!--</script>-->
<!---->
<!--</body>-->
<!--</html>-->
