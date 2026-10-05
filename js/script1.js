document.addEventListener("DOMContentLoaded", function () {

    /* =====================================================
       PASSWORD SHOW / HIDE
    ===================================================== */

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


    /* =====================================================
       LANGUAGE MENU
    ===================================================== */

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
                    languageMenu.style.display === "block"
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

                    const selected =
                        language.textContent.trim();

                    languageButton.innerHTML =
                        '<span class="language-code">' +
                        (selected === "English" ? "EN" : "FR") +
                        '</span> ' +
                        selected +
                        ' <span class="arrow">⌄</span>';

                    languageMenu.style.display =
                        "none";
                }
            );

        });

    }


    /* =====================================================
       REGISTRATION FORM
    ===================================================== */

    const form =
        document.getElementById("registerForm");

    const button =
        document.getElementById("registerButton");

    const buttonText =
        document.getElementById("buttonText");

    const loader =
        document.getElementById("loader");


    if (form) {

        form.addEventListener(
            "submit",
            function (event) {

                const passwordValue =
                    password.value;

                if (passwordValue.length < 8) {

                    event.preventDefault();

                    alert(
                        "Le mot de passe doit contenir au moins 8 caractères."
                    );

                    return;
                }


                button.disabled = true;

                buttonText.style.display =
                    "none";

                loader.style.display =
                    "inline-block";

            }
        );

    }

});
