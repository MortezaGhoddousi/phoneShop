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
    productBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            var count = 0;
            e.target.innerHTML = "Adding " + ".".repeat(count);
            var t = setInterval(() => {
                e.target.innerHTML = "Adding " + ".".repeat(count);
                count++;
                if (count > 4) {
                    clearInterval(t);
                    e.target.innerHTML = "Added ";
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
};
