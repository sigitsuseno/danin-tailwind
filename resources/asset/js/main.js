if (document.getElementById("link_sebelum")) {
    document.getElementById("link_sebelum").onclick = function () {
        document.querySelector(".dasaran").classList.toggle("show");
    };
}

if (document.querySelector(".dasaran")) {
    function tampilinDepan() {
        document.querySelector(".dasaran").classList.remove("show");
    }
    const myTimeout = setTimeout(tampilinDepan, 10000);
}

if (document.getElementById("header_depan")) {
    const headernya = document.getElementById("header_depan");
    document.getElementById("tomb_menu").onclick = () => {
        headernya.querySelector("ul").classList.toggle("turun");
    };
}

if (document.querySelector(".sidebar")) {
    document.querySelector(".menu_slide").onclick = function () {
        document.querySelector(".menu_wrapper").classList.toggle("mlebu");
        document.querySelector(".dashboard_header").classList.toggle("show");
        console.log("yey");
    };
    document.querySelector(".tombol_nav_sidebar").onclick = function () {
        document
            .querySelector(".dashboard_container")
            .classList.toggle("with_text");
        document
            .querySelector(".dashboard_container i")
            .classList.toggle("puter");
        const wuwu = document.querySelector(".sidebar .menu_wrapper ul");
        const span = wuwu.querySelectorAll("span");
        span.forEach((sp) => {
            sp.classList.toggle("tx_hilang");
        });
    };
    const sideMenu = document.querySelector(".menu_wrapper ul");
    sideMenu.addEventListener("click", function (e) {
        const a = e.target;
        const ul = a.parentElement.parentElement;
        const li = a.parentElement;
        const uli = a.nextElementSibling;

        const subMenus = ul.querySelectorAll(".sub_menu");
        const subAr = [];

        subMenus.forEach((sub) => {
            if (sub != uli) {
                subAr.push(sub);
            }
        });

        subAr.forEach((ess) => {
            if (ess != ul) {
                ess.classList.remove("ada_sub");
            }
        });
        if (a.nodeName === "A") {
            if (uli != null) {
                uli.classList.toggle("ada_sub");
            }
        }
        console.log(a);
    });
}
