function changeCapchaImage() {
    let items = Array("4j6fhd", "an36pt", "bcbeqe", "g77pp6", "gm7mzd", "mpgyqr",
        "nupzmt", "r496qu", "yrcju8", "yutu2g");
    let item = items[Math.floor(Math.random() * items.length)];
    document.getElementById("mycaptcha").src = "../images/Capcha/".concat(item, ".jpg");
}
