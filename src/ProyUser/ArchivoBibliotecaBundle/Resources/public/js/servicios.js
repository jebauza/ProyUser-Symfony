$(document).ready(function() {
var a=$('#li-activo').attr('value');
    inicial();
    activarTab(a)
$("ul#menu-horizontal li").click(
    function(e){
       e.preventDefault();
        var li=$(this).attr('id');
        inicial();
        $(this).addClass('active');
        $('div#tab-'+li).css({"display":"block"});
        $('#li-activo').attr('value',li);
    });
    $("ul.vertical li").click(function(e){
        e.preventDefault();
        $("ul.vertical li").removeClass("item-active");
        $(this).addClass("item-active");
    });
    function inicial(){
        $("ul.nav-tabs li").each(function(){
            $(this).removeClass('active');
            var id=$(this).attr('id');
            $('div#tab-'+id).css({"display":"none"});
        });
    }
    function activarTab(id){
        $('div#tab-'+id).css({"display":"block"});
        $('li#'+id).addClass('active');
    }
    $('.example').dataTable( {
        "columnDefs": [
            {
                // The `data` parameter refers to the data for the cell (defined by the
                // `data` option, which defaults to the column being worked with, in
                // this case `data: 0`.
                "render": function ( data, type, row ) {
                    return data +' ('+ row[3]+')';
                },
                "targets": 0
            },
            { "visible": false,  "targets": [ 3 ] }
        ]
    } );

    $(".menu-vertical li").click(
        function(e){
            e.preventDefault();
            li=$(this).attr('id');
            $(".prestamos").css({"display":"none"});
            $("#div-"+li).css({"display":"block"});
        }
    );

    });
