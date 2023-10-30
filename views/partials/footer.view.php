<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="nav-footer">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="" href="<?= RutaCtrl::url('home') ?>"><?= __('Home') ?></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="" href="<?= RutaCtrl::url('inmuebles') ?>"><?= __('Apartment') ?></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?= RutaCtrl::url('habitaciones') ?>"><?= __('Rooms') ?></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?= RutaCtrl::url('contacto') ?>"><?= __('Contact') ?></a>
                        </li>
                    </ul>
                </nav>
                <div class="socials-a">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="bi bi-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="bi bi-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="copyright-footer">
                    <p class="copyright color-text-a">
                        &copy; Developed
                        <span class="color-a">Pablo Martín López</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End  Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= RutaCtrl::url() ?>views/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= RutaCtrl::url() ?>views/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= RutaCtrl::url() ?>views/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= RutaCtrl::url() ?>views/assets/js/main.js"></script>

</body>

</html>