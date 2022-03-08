<main>
    <div id="container">

        .couleur_validation{
            background-color: lightgray;
        }

        #bloc1{
            width:400px;
            margin:0 auto;
            margin-top:10%;
        }
        form_livraison {
            width:100%;
            padding: 30px;
            border: 1px solid #f1f1f1;
            background: #fff;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        #bloc1 h1{
            width: 100%;
            margin: 0 auto;
            padding-bottom: 30px;
            color: white;
            text-align: center;
            text-decoration: underline;
        }

        <label for="nom"><b>Nom</b></label>
        <input type="text" placeholder="Veuillez saisir votre nom" name="nom">

        <label for="prenom"><b>Prénom</b></label>
        <input type="text" placeholder="Veuillez saisir votre prénom" name="prenom">

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Veuillez saisir votre email" name="email">

        <label for="adresse"><b>Adresse</b></label>
        <input type="text" placeholder="Veuillez saisir votre adresse" name="adresse">

        <label for="adresse"><b>Code postal</b></label>
        <input type="text" placeholder="Veuillez saisir votre code postal" name="adresse">

    </style>
</head>
<body>
<div id="couleur_livraison"></div>
<div id="bloc1">
<form class="form_livraison" >
    <h1>Formulaire de Livraison</h1>

        <input type="submit" id='submit' value='Confirmer mes informations'>


        </form>
    </div>

</main>