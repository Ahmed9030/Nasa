/**
 * ====================
 * make limt of excerpt posts
 * ====================
 */

let posts = document.getElementById("posts");
let posts_category = document.querySelectorAll('[name="posts"]');
let map_content = document.getElementById("map-content");
let category_tap = document.querySelectorAll('[name="link-category"]');

document.onclick = (event) => {
    if (event.target.id === "link-map") {
        // stop the links working
        event.preventDefault();

        // remove the active calss
        category_tap.forEach((e) => {
            e.classList.remove("activ-category");
        });
        // add the activ calss to this elemtn
        event.target.classList.add("activ-category");
        // hid the  div content
        posts.style.display = "none";
        posts_category.forEach((div) => {
            div.style.display = "none";
        });
    }
    if (event.target.id === "link-posts") {
        // stop the links working
        event.preventDefault();

        // remove the active calss
        category_tap.forEach((e) => {
            e.classList.remove("activ-category");
        });
        // add the activ calss to this elemtn
        event.target.classList.add("activ-category");
        // hid the  div content
        posts.style.display = "block";
        posts_category.forEach((div) => {
            div.style.display = "block  ";
        });
    }
};

/**
 * ====================
 * show and hide Dropdown menu
 * ====================
 */

// for web\\
// seletct the menu
let DropdownBtn = document.getElementById("dropdownNavbarLink");
let menu = document.getElementById("dropdownNavbar");

DropdownBtn.addEventListener("click", (e) => {
    if (menu.classList.contains("hidden")) {
        // Has class
        menu.classList.remove("hidden");
    } else {
        // don't have it
        menu.classList.add("hidden");
    }
});

// for mobil\\
// seletct the menu

let mobilBtn = document.querySelectorAll("[data-collapse-toggle]");
let DropMenu = document.getElementById("navbar-dropdown");

mobilBtn[0].addEventListener("click", () => {
    if (DropMenu.classList.contains("hidden")) {
        // Has class
        DropMenu.classList.remove("hidden");
    } else {
        // don't have it
        DropMenu.classList.add("hidden");
    }
});

