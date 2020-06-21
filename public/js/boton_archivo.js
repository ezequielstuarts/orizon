function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object
    console.log(files);
    document.getElementById("nombre_img").innerHTML = files[0].name;
}

function handleBaseDeDatos(evt) {
    let name = document.getElementsByClassName("custom-file-label").value;
    document.getElementById("nombre_img").innerHTML = name;
}
document.getElementById("validatedCustom").addEventListener("change", handleFileSelect, false);

// document.getElementById("baseDeDatos").addEventListener("keyup", handleBaseDeDatos, false);