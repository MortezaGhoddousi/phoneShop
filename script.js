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
};
