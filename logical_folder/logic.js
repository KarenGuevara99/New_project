function ab_nosotros(){
    document.getElementById("nosotros").style.display = "block"
    document.getElementById("btn_nosotros").style.display = "none"

    var x = document.getElementById("login");
    if (x.style.display = "block"){x.style.display = "none"}
}
function ce_nosotros(){
    document.getElementById("nosotros").style.display = "none"
    document.getElementById("btn_nosotros").style.display = "block"
}
function ab_login(){
    document.getElementById("login").style.display = "block"
    document.getElementById("btn_nosotros").style.display = "none"

    var x = document.getElementById("nosotros");
    if (x.style.display = "block"){x.style.display = "none"}
}
function ce_login(){
    document.getElementById("login").style.display = "none"
    document.getElementById("btn_nosotros").style.display = "block"
}
function ab_menu(){
    document.getElementById("login").style.display = "none"
    document.getElementById("btn_login").style.display = "none"
    document.getElementById("btn_nosotros").style.display = "none"
    document.getElementById("cont_menu").style.display = "flex"
}
function ab_bvehiculos(){
    window.open("b_vehiculos");
}
function hora_actual(){
document.getElementById("fservicio").innerHTML = Date()
}
function ab_editvehicle(){
    window.open("edit_vehiculo.php")
}
