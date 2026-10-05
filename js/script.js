document.addEventListener("DOMContentLoaded", function () {

    /* =========================
       PASSWORD VISIBILITY
    ========================= */

    const password =
        document.getElementById("password");

    const togglePassword =
        document.getElementById("togglePassword");


    if (password && togglePassword) {

        togglePassword.addEventListener(
            "click",
            function () {

                if (password.type === "password") {

                    password.type = "text";

                    togglePassword.textContent = "🙈";

                } else {

                    password.type = "password";

                    togglePassword.textContent = "👁";

                }

            }
        );

    }


    /* =========================
       LANGUAGE MENU
    ========================= */

    const languageButton =
        document.getElementById("languageButton");

    const languageMenu =
        document.getElementById("languageMenu");


    if (languageButton && languageMenu) {

        languageButton.addEventListener(
            "click",
            function (event) {

                event.stopPropagation();

                if (
                    languageMenu.style.display ===
                    "block"
                ) {

                    languageMenu.style.display =
                        "none";

                } else {

                    languageMenu.style.display =
                        "block";

                }

            }
        );


        document.addEventListener(
            "click",
            function () {

                languageMenu.style.display =
                    "none";

            }
        );


        const languages =
            languageMenu.querySelectorAll("div");


        languages.forEach(function (language) {

            language.addEventListener(
                "click",
                function (event) {

                    event.stopPropagation();

                    languageButton.innerHTML =
                        language.textContent +
                        ' <span class="arrow">⌄</span>';

                    languageMenu.style.display =
                        "none";

                }
            );

        });

    }


    /* =========================
       LOGIN LOADING
    ========================= */

    const loginForm =
        document.getElementById("loginForm");

    const loginButton =
        document.getElementById("loginButton");

    const buttonText =
        document.getElementById("buttonText");

    const loader =
        document.getElementById("loader");


    if (loginForm) {

        loginForm.addEventListener(
            "submit",
            function () {

                loginButton.disabled = true;

                buttonText.style.display =
                    "none";

                loader.style.display =
                    "inline-block";

            }
        );

    }

});
