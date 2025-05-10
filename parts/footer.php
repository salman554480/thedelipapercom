<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">

            <!-- Logo & About -->
            <div class="col-md-3 mb-4">
                <div class="footer-logo mb-3">
                    <img src="<?php echo $website_url; ?>/assets/img/logo2.png" height="40px" alt="">
                </div>
                <p class="footertext"">Welcome to Deli Paper, where creativity meets elegance. Our
                    paper products are more
                    than just
                    functional; they show your company’s commitment to excellence. Deli Paper is made to be both stylish
                    and functional.From protecting your culinary pleasures to enhancing your company’s image, our
                    solutions seamlessly combine durability and design.</p>
            </div>

            <!-- Popular Products -->
            <div class=" col-md-3 mb-4">
                <h5>Popular Products</h5>
                <ul class="list-unstyled footer-list">
                    <?php

                    $select_footer_product = "SELECT * FROM product where product_status='active' ";
                    $run_footer_product = mysqli_query($conn, $select_footer_product);
                    while ($row_footer_product = mysqli_fetch_array($run_footer_product)) {

                        $footer_product_id = $row_footer_product['product_id'];
                        $footer_product_name = $row_footer_product['product_name'];
                        $footer_product_url = $row_footer_product['product_url'];

                    ?>
                    <li><a
                            href="<?php echo $website_url; ?>/product_details.php?product_url=<?php echo $footer_product_url ?>"><?php echo $footer_product_name; ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- Useful Links -->
            <div class="col-md-3 mb-4">
                <h5>Useful Links</h5>
                <ul class="list-unstyled footer-list">
                    <li><a href="<?php echo $website_url; ?>/page.php?page_url=about-us">About Us</a></li>
                    <!-- <li><a href="page.php?page_url=faq">FAQs</a></li> -->
                    <li><a href="<?php echo $website_url; ?>/page.php?page_url=privacy-policy">Privacy Policy</a></li>
                    <li><a href="<?php echo $website_url; ?>/page.php?page_url=terms-and-conditions">Terms &
                            Conditions</a></li>
                </ul>
            </div>

            <!-- Contact Info & Social -->
            <div class="col-md-3 mb-4">
                <h5>Contact Us</h5>
                <ul class="list-unstyled  contact-info">
                    <li class="mb-3"><i class='bx bx-envelope'></i><a
                            href="mailto:sales@delipaper.co.uk">sales@delipaper.co.uk </a>
                    </li>
                    <li class="mb-3"><i class='bx bx-phone'></i><a href="tel:+447366426960">+447366426960</a></li>
                    <li class="mb-3"><i class='bx bx-map'></i>72 Booker Lane, High Wycombe HP12 3UT</li>
                </ul>
                <div class="social-icons mt-4">
                    <a href="https://www.facebook.com/delipaperuk/"><i class='bx bxl-facebook'></i></a>
                    <a href="https://uk.pinterest.com/delipaperuk/"><i class='bx bxl-pinterest'></i></a>
                    <a href="https://www.facebook.com/delipaperuk/"><i class='bx bxl-instagram'></i></a>
                    <a href="https://www.linkedin.com/company/deli-paper-uk/"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>

        </div>
        <div class="row d-flex justify-content-between">
            <div class="col-md-5">
                <img class="footer-payment-icons " src="https://img.icons8.com/color/60/mastercard.png"
                    title="mastercard" alt="mastercard" />
                <img class="footer-payment-icons ml-3" src="https://img.icons8.com/color/60/google-pay.png"
                    alt="google-pay" title="google-pay" />
                <img class="footer-payment-icons ml-3" src="https://img.icons8.com/color/60/visa.png" title="visa"
                    alt="visa" />
                <img class="footer-payment-icons ml-3" src="https://img.icons8.com/nolan/60/apple-pay.png"
                    alt="apple-pay" />

                <img class="footer-payment-icons ml-3" src="https://img.icons8.com/fluency/60/bank-building.png"
                    alt="bank-building" />
            </div>
            <div class="col-md-4">
                <h5 class="font-weight-bold">Free Shipping</h5>
                <img class="footer-payment-icons2 " src="https://img.icons8.com/color/96/great-britain.png"
                    alt="great-britain" />
                <img class="footer-payment-icons2 ml-3" src="https://img.icons8.com/fluency/48/flag-of-europe.png"
                    alt="flag-of-europe" />
                <img class="footer-payment-icons2 ml-3" src="https://img.icons8.com/color/96/usa.png" alt="usa" />
                <img class="footer-payment-icons2 ml-3" src="https://img.icons8.com/color/96/australia-flag--v1.png"
                    alt="australia-flag--v1" />
                <img class="footer-payment-icons2 ml-3" src="https://img.icons8.com/color/96/canada.png" alt="canada" />

            </div>
        </div>
    </div>
</footer>

<!-- Your main footer goes here -->

<!-- Copyright -->
<div class="copyrightarea text-white text-center py-3">
    &copy; 2025 Delipaper. All rights reserved.
</div>



<!-- Hidden default Google Translate -->
<div id="google_translate_element" style="display: none;"></div>

<!-- Custom Dropup -->
<div class="translate-dropup">
    <button class="dropup-button" id="translateButton">
        <img src="https://flagcdn.com/gb.svg" width="20" style="vertical-align: middle;"> English
    </button>
    <div class="dropup-content">
        <div onclick="translateLanguage('en|fr', 'fr')">
            <img src="https://flagcdn.com/fr.svg" width="20"> French
        </div>
        <div onclick="translateLanguage('en|es', 'es')">
            <img src="https://flagcdn.com/es.svg" width="20"> Spanish
        </div>
        <div onclick="translateLanguage('en|de', 'de')">
            <img src="https://flagcdn.com/de.svg" width="20"> German
        </div>
        <div onclick="translateLanguage('en|it', 'it')">
            <img src="https://flagcdn.com/it.svg" width="20"> Italian
        </div>
        <div onclick="translateLanguage('en|pt', 'pt')">
            <img src="https://flagcdn.com/pt.svg" width="20"> Portuguese
        </div>
    </div>
</div>

<!-- Google Translate script -->
<script type="text/javascript">
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en'
    }, 'google_translate_element');
}

function translateLanguage(langPair, langCode) {
    var select = document.querySelector("select.goog-te-combo");
    if (!select) return;
    select.value = langPair.split('|')[1];
    select.dispatchEvent(new Event('change'));

    // Update button to reflect the selected language and flag
    const flagUrl = `https://flagcdn.com/${langCode}.svg`;
    const languageNameMap = {
        en: 'English',
        fr: 'French',
        es: 'Spanish',
        de: 'German',
        it: 'Italian',
        pt: 'Portuguese'
    };
    document.getElementById("translateButton").innerHTML =
        `<img src="${flagUrl}" width="20" style="vertical-align: middle; margin-right:4px"> ${languageNameMap[langCode]}`;
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>



<!-- WhatsApp Sticky Button -->
<a href="https://wa.me/+447366426960" class="whatsapp-float" target="_blank">
    <i class='bx bxl-whatsapp whatsapp-icon'></i>
</a>

<script src="<?php echo $website_url; ?>/assets/bootstrap/jquery-3.7.1.min.js"></script>
<script src="<?php echo $website_url; ?>/assets/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo $website_url; ?>/assets/bootstrap/popper.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
<script src="<?php echo $website_url; ?>/assets/js/script.js"></script>
</body>
</body>

</html>