function seleccionarArchivo() {
  let input1 = document.querySelector(".input-file");
  if (input1) {
    input1.click();
  }
}

let input = document.querySelector(".input-file");
input.addEventListener("change", function () {
  let imgAlta = document.querySelector("#foto");
  const archivos = input.files;
  if (!archivos || !archivos.length) {
    imgAlta.src = "";
    return;
  }
  console = archivos[0];
  const primerArchivo = archivos[0];
  const objectURL = URL.createObjectURL(primerArchivo);

  imgAlta.src = objectURL;
  imgAlta.style = "width:200px;height:200px;border-radius: 100%";
});
