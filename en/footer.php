    <!--start of footer-->
    <footer class="text-white bg-dark" style="background: linear-gradient(90deg, var(--green-dark), var(--green-main));">
        <div class="container py-4 py-lg-5">
            <div class="row row-cols-1 row-cols-md-3 justify-content-center">
                <div class="col text-center d-flex flex-column align-items-center item" data-aos="fade-right" data-aos-once="true"><img class="img-fluid" src="../assets/img/white.png?h=e1b7c1b7ee8682ffadc33e3369a53571" style="width: 300px;">
                    <div class="footer-svg mb-2"><svg preserveAspectRatio="xMidYMid meet" data-bbox="51 51 98 98" viewBox="51 51 98 98" height="60" width="60" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true"><defs><style>#comp-lmdcck8k svg [data-color="1"] {fill: #BADA55;}
#comp-lmdcck8k svg [data-color="2"] {fill: #79B448;}</style></defs>
    <g>
        <path d="M121.479 126.682a5.349 5.349 0 0 1-3.797-1.573L96.203 103.63a5.372 5.372 0 0 1-1.573-3.797V81.038a5.37 5.37 0 0 1 10.74 0v16.57l19.907 19.906a5.371 5.371 0 0 1-3.798 9.168z" fill="#E98866" data-color="1"></path>
        <path d="M100 51c-27.018 0-49 21.982-49 49s21.982 49 49 49 49-21.982 49-49-21.982-49-49-49zm2.014 91.237v-8.12a2.014 2.014 0 1 0-4.028 0v8.12c-21.718-1.024-39.199-18.505-40.223-40.223h8.12a2.014 2.014 0 1 0 0-4.028h-8.121c1.023-21.718 18.506-39.199 40.224-40.223v8.12a2.014 2.014 0 1 0 4.028 0v-8.12c21.718 1.024 39.201 18.505 40.224 40.223h-8.121a2.014 2.014 0 1 0 0 4.028h8.12c-1.024 21.718-18.505 39.199-40.223 40.223z" fill="#0E4828" data-color="2"></path>
    </g>
</svg></div>
                    <p class="text-center rtl">Working hours <br><br>Saturday through Thursday <br>from 11 am to 9 pm&nbsp;<br></p>
                </div>
                <div class="col text-center form-wrapper rtl">
<?php echo @$_REQUEST['endFormMessage'];?><?php if(!isset($_REQUEST['endFormMessage']) && $_REQUEST['endFormMessage'] == 0){?>
                    <form class="text-end float-none mx-auto footer-form" id="contact-form" method="post"><input class="form-control" type="hidden" name="lang" value="english">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row row-cols-1 ltr">
                                <div class="col">
                                    <div class="form-group"><label class="form-label m-0" for="formRequesterFirstName">Name:</label><input class="form-control" type="text" id="form_name" name="formRequesterFirstName" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col py-0">
                                    <div class="form-group"><label class="form-label m-0" for="formRequesterEmail">Email :</label><input class="form-control" type="email" id="form_email" name="formRequesterEmail" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group"><label class="form-label m-0" for="formRequesterMobile">Phone:</label><input class="form-control" type="tel" id="form_phone" name="formRequesterMobile" required="">
                                        <div class="text-center float-none help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group"><label class="form-label m-0 ltr" for="formRequesterMessage">Message:</label><textarea class="form-control" id="form_message" name="formRequesterMessage" style="color: #333;"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center text-md-start pt-3"><button class="btn btn-dark btn-lg text-center float-none" id="submit-button" value="راسلنا" type="submit" required="" name="submit" style="width: 100%;background-color: var(--green-dark);font-family: inherit;">Submit<br></button></div>
                        </div>
                    </form>
<script>
_gaq.push(['_trackEvent', 'submit', 'showed', '', 0]);
</script>
<?php } else { ?>
<script>
_gaq.push(['_trackEvent', 'submit', 'clicked', '', 0]);
</script>
<?php } ?>
<div id="success_submit" style="padding-bottom:60px;"></div>
                </div>
                <div class="col text-center text-lg-start d-flex flex-column item" data-aos="fade-left" data-aos-once="true">
                    <p class="text-center rtl">Address<br>53 Shehab St., Mohandiseen&nbsp;<br>Second floor - Giza – Egypt&nbsp;<br><br><a href="tel:01066771440"><span style="color: rgb(255, 255, 255);">01066771440</span></a><br><a href="mailto:toothyard@gmail.com"><span style="color: rgb(255, 255, 255);">toothyard@gmail.com</span></a><br></p>
                    <ul class="list-unstyled">
                        <li></li>
                    </ul>
                    <ul class="list-inline text-center mb-0">
                        <li class="list-inline-item" style="width: 50px;"><a class="link-light" href="https://www.facebook.com/toothyard" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook" style="font-size: 40px;">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                </svg></a></li>
                        <li class="list-inline-item"><a href="https://yellowpages.com.eg/en/search/Tooth-Yard-Dental-Clinic-_-Dr-Noha-Sidky" target="_blank"><img src="../assets/img/Yellow-Logo.png?h=1a51500641fceb6c97881698878daef3" style="width: 50px;"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="p-0" style="background: #ffffff;">
            <div class="container text-dark">
                <div class="row row-cols-1 row-cols-md-2 py-2">
                    <div class="col d-md-flex align-items-md-end">
                        <div class="d-flex justify-content-between align-items-center pt-3">
                            <p class="text-center mb-0" style="width: 100%;font-size: 14px;font-weight: 200;">© 2023 by&nbsp;Tooth Yard Dental Clinic<br></p>
                        </div>
                    </div>
                    <div class="col d-md-flex justify-content-md-end align-items-md-end">
                        <div class="d-flex justify-content-center align-items-center justify-content-md-end pt-3">
                            <p class="mb-0" style="font-size: 14px;">Built and Managed by<br></p><img src="../assets/img/YELLOW-BLACK.png?h=066d881c2b4afc115d84bebaa1bdd628">
                        </div>
                    </div>
                </div>
            </div>
        </section><a href="https://web.whatsapp.com/send?phone=201066771440&amp;text" style="position: fixed;right: 60px;bottom: 60px;z-index: 200;" target="_blank"><img class="img-fluid" src="../assets/img/social-whatsapp-circle-512.webp?h=dd7f4393cc676635e8ff26b35f85ca6b"></a>
    </footer>
    <script src="../assets/bootstrap/js/bootstrap.min.js?h=981245863c383366a329259d02b8172c"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="../assets/js/script.min.js?h=a0b6708c180e557d767ff9693e4232ba"></script>
    <script src="../assets/js/aos.min.min.js?h=d3718e34eeb0355be8e3179a2e2bccb7"></script>
</body>

</html>
