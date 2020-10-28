

var hoy = new Date();
var dia = hoy.getDate();
var mes = hoy.getMonth()+1;
var anio = hoy.getFullYear();

if(dia<10) {
    dia='0'+dia;
} 
 
if(mes<10) {
    mes='0'+mes;
} 

var fecha = anio +'-'+ mes +'-'+ dia;



var tienda = [


    { "logo":"img/aliados/occidental.png", "empresa":"Cooperativa de Transportes Occidentales","origen":"Machala", "Destino":"Santo Domingo", "tipo":"Especial", "asiento":"30", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"15:00", "estado":"Y"},
    { "logo":"img/aliados/occidental.png", "empresa":"Cooperativa de Transportes Occidentales","origen":"Machala", "Destino":"Santo Domingo", "tipo":"Especial", "asiento":"12", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"22:00", "estado":"N"},
    { "logo":"img/aliados/occidental.png", "empresa":"Cooperativa de Transportes Occidentales","origen":"Machala", "Destino":"Santo Domingo", "tipo":"Especial", "asiento":"1", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"22:00", "estado":"N"},
    { "logo":"img/aliados/occidental.png", "empresa":"Cooperativa de Transportes Occidentales","origen":"Machala", "Destino":"Santo Domingo", "tipo":"Especial", "asiento":"5", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"15:00", "estado":"N"},
    { "logo":"img/aliados/occidental.png", "empresa":"Cooperativa de Transportes Occidentales","origen":"Machala", "Destino":"Santo Domingo", "tipo":"Especial", "asiento":"27", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"22:00", "estado":"N"},
    { "logo":"img/aliados/occidental.png", "empresa":"Cooperativa de Transportes Occidentales","origen":"Machala", "Destino":"Santo Domingo", "tipo":"Especial", "asiento":"5", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"22:00", "estado":"Y"},


    { "logo":"img/aliados/manta.jpg", "empresa":"Cooperativa de Transportes San Clemente","origen":"Guayaquil", "Destino":"Atacames", "tipo":"Especial", "asiento":"30", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"15:00", "estado":"Y"},
    { "logo":"img/aliados/manta.jpg", "empresa":"Cooperativa de Transportes San Clemente","origen":"Guayaquil", "Destino":"Atacames", "tipo":"Especial", "asiento":"12", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"22:00", "estado":"N"},
    { "logo":"img/aliados/manta.jpg", "empresa":"Cooperativa de Transportes San Clemente","origen":"Guayaquil", "Destino":"Atacames", "tipo":"Especial", "asiento":"1", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"22:00", "estado":"N"},
    { "logo":"img/aliados/manta.jpg", "empresa":"Cooperativa de Transportes San Clemente","origen":"Guayaquil", "Destino":"Atacames", "tipo":"Especial", "asiento":"5", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"15:00", "estado":"N"},
    { "logo":"img/aliados/manta.jpg", "empresa":"Cooperativa de Transportes San Clemente","origen":"Guayaquil", "Destino":"Atacames", "tipo":"Especial", "asiento":"27", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"22:00", "estado":"N"},
    { "logo":"img/aliados/manta.jpg", "empresa":"Cooperativa de Transportes San Clemente","origen":"Machala", "Destino":"Atacames", "tipo":"Especial", "asiento":"5", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"22:00", "estado":"Y"},


    { "logo":"img/aliados/occidental.png", "empresa":"Cooperativa Occidental","origen":"Guayaquil", "Destino":"Ambato", "tipo":"Especial", "asiento":"30", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"15:00", "estado":"Y"},
    { "logo":"img/aliados/occidental.png", "empresa":"Cooperativa Occidental","origen":"Guayaquil", "Destino":"Ambato", "tipo":"Especial", "asiento":"12", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"22:00", "estado":"Y"},
    { "logo":"img/aliados/occidental.png", "empresa":"Cooperativa Occidental","origen":"Guayaquil", "Destino":"Ambato", "tipo":"Especial", "asiento":"1", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"22:00", "estado":"N"},
    { "logo":"img/aliados/occidental.png", "empresa":"Cooperativa Occidental","origen":"Guayaquil", "Destino":"Ambato", "tipo":"Especial", "asiento":"5", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"15:00", "estado":"N"},
    { "logo":"img/aliados/occidental.png", "empresa":"Cooperativa Occidental","origen":"Guayaquil", "Destino":"Ambato", "tipo":"Especial", "asiento":"27", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"22:00", "estado":"Y"},
    { "logo":"img/aliados/occidental.png", "empresa":"Cooperativa Occidental","origen":"Machala", "Destino":"Quito", "tipo":"Especial", "asiento":"5", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"22:00", "estado":"Y"},


    { "logo":"img/aliados/cariamanga.png", "empresa":"Cooperativa Cariamanga","origen":"Loja", "Destino":"Ambato", "tipo":"Especial", "asiento":"15", "turno":"Normal", "precio":"13", "fecha":fecha, "hora":"10:00", "estado":"N"},
    { "logo":"img/aliados/santa.jpg", "empresa":"Cooperativa Transportes Santa","origen":"Loja", "Destino":"Ambato", "tipo":"Especial", "asiento":"5", "turno":"Normal", "precio":"15", "fecha":fecha, "hora":"15:00", "estado":"N"},
    { "logo":"img/aliados/santa.jpg", "empresa":"Cooperativa Transportes Santa","origen":"Loja", "Destino":"Ambato", "tipo":"Especial", "asiento":"12", "turno":"Normal", "precio":"15", "fecha":fecha, "hora":"12:00", "estado":"N"},
    { "logo":"img/aliados/santa.jpg", "empresa":"Cooperativa Transportes Santa","origen":"Loja", "Destino":"Ambato", "tipo":"Especial", "asiento":"35", "turno":"Normal", "precio":"15", "fecha":fecha, "hora":"17:00", "estado":"N"},
    { "logo":"img/aliados/santa.jpg", "empresa":"Cooperativa Transportes Santa","origen":"Loja", "Destino":"Ambato", "tipo":"Especial", "asiento":"44", "turno":"Normal", "precio":"15", "fecha":fecha, "hora":"23:00", "estado":"Y"},
    { "logo":"img/aliados/santa.jpg", "empresa":"Cooperativa Transportes Santa","origen":"Loja", "Destino":"Ambato", "tipo":"Platinium", "asiento":"41", "turno":"Normal", "precio":"25", "fecha":fecha, "hora":"24:00", "estado":"Y"},
     

    { "logo":"img/aliados/pulman.jpg", "empresa":"Cooperativa Pulman Sucre","origen":"Santa Rosa", "Destino":"Atacames", "tipo":"Especial", "asiento":"10", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"15:00", "estado":"Y"},
    { "logo":"img/aliados/pulman.jpg", "empresa":"Cooperativa Pulman Sucre","origen":"Santa Rosa", "Destino":"Atacames", "tipo":"Especial", "asiento":"7", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"12:00", "estado":"N"},
    { "logo":"img/aliados/pulman.jpg", "empresa":"Cooperativa Pulman Sucre","origen":"Santa Rosa", "Destino":"Atacames", "tipo":"Especial", "asiento":"40", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"09:00", "estado":"N"},
    { "logo":"img/aliados/pulman.jpg", "empresa":"Cooperativa Pulman Sucre","origen":"Santa Rosa", "Destino":"Atacames", "tipo":"Especial", "asiento":"16", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"23:00", "estado":"N"},
    


    { "logo":"img/aliados/loja.png", "empresa":"Cooperativa Loja","origen":"Loja", "Destino":"Atacames", "tipo":"Especial", "asiento":"10", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"15:00", "estado":"Y"},
    { "logo":"img/aliados/loja.png", "empresa":"Cooperativa Loja","origen":"Loja", "Destino":"Atacames", "tipo":"Especial", "asiento":"7", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"12:00", "estado":"N"},
    { "logo":"img/aliados/loja.png", "empresa":"Cooperativa Loja","origen":"Loja", "Destino":"Atacames", "tipo":"Especial", "asiento":"40", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"09:00", "estado":"Y"},
    { "logo":"img/aliados/loja.png", "empresa":"Cooperativa Loja","origen":"Loja", "Destino":"Atacames", "tipo":"Especial", "asiento":"16", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"23:00", "estado":"Y"},
    

    { "logo":"img/aliados/liberatd.jpg", "empresa":"Cooperativa de Transporte Libertad Peninsular","origen":"Salinas", "Destino":"Atacames", "tipo":"Especial", "asiento":"10", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"15:00", "estado":"Y"},
    { "logo":"img/aliados/liberatd.jpg", "empresa":"Cooperativa de Transporte Libertad Peninsular","origen":"Salinas", "Destino":"Atacames", "tipo":"Especial", "asiento":"7", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"12:00", "estado":"N"},
    { "logo":"img/aliados/liberatd.jpg", "empresa":"Cooperativa de Transporte Libertad Peninsular","origen":"Salinas", "Destino":"Atacames", "tipo":"Especial", "asiento":"40", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"09:00", "estado":"Y"},
    { "logo":"img/aliados/liberatd.jpg", "empresa":"Cooperativa de Transporte Libertad Peninsular","origen":"Salinas", "Destino":"Atacames", "tipo":"Especial", "asiento":"16", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"23:00", "estado":"Y"},
    



    { "logo":"img/aliados/ecuador.gif", "empresa":"Cooperativa de Transportes Ecuador","origen":"Santa Rosa", "Destino":"Quito", "tipo":"Especial", "asiento":"16", "turno":"Normal", "precio":"22", "fecha":fecha, "hora":"13:00", "estado":"Y"},
    { "logo":"img/aliados/ecuador.gif", "empresa":"Cooperativa de Transportes Ecuador","origen":"Santa Rosa", "Destino":"Quito", "tipo":"Especial", "asiento":"16", "turno":"Normal", "precio":"22", "fecha":fecha, "hora":"23:00", "estado":"N"},
    { "logo":"img/aliados/ecuador.gif", "empresa":"Cooperativa de Transportes Ecuador","origen":"Santa Rosa", "Destino":"Quito", "tipo":"Platinium", "asiento":"16", "turno":"Normal", "precio":"30", "fecha":fecha, "hora":"23:00", "estado":"Y"},

    { "logo":"img/aliados/panamericana.png", "empresa":"Cooperativa Panamericana","origen":"Salinas", "Destino":"Tulcán", "tipo":"Especial", "asiento":"13", "turno":"Normal","precio":"20", "fecha":fecha, "hora":"15:00", "estado":"Y"},
    { "logo":"img/aliados/panamericana.png", "empresa":"Cooperativa Panamericana","origen":"Guayaquil", "Destino":"Ambato", "tipo":"Platinum", "asiento":"10", "turno":"Normal", "precio":"18", "fecha":fecha, "hora":"18:00", "estado":"Y"},



    { "logo":"img/aliados/rutas.jpg", "empresa":"Cooperativa Rutas Orenses","origen":"Santa Rosa", "Destino":"Santo Domingo", "tipo":"Especial", "asiento":"15", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"15:00", "estado":"Y"},
    { "logo":"img/aliados/rutas.jpg", "empresa":"Cooperativa Panamericana","origen":"Machala", "Destino":"Quito", "tipo":"Especial", "asiento":"22", "turno":"Normal", "precio":"20", "fecha":fecha, "hora":"15:00", "estado":"Y"}

 

];