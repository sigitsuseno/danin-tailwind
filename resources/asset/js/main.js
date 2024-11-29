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

// media library

if (document.getElementById("media_media")) {
    let WIDTH = 300;
    const input = document.getElementById("media_media").querySelector("input");
    document.getElementById("btnnnnn").onclick = function () {
        input.toggleAttribute("hidden");
    };

    input.onchange = function (event) {
        document.querySelector(".tampilin_img").classList.toggle("show");
        let image_file = event.target.files[0];
        let reader = new FileReader();
        reader.readAsDataURL(image_file);

        reader.onload = (event) => {
            let img_url = event.target.result;
            let image = document.createElement("img");
            image.src = img_url;
            // document.querySelector(".tampilin_img").appendChild(image);

            image.onload = (e) => {
                let canvas = document.createElement("canvas");

                let ratio = WIDTH / e.target.width;
                canvas.width = WIDTH;
                canvas.height = e.target.height * ratio;

                const cont = canvas.getContext("2d");
                cont.drawImage(image, 0, 0, canvas.width, canvas.height);

                let new_img_url = cont.canvas.toDataURL("image/jpeg", 80);
                let new_image = document.createElement("img");
                new_image.src = new_img_url;
                document.querySelector(".tampilin_img").appendChild(new_image);

                let the_image_file = urToFile(new_img_url);
                input.value = the_image_file;
            };
        };
    };
    let urToFile = (url) => {
        let arr = url.split(",");
        let mime = arr[0].match(/:(.*?);/)[1];
        let data = arr[1];
        let dataStr = atob(data);
        let n = dataStr.length;
        let dataArr = new Uint8Array(n);
        while (n--) {
            dataArr[n] = dataStr.charCodeAt(n);
        }

        let file = new File([dataArr], "convert.jpg", { type: mime });
        return file;
    };
}
