<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="Contact.css">
    <title>Document</title>
</head>

    <body>
        <div class="wrap">
            <header>
                <p class="titre">Counter Strike : Global Offensive</p>
                <nav class="nav_principal">
                    <ul>
                        <li>
                            <a href="accueil.html">Acceuil</a>
                        </li>
                        <li>
                            <!-- Menu principal -->
                            <a href="#">Les Jeux
                                <span class="fleche">﹀</span>
                            </a>
                            <ul class="deroulant">
                                <!-- Déroulant -->
                                <li>
                                    <a href="cs16.html">Counter Strike 1.6</a>
                                </li>
                                <li>
                                    <a href="#">Counter Strike : Source</a>
                                </li>
                                <li>
                                    <a href="#">Counter Strike : Condition Zero</a>
                                </li>
                                <li>
                                    <a href="#">Counter Strike : Nexon</a>
                                </li>
                                <li>
                                    <a href="#">Counter Strike : Global Offensive</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <!-- Menu principal -->
                            <a href="#">Les Armes
                                <span class="fleche">﹀</span>
                            </a>
                            <ul class="deroulant">
                                <li>
                                    <a href="#">M4A1-S</a>
                                </li>
                                <li>
                                    <a href="#">Ak-47</a>
                                </li>
                                <li>
                                    <a href="#">FAMAS</a>
                                </li>
                                <li>
                                    <a href="#">AWP</a>
                                </li>
                                <li>
                                    <a href="#">Deagle</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <!-- Menu principal -->
                            <a href="#">Les Equipes
                                <span class="fleche">﹀</span>
                            </a>
                            <ul class="deroulant">
                                <!-- Déroulant -->
                                <li>
                                    <a href="NaVi.html">NaVi</a>
                                </li>
                                <li>
                                    <a href="#">EnVius</a>
                                </li>
                                <li>
                                    <a href="#">Faze</a>
                                </li>
                                <li>
                                    <a href="#">Optic</a>
                                </li>
                                <li>
                                    <a href="#">fnatic</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <!-- Menu principal -->
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <aside class="fond">
                <div class="aside">
                    <figure>
                        <a href="#">
                            <img src="image/drapeau_russe.png" alt="cyka">
                            <p>Changer la langue</p>
                        </a>
                    </figure>
                </div>
            </aside>
            <main>
                <section>
                    <h2>Une question ?</h2>
                    <article>
                            <form method="post" action="http://localhost/reception.php">
                                <label for="pseudo">Entrez votre pseudo : </label>
                                <input type="text" name="pseudo" id="pseudo"><br><br>

                                <label for="mail">Entrez votre adresse mail :</label>
                                <input type="text" name="mail" id="mail"><br><br>
                                    
                                <label for="question">Votre question : </label>
                                <textarea name="question" id="question"></textarea><br><br>
                                    
                                <input type="submit" value="Envoyer">
                            </form>
                        <h2>Merci !</h2>
                        <p>Nous prenons sérieusement toutes questions ou critiques envers notre site internet donc n'hésitez pas !</p>
                        <p>Nous vous répondrons aussi rapidement que possible</p>
                    </article>
                </section>
            </main>
            <footer>
                <div class="footer">
                    <ul class="foot_a">
                        <li>
                            <a href="accueil.html">
                                <img class="logo" src="image/logo_transparent2.png" alt="logo">
                            </a>
                        </li>
                    </ul>
                    <ul class="plan">
                        <li>
                            <a>Les Jeux</a>
                        </li>
                        <li>
                            <a href="cs16.html">Counter Strike 1.6</a>
                        </li>
                        <li>
                            <a href="#">Counter Strike : Source</a>
                        </li>
                        <li>
                            <a href="#">Counter Strike : Condition Zero</a>
                        </li>
                        <li>
                            <a href="#">Counter Strike : Nexon</a>
                        </li>
                        <li>
                            <a href="#">Counter Strike : Global Offensive</a>
                        </li>
                    </ul>
                    <ul class="plan">
                        <li>
                            <a>Les Armes</a>
                        </li>
                        <li>
                            <a href="m4a1.html">M4A1-S</a>
                        </li>
                        <li>
                            <a href="#">AK-47</a>
                        </li>
                        <li>
                            <a href="#">FAMAS</a>
                        </li>
                        <li>
                            <a href="#">AWP</a>
                        </li>
                        <li>
                            <a href="#">Deagle</a>
                        </li>
                    </ul>
                    <ul class="plan">
                        <li>
                            <a>Les Equipes</a>
                        </li>
                        <li>
                            <a href="NaVi.html">NaVi</a>
                        </li>
                        <li>
                            <a href="#">EnVius</a>
                        </li>
                        <li>
                            <a href="#">FaZe</a>
                        </li>
                        <li>
                            <a href="#">Optic</a>
                        </li>
                        <li>
                            <a href="#">fnatic</a>
                        </li>
                    </ul>

                    <p>Made by an OK-TIER guy</p>
                </div>
            </footer>
        </div>


</body>

</html>