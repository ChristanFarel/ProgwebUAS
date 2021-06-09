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

function validateCheckBox(name) {
    var checked = document.getElementsByName(name + "[]");
    for (var i = 0; i < checked.length; i++) {
        if (checked[i].checked) {
            return true;
        }
    }

    alert(name + " tidak boleh kosong!");
    return false;
}

function validateForm() {
    return validateCheckBox("ukuran") && validateCheckBox("tags");
}

function tambahTag() {
    var tag = document.getElementById("addTag");

}