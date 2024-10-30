<?php
// Autoload dependencies
//require '../vendor/autoload.php';
header('Content-Type: text/html');
//
//// Include your router and other necessary files
//require '../src/Route/routes.php';
//var_dump("sadadadads"); die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>MAGELLINE</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../../public/css/rangeSlider.css">
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
<header>
    <div class="header-top">
        <div class="container">
            <div class="header-top-section">
                <select name="currency" id="currency-section" class="currency-section">
                    <option value="">USD $</option>
                    <option value="">EUR €</option>
                    <option value="">GBP</option>
                    <option value="">AMD</option>
                </select>
                <select name="language" id="lang-section" class="lang-section">
                    <option value="">ARM</option>
                    <option value="">EN</option>
                    <option value="">GER</option>
                    <option value="">RU</option>
                    <option value="">SP</option>
                </select>
                <button type="button" class="login-btn">
                    Log In
                    <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.19198 7.95567C5.45612 10.6903 7.22481 12.4963 9.73281 12.4963C12.2407 12.4963 14.0092 10.6902 14.2734 7.95567L14.6479 5.00119C14.8802 2.0985 12.5115 0 9.73281 0C6.95401 0 4.58537 2.0985 4.8175 5.00119L5.19198 7.95567Z"
                              fill="#91A7A8"/>
                        <path d="M19.4457 19.8079L19.2664 18.6665C19.1163 17.7095 18.5148 16.8833 17.6504 16.4465L13.8782 14.539C13.7601 14.4793 13.664 14.3893 13.5834 14.2888C12.4914 15.4434 11.1647 16.1225 9.73265 16.1225C8.30066 16.1225 6.97377 15.4434 5.88177 14.2888C5.80119 14.3893 5.70505 14.4793 5.58698 14.539L1.81485 16.4465C0.950382 16.8833 0.348975 17.7095 0.198835 18.6665L0.0194908 19.8079C-0.0443998 20.2154 0.0399283 20.8133 0.404897 21.1122C0.892866 21.5113 2.69544 24 9.73265 24C16.7698 24 18.5722 21.5113 19.0602 21.1122C19.4253 20.8133 19.5096 20.2154 19.4457 19.8079Z"
                              fill="#91A7A8"/>
                    </svg>
                </button>
                <div class="login-window">
                    <button type="button" class="login-window__close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.121" height="16.121"
                             viewBox="0 0 16.121 16.121">
                            <g id="Group_13118" data-name="Group 13118" transform="translate(1.061 1.061)">
                                <line id="Line_356" data-name="Line 356" x2="14" y2="14" fill="none" stroke="#8f8b8f"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></line>
                                <line id="Line_357" data-name="Line 357" y1="14" x2="14" fill="none" stroke="#8f8b8f"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></line>
                            </g>
                        </svg>
                    </button>

                    <div class="login-window-container">
                        <h6 class="login-window__title">Welcome to your <span>aCCcount</span></h6>
                        <p class="login-window__info">Lorem ipsum dolor sit ametconsectetur adipiscing elit. Proin </p>
                        <form id="loginForm" class="login-window-form">
                            <div class="login-window-form__item">
                                <svg width="20" height="24" viewBox="0 0 20 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.19198 7.95567C5.45612 10.6903 7.22481 12.4963 9.73281 12.4963C12.2407 12.4963 14.0092 10.6902 14.2734 7.95567L14.6479 5.00119C14.8802 2.0985 12.5115 0 9.73281 0C6.95401 0 4.58537 2.0985 4.8175 5.00119L5.19198 7.95567Z"
                                          fill="#91A7A8"/>
                                    <path d="M19.4457 19.8079L19.2664 18.6665C19.1163 17.7095 18.5148 16.8833 17.6504 16.4465L13.8782 14.539C13.7601 14.4793 13.664 14.3893 13.5834 14.2888C12.4914 15.4434 11.1647 16.1225 9.73265 16.1225C8.30066 16.1225 6.97377 15.4434 5.88177 14.2888C5.80119 14.3893 5.70505 14.4793 5.58698 14.539L1.81485 16.4465C0.950382 16.8833 0.348975 17.7095 0.198835 18.6665L0.0194908 19.8079C-0.0443998 20.2154 0.0399283 20.8133 0.404897 21.1122C0.892866 21.5113 2.69544 24 9.73265 24C16.7698 24 18.5722 21.5113 19.0602 21.1122C19.4253 20.8133 19.5096 20.2154 19.4457 19.8079Z"
                                          fill="#91A7A8"/>
                                </svg>
                                <label>
                                    <input type="email" id="email" name="email" autocomplete="email" required />
<!--                                    <input type="email" name="email" placeholder="Login" value="" required>-->
                                </label>
                            </div>
                            <div class="login-window-form__item">
                                <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M1.43619 1.60254C0.166992 2.87176 0.166992 4.9145 0.166992 9.00001C0.166992 13.0855 0.166992 15.1283 1.43619 16.3974C2.7054 17.6667 4.74815 17.6667 8.83366 17.6667H13.167C17.2525 17.6667 19.2953 17.6667 20.5644 16.3974C21.8337 15.1283 21.8337 13.0855 21.8337 9.00001C21.8337 4.9145 21.8337 2.87176 20.5644 1.60254C19.2953 0.333343 17.2525 0.333344 13.167 0.333344H8.83366C4.74815 0.333344 2.7054 0.333343 1.43619 1.60254ZM6.66699 10.0833C7.2653 10.0833 7.75033 9.59833 7.75033 9.00001C7.75033 8.40168 7.2653 7.91668 6.66699 7.91668C6.06869 7.91668 5.58366 8.40168 5.58366 9.00001C5.58366 9.59833 6.06869 10.0833 6.66699 10.0833ZM12.0837 9.00001C12.0837 9.59833 11.5986 10.0833 11.0003 10.0833C10.402 10.0833 9.91699 9.59833 9.91699 9.00001C9.91699 8.40168 10.402 7.91668 11.0003 7.91668C11.5986 7.91668 12.0837 8.40168 12.0837 9.00001ZM15.3337 10.0833C15.932 10.0833 16.417 9.59833 16.417 9.00001C16.417 8.40168 15.932 7.91668 15.3337 7.91668C14.7353 7.91668 14.2503 8.40168 14.2503 9.00001C14.2503 9.59833 14.7353 10.0833 15.3337 10.0833Z"
                                          fill="#91A7A8"/>
                                </svg>
                                <label>
                                    <input type="password" id="password" name="password" autocomplete="current-password" required />
<!--                                    <input type="password" name="password" placeholder="Password" value="" required>-->
                                </label>
                            </div>
                            <button type="submit" class="login-window__btn">
                                Log In
                            </button>
                        </form>
                    </div>
                    <div class="login-window-footer">
                        <a href="" class="login-window-footer__link login-window-footer__link_orange">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="#ff6b00"
                                 class="bi bi-circle-fill" viewBox="0 0 16 16" style="margin-right: 4px;">
                                <circle cx="8" cy="8" r="8"/>
                            </svg>
                            Registration
                        </a>
                        <a href="" class="login-window-footer__link">Forget password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <a class="header-logo" href="">
            <img src="../../public/img/main-logo.png" alt="" class="img">
        </a>
        <div class="navigation-section">
            <nav class="navigation">
                <button class="menu-burger-close" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.121" height="16.121" viewBox="0 0 16.121 16.121">
                        <g id="Group_13118" data-name="Group 13118" transform="translate(1.061 1.061)">
                            <line id="Line_356" data-name="Line 356" x2="14" y2="14" fill="none" stroke="#8f8b8f"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                            <line id="Line_357" data-name="Line 357" y1="14" x2="14" fill="none" stroke="#8f8b8f"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                        </g>
                    </svg>
                </button>
                <ul class="header-menu">
                    <li class="header-menu__item">
                        <a href="" class="header-menu__link menu-active"> HOME</a>
                    </li>
                    <li class="header-menu__item">
                        <a href="" class="header-menu__link"> FLIGHTS </a>
                    </li>
                    <li class="header-menu__item">
                        <a href="" class="header-menu__link"> HOTELS </a>
                    </li>
                    <li class="header-menu__item">
                        <a href="" class="header-menu__link"> ACTIVITIES </a>
                    </li>
                    <li class="header-menu__item">
                        <a href="" class="header-menu__link"> EXPERIENCES </a>
                    </li>
                </ul>
            </nav>
            <button class="menu-burger" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="21" viewBox="0 0 26 21">
                    <path id="Union_18" data-name="Union 18"
                          d="M12977,12700a1,1,0,0,1,0-2h14a1,1,0,1,1,0,2Zm-5-9a1,1,0,1,1,0-2h24a1,1,0,1,1,0,2Zm5-10a1,1,0,0,1,0-2h14a1,1,0,1,1,0,2Z"
                          transform="translate(-12971 -12678.999)" fill="#fff"/>
                </svg>
            </button>
        </div>
    </div>
</header>
