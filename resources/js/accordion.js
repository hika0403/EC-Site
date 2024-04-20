const parentMenu = document.querySelectorAll(".side-category-list > li > a");
for (let i = 0; i < parentMenu.length; i++) {
    parentMenu[i].addEventListener("click", function () {
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("active");
    });
}
