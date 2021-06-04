var validExt = ["jpg", "jpeg", "png"];

function validateExt() {
    var input = document.getElementById("input-gambar");
    var fileExt = input.value.split(".")[1];
    if (!validExt.includes(fileExt)) {
        alert("Extensi File tidak valid!");
        document.getElementById("submit").disabled = true;
    } else {
        document.getElementById("submit").disabled = false;
    }
}