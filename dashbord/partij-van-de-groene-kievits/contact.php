<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link class="img-fluid rounded-circle" rel="shortcut icon" type="logo/png" href="afbeeldingen/logo.png">
    <title>PVDGK</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php include("navbar.php"); ?>
    <!-- NAVBAR -->

    <!-- VRAGEN OF OPMERKINGEN & BUTTON -->
    <div class=container>
        <h3 class="d-flex justify-content-center font-weight-bold" style="margin-top: 50px; margin-bottom: 10px"> Vragen of opmerkingen? </h3>
        <div class="d-flex justify-content-center text-center">
            <h6 class="col-lg-6 text-black font-weight-bold" style="margin-bottom: 30px">Vul het contactformulier in, of stuur een email naar zakelijk.pvdk@gmail.com</h6>
        </div>
    </div>
    <!-- VRAGEN OF OPMERKINGEN & BUTTON -->

    <!--CONTACTFORMULIER-->
    <div class=container style="margin-bottom: 50px; margin-top: 30px">
        <section class="mb-4">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="d-flex justify-content-center text-center">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                            <div class="row">
                                <!-- NAAM -->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="name" class="d-block p text-black font-weight-bold">Naam</label>
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>
                                </div>
                                <!-- NAAM -->

                                <!-- EMAIL -->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="email" class="d-block p text-black font-weight-bold">Email-adres</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <!-- EMAIL -->
                            </div>

                            <!-- ONDERWERP -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="d-block p text-black font-weight-bold">Onderwerp</label>
                                        <input type="text" id="subject" name="subject" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!-- ONDERWERP -->

                            <!-- BERICHT -->
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <label for="message" class="d-block p text-black font-weight-bold">Bericht</label>
                                        <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                                    </div>

                                </div>
                            </div>
                            <!-- BERICHT -->
                        </form>
                    </div>

                    <!-- BUTTON -->
                    <div class="text-left text-md-left d-flex justify-content-center text-center">
                        <a class="btn btn-outline-black btn-lg text-white font-weight-bold" style="background-color: rgba(8, 209, 28, 1); margin-bottom: 50px; margin-top: 10px" href="#!" role="button" onclick="document.getElementById('contact-form').submit();">Verzenden</a>
                    </div>
                    <!-- BUTTON -->
                    <div class="status"></div>
                </div>
            </div>
        </section>
    </div>
    <!--CONTACTFORMULIER-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- FOOTER -->
    <?php include("footer.php"); ?>
    <!-- FOOTER -->
</body>

</html>