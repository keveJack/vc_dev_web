// // function cacherImage(image) {
// //     if (image.style.visibility === "visible") {
// //         image.style.visibility = "hidden";
// //     } else {
// //         image.style.visibility = "visible";
// //     }
// // }
// // function cacherImageV2(image) {
// //     if (image.style.display === "none") {
// //         image.style.display = "block";
// //     } else {
// //         image.style.display = "none";
//     }
// }
function afficherTout() {
    let images = document.querySelectorAll('.image');
    images.forEach(function (image) {
        image.style.display = "block";
    });
}

function cacherTout() {
    let images = document.querySelectorAll('.image');
    images.forEach(function (image) {
        image.style.display = "none";
    });
}
function activerTout() {
    let images = document.querySelectorAll('.image');
    images.forEach(function (image) {
        image.addEventListener("dblclick", doubleClicImage);
    });
}

function desactiverTout() {
    let images = document.querySelectorAll('.image');
    images.forEach(function (image) {
        image.removeEventListener("dblclick", doubleClicImage);
    });
}

function doubleClicImage() {

    if (this.style.visibility === "hidden") {
        this.style.visibility = "visible";
    } else {
        this.style.visibility = "hidden";
    }
}
