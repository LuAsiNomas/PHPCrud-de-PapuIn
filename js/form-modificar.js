function modal(e) {
  e.preventDefault();
  let modalModificar = document.querySelector("#modalModificar");
  let selectedModificar = document.querySelector(".selectModificar");
  let valueSelected = selectedModificar.selectedOptions[0].textContent;
  if (valueSelected == "Seleccione una opcion") {
    let html = `<div class="container-modal">
  <h2>Debe seleccinar una opcion</h2>
  <p class="btn-modal" onclick="cerrarModalModificar()">Aceptar</p></div>
  </div>`;
    modalModificar.innerHTML = html;
  } else {
    let html = `<div class="container-modal">
    <h2>¿Esta seguro que modificar este registro?</h2>
    <p class="btn-modal" onclick="EnviarDeleteModificar()">Aceptar</p></div>
    </div>`;
    modalModificar.innerHTML = html;
  }
}


 function cambioSelect(e) {
  console.log(e.target.selectedOptions[0].value);
  let user = e.target.selectedOptions[0].value;
  fetch("server/peticiones/user.php", {
    method: "POST",
    body: JSON.stringify({
      solicitud: user,
    }),
    headers: {
      "Content-Type": "application/json",
    },
  })
    .then((res) => res.json())
    .then(function (json) {
      console.dir(json[0].foto)
      let foto = document.querySelector("#iimgPerfilModificar");
      let nombreequipo = document.querySelector("#nombre");
      let idlider = document.querySelector("#idlider");
      let idjug2 = document.querySelector("#id2");
      let idjug3 = document.querySelector("#id3");
      let provincia = document.querySelector("#provincia");
      console.dir(json);
      foto.src = "data:image/jpeg;base64," + json[0].foto;
      foto.style = "width:200px;height:200px;border-radius: 100%";
      nombreequipo.value = json[0].nombre_equipo;
      idlider.value = json[0].idjug_lider;
      idjug2.value = json[0].idjug2;
      idjug3.value = json[0].idjug3;
      provincia.value = json[0].provincia;
    });
}

function cerrarModalModificar() {
  let modal = document.querySelector("#modalModificar");
  modal.innerHTML = "";
  modal.className = "";
}

function EnviarDeleteModificar() {
  formBajaModificar.submit();
}

function seleccionarArchivoModificar() {
  let input2 = document.querySelector(".inputFileModificar");
  if (input2) {
    input2.click();
  }
}

let inputModificar = document.querySelector(".inputFileModificar");
inputModificar.addEventListener("change", function () {
  let imgModificacion = document.querySelector("#imgPerfilModificar");
  const archivos = inputModificar.files;
  if (!archivos || !archivos.length) {
    imgModificacion.src = "";
    return;
  }
  const primerArchivo = archivos[0];
  const objectURL = URL.createObjectURL(primerArchivo);

  imgModificacion.src = objectURL;
  imgModificacion.style = "width:200px;height:200px;border-radius: 100%";
});