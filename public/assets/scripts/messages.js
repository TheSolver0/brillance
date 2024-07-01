/*Message d'information à la suite des trfaitements*/
function reussite(msg='',debut='top',fin='center'){
	var msg_affiche = (msg==='') ? "Traitement effectué avec succes !" : msg;
 	$.notify({
            icon: "<span class='glyphicon glyphicon-ok-sign'></span>",
            message: msg_affiche
        }, {
            type: 'success',
            timer: 1000,
            placement: {
                from: debut,
                align: fin
            }
        });
}

function aide(msg=''){
    var msg_affiche = (msg==='') ? "Aide contextuelle" : msg;
    $.notify({
            icon: "<span class='glyphicon glyphicon-question-sign'></span>",
            message: msg_affiche
        }, {
            type: 'info',
            timer: 1000,
            placement: {
                from: 'bottom',
                align: 'left'
            }
        });
}

function echec(msg='',debut='top',fin='center'){
	var msg_affiche = (msg==='') ? "Une erreur est survenue lors du traitement !" : msg;
 	$.notify({
            icon: "<span class='glyphicon glyphicon-remove-sign'></span>",
            message: msg_affiche
        }, {
            type: 'danger',
            timer: 3000,
            placement: {
                from: debut,
                align: fin
            }
        });
}

function attention(msg='',debut='top',fin='center'){
	var msg_affiche = (msg==='') ? "Certains traitements n\'ont pas pu être effectués !" : msg;
 	$.notify({
            icon: "<span class='glyphicon glyphicon-warning-sign'></span>",
            message: msg_affiche
        }, {
            type: 'warning',
            timer: 2000,
            placement: {
                from: debut,
                align: fin
            }
        });
}

function serveur(msg='',debut='top',fin='center'){
	var msg_affiche = (msg==='') ? "Serveur de données inaccessible !" : msg;
 	$.notify({
            icon: "<span class='glyphicon glyphicon-ban-circle'></span>",
            message: msg_affiche
        }, {
            type: 'danger',
            timer: 2000,
            placement: {
                from: debut,
                align: fin
            }
        });
}