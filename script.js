window.onload = function () {
    var body = document.querySelector("body");
    var userBtn = document.querySelector("#user");
    var modal = document.querySelector(".modal");
    var sections = document.querySelectorAll(
        ".part1, .part2, header img, header nav, header ul"
    );

    userBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        e.preventDefault();
        body.style.overflowY = "hidden";

        sections.forEach((section) => {
            section.style.filter = "brightness(0.5)";
        });
        modal.id = "modal";
        modal.style.filter = "brightness(1)";
    });

    body.addEventListener("click", (e) => {
        if (modal.contains(e.target)) {
            return;
        }
        body.style.overflowY = "";
        modal.id = "";
        sections.forEach((section) => {
            section.style.filter = "brightness(1)";
        });
    });

    var signoutBtn = document.querySelector("header form");
    if (sessionStorage.getItem("loggedIn") === "true") {
        var userIcon = document.querySelector("#user");
        var bagIcon = document.querySelector("#bag");
        userIcon.style.display = "none";
        bagIcon.style.display = "block";
    } else {
        signoutBtn.style.display = "none";
    }

    var productBtns = document.querySelectorAll(".productBtn");
    if (sessionStorage.getItem("loggedIn") === null) {
        productBtns.forEach((btn) => {
            btn.innerHTML = "Add to Cart";
        });
    } else {
        productBtns.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                var count = 0;
                e.target.innerHTML = "Adding <span class='spinner'></span>";
                var t = setInterval(() => {
                    count++;
                    if (count > 3) {
                        clearInterval(t);
                        e.target.innerHTML = "Added ";
                        window.location.reload();
                    }
                }, 500);

                data = {
                    goodId: e.target.parentNode.id,
                    userId: userId,
                };

                fetch("insert.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                    body: new URLSearchParams(data),
                })
                    .then((response) => response.text())
                    .then((result) => {
                        console.log(result);
                    })
                    .catch((error) => console.error("Error:", error));
            });
        });
    }

    var cartBtns = document.querySelectorAll(".cart button");

    cartBtns.forEach((cartBtn) => {
        cartBtn.addEventListener("click", (e) => {
            goodId = e.target.parentNode.id;
            if (e.target.innerHTML === "+") {
                fetch("cartPHPIncrease.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                    body: "data=" + encodeURIComponent(goodId),
                })
                    .then((response) => response.text())
                    .then(() => {
                        window.location.reload();
                    })
                    .catch((error) => console.error("Error:", error));
            } else {
                fetch("cartPHPDecrease.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                    body: "data=" + encodeURIComponent(goodId),
                })
                    .then((response) => response.text())
                    .then(() => {
                        window.location.reload();
                    })
                    .catch((error) => console.error("Error:", error));
            }
        });
    });

    var deleteBtns = document.querySelectorAll(".delete");
    deleteBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            console.log(e.target.parentNode.previousElementSibling.id);
            var goodID = e.target.parentNode.previousElementSibling.id;

            data = {
                goodId: goodID,
                userId: userId,
            };

            fetch("deleteProduct.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: new URLSearchParams(data),
            })
                .then((response) => response.text())
                .then((result) => {
                    window.location.reload();
                })
                .catch((error) => console.error("Error:", error));
        });
    });
};
