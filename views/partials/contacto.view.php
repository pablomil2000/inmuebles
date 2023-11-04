<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?= __('Contact') ?></h1>
                        <span class="color-text-a"><?= __('Get in contact with us') ?></span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="home"><?= __('Home') ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="habitaciones"><?= __('Contact') ?></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

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
                            <input style="width: 29vw;" class="form-control" id="phone" type="tel" name="tel" pattern="^[0-9]{3}[0-9]{3}[0-9]{3}$" require><br /><br />
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
                        <button type="submit" class="btn btn-primary m-3"><?= __('Send') ?></button>
                    </form>
                </div>


                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">

                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<script>
    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: callback => {
            fetch("https://ipapi.co/json")
                .then(res => res.json())
                .then(data => callback(data.country_code))
                .catch(() => callback("us"));
        },
        // utilsScript: "/intl-tel-input/js/utils.js?1695806485509" // just for formatting/placeholders etc
    });
</script>