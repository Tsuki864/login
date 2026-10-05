<?php
session_start();

/*
|--------------------------------------------------------------------------
| Demo user
|--------------------------------------------------------------------------
| Replace this later with your MySQL session/authentication.
*/

$userName = $_SESSION['user_name'] ?? 'Glitzteck LLC';
$userEmail = $_SESSION['user_email'] ?? 'admin@glitzteck.com';

$currentPage = 'dashboard';
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Tableau de bord - LexInvoice</title>

    <link rel="stylesheet" href="./css/style2.css">
    >

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

<div class="app">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">

        <!-- Logo -->

        <div class="brand">

            <div class="brand-icon">
                L
            </div>

            <div>

                <strong>
                    LexInvoice
                </strong>

                <small>
                    Espace Admin
                </small>

            </div>

        </div>


        <!-- Menu -->

        <nav class="sidebar-nav">


            <!-- APERÇU -->

            <div class="nav-title">
                APERÇU
            </div>


            <a
                href="#"
                class="nav-item active"
            >

                <span class="nav-icon">
                    ▦
                </span>

                Tableau de bord

            </a>


            <!-- GESTION -->

            <div class="nav-title">
                GESTION
            </div>


            <a href="#" class="nav-item">

                <span class="nav-icon">
                    ♙
                </span>

                Clients

            </a>


            <a href="#" class="nav-item">

                <span class="nav-icon">
                    ▤
                </span>

                Factures

            </a>


            <!-- COMPTE -->

            <div class="nav-title">
                COMPTE
            </div>


            <a href="#" class="nav-item notification-item">

                <span class="nav-icon">
                    ♧
                </span>

                Notifications

                <span class="notification-count">
                    1
                </span>

            </a>


            <a href="#" class="nav-item">

                <span class="nav-icon">
                    ⚙
                </span>

                Paramètres

            </a>

        </nav>


        <!-- Reduce sidebar -->

        <button
            class="reduce-sidebar"
            id="reduceSidebar"
        >

            ‹

            <span>
                Réduire
            </span>

        </button>

    </aside>



    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="main">


        <!-- =================================================
             TOP BAR
        ================================================== -->

        <header class="topbar">

            <div class="page-title">
                Tableau de bord
            </div>


            <div class="topbar-right">

                <button class="top-icon">
                    ♧

                    <span class="top-notification">
                        1
                    </span>

                </button>


                <div class="company-profile">

                    <div class="company-avatar">
                        G
                    </div>

                    <span>
                        <?= htmlspecialchars($userName) ?>
                    </span>

                    <span class="profile-arrow">
                        ▾
                    </span>

                </div>

            </div>

        </header>



        <!-- =================================================
             CONTENT
        ================================================== -->

        <div class="content">


            <!-- Page heading -->

            <div class="dashboard-heading">

                <div>

                    <h1>
                        Glitzteck LLC
                    </h1>

                    <p>
                        Signal business sensible : priorité aux relances
                        et aux factures proches d'échéance.
                    </p>

                </div>


                <!-- Period -->

                <div class="dashboard-actions">

                    <button class="refresh-btn">
                        ↻
                    </button>


                    <div class="period-selector">

                        <button>
                            Jour
                        </button>

                        <button>
                            Semaine
                        </button>

                        <button>
                            Mois
                        </button>

                        <button class="selected">
                            Année
                        </button>

                        <button>
                            Période
                        </button>

                    </div>


                    <button class="new-invoice">
                        + &nbsp; Nouvelle facture
                    </button>

                </div>

            </div>



            <!-- =================================================
                 KPI CARDS
            ================================================== -->

            <section class="kpi-grid">


                <!-- Revenue -->

                <div class="kpi-card purple">

                    <div class="kpi-top">

                        <span class="kpi-icon">
                            $
                        </span>

                        <span class="growth">
                            ↗ +0.0%
                        </span>

                    </div>

                    <span class="kpi-label">
                        CHIFFRE D'AFFAIRES
                    </span>

                    <strong class="kpi-value">
                        0,00 $
                    </strong>

                    <small>
                        vs le mois dernier
                    </small>

                </div>


                <!-- MRR -->

                <div class="kpi-card blue">

                    <div class="kpi-top">

                        <span class="kpi-icon">
                            ⚡
                        </span>

                    </div>

                    <span class="kpi-label">
                        MRR
                    </span>

                    <strong class="kpi-value">
                        0,00 $
                    </strong>

                    <small>
                        Revenus récurrents mensuels
                    </small>

                </div>


                <!-- Late invoices -->

                <div class="kpi-card yellow">

                    <div class="kpi-top">

                        <span class="kpi-icon">
                            !
                        </span>

                    </div>

                    <span class="kpi-label">
                        FACTURES EN RETARD
                    </span>

                    <strong class="kpi-value">
                        1
                    </strong>

                    <small>
                        Factures à relancer
                    </small>

                </div>


                <!-- Payment rate -->

                <div class="kpi-card green">

                    <div class="kpi-top">

                        <span class="kpi-icon">
                            ◎
                        </span>

                    </div>

                    <span class="kpi-label">
                        TAUX DE PAIEMENT
                    </span>

                    <strong class="kpi-value">
                        0%
                    </strong>

                    <small>
                        30 derniers jours
                    </small>

                    <div class="progress">
                        <span style="width: 0%;"></span>
                    </div>

                </div>

            </section>



            <!-- =================================================
                 ELECTRONIC INVOICING ALERT
            ================================================== -->

            <section class="invoice-banner">

                <div class="invoice-banner-icon">
                    ⇲
                </div>

                <div class="invoice-banner-content">

                    <div>

                        <strong>
                            Facturation électronique disponible
                        </strong>

                        <span class="price-tag">
                            DÈS 14.99$/MOIS
                        </span>

                    </div>

                    <p>
                        En France, le réseau Peppol est couramment utilisé
                        pour les échanges B2B/B2G : la facturation électronique
                        (format structuré, transmis via Peppol) est recommandée,
                        voire requise selon votre secteur ou vos clients publics.
                    </p>

                </div>


                <button class="offers-button">
                    Voir les forfaits →
                </button>

            </section>



            <!-- =================================================
                 CHARTS
            ================================================== -->

            <section class="charts-grid">


                <!-- Revenue Chart -->

                <div class="chart-card revenue-card">

                    <div class="card-heading">

                        <div>

                            <h3>
                                Revenus et MRR
                            </h3>

                            <p>
                                Tendance Année en cours
                                (depuis le 1er janvier)
                            </p>

                        </div>

                        <button class="dots">
                            ...
                        </button>

                    </div>


                    <div class="chart-container">

                        <canvas id="revenueChart"></canvas>

                    </div>

                </div>



                <!-- Invoice status -->

                <div class="chart-card status-card">

                    <div class="card-heading">

                        <div>

                            <h3>
                                Statut des factures
                            </h3>

                        </div>

                        <button class="dots">
                            ...
                        </button>

                    </div>


                    <div class="chart-container">

                        <canvas id="invoiceChart"></canvas>

                    </div>

                </div>

            </section>



            <!-- =================================================
                 BOTTOM CARDS
            ================================================== -->

            <section class="bottom-grid">


                <!-- Recent activity -->

                <div class="bottom-card">

                    <div class="card-heading">

                        <h3>
                            Activité récente
                        </h3>

                        <button class="dots">
                            ...
                        </button>

                    </div>


                    <div class="activity-list">


                        <div class="activity">

                            <div class="activity-icon purple-icon">
                                !
                            </div>

                            <div>

                                <strong>
                                    Trésorerie à sécuriser :
                                    1 facture(s) en retard à relancer.
                                </strong>

                                <small>
                                    Système
                                </small>

                            </div>

                        </div>


                        <div class="activity">

                            <div class="activity-icon orange-icon">
                                ◷
                            </div>

                            <div>

                                <strong>
                                    ⏰ Expiration de plan dans 2 jours.
                                </strong>

                                <small>
                                    Votre plan (Free) expire dans 2 jours
                                    (around 30/08/2026 22:15:26).
                                </small>

                            </div>

                        </div>


                        <div class="activity">

                            <div class="activity-icon gray-icon">
                                ◷
                            </div>

                            <div>

                                <strong>
                                    Bienvenue ! Compte configuré.
                                </strong>

                                <small>
                                    Il y a 6 jours
                                </small>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Best clients -->

                <div class="bottom-card">

                    <div class="card-heading">

                        <h3>
                            Meilleurs clients
                        </h3>

                        <button class="dots">
                            ...
                        </button>

                    </div>


                    <div class="client-table">

                        <div class="table-header">

                            <span>
                                CLIENT
                            </span>

                            <span>
                                CA GÉNÉRÉ
                            </span>

                        </div>


                        <div class="empty-client">

                            Aucun client actif.

                        </div>

                    </div>

                </div>



                <!-- Urgent -->

                <div class="bottom-card">

                    <div class="card-heading">

                        <h3>
                            Retards urgents
                        </h3>

                        <button class="dots">
                            ...
                        </button>

                    </div>


                    <div class="urgent-invoice">

                        <div>

                            <strong>
                                Retard client · Laetitia Ndoumba
                            </strong>

                            <small>
                                Échéance 29/08 · 5 jours de retard
                            </small>

                        </div>


                        <div class="urgent-right">

                            <strong>
                                143,63 $
                            </strong>

                            <button>
                                Relancer
                            </button>

                        </div>

                    </div>

                </div>

            </section>

        </div>

    </main>

</div>


<script src="js/dashboard.js"></script>

</body>
</html>
