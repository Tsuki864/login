<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    // Demo login
    // Replace this with your MySQL authentication later.
    if ($email === "admin@lexinvoice.com" && $password === "123456") {

        $_SESSION["user"] = $email;

        header("Location: dashboard.php");
        exit;

    } else {

        $error = "Email ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Connexion - LexInvoice</title>

    <link rel="stylesheet"
          href="css/style.css">

</head>

<body>

<div class="page">

    <!-- LEFT SIDE -->
    <section class="promo-section">

        <div class="background-glow"></div>

        <!-- Logo -->
        <div class="logo">

            <span class="logo-icon"></span>

            <span>LexInvoice</span>

        </div>


        <!-- Main promotional content -->
        <div class="promo-content">

            <div class="badges">

                <span class="badge">
                     Rapide
                </span>

                <span class="badge">
                     Sécurisé
                </span>

                <span class="badge">
                     Multi-devises
                </span>

                <span class="badge">
                     Paiements intégrés
                </span>

            </div>


            <div class="category">
                FREELANCE • SAAS • PRO
            </div>


            <h1>
                Facturation rapide & paiements
            </h1>


            <p class="description">
                Créez des factures élégantes,
                envoyez-les et suivez les règlements.
            </p>


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


            <div class="slider">

                <span class="active"></span>
                <span></span>
                <span></span>

            </div>

        </div>


        <!-- Statistics -->
        <div class="statistics">

            <div class="stat">

                <strong>500+</strong>

                <small>Entreprises</small>

            </div>


            <div class="stat">

                <strong>50K+</strong>

                <small>Factures créées</small>

            </div>


            <div class="stat">

                <strong>99%</strong>

                <small>Satisfaction</small>

            </div>

        </div>

    </section>


    <!-- RIGHT SIDE -->
    <section class="login-section">

        <!-- Language -->
        <div class="language">

            <button id="languageButton">

                <span>FR</span>

                Français

                <span class="arrow">⌄</span>

            </button>

            <div id="languageMenu" class="language-menu">

                <div>Français</div>
                <div>English</div>

            </div>

        </div>


        <!-- Login box -->
        <div class="login-container">

            <h2>
                Connexion
            </h2>

            <p class="subtitle">
                Accédez à LexInvoice.
            </p>


            <!-- Google -->
            <button class="google-button">

                <span class="google-logo">
                    
                </span>

                Continuer avec Google

            </button>


            <!-- Separator -->
            <div class="separator">

                <span></span>

                <small>
                    ou avec e-mail
                </small>

                <span></span>

            </div>


            <?php if ($error): ?>

                <div class="error-message">
                    <?= htmlspecialchars($error) ?>
                </div>

            <?php endif; ?>


            <form method="POST"
                  action="login.php"
                  id="loginForm">


                <!-- Email -->
                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="vous@exemple.com"
                        required
                    >

                </div>


                <!-- Password -->
                <div class="form-group">

                    <div class="password-label">

                        <label for="password">
                            Mot de passe
                        </label>

                        <a href="forgot-password.php">
                            Mot de passe oublié ?
                        </a>

                    </div>


                    <div class="password-wrapper">

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="••••••••"
                            required
                        >

                        <button
                            type="button"
                            id="togglePassword"
                            class="eye-button"
                        >
                            
                        </button>

                    </div>

                </div>


                <!-- Submit -->
                <button
                    type="submit"
                    class="login-button"
                    id="loginButton"
                >

                    <span id="buttonText">
                        Se connecter
                    </span>

                    <span
                        id="loader"
                        class="loader"
                        style="display:none;"
                    ></span>

                </button>

            </form>


            <!-- Register -->
            <p class="register-text">

                Pas de compte ?

                <a href="register.php">
                    S'inscrire
                </a>

            </p>

        </div>


        <!-- Footer -->
        <div class="login-footer">

            Sécurisé • Conforme • Hébergé en UE

        </div>

    </section>

</div>


<script src="js/script.js"></script>

</body>
</html>
