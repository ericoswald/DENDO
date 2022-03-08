<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <style>

        body{
            background: grey;
        }
        #container{
            width:400px;
            margin:0 auto;
            margin-top:10%;
        }
        form {
            width:100%;
            padding: 30px;
            border: 1px solid #f1f1f1;
            background: #fff;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        #container h1{
            width: 100%;
            margin: 0 auto;
            padding-bottom: 30px;
            color: white;
            text-align: center;
            text-decoration: underline;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }


        input[type=submit] {
            background-color: white;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            width: 100%;
        }

        label{
            color: white;
        }


    </style>
</head>
<body>
<div id="container">

    <h1>Formulaire de Livraison</h1>

    <label for="nom"><b>Nom</b></label>
    <input type="text" placeholder="Veuillez saisir votre nom" name="nom">

    <label for="prenom"><b>Prénom</b></label>
    <input type="text" placeholder="Veuillez saisir votre prénom" name="prenom" >

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Veuillez saisir votre email" name="email" >

    <label for="adresse"><b>Adresse</b></label>
    <input type="text" placeholder="Veuillez saisir votre adresse" name="adresse" >

    <label for="adresse"><b>Code postal</b></label>
    <input type="text" placeholder="Veuillez saisir votre code postal" name="adresse" >

    <label for="telephone"><b>Téléphone</b></label><br>
    <input type="text" placeholder="Veuillez saisir votre numéro de téléphone" name="telephone" ><br><br>

    <input type="submit" id='submit' value='Confirmer mes informations' >

    </form>
</div>