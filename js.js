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
    var tag = document.getElementById("addTag").value;
    if (tag.length < 1 || tag.split(", ").length > 1) {
        return false;
    }

    var formTag = document.getElementById("formTag");

    var div = document.createElement('div');
    div.className = "custom-control custom-checkbox custom-control-inline";

    var input = document.createElement("input");
    input.className = "custom-control-input";
    input.type = "checkbox";
    input.id = tag;
    input.name = "tags[]";
    input.value = tag;
    input.checked = true;

    var label = document.createElement("label");
    label.className = "custom-control-label";
    label.htmlFor = tag;
    label.innerText = tag;

    div.appendChild(input);
    div.appendChild(label);

    formTag.appendChild(div);
    return true;
}