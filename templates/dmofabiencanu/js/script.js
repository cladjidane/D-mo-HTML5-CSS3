$(function(){
	    
    window.URL = window.URL || window.webkitURL;    
    
    $('#fileSelect').click(function(e) {
        e.preventDefault();        
        $('#fileElem').trigger('click');
    });
    
    $('#fileElem').change(function() {
        var _this = $(this);
        var nli = $('#fileList li').length;
        
        // Nous sommes obligé de passer via l'API DOM de base sinon on ne récupère pas l'objet la porpriété files
        var file = document.getElementById("fileElem").files[0];
        
        // Pour l'affichage de base des infos
        var li = $('<li/>');
        li.append($('<img />').attr({
                src : window.URL.createObjectURL(file),
                id : 'img-' + nli,
                style : 'width: 150px'
            })
        );
        
        // On renseigne info
        var info = $("<div />");
          
        var infoName = 'Nom : ' +  file.name;
        var infoSize = ' <br /> Poids : ' + file.size;
        var infoInfo;
        
        // Si le poids est supérieur à 1 mo, on le signale et on rend l'image modifiable
        // Appelle d'un fonction tierce
        if(file.size > 1000000) {
			infoInfo = edit(nli);
		}
        
        // Création des noeuds
        info.append(infoName, infoSize, infoInfo); 
        li.append(info);
        
        // Création de liste
        $('#fileList').show().append(li);
        
    });
    
    edit = function(nli){
		var info = '<div style="color: red;" >Image est trop lourde - <span id="edit" class="' + nli + '">MODIFIER</span> </div>';		
		return info;
	}
	
	$('#edit').live('click', function(e){
		
		$target = $(e.target);		
		$ze = $('#zone-edit');
		var img_source = $('#img-' + $target.attr('class'));
		
		$ze.css({
			border: '3px solid gray',
			padding: '20px'
		});
		
		// Pour test avec clone jquery ... pas concluant
		//var img_clone = img_source.clone();
		
		var ctx = document.getElementById('zone-edit').getContext('2d');
		
		var img = new Image();
		img.src = img_source.attr('src');
		img.onload = function(){
			// On réajuste la taille maxi de visu si largeur de l'image 
			// source est plus grande que 500px
			if(img.width > 500) {
				img_w = 500;
			} else {
				img_w = img.width;
			}
			
			ctx.drawImage(img, 0, 0);	
		}
		  
	});
		
});
