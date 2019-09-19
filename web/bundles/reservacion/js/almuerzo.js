$(document).ready(function() {
    $('a.plus').click(function(evento){
       evento.preventDefault();
       var padre=    this.parentNode.parentNode;
       var hijo=     padre.children[1].id;
            if($('#'+hijo).hasClass('hidden'))
                $('#'+hijo).removeClass('hidden');
            else
                $('#'+hijo).addClass('hidden');
        });
    $('a.reservar').click(function(evento){
        evento.preventDefault();
        var padre=this.parentNode.id;
        var num=padre.split('-')[1];
        var cant=document.getElementById("cant"+num).value;
        if(cant>0){
           var costos=document.getElementById("costo"+num).value;
           var plato=costos.split('/');
           var parrafo=document.createElement('p');
           parrafo.id="plato"+num;
           var ele=document.createTextNode(cant+" "+plato[0]+" de $"+plato[1]);
           parrafo.appendChild(ele);
           var existe=document.getElementById("plato"+num);
            //esto es lo k va a ir al input k esta oculto y va pa la controladora
            // el primer valor es el id del plato
            // el segundo la cantidad k se reserva
            // el tercero es el precio del plato
           $("#platos").data("plato"+num,num+"-"+cant+"-"+plato[1]);
           var plat=document.getElementById('platos');
           if(existe==null)
               plat.appendChild(parrafo);
           else
                plat.replaceChild(parrafo,existe);
           calcularImporte();
       }
        else
       {
           eliminarplato(num);
       }
    });
    function eliminarplato(num){
        var parr=document.getElementById("plato"+num);
        $("#platos").removeData("plato"+num);
        parr.parentNode.removeChild(parr);
        calcularImporte();
    }

    function calcularImporte(){
        var importe=0;
        var listap=document.getElementById("platos").children;
        if(listap.length>=1 ){//aki verifico si no hay platos reservados y muestro el componente
            var alm=document.getElementById("almuerzos");
            var valalm="";
            $('.reservados').css({'display':'block'});
            for(var i=0;i<listap.length;i++ ){
                var id=listap[i].id;
                var datos= $("#platos").data(id).split('-');
                importe+=datos[1]*datos[2];
                valalm+="/"+$("#platos").data(id);
            }
            //aki es k le estoy asignando el valor al input k esta oculto
            alm.value=valalm;
        }
        else
        //esta parte es pa cuando el le de al boton reservar y la cantidad sea cero o  vacia
            $('.reservados').css({'display':'none'});//aki oculto el componente si no hay platos reservados
        var newem=document.createElement('em');
        var total=document.createTextNode(importe+" pesos");
        newem.appendChild(total);
        newem.id='importe';
        var em=document.getElementById('importe');
        var padreem=em.parentNode;
        padreem.replaceChild(newem,em);
    }
    $("a.cancelar").click(function(evento){
        evento.preventDefault();
        //esta es pa caundo le de al boton cancelar ponga la cantidad en 0 y calcule de nuevo el importe
        var padre=this.parentNode.id;
        var num=padre.split('-')[1];
        var cant=document.getElementById("cant"+num);
        cant.value=0;
        calcularImporte();
        eliminarplato(num);
    });


});
