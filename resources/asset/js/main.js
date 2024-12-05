if (document.getElementById("link_sebelum")) {
    document.querySelector(".tobbbbbb").onclick = function () {
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

if (document.getElementById("media_media")) {
    document.getElementById("in_gam").onchange = function (esa) {
        const reader = new FileReader();
        reader.onload = function () {
            let prev = document.querySelector(".gggg");
            prev.setAttribute("src", reader.result);
        };
        reader.readAsDataURL(esa.target.files[0]);
    };
}
if (document.querySelector(".gambarrrrrrr")) {
    document.querySelectorAll(".gambarrrrrrr").forEach(function (gbgb) {
        gbgb.onclick = (e) => {
            let saudaranya = e.target.parentElement.parentElement;
            let yangditampilin = saudaranya.nextElementSibling;
            yangditampilin.classList.add("show");

            // yangditampilin.children[0].onclick = (et) => {
            //     et.target.parentElement.classList.remove("show");

            //     document.querySelector(".modal_biasa").classList.remove("show");
            // };
        };
    });
    document.querySelectorAll(".penutup_an").forEach(function (pnt) {
        pnt.onclick = function () {
            let asdfaaa = this.parentElement;
            asdfaaa.classList.remove("show");
            console.log(asdfaaa);
        };
    });
}
