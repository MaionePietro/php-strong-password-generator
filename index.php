<?php
    $lengthPassword = intval($_GET["lunghezza_password"]);
    var_dump($lengthPassword);

    function generatePassword($lengthPassword) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
        $password = '';
        for ($i = 0; $i < $lengthPassword; $i++) {
          $password .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $password;
    };
    //$password = generatePassword();
    //var_dump(generatePassword());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="container d-flex align-items-center vh-100" style="background-color: #00162C;">
    <div class="container">
        <div class="info">
            <h1 class="d-flex justify-content-center" style="color: #758290;">Strong Password Generator</h1>
            <h2 class="d-flex justify-content-center" style="color: white;">Genera una password sicura</h2>
        </div>
        <div>
            <h3>
                <?php // echo $password; ?>
            </h2>
        </div>
        <form action="" method="GET" style="background-color: white;" class="px-5 py-2 rounded">           
            <div class="d-flex justify-content-between px-5 py-2">
                <label for="customRange1" class="form-label">Lunghezza pasword: </label>
                <input type="range" class="form-range w-25" name="lunghezza_password" min="6" max="20" value="10">
            </div>
            <div class="d-flex justify-content-between px-5 py-2">
                <div>
                    <span>Consenti ripetizioni di uno o più caratteri</span>
                </div>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault">
                        <label class="form-check-label" for="flexRadioDefault1">
                            si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            no
                        </label>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between px-5 py-2">
                <div></div>
                <div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        Lettere
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" checked>
                      <label class="form-check-label" for="flexCheckChecked">
                        Numeri
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" checked>
                      <label class="form-check-label" for="flexCheckChecked">
                        Simboli
                      </label>
                    </div>
                </div>
            </div>
            <div class="button px-5 py-2">
                <button type="submit" class="btn btn-primary btn-lg">Invia</button>
                <!-- <button type="button" class="btn btn-secondary btn-lg">Annulla</button> -->
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>