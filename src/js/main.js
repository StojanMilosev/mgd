$(document).ready(function(){
    var jsonData;
    $.get({
            url:'./data.json',
            dataType:'json',
            success:function(data){
                jsonData = data;            
            }
        });
    	
    $('#mlecni_program').click(function(){
        $('.tab-content').removeClass("show");
        $('#mleko').addClass('show');
    });

    $('#mesne_preradjevine').click(function (){
       $('.tab-content').removeClass("show");
        $('#meso').addClass('show');
    });

    $('#katarina-mladenovac').click(function (){
       $('.tab-content').removeClass("show");
        $('#katarina-mladenovac-proizvodi').addClass('show');
    });
	$('#aleksandrija').click(function (){
       $('.tab-content').removeClass("show");
        $('#aleksandrija-proizvodi').addClass('show');
    });
	$('#zeneva-lesnica').click(function (){
       $('.tab-content').removeClass("show");
        $('#zeneva-lesnica-proizvodi').addClass('show');
    });
    $('#sentela').click(function (){
       $('.tab-content').removeClass("show");
        $('#sentela-proizvodi').addClass('show');
    });
    $('#danubis').click(function (){
       $('.tab-content').removeClass("show");
        $('#danubis-proizvodi').addClass('show');
    });
    $('#renesansa').click(function (){
       $('.tab-content').removeClass("show");
        $('#renesansa-proizvodi').addClass('show');
    });
    $('#koktel-sivac').click(function (){
       $('.tab-content').removeClass("show");
        $('#koktel-sivac-proizvodi').addClass('show');
    });
	$('#ares').click(function (){
       $('.tab-content').removeClass("show");
        $('#ares-proizvodi').addClass('show');
    });
	$('#osnovne_zivotne_namirnice').click(function (){
       $('.tab-content').removeClass("show");
        $('#osnovne_zivotne_namirnice-proizvodi').addClass('show');
    });
	$('#papirna-konfekcija').click(function (){
       $('.tab-content').removeClass("show");
        $('#papirna-konfekcija-proizvodi').addClass('show');
    });
	$('#hemija-fresh').click(function (){
       $('.tab-content').removeClass("show");
        $('#hemija-fresh-proizvodi').addClass('show');
    });
	$('#tisa-becej').click(function (){
       $('.tab-content').removeClass("show");
        $('#tisa-becej-proizvodi').addClass('show');
    });
	$('#kese-tregerice').click(function (){
       $('.tab-content').removeClass("show");
        $('#kese-tregerice-proizvodi').addClass('show');
    });
	$('#kese-za-zamrzivac').click(function (){
       $('.tab-content').removeClass("show");
        $('#kese-za-zamrzivac-proizvodi').addClass('show');
    });
	$('#dzakovi-za-smece').click(function (){
       $('.tab-content').removeClass("show");
        $('#dzakovi-za-smece-proizvodi').addClass('show');
    });
	$('#vino-sokovi').click(function (){
       $('.tab-content').removeClass("show");
        $('#vino-sokovi-proizvodi').addClass('show');
    });
	$('#pasulji').click(function (){
       $('.tab-content').removeClass("show");
        $('#pasulji-proizvodi').addClass('show');
    });
	
});

function openTab(tabId){
    /*var i,tab_content,tab_links;
    
    tab_content = $(".tab-content");

    for(i = 0; i<tab_content.length;i++){
        tab_content.toggleClass('show');
    }

    tab_links = $(".tab-link");*/
    //prikazivanje sadrzaja akivnog taba dodavajuci klasu "active"
    $(tabId).toggleClass('show');
};