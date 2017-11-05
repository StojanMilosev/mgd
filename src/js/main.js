$(document).ready(function(){
    var jsonData;
    $.get({
            url:'./data.json',
            dataType:'json',
            success:function(data){
                jsonData = data;            
            }
        });
    $('#sub').click(function(){
        
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
        $('##katarina-mladenovac-proizvodi').addClass('show');
    });
    $('#sentela').click(function (){
       $('.tab-content').removeClass("show");
        $('#sentela-proizvodi').addClass('show');
    });
	$('#pakeraj').click(function (){
       $('.tab-content').removeClass("show");
        $('#pakeraj-proizvodi').addClass('show');
    });
	$('#osnovne_zivotne_namirnice').click(function (){
       $('.tab-content').removeClass("show");
        $('#osnovne_zivotne_namirnice-proizvodi').addClass('show');
    });
	$('#papirna-konfekcija').click(function (){
       $('.tab-content').removeClass("show");
        $('#papirna-konfekcija-proizvodi').addClass('show');
    });
	$('#hemija').click(function (){
       $('.tab-content').removeClass("show");
        $('#hemija-proizvodi').addClass('show');
    });
	$('#kese').click(function (){
       $('.tab-content').removeClass("show");
        $('#kese-proizvodi').addClass('show');
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