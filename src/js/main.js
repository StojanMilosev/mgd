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

    $('#kondi').click(function (){
       $('.tab-content').removeClass("show");
        $('#proz').addClass('show');
    });
    $('#testenine').click(function (){
       $('.tab-content').removeClass("show");
        $('#testenine-proizvodi').addClass('show');
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