
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../public/CSS/style.css" media="screen" type="text/css" />
    <style>
        h1{
            padding-top: 10%;
            text-decoration: underline;
        }

        .vertical {
            border-left: 4px solid black;
            height: 400px;
            display: inline-block;
            position: relative;
            left : 900px;
            justify-content: right;
        }

        body{
            background-color: lightgray;
        }

        .bouton{
            background-color: #F9FFA9;
            border-radius: 0% 0% 10% 10%;
        }
        .titre{
            font-family: Helvetica, sans-serif;
        }



    </style>
</head>
<body>

<h1 class="titre">Vos commandes  : </h1>
<hr width="100%">
<form method="POST">
    <input type="text"  name="article_titre" placeholder="titre" /><BR>
    <textarea name="article_contenu" placeholder="Contenu de l'aricle"></textarea><BR>
    <input type="submit" value="Envoyez l'article" />
</form>
<div class ="vertical">
    <h2>Livraison</h2><BR>
    <Span>Mes coordonées de livraison : </Span><BR><BR>
    <span>Je souheterai renseinger mes coordonées</span><BR><BR><BR>
    <a href ="../../public/index.php">Enregistrement de mes données</a>
</div>


</body>
</html>
<script>
    (function() {
        var ws = new WebSocket('ws://' + window.location.host + '/jb-server-page?reloadServiceClientId=119');
        ws.onmessage = function (msg) {
            if (msg.data === 'reload') {
                window.location.reload();
            }
            if (msg.data.startsWith('update-css ')) {
                var messageId = msg.data.substring(11);
                var links = document.getElementsByTagName('link');
                for (var i = 0; i < links.length; i++) {
                    var link = links[i];
                    if (link.rel !== 'stylesheet') continue;
                    var clonedLink = link.cloneNode(true);
                    var newHref = link.href.replace(/(&|\?)jbUpdateLinksId=\d+/, "$1jbUpdateLinksId=" + messageId);
                    if (newHref !== link.href) {
                        clonedLink.href = newHref;
                    }
                    else {
                        var indexOfQuest = newHref.indexOf('?');
                        if (indexOfQuest >= 0) {
                            // to support ?foo#hash
                            clonedLink.href = newHref.substring(0, indexOfQuest + 1) + 'jbUpdateLinksId=' + messageId + '&' +
                                newHref.substring(indexOfQuest + 1);
                        }
                        else {
                            clonedLink.href += '?' + 'jbUpdateLinksId=' + messageId;
                        }
                    }
                    link.replaceWith(clonedLink);
                }
            }
        };
    })();
</script>
