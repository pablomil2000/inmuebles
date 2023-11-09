<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?= __('Rent your property') ?></h1>
                        <span class="color-text-a"><?= __("Do you have apartments and don't know how to rent them? <b>Work with us</b>") ?></span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="home"><?= __('Home') ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="habitaciones"><?= __('Rent your property') ?></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= Blog Single ======= -->
    <section class="news-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <!-- ======= Services Section ======= -->
                <section class="news-single nav-arrow-b">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="row" action="" method="POST">
                                    <div class="col-12 m-3">
                                        <h3><?= __('Contact Form') ?></h3>
                                        <p><?= __('Fill in this information so we can contact you') ?></p>
                                        <h4><?= __('Contact information') ?></h4>
                                    </div>

                                    <div class="col-6">
                                        <label for="nombre" class="form-label"><?= __('Name') ?> <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="nombre" name="nombre" pattern="^[A-Za-z\s]+$" required><br /><br />
                                    </div>

                                    <div class="col-6">
                                        <label for="apellido" class="form-label"><?= __('Last name') ?> <span class="text-danger">*</span></label>
                                        <input class="form-control" type="tel" id="apellido" name="apellido" pattern="^[A-Za-z\s]+$" required><br /><br />
                                    </div>

                                    <div class="col-6">
                                        <label for="email" class="form-label"><?= __('Email') ?> <span class="text-danger">*</span></label>
                                        <input class="form-control" id="email" type="email" name="email" require>
                                    </div>
                                    <div class="col-6">
                                        <label for="tel" class="form-label"><?= __('Number phone') ?> <span class="text-danger">*</span></label>
                                        <input onkeyup="process()" style="width: 29vw;" class="form-control" id="phone" type="tel" require><br /><br />
                                        <input class="form-control" type="hidden" name="tel" id="phone_real"><br /><br />
                                    </div>
                                    <hr>
                                    <div class="col-12 m-3">
                                        <h4><?= __('How can we help?') ?></h4>
                                    </div>

                                    <div class="col-12">
                                        <label for="asunto"><?= __('Affair') ?></label>
                                        <input class="form-control" id="asunto" type="text" name="asunto"><br /><br />
                                    </div>

                                    <div class="col-12">
                                        <label for="text"><?= __('Message') ?></label>
                                        <textarea class="form-control" id="text" rows="10" name="mensaje"></textarea>
                                    </div>
                                    <button type="submit" onclick="process()" class="btn btn-primary m-3"><?= __('Send') ?></button>
                                </form>
                            </div>


                            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">

                            </div>
                        </div>
                    </div>
                </section>

                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">

                </div>
            </div>
        </div>
    </section><!-- End Blog Single-->

</main><!-- End #main -->

<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        initialCountry: "es",
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",

    });

    const info = document.querySelector(".alert-info");

    function process() {
        const phoneNumber = phoneInput;

        console.log(phoneNumber.getSelectedCountryData().dialCode);


        let campoMobil = document.getElementById("phone_real");
        campoMobil.value = "(+" + phoneNumber.getSelectedCountryData().dialCode + ") " + phoneNumber.getNumber();
    }
</script>