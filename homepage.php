<?php
/*
 * Template Name: homepage
 */
get_header();
?>

    <div class="block-01">
        <div class="container">
            <div class="js-homeSlider homeslider">
                <div>
                    <h2 class="homeslider-title">
                        Sed ut perspiciatis unde omnis iste natus error 5000
                    </h2>
                    <a href="" class="homeslider-link">Learn Now!</a>

                </div>
                <div>
                    <h2 class="homeslider-title">
                        test1
                    </h2>
                    <a href="" class="homeslider-link">Learn Now!</a>
                </div>
                <div>
                    <h2 class="homeslider-title">
                        test2
                    </h2>
                    <a href="" class="homeslider-link">Learn Now!</a>
                </div>
                <div>
                    <h2 class="homeslider-title">
                        test3
                    </h2>
                    <a href="" class="homeslider-link">Learn Now!</a>
                </div>
            </div>
            <div class="homeslider-animation">

                <div class="c-glitch" style="background-image: url('<?php echo THEME_IMG_PATH; ?>/slide01.png');">
                    <div class="c-glitch__img" style="background-image: url('<?php echo THEME_IMG_PATH; ?>/slide01.png');"></div>
                    <div class="c-glitch__img" style="background-image: url('<?php echo THEME_IMG_PATH; ?>/slide01.png');"></div>
                    <div class="c-glitch__img" style="background-image: url('<?php echo THEME_IMG_PATH; ?>/slide01.png');"></div>
                    <div class="c-glitch__img" style="background-image: url('<?php echo THEME_IMG_PATH; ?>/slide01.png');"></div>
                    <div class="c-glitch__img" style="background-image: url('<?php echo THEME_IMG_PATH; ?>/slide01.png');"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-02">
        <div class="container">
            <ul class="logo-list">
                <li class="logo-item"><a href=""><img src="<?php echo THEME_IMG_PATH; ?>/VM.png" class="logo-img" alt="VM"></a></li>
                <li class="logo-item"><a href=""><img src="<?php echo THEME_IMG_PATH; ?>/neteller.png" class="logo-img" alt="net"></a></li>
                <li class="logo-item"><a href=""><img src="<?php echo THEME_IMG_PATH; ?>/PM.png" class="logo-img" alt="PM"></a></li>
                <li class="logo-item"><a href=""><img src="<?php echo THEME_IMG_PATH; ?>/stic.png" class="logo-img" alt="Stic"></a></li>
                <li class="logo-item"><a href=""><img src="<?php echo THEME_IMG_PATH; ?>/fasa.png" class="logo-img" alt="fasa"></a></li>
            </ul>
        </div>
    </div>

    <div class="block-03">
        <div class="container">
            <h3 class="numbers-toptitle">Excepteur sint occaecat Cupidatat
                Non proident, sunt in culpa qui Officia.</h3>
            <div class="numbers">
                <div class="numbers-description">
                    <div class="numbers-description__top">
                        <p class="numbers-item js-number">75000</p><span class="numbers-type">+</span>
                        <h4 class="numbers-title">First Parameter
                            Value</h4>
                    </div>
                    <div class="numbers-description__bottom">
                        <span class="numbers-icon__01 numbers-icon"></span>
                        <h4 class="numbers-title">Lorem Ipsum
                            Dolor</h4>
                        <p class="numbers-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>

                <div class="numbers-description">
                    <div class="numbers-description__top">
                        <p class="numbers-item js-number">0</p><span class="numbers-type">%</span>
                        <h4 class="numbers-title">Second Parameter
                            Value</h4>
                    </div>
                    <div class="numbers-description__bottom">
                        <span class="numbers-icon__02 numbers-icon"></span>
                        <h4 class="numbers-title">Consectetur
                            Adipisicing Elit</h4>
                        <p class="numbers-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>

                <div class="numbers-description">
                    <div class="numbers-description__top">
                        <span class="numbers-type">$</span><p class="numbers-item js-number">5000</p>
                        <h4 class="numbers-title">Third Parameter
                            Value</h4>
                    </div>
                    <div class="numbers-description__bottom">
                        <span class="numbers-icon__03 numbers-icon"></span>
                        <h4 class="numbers-title">Tempor
                            Incididunt Ut</h4>
                        <p class="numbers-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>

                <div class="numbers-description">
                    <div class="numbers-description__top">
                        <p class="numbers-item js-number">90</p><span class="numbers-type">+</span>
                        <h4 class="numbers-title">Fourth Parameter
                            Value</h4>
                    </div>
                    <div class="numbers-description__bottom">
                        <span class="numbers-icon__04 numbers-icon"></span>
                        <h4 class="numbers-title">Sed Do
                            Eiusmod</h4>
                        <p class="numbers-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-04">
        <div class="container">
            <h3 class="calculator-toptitle">Voluptatem points doluptas sit
                Aspernatur aut 2000</h3>

            <div class="calculator-wrapper">
                <div class="calculator-list">
                    <div class="calculator-item">
                        <p class="calculator-item__wrapper">
                            <label for="amount-01" class="calculator-text calculator-text__required">Value 01</label>
                            <input type="text" id="amount-01" class="calculator-value" readonly>
                        </p>
                        <div id="slider-range-min-01" class="calculator-line"></div>
                    </div>

                    <div class="calculator-item">
                        <p class="calculator-item__wrapper">
                            <label for="amount-02" class="calculator-text calculator-text__required">Value 02</label>
                            <input type="text" id="amount-02" class="calculator-value" readonly>
                        </p>
                        <div id="slider-range-min-02" class="calculator-line"></div>
                    </div>
                </div>

                <div class="calculator-item calculator-item__result">
                    <p class="calculator-text calculator-text-result">Value 03</p>
                    <span class="calculator-value calculator-value-result"></span>
                </div>
            </div>

            <div class="calculator-info">
                <p class="calculator-info__text calculator-info__text-required">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. </p>

                <a href="" class="calculator-info__link">See more values</a>
            </div>
        </div>
    </div>

    <div class="block-05">

    </div>

<?php
get_footer();