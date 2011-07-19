$(function(){
	    
    window.URL = window.URL || window.webkitURL;
    
    
    $('#fileSelect').click(function(e) {
        e.preventDefault();        
        $('#fileElem').trigger('click');
    });
    
    $('#fileElem').change(function() {
        var _this = $(this);
        
        // Nous sommes obligé de passer via l'API DOM de base sinon on ne récupère pas l'objet la porpriété files
        var file = document.getElementById("fileElem").files[0];
        
        var li = $('<li/>');
        li.append($('<img />').attr({
                src : window.URL.createObjectURL(file),
                style : 'width: 150px'
            })
        );
        
        var info = $("<div />");
          
        infoName = 'Nom : ' +  file.name;
        infoSize = ' <br /> Poids : ' + file.size;
        infoInfo = ((file.size > 1000000) ? '<div style="color: red;" >Image est trop lourde ! </div>' : '');
        info.append(infoName, infoSize, infoInfo);
          
        li.append(info);
        
        // Création de liste
        $('#fileList').show().append(li);
        
 
        
    });
    
});
