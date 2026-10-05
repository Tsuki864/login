<?php
session_start();

$message = "";
$messageType = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $terms = isset($_POST["terms"]);

    if (empty($email) || empty($password)) {

        $message = "Veuillez remplir tous les champs.";
        $messageType = "error";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $message = "Veuillez entrer une adresse e-mail valide.";
        $messageType = "error";

    } elseif (strlen($password) < 8) {

        $message = "Le mot de passe doit contenir au moins 8 caractères.";
        $messageType = "error";

    } elseif (!$terms) {

        $message = "Vous devez accepter les conditions d'utilisation.";
        $messageType = "error";

    } else {

        /*
         * Ici, tu pourras enregistrer l'utilisateur
         * dans ta base de données MySQL.
         *
         * Exemple :
         *
         * $passwordHash = password_hash(
         *     $password,
         *     PASSWORD_DEFAULT
         * );
         */

        $message = "Compte créé avec succès !";
        $messageType = "success";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Créer un compte - LexInvoice</title>

    <link rel="stylesheet" href="./css/style1.css">

</head>

<body>

<div class="page">

    <!-- =====================================================
         LEFT SIDE
    ====================================================== -->

    <section class="promo-section">

        <div class="background-glow"></div>


        <!-- LOGO -->

        <div class="logo">

            <span class="logo-icon"></span>

            <span>LexInvoice</span>

        </div>


        <!-- PROMOTIONAL CONTENT -->

        <div class="promo-content">


            <!-- BADGES -->

            <div class="badges">

                <span class="badge">
                    ⚡ Rapide
                </span>

                <span class="badge">
                    🔒 Sécurisé
                </span>

                <span class="badge">
                    🌐 Multi-devises
                </span>

                <span class="badge">
                    💳 Paiements intégrés
                </span>

            </div>


            <!-- CATEGORY -->

            <div class="category">
                FREELANCE • SAAS • PRO
            </div>


            <!-- TITLE -->

            <h1>
                Facturation rapide & paiements
            </h1>


            <p class="description">
                Créez des factures élégantes,
                envoyez-les et suivez les règlements.
            </p>


            <!-- FEATURES -->

            <ul class="features">

                <li>
                    Templates pro
                </li>

                <li>
                    Rappels automatiques
                </li>

                <li>
                    Exports compta
                </li>

            </ul>


            <!-- SLIDER DOTS -->

            <div class="slider">

                <span></span>

                <span class="active"></span>

                <span></span>

            </div>

        </div>


        <!-- STATISTICS -->

        <div class="statistics">

            <div class="stat">

                <strong>500+</strong>

                <small>
                    Entreprises
                </small>

            </div>


            <div class="stat">

                <strong>50K+</strong>

                <small>
                    Factures créées
                </small>

            </div>


            <div class="stat">

                <strong>99%</strong>

                <small>
                    Satisfaction
                </small>

            </div>

        </div>

    </section>


    <!-- =====================================================
         RIGHT SIDE
    ====================================================== -->

    <section class="login-section">


        <!-- LANGUAGE -->

        <div class="language">

            <button
                type="button"
                id="languageButton"
            >

                <span class="language-code">
                    FR
                </span>

                Français

                <span class="arrow">
                   ⌄
                </span>

            </button>


            <div
                id="languageMenu"
                class="language-menu"
            >

                <div>
                    Français
                </div>

                <div>
                    English
                </div>

            </div>

        </div>


        <!-- REGISTRATION CONTAINER -->

        <div class="login-container register-container">


            <h2>
                Créer un compte
            </h2>


            <p class="subtitle register-subtitle">
                Inscrivez-vous avec votre e-mail
                ou utilisez Google pour accélérer
                l'inscription.
            </p>


            <!-- GOOGLE BUTTON -->

            <button
                type="button"
                class="google-button"
            >

                <span class="google-logo">
                    G
                </span>

                Continuer avec Google

            </button>


            <!-- SEPARATOR -->

            <div class="separator">

                <span></span>

                <small>
                    ou avec e-mail
                </small>

                <span></span>

            </div>


            <?php if (!empty($message)): ?>

                <div
                    class="message <?=
                    $messageType
                    ?>"
                >

                    <?= htmlspecialchars($message) ?>

                </div>

            <?php endif; ?>


            <!-- FORM -->

            <form
                method="POST"
                action="register.php"
                id="registerForm"
            >


                <!-- EMAIL -->

                <div class="form-group">

                    <label for="email">
                        Adresse e-mail
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="vous@exemple.com"
                        autocomplete="email"
                        required
                    >

                </div>


                <!-- PASSWORD -->

                <div class="form-group">

                    <label for="password">
                        Mot de passe
                    </label>


                    <div class="password-wrapper">

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Au moins 8 caractères"
                            autocomplete="new-password"
                            minlength="8"
                            required
                        >


                        <button
                            type="button"
                            id="togglePassword"
                            class="eye-button"
                            aria-label="Afficher le mot de passe"
                        >
                            👁
                        </button>

                    </div>

                </div>


                <!-- TERMS -->

                <label class="terms-box">

                    <input
                        type="checkbox"
                        name="terms"
                        id="terms"
                        required
                    >


                    <span class="custom-checkbox"></span>


                    <span class="terms-text">

                        J'accepte les
                        <a href="#">
                            conditions d'utilisation
                        </a>

                        <small>
                            Lisez et acceptez pour continuer.
                        </small>

                    </span>

                </label>


                <!-- SUBMIT -->

                <button
                    type="submit"
                    class="login-button"
                    id="registerButton"
                >

                    <span id="buttonText">
                        S'inscrire avec e-mail
                    </span>

                    <span
                        id=""
                        class=""
                    ></span>

                </button>

            </form>


            <!-- LOGIN LINK -->

            <p class="register-text">

                Déjà inscrit ?

                <a href="login.php">
                    Connectez-vous
                </a>

            </p>

        </div>


        <!-- FOOTER -->

        <div class="login-footer">

            Sécurisé • Conforme • Hébergé en UE

        </div>

    </section>

</div>


<script src="./js/script.js"></script>

</body>

</html>
