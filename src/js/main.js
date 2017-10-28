$(document).ready(function(){
    var jsonData = [];
    $('#sub').click(function(){
        $.get({
            url:'./data.json',
            dataType:'json',
            success:function(data){
                jsonData = data;
                console.log(jsonData[Object.keys(jsonData)[0]]);
            }
        });
    });

});