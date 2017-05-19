<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>ShareMyBeer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- MEU NAV BAR -->
<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a href="login.html" class="nav-item">
                <img src="images/Beer-icon.png" alt="logo">
            </a>
        </div>
        <span class="nav-toggle">
	      <span></span>
	      <span></span>
	      <span></span>
	    </span>
        <div class="nav-right nav-menu">
            <a href="login.html" class="nav-item is-tab is-hidden-mobile">Login</a>
            <a class="nav-item is-tab is-hidden-mobile is-active">Register</a>
        </div>
    </div>
</nav>
<!-- SECTION / ARTICLE -->
<section class="hero is-fullheight is-dark is-bold">
    <!-- SECTION / ARTICLE -->
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title">
                        Ajouter un compte
                    </h1>
                    <div class="box">
                        <label class="label">Nom</label>
                        <p class="control">
                            <input class="input" type="text" placeholder="John Smith">
                        </p>
                        <label class="label">Prenom</label>
                        <p class="control">
                            <input class="input" type="text" placeholder="jsmith">
                        </p>
                        <label class="label">Email</label>
                        <p class="control">
                            <input class="input" type="text" placeholder="jsmith@example.org">
                        </p>
                        <hr>
                        <label class="label">Password</label>
                        <p class="control">
                            <input class="input" type="password" placeholder="●●●●●●●">
                        </p>
                        <label class="label">Confirm Password</label>
                        <p class="control">
                            <input class="input" type="password" placeholder="●●●●●●●">
                        </p>
                        <hr>
                        <p class="control">
                            <button class="button is-danger">S'inscrire</button>
                            <button class="button is-default">Annuler</button>
                        </p>
                    </div>
                    <p class="has-text-centered">
                        <a href="login.html">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <strong>ShareMyBeer.com</strong> est un réseau social développé par NOUS.
                    <strong>Enjoy !</strong>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>