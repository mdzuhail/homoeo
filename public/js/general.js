var KTSigninGeneral = (function () {
    var t, e, r;
    return {
        init: function () {
            (t = document.querySelector("#kt_sign_in_form")),
            (e = document.querySelector("#kt_sign_in_submit")),
            (r = FormValidation.formValidation(t, {
                fields: {
                    email: {
                        validators: {
                            regexp: {
                                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                message: "The value is not a valid email address",
                            },
                            notEmpty: {
                                message: "Email address is required",
                            },
                        },
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "The password is required",
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: "",
                    }),
                },
            })),
            !(function (t) {
                try {
                    return new URL(t), !0;
                } catch (t) {
                    return !1;
                }
            })(e.closest("form").getAttribute("action"))
            ? e.addEventListener("click", function (i) {
                i.preventDefault(),
                r.validate().then(function (r) {
                    if ("Valid" == r) {
                        e.setAttribute("data-kt-indicator", "on"),
                        (e.disabled = !0),
                        setTimeout(function () {
                            e.removeAttribute("data-kt-indicator"),
                            (e.disabled = !1),
                            Swal.fire({
                                text: "You have successfully logged in!",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                },
                            }).then(function (e) {
                                if (e.isConfirmed) {
                                    (t.querySelector('[name="email"]').value = ""),
                                    (t.querySelector('[name="password"]').value = "");
                                    // Redirection after successful login
                                    var redirectUrl = "/admin/medicine-management"; // Use relative path
                                    location.href = redirectUrl;
                                }
                            });
                        }, 2000);
                    } else {
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            },
                        });
                    }
                });
            })
            : e.addEventListener("click", function (i) {
                i.preventDefault(),
                r.validate().then(function (r) {
                    if ("Valid" == r) {
                        e.setAttribute("data-kt-indicator", "on"),
                        (e.disabled = !0),
                        axios.post(e.closest("form").getAttribute("action"), new FormData(t))
                            .then(function (e) {
                                if (e) {
                                    t.reset(),
                                    Swal.fire({
                                        text: "You have successfully logged in!",
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                        },
                                    }).then(function (e) {
                                        if (e.isConfirmed) {
                                            // Redirection after successful login
                                            var redirectUrl = "{{url('admin/medicine-management')}}";
                                            location.href = redirectUrl; // Redirect to the page after successful login
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        text: "Sorry, the email or password is incorrect, please try again.",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                        },
                                    });
                                }
                            })
                            .catch(function (t) {
                                Swal.fire({
                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                });
                            })
                            .then(() => {
                                e.removeAttribute("data-kt-indicator"),
                                (e.disabled = !1);
                            });
                    } else {
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            },
                        });
                    }
                });
            });
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});
