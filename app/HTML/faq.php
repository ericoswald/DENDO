<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0; 
  box-sizing: border-box;
  text-transform: capitalize;
  outline: none; border:none;
  text-decoration: none;
}

body{
  background: lightgrey;
}

.container{
  margin:20px auto;
  max-width: 700px;
}

.container .heading{
  text-align: center;
  font-size: 30px;
  padding:20px;
  margin-bottom: 20px;
}

.container .accordion-container{
  padding:0 20px;
}

.container .accordion-container .accordion{
  margin-bottom: 20px;
  cursor: pointer;
}

.container .accordion-container .accordion.active .accordion-heading{
  background: black;
}

.container .accordion-container .accordion.active .accordion-heading h3{
  color:#fff;
}

.container .accordion-container .accordion.active .accordion-heading i{
  color:#fff;
  transform: rotate(180deg);
  transition: transform .2s .1s;
}

.container .accordion-container .accordion.active .accordion-content{
  display: block;
}

.container .accordion-container .accordion .accordion-heading{
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap:10px;
  background: #fff;
  border:2px solid #000;
  padding:15px 20px;
}

.container .accordion-container .accordion .accordion-heading h3{
  font-size: 18px;;
}

.container .accordion-container .accordion .accordion-heading i{
  font-size: 25px;;
}

.container .accordion-container .accordion .accordion-content{
  padding:15px 20px;
  border:2px solid #000;
  font-size: 15px;
  background: #fff;
  border-top: 0;
  display: none;
  animation: animate .2s linear backwards;
  line-height: 2;
  transform-origin: top;
}

@keyframes animate {
  0%{
    transform: scaleY(0);
  }
}
</style>
</head>
<body>

<div class="container">

    <h1 class="heading">F.A.Q</h1>

    <div class="accordion-container">

        <div class="accordion active">
            <div class="accordion-heading">
                <h3>Qui sommes-nous ?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                Dendo est une entreprise spécialisé dans la mobilité de déplacement durable et écologique. Effectivement dans notre boutique ou notre site internet vous trouverez une large gamme de vélos avec un design des plus ravissants !
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Comment fonctionne la garantie ?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                Dendo fournit une garantie d'un an sur les différentes gammes de vélos proposées. Elle comprend la réparation ainsi que le prêt d'un vélo dans le cas d'un disfonctionnement jusqu'à réparation.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Ou nous trouver ? </h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                Nous disposons d'un site e-commerce mais également de deux boutiques basées sur paris et strasbourg qui servent à la vente et aux renseignemants. 
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Puis-je échanger mon vélo ?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                Après l'achat d'un vélo il n'est pas possible d'effectuer un échange avec une autre gamme de vélo ou un remboursement. Seul le prêt d'un vélo peut être autorisé suite à un dysfonctionnement du votre. 
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Peut-on payer en plusieurs fois ?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                Malheureusement seul le paiement en une fois est autorisé, il est donc impossible de régler un achat en plusieurs fois. 
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>D'ou viennent nos produits ? </h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                Les produits déstinés à la fabrication viennent directement du japon confectionnés par des artisans japonais reconnus dans la région pour la ténacité de production.
            </p>
        </div>

    </div>

</div>


<script>

let accordions = document.querySelectorAll('.accordion-container .accordion');

accordions.forEach(acco =>{
    acco.onclick = () =>{
        accordions.forEach(subAcco => { subAcco.classList.remove('active') });
        acco.classList.add('active');
    }
})

</script>

    
</body>
</html>