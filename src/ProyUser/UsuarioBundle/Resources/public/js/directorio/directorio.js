/**
 * Created by Ernesto on 15/04/15.
 */

$(document).ready(function() {


    $('#filtro  option').click(function()
    {
           $('#'+this.value).parent().css({'display':'inline'});
   });
    $('.filtros  a').click(function(){

        $(this).parent().css({'display':'none'});
      this.parentNode.children[1].value="";

    });

    $('.foto').click(function()
        {
            if($(this).hasClass('zoom-foto'))
            {
                $(this).removeClass('zoom-foto');
            }
            else{
                 $('.foto').removeClass('zoom-foto');
                    $(this).addClass('zoom-foto');
            }
        }
    )
   if( $('.buscar').click(
           function(evento)
           {
             var datos="";
               if(document.getElementById('nombre').value!="")
               datos+="nombre-"+document.getElementById('nombre').value +'|';
               $('.group-filtros select').each(function(){
                   if(this.value !="")
                   datos+=this.id+"-"+this.value+'|';
               })
               $('.group-filtros input').each(function(){
                   if(this.value !="")
                       datos+=this.id+"-"+this.value+'|';
               })

               if(datos!=""){
               datos = datos+"|||";
               var d = datos.replace("||||","");
               var nref=this.href.replace("atr1",d);
               this.href=nref;
               }
               else
               {
                   evento.preventDefault();
               }
           } ));

    recargaValores();
   function recargaValores()
   {
     var datoculto=document.getElementById("valores-filtros").value.split("|");
     for(var i=0;i<datoculto.length;i++){
         var x=datoculto[i].split("-");
          if(x[0]!="nombre"){
            $('#'+x[0]).parent().css({'display':'inline'});
              $("select#"+x[0]+" option[value='"+x[1]+"']").attr("selected","selected");
          }
            $('#'+x[0]).attr("value",x[1] );

        /*  var elem=document.getElementById(x[0]);
         elem.firstChild.value=x[0];
         elem.firstChild.textContent=x[1];
         //$('select.#'+x[0]).firstChild.attr("value","kjkjlj");*/
     }
   }
 });
