<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link class="img-fluid rounded-circle" rel="shortcut icon" type="logo/png" href="afbeeldingen/logo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PVDGK</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php include("navbar.php"); ?>

    <div class=container>
        <h3 class="d-flex justify-content-center font-weight-bold" style="margin-top: 50px; margin-bottom: 10px">Doneren en schenken aan PVDGK</h3>
        <div class="d-flex justify-content-center text-center">
            <h6 class="col-lg-6 text-black font-weight-bold" style="margin-bottom: 30px">Met jouw bijdrage steun je de partij op vele manieren. Doe direct een donatie via iDeal, PayPal of Creditcard.</h6>
        </div>
    </div>
    <!-- NAVBAR -->

    <!-- DONNEER INFO -->
    <div class="container d-flex justify-content-center text-center">
        <div class="row d-flex justify-content-center text-center">
            <div class="d-flex align-items-center flex-column mb-3 col-md-12">
                <div class="d-block p-2 text-white font-weight-bold" style="background-color: rgba(8, 209, 28, 1); border-radius:20px;">
                    <div class="column">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="name" class="d-block p text-black font-weight-bold">Naam</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>
                        <p></p>
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="email" class="d-block p text-black font-weight-bold">E-mail</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>
                        <p></p>
                        <label for="email" class="d-block p text-black font-weight-bold">Bedrag</label>
                        <select id="dropdown_relatie">
                            <option style="display:none">Maak uw keuze</option>
                            <option>€5</option>
                            <option>€10</option>
                            <option>€20</option>
                            <option>€50</option>
                        </select>
                        <p></p>
                        <label for="email" class="d-block p text-black font-weight-bold">Betaalmethode</label>
                        <select style="margin-bottom: 10px;" id="dropdown_relatie">
                            <option style="display:none">Maak uw keuze</option>
                            <option>IDEAL</option>
                            <option>PayPal</option>
                            <option>Creditcard</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DONNEER INFO -->

    <!-- DONEER BUTTON -->
    <div class=container>
        <div class="text-center">
            <a class="btn btn-outline-black btn-lg text-white font-weight-bold" style="background-color: rgba(8, 209, 28, 1); margin-bottom: 50px" href="gescammed.php" role="button">Doneer</a>
        </div>
    </div>
    <!-- DONEER BUTTON -->

    <!-- VRAGEN OF OPMERKINGEN & BUTTON -->
    <div class=container>
        <h3 class="d-flex justify-content-center font-weight-bold" style="margin-top: 50px; margin-bottom: 10px"> Vragen of opmerkingen? </h3>
        <div class="d-flex justify-content-center text-center">
            <h6 class="col-lg-6 text-black font-weight-bold" style="margin-bottom: 15px">Vul het contactformulier in, of stuur een email naar zakelijk.pvdgk@gmail.com</h6>
        </div>
        <div class="text-center">
            <a class="btn btn-outline-black btn-lg text-white font-weight-bold" style="background-color: rgba(8, 209, 28, 1); margin-bottom: 50px" href="contact.php" role="button">Neem contact op</a>
        </div>
    </div>
    <!-- VRAGEN OF OPMERKINGEN & BUTTON -->

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- FOOTER -->
    <?php include("footer.php"); ?>
</body>

</html>