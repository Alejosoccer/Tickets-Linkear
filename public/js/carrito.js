$(document).ready(function () {
    var numero = 0;
    $("#spanNumero").html(numero);

    var jsonData = JSON.parse(localStorage.getItem("carrito"));
    var contadorCarrito = jsonData.length;

    if (jsonData.length !== null) {
        $("#spanNumero").html(contadorCarrito);
    }

    var carrito_compras = document.getElementById("carrito_compras");
    carrito_compras.innerHTML = "";

    var total_pagar = document.getElementById("total_pagar");
    total_pagar.innerHTML = "";

    for (let item of jsonData) {
        carrito_compras.innerHTML += ` 
    
                            <div class="detalle-pedido col-md-12 col-sm-12" >
                                <hr class="division-carrito" />
    
                                <div class="col-md-6 col-sm-6">
                                    <p> Boletos N°${item[0].asiento} desde ${item[0].origen} a ${item[0].destino}</p>
                                </div>
    
                                <div class="col-md-4 col-sm-4">
                                    <p>$${item[0].precio} dólares</p>
                                    <input type="hidden" class="sumatoria" value="${item[0].precio}">
                                    
                                </div>
    
                                <div class="col-md-2 col-sm-2">
                                    <p class="text-center">
                                        <a onclick="borrarStorage()"><span class="fa fa-trash"></span></a>
                                    </p>
                                </div>
                            </div>
                        
                        `;

        var numeros = document.querySelectorAll(".sumatoria");
        var suma = 0;

        numeros.forEach((element) => {
            suma = suma + parseInt(element.value);
        });

        total_pagar.innerHTML = `
    
                        <span id="total-valor">$${suma}</span>
                        
                        `;
    }
});

function borrarStorage() {
    confirm("Deseas borrar este elemento");
}

function verificarDisponiblidad() {
    var origen_ = document.getElementById("origen_viaje");
    var origen_viaje = origen_.options[origen_.selectedIndex].value;

    var destino_ = document.getElementById("destino_viaje");
    var destino_viaje = destino_.options[destino_.selectedIndex].value;

    var fecha_viaje = document.getElementById("fecha_viaje").value;

    window.location.href = "compra.html";
    alert("HOLA MUNDO");
}
