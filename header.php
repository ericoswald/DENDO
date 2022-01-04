<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <link rel="stylesheet" href="./style_header.css" type="text/css" media="all">
    <title>Document</title>

</head>

<body>


    <header>
        <div class="header">
            <div class="header_menu">
                <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                    aria-controls="offcanvasBottom"><span class="iconify" data-icon="ci:menu-alt-02" data-width="20"
                        data-height="20" data-flip="horizontal"></span></button>

                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">

                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        
                        <div class="dropdown">
                            <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              PRODUITS
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">VELOS</a></li>
                              <li><a class="dropdown-item" href="#">E-VELOS</a></li>
                              <li><a class="dropdown-item" href="#">OCCASION - DESTOCKAGE</a></li>
                              <li><a class="dropdown-item" href="#">EQUIPEMENT</a></li>
                              <li><a class="dropdown-item" href="#">COMPOSANT ET ACCESSOIRE</a></li>
                            </ul>
                          </div>
                          <div class="dropdown">
                            <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              SERVICE
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">SUPPORT</a></li>
                              <li><a class="dropdown-item" href="#">FAQ</a></li>
                              <li><a class="dropdown-item" href="#">PAIEMENT ET EXPEDITION</a></li>
                              <li><a class="dropdown-item" href="#">INFORMATIONS</a></li>
                              <li><a class="dropdown-item" href="#">CONTACT</a></li>
                              <li><a class="dropdown-item" href="#">TCHAT</a></li>
                            </ul>
                          </div>
                          <div class="dropdown">
                            <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              JITENSHA
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">A PROPOS</a></li>
                              <li><a class="dropdown-item" href="#">TECHNOLOGIE</a></li>
                              <li><a class="dropdown-item" href="#">TEMOIGNAGE</a></li>
                              <li><a class="dropdown-item" href="#">PRESSE</a></li>
                              <li><a class="dropdown-item" href="#">OÙ ACHETER ?</a></li>
                            </ul>
                          </div>
                          <div class="dropdown">
                            <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              MON COMPTE
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Velos</a></li>
                              <li><a class="dropdown-item" href="#">E-Velos</a></li>
                              <li><a class="dropdown-item" href="#">Ocasion - Destockage</a></li>
                              <li><a class="dropdown-item" href="#">Equipement</a></li>
                              <li><a class="dropdown-item" href="#">Composant accessoire</a></li>
                            </ul>
                          </div>

                          
                    </div>
                </div>
            </div>
            <!-- <div class="header_close">
                <span class="iconify" data-icon="ant-design:close-outlined"></span>
                <span>FERMER</span>
            </div> -->
            <div class="header_logo"><img src="./assets/image/logo.png" alt=""></div>
            <div class="header_menu">
                <span class="iconify" data-icon="bi:search"></span>
                <span class="iconify" data-icon="codicon:account"></span>
                <span class="iconify" data-icon="grommet-icons:shop"></span>
            </div>
        </div>
    </header>
</body>

</html>