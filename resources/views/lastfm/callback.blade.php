<!DOCTYPE html>
<html lang="en">
<head>
    <title>Authentification réussie !</title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }
    </style>
</head>
<body>
<h3>Parfait!</h3>

<p>CMB Audio Player s'est connecté avec succès à votre compte Last.fm et redémarre maintenant pour les fonctionnalités excitantes.</p>
<p>Cette fenêtre se fermera automatiquement dans 3 secondes.</p>

<script>
    window.opener.onbeforeunload = function () {
    }

    window.opener.location.reload(false)

    window.setTimeout(function () {
        window.close()
    }, 3000)
</script>

</body>
</html>
