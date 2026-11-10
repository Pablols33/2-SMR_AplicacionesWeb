// Práctica 3 — JavaScript
// Nombre y apellidos: Pablo Lechuga Sánchez
// =========================================================

// ===== A1. Mi tarjeta =====
// Escribo mi saludo dentro de #saludo con innerHTML y cambio
// el color del texto y el fondo de la tarjeta con style.
document.getElementById("saludo").innerHTML = "Hola, me llamo Pablo Lechuga Sánchez y estudio 2º SMR";
document.getElementById("tarjeta").style.color = "white";
document.getElementById("tarjeta").style.backgroundColor = "darkblue";

// ===== A2. Lista de la compra =====
// Lee lo escrito en la caja, crea un <li> con ese texto
// y lo añade al final de la lista #lista.
function anadir() {
    // Leo el texto de la caja con .value
    var producto = document.getElementById("producto").value;
    // Creo el elemento <li> vacío
    var li = document.createElement("li");
    // Creo el nodo de texto con el producto
    var texto = document.createTextNode(producto);
    // Meto el texto dentro del <li>
    li.appendChild(texto);
    // Meto el <li> dentro de la lista
    document.getElementById("lista").appendChild(li);
}

// ===== A3. Modo noche y modo día =====
// Cambia el fondo y la letra de toda la página (document.body)
// y avisa en el párrafo #modo de qué modo está activo.
function modoNoche() {
    document.body.style.backgroundColor = "black";
    document.body.style.color = "white";
    document.getElementById("modo").innerHTML = "Modo noche activado";
}

function modoDia() {
    document.body.style.backgroundColor = "white";
    document.body.style.color = "black";
    document.getElementById("modo").innerHTML = "Modo día activado";
}

// ===== A4. Colores de la tarjeta =====
// Recibe un color como parámetro y lo pone de fondo en #tarjeta.
function colorTarjeta(color) {
    document.getElementById("tarjeta").style.backgroundColor = color;
}

// ===== A5. Botón que saluda =====
// Muestra un alert con mi nombre y cambia el fondo del botón.
function saludar() {
    alert("Hola, soy Pablo Lechuga Sánchez");
    document.getElementById("botonSaludo").style.backgroundColor = "orange";
}
