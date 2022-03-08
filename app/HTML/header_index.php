<header>
    <div class="header">
      <div class="header_menu">
        <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
          aria-controls="offcanvasBottom"><span class="iconify" data-icon="ci:menu-alt-02" data-width="20"
            data-height="20" data-flip="horizontal" style="color: white;"></span></button>

        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
          aria-labelledby="offcanvasBottomLabel">
          <div class="offcanvas-header">

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body small">

            <div class="dropdown">
              <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                PRODUITS
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?= ROOT_URL?>carousel_velo">VELOS</a></li>
                <li><a class="dropdown-item" href="<?= ROOT_URL?>equipement">EQUIPEMENT</a></li>
                <li><a class="dropdown-item" href="#">COMPOSANT ET ACCESSOIRE**</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                SERVICE
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?= ROOT_URL?>/support">SUPPORT</a></li>
                <li><a class="dropdown-item" href="<?= ROOT_URL?>/faq">FAQ</a></li>
                <li><a class="dropdown-item" href="#">PAIEMENT ET EXPEDITION</a></li>
                <li><a class="dropdown-item" href="<?= ROOT_URL?>contact">CONTACT</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                JITENSHA**
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">TECHNOLOGIE</a></li>
                <li><a class="dropdown-item" href="#">TEMOIGNAGE</a></li>
                <li><a class="dropdown-item" href="#">PRESSE</a></li>
                <li><a class="dropdown-item" href="#">OÙ ACHETER ?</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                MON COMPTE
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="<?= ROOT_URL?>/deconnexion">Déconnexion</a></li>
            
              </ul>
            </div>


          </div>
        </div>
      </div>
      <!-- <div class="header_close">
                <span class="iconify" data-icon="ant-design:close-outlined"></span>
                <span>FERMER</span>
            </div> -->
      <a href="<?= ROOT_URL?>/home" class="header_logo"><img src="<?= $logo?>" alt=""></a>
      <div class="header_menu icons_menu">
        

      <!-- DARK MODE LIGHT MODE -->


          <a href="<?= ROOT_URL?>barre_recherche"><span class="iconify" data-icon="bi:search"></span></a>
          <a href="<?= ROOT_URL?>register"><span class="iconify" data-icon="codicon:account"></span></a>
          <a href="<?= ROOT_URL?>panier"><span class="iconify" data-icon="grommet-icons:shop"></span></a>
      </div>
    </div>
  </header>
