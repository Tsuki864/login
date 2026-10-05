document.addEventListener("DOMContentLoaded", function () {


    /* =====================================================
       SIDEBAR
    ====================================================== */

    const reduceButton =
        document.getElementById("reduceSidebar");


    if (reduceButton) {

        reduceButton.addEventListener(
            "click",
            function () {

                document.body.classList.toggle(
                    "sidebar-collapsed"
                );

            }
        );

    }


    /* =====================================================
       REFRESH BUTTON
    ====================================================== */

    const refreshButton =
        document.querySelector(".refresh-btn");


    if (refreshButton) {

        refreshButton.addEventListener(
            "click",
            function () {

                refreshButton.style.transform =
                    "rotate(360deg)";

                setTimeout(function () {

                    refreshButton.style.transform =
                        "rotate(0deg)";

                }, 500);

            }
        );

    }


    /* =====================================================
       PERIOD BUTTONS
    ====================================================== */

    const periodButtons =
        document.querySelectorAll(
            ".period-selector button"
        );


    periodButtons.forEach(function (button) {

        button.addEventListener(
            "click",
            function () {

                periodButtons.forEach(function (item) {

                    item.classList.remove(
                        "selected"
                    );

                });

                button.classList.add(
                    "selected"
                );

            }
        );

    });


    /* =====================================================
       REVENUE CHART
    ====================================================== */

    const revenueCanvas =
        document.getElementById(
            "revenueChart"
        );


    if (revenueCanvas) {

        new Chart(
            revenueCanvas,
            {

                type: "line",

                data: {

                    labels: [
                        "avr",
                        "mai",
                        "juin",
                        "juil",
                        "août",
                        "sept"
                    ],

                    datasets: [

                        {
                            label: "Revenus",

                            data: [
                                0,
                                0,
                                0,
                                0,
                                0,
                                0
                            ],

                            borderColor:
                                "#24a7bd",

                            backgroundColor:
                                "rgba(36,167,189,0.08)",

                            borderWidth: 2,

                            tension: 0.25,

                            fill: true,

                            pointRadius: 0

                        }

                    ]

                },

                options: {

                    responsive: true,

                    maintainAspectRatio: false,

                    plugins: {

                        legend: {
                            display: false
                        }

                    },

                    scales: {

                        y: {

                            min: 0,

                            max: 4,

                            ticks: {

                                stepSize: 1,

                                callback: function (value) {

                                    return value + ",00 $";

                                },

                                font: {
                                    size: 9
                                },

                                color: "#777"

                            },

                            grid: {

                                color:
                                    "#eeeeee",

                                borderDash: [
                                    3,
                                    3
                                ]

                            }

                        },

                        x: {

                            ticks: {

                                font: {
                                    size: 9
                                },

                                color: "#777"

                            },

                            grid: {

                                color:
                                    "#eeeeee",

                                borderDash: [
                                    3,
                                    3
                                ]

                            }

                        }

                    }

                }

            }
        );

    }


    /* =====================================================
       INVOICE STATUS CHART
    ====================================================== */

    const invoiceCanvas =
        document.getElementById(
            "invoiceChart"
        );


    if (invoiceCanvas) {

        new Chart(
            invoiceCanvas,
            {

                type: "bar",

                data: {

                    labels: [
                        "avr",
                        "mai",
                        "juin",
                        "juil",
                        "août",
                        "sept"
                    ],

                    datasets: [

                        {
                            label: "En attente",

                            data: [
                                0,
                                0,
                                0,
                                0,
                                0,
                                0
                            ],

                            backgroundColor:
                                "#24a7bd",

                            barThickness: 12

                        },

                        {
                            label: "En retard",

                            data: [
                                0,
                                0,
                                0,
                                1,
                                0,
                                0
                            ],

                            backgroundColor:
                                "#ee4564",

                            barThickness: 12

                        },

                        {
                            label: "Payées",

                            data: [
                                0,
                                0,
                                0,
                                0,
                                0,
                                0
                            ],

                            backgroundColor:
                                "#6810a7",

                            barThickness: 12

                        }

                    ]

                },

                options: {

                    responsive: true,

                    maintainAspectRatio: false,

                    plugins: {

                        legend: {

                            position: "bottom",

                            labels: {

                                boxWidth: 10,

                                boxHeight: 10,

                                font: {
                                    size: 8
                                }

                            }

                        }

                    },

                    scales: {

                        y: {

                            beginAtZero: true,

                            max: 1,

                            ticks: {

                                stepSize: 0.25,

                                font: {
                                    size: 8
                                }

                            },

                            grid: {

                                color:
                                    "#eeeeee",

                                borderDash: [
                                    3,
                                    3
                                ]

                            }

                        },

                        x: {

                            ticks: {

                                font: {
                                    size: 9
                                }

                            },

                            grid: {

                                color:
                                    "#eeeeee",

                                borderDash: [
                                    3,
                                    3
                                ]

                            }

                        }

                    }

                }

            }
        );

    }


    /* =====================================================
       NEW INVOICE
    ====================================================== */

    const newInvoice =
        document.querySelector(
            ".new-invoice"
        );


    if (newInvoice) {

        newInvoice.addEventListener(
            "click",
            function () {

                alert(
                    "Ouverture du formulaire Nouvelle facture..."
                );

            }
        );

    }


    /* =====================================================
       OFFERS
    ====================================================== */

    const offers =
        document.querySelector(
            ".offers-button"
        );


    if (offers) {

        offers.addEventListener(
            "click",
            function () {

                alert(
                    "Page des forfaits"
                );

            }
        );

    }


    /* =====================================================
       RELANCER
    ====================================================== */

    const remindButton =
        document.querySelector(
            ".urgent-right button"
        );


    if (remindButton) {

        remindButton.addEventListener(
            "click",
            function () {

                alert(
                    "Relance envoyée au client."
                );

            }
        );

    }

});
