<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona rozbudowana</title>
    <link href="./styles/service.css" rel="stylesheet">
</head>

<body>
    <main>
        <a href="index.php" class="logo-link side-padding">
            <h1 class="logo"><span class="logo-sign no-decoration">://</span><span
                    class="logo-name no-decoration"></span></h1>
        </a>

        <article class="side-padding">
            <form class="options-form" action="contact-form.php" method="GET">
                
                <input type="hidden" name="productName" value="complex-site">

                <div class="left">
                    <header>
                        <svg width="81" height="118" viewBox="0 0 81 118" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="13.4287" y="13.4286" width="53.8163" height="91.1429" stroke="url(#paint0_linear)"
                                stroke-width="10" />
                            <rect x="21.8569" y="5" width="53.8163" height="91.1429" stroke="url(#paint1_linear)"
                                stroke-width="10" />
                            <rect x="5" y="21.8572" width="53.8163" height="91.1429" stroke="#6951F0"
                                stroke-width="10" />
                            <defs>
                                <linearGradient id="paint0_linear" x1="40.3369" y1="8.42859" x2="40.3369" y2="109.571"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#6951F0" stop-opacity="0.76" />
                                    <stop offset="1" stop-color="white" stop-opacity="0.29" />
                                </linearGradient>
                                <linearGradient id="paint1_linear" x1="48.7651" y1="0" x2="48.7651" y2="101.143"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#6951F0" stop-opacity="0.3" />
                                    <stop offset="1" stop-color="white" stop-opacity="0.29" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <h3 class="title">Strona rozbudowana</h3>
                    </header>

                    <div class="options-group">
                        <div class="options-title-container">

                            <span class="line-left"></span>
                            <p class="options-title">Kontakt z użytkownikiem</p><span class="line-right"></span>
                        </div>
                        <ul class="options-list">
                            <li>
                                <input type="checkbox" name="social-media" id="social-media" value="50">
                                <label for="social-media">Intergracja z mediami społecznościowymi</label>
                                <span class="option-price">50 zł</span>
                            </li>
                            <li><input type="checkbox" name="fb-chat" id="fb-chat" value="80">
                                <label for="fb-chat">Czat Facebook Messenger</label>
                                <span class="option-price">80 zł</span></li>
                            <li><input type="checkbox" name="contact-form" id="contact-form" value="80">
                                <label for="contact-form">Formularz kontaktowy</label>
                                <span class="option-price">80 zł</span></li>
                            <li><input type="checkbox" name="newsletter" id="newsletter" value="100">
                                <label for="newsletter">Newsletter</label>
                                <span class="option-price">100 zł</span>
                            </li>
                        </ul>
                    </div>
                    <div class="options-group">
                        <div class="options-title-container">
                            <span class="line-left"></span>
                            <p class="options-title">Optymalizacje</p><span class="line-right"></span>
                        </div>
                        <ul class="options-list">
                            <li>
                                <input type="checkbox" name="seo" id="seo" value="150">
                                <label for="seo">Zaawansowana optymalizacja treści dla wyszukiwarek</label>
                                <span class="option-price">150 zł</span>
                            </li>
                            <li>
                                <input type="checkbox" name="google-analytics" id="google-analytics" value="80">
                                <label for="google-analytics">Google Analytics</label>
                                <span class="option-price">80 zł</span>
                            </li>
                            <li>
                                <input type="checkbox" name="image-optimization" id="image-optimization" value="100">
                                <label for="image-optimization">Optymalizacja obrazów</label>
                                <span class="option-price">100 zł</span>
                            </li>
                        </ul>
                    </div>
                    <div class="options-group">
                        <div class="options-title-container">
                            <span class="line-left"></span>
                            <p class="options-title">Treść</p><span class="line-right"></span>
                        </div>
                        <ul class="options-list">
                            <li>
                                <input type="checkbox" name="statute" id="statute" value="80">
                                <label for="statute">Regulamin, Ciasteczka, RODO</label>
                                <span class="option-price">80 zł</span>
                            </li>
                            <li>
                                <input type="number" name="slider" id="slider" price="80">
                                <label for="slider">Dodatkowy slider</label>
                                <span class="option-price">80 zł/szt.</span>
                            </li>
                            <li>
                                <input type="number" name="additional-page" id="additional-page" price="100">
                                <label for="additional-page">Dodatkowa strona statyczna</label>
                                <span class="option-price">100 zł/szt.</span>
                            </li>
                            <li>
                                <input type="number" name="additional-news" id="additional-news" price="150">
                                <label for="additional-news">Dodatkowa strona z newsami</label>
                                <span class="option-price">150 zł/szt.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="right">
                    <div class="final-price-container">
                        od <h1 class="final-price">2500</h1> zł
                    </div>
                    <button type="submit" href="contact-form.php" class="submit">
                        <h3>Zamów stronę</h3>
                        </a>
                </div>
            </form>

        </article>

        <div class="side-padding">
            <a class="back" href="pricing.php">
                <h5><span data-content="< powrót">
                        < powrót</span>
                </h5>
            </a>
        </div>

    </main>

    <div class="blobs">
        <svg class="blob one" width="470" height="499" viewBox="0 0 470 499" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M262.497 0.228944C332.607 3.72142 389.064 53.598 429.069 111.345C465.436 163.842 479.487 228.418 463.407 290.243C447.92 349.788 400.129 389.571 348.161 422.421C283.848 463.074 214.917 517.532 142.986 492.787C64.9841 465.953 17.0243 385.006 2.9135 303.65C-10.3706 227.061 23.2465 152.685 73.7561 93.6457C121.789 37.5014 188.75 -3.44473 262.497 0.228944Z" fill="url(#blob_full0)"/>
        <defs>
        <linearGradient id="blob_full0" x1="235" y1="0" x2="76.5" y2="484" gradientUnits="userSpaceOnUse">
        <stop stop-color="#160863"/>
        <stop offset="1" stop-color="#5F5C70"/>
        </linearGradient>
        </defs>
        </svg>

        <svg class="blob two" width="759" height="830" viewBox="0 0 759 830" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M420.23 2.89011C539.723 18.6736 605.927 135.982 671.995 236.75C727.642 321.623 772.504 413.876 755.258 513.877C736.799 620.909 674.583 715.654 580.142 769.363C476.82 828.121 352.248 852.168 243.077 805.151C128.788 755.93 53.3176 648.648 20.9563 528.535C-13.2138 401.708 -11.0018 261.64 68.4584 157.03C149.913 49.7955 286.693 -14.7486 420.23 2.89011Z" fill="url(#blob_full1)"/>
        <defs>
        <linearGradient id="blob_full1" x1="379.5" y1="0" x2="109.548" y2="800.331" gradientUnits="userSpaceOnUse">
        <stop stop-color="#160863"/>
        <stop offset="1" stop-color="#5F5C70"/>
        </linearGradient>
        </defs>
        </svg>

        <svg class="blob three" width="370" height="373" viewBox="0 0 370 373" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M45.0581 234.638C31.3132 189.4 11.3744 140.06 36.6353 100.081C62.7689 58.7205 115.923 45.4517 164.853 45.044C210.205 44.6661 251.079 65.6376 282.805 98.0299C316.43 132.361 348.872 175.897 339.098 222.948C329.603 268.654 279.473 287.642 238.691 310.387C198.204 332.968 155.552 366.28 112.385 349.393C68.9218 332.391 58.6222 279.281 45.0581 234.638Z" fill="url(#blob_full2)"/>
        <defs>
        <linearGradient id="blob_full2" x1="42.7582" y1="228.394" x2="346.957" y2="230.349" gradientUnits="userSpaceOnUse">
        <stop stop-color="#160863"/>
        <stop offset="1" stop-color="#5F5C70"/>
        </linearGradient>
        </defs>
        </svg>

    </div>



    <script src="./js/subpage.js"></script>
    <script src="./js/price-calculator.js"></script>
</body>

</html>