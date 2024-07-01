$(document).ready(function(){
    //liste_categorie();
  compteur_internaute();
    setInterval(compteur_internaute,5000);
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    //affichage du message de succès d'enregistrement de vote
    let searchParams = new URLSearchParams(window.location.search)
    searchParams.has('status')
    let status = searchParams.get('status')
    if(status!==null && status==="success")
    {
        reussite("Vote registered successfully<br> <i class='fa fa-spinner fa-spin fa-fw loader-perso'></i>Update in 5s...");
        //on rafraichit vers le lien de base
        var url = $(location).attr("href");
        var goodurl = url.split('&');

        setTimeout(() => {
          window.location.href = goodurl[0];
        }, 5000)
    }

    if(status!==null && status==="error")
    {
        echec("Vote not recorded! please check your balance then try again <br> <i class='fa fa-spinner fa-spin fa-fw loader-perso'></i>Update in 5s...");
        //on rafraichit vers le lien de base
        var url = $(location).attr("href");
        var goodurl = url.split('&');

        setTimeout(() => {
          window.location.href = goodurl[0];
        }, 5000)
    }

});

function scrollFunction() {
    var mybutton = document.getElementById("myBtnTop");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.css("display","block");
  } else {
    mybutton.css("display","none");
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function scrollAfterClick() {
  window.scroll(0,600);
}

function lunch_detail(code)
{
	var base_url = $('#base_url').val();
	var url = base_url+'accueil/infos_candidat';
	$.ajax({
            type:'POST',
            url:url,
            dataType:'json',
            beforeSend: function(){
               $("#btnSaveInscription").html('<i class="fa fa-spinner fa-spin fa-fw loader-perso"></i>PATIENTEZ...');
              },
            error: function(){
               $("#btnSaveInscription").html('<span class="glyphicon glyphicon-save" aria-hidden="true"></span> ENREGISTRER MON INSCRIPTION');
                 serveur();
            },

            success: function(donnees){
              $("#btnSaveInscription").html('<span class="glyphicon glyphicon-save" aria-hidden="true"></span> ENREGISTRER MON INSCRIPTION');

              	if(donnees != 'KO')
	              {
	              	$('#myModal_detail').modal('show');
	              }
	              else
	              	echec("Une erreur est survenue pendant tentative d'inscription, contactez l'administrateur: 697 00 82 83");

            }
          });
          return false;

}

function lunch_connexion()
{
	$('#myModal_connexion').modal('show');
}
function lunch_vote()
{
	$('#myModal_vote').modal('show');
}

function inscription()
{
	$('#myModal_inscription').modal('show');
}

function liste_categorie()
{
  $.ajax({
            type:'POST',
            url:'accueil/liste_categorie',
            dataType:'html',
            beforeSend: function(){
                modal_loader(true);
              },
            error: function(){
               modal_loader(false);
                 serveur();
            },

            success: function(donnees){
              modal_loader(false);
              $("#space_categoriser").removeClass('hidden');

                if(donnees != 'empty')
               {
                   scrollAfterClick();
                $("#zone_result_ajax").html(donnees);
                }
                else
                  echec("Une problème est survenu lors du chargement de la liste des catégories");

            }
          });
          return false;
}

function liste_candidates()
{
    let searchParams = new URLSearchParams(window.location.search)
    searchParams.has('categorie')
    let categorie = searchParams.get('categorie')
    if(categorie!==null)
    {
        $.ajax({
            type:'POST',
            url:'accueil/liste_candidates',
            dataType:'html',
            data:{categorie:categorie},
            beforeSend: function(){
                modal_loader(true);
            },
            error: function(){
                modal_loader(false);
                serveur();
            },

            success: function(donnees){
                modal_loader(false);
                if(donnees != 'empty')
                {
                    scrollAfterClick();
                    $("#zone_result_ajax").html(donnees);
                }
                else
                    echec("Aucun(e) candidat(e) enregistré(e) pour le moment");

            }
        });
        return false;
    }

}

function liste_candidates_ajax(categorie)
{
	$.ajax({
            type:'POST',
            url:'accueil/liste_candidates_ajax',
            dataType:'html',
            data:{categorie:categorie},
            beforeSend: function(){
                modal_loader(true);
              },
            error: function(){
               modal_loader(false);
                 serveur();
            },

            success: function(donnees){
              modal_loader(false);
              if(donnees != 'empty')
              {
                $("#zone_result_ajax").html(donnees);
              }
              else
                echec("Aucun(e) candidat(e) enregistré(e) pour le moment");

            }
          });
          return false;
}

function save_candidate()
{
	var pswd1 = $("#pswd1").val();
	var pswd2 = $("#pswd2").val();
	if(pswd1 !== pswd2)
	{
		echec("Les deux mots de passe ne correspondent pas!");
		$("#pswd1").val('');$("#pswd1").css('borderColor','#e74c3c');
		$("#pswd2").val('');$("#pswd2").css('borderColor','#e74c3c');
	}
	else
	{
		$("#pswd1").css('borderColor','');
		$("#pswd2").css('borderColor','');

		var base_url = $('#base_url').val();
		var url = base_url+'accueil/save_candidate';
		dataForm = $('#formInscription').serialize();
		$.ajax({
	            type:'POST',
	            url:url,
	            dataType:'html',
	            data:dataForm,
	            beforeSend: function(){
	               $("#btnSaveInscription").html('<i class="fa fa-spinner fa-spin fa-fw loader-perso"></i>PATIENTEZ SVP...');
	               $("#btnSaveInscription").prop('disabled', true);
	              },
	            error: function(){
	               $("#btnSaveInscription").html('<span class="glyphicon glyphicon-send" aria-hidden="true"></span> ENREGISTRER MON INSCRIPTION');
	               $("#btnSaveInscription").prop('disabled', false);
	                 serveur("Une erreur est survenue lors de la tentative d'enregistrement, veuillez vérifier votre connexion internet");
	            },

	            success: function(donnees){
	              $("#btnsendInscription").html('<span class="glyphicon glyphicon-save" aria-hidden="true"></span> ENREGISTRER MON INSCRIPTION');
	              $("#btnSaveInscription").prop('disabled', false);

	              	if(donnees != 'KO')
		              {
		              	$('#formInscription')[0].reset();
		                $('#myModal_inscription').modal('hide');
		                reussite('Inscription effectuée avec succès!');
		                window.location.href = "";
		              }
		              else
		              	echec("Une erreur est survenue pendant tentative d'inscription, contactez l'administrateur: 697 00 82 83");

	            }
	          });
	          return false;
	}
}

$('#formInscription').submit(function(event){

		event.preventDefault();
		var pswd1 = $("#pswd1").val();
	var pswd2 = $("#pswd2").val();
	if(pswd1 !== pswd2)
	{
		echec("Les deux mots de passe ne correspondent pas!");
		$("#pswd1").val('');$("#pswd1").css('borderColor','#e74c3c');
		$("#pswd2").val('');$("#pswd2").css('borderColor','#e74c3c');
	}
	else
	{
		$("#pswd1").css('borderColor','');
		$("#pswd2").css('borderColor','');

		var base_url = $('#base_url').val();
		var url = base_url+'accueil/save_candidate';
		dataForm = $('#formInscription').serialize();
		$.ajax({
	            type:'POST',
	            url:url,
	            dataType:'html',
	            data:dataForm,
	            beforeSend: function(){
	               $("#btnSaveInscription").html('<i class="fa fa-spinner fa-spin fa-fw loader-perso"></i>PATIENTEZ SVP...');
	               $("#btnSaveInscription").prop('disabled', true);
	              },
	            error: function(){
	               $("#btnSaveInscription").html('<span class="glyphicon glyphicon-send" aria-hidden="true"></span> ENREGISTRER MON INSCRIPTION');
	               $("#btnSaveInscription").prop('disabled', true);
	                 serveur();
	            },

	            success: function(donnees){
	              $("#btnSaveInscription").html('<span class="glyphicon glyphicon-save" aria-hidden="true"></span> ENREGISTRER MON INSCRIPTION');
	              $("#btnSaveInscription").prop('disabled', true);

	              	if(donnees != 'KO')
		              {
		              	$('#formInscription')[0].reset();
		                $('#myModal_inscription').modal('hide');
		                reussite('Inscription effectuée avec succès! Utilisez votre adresse email et le mot de passe fourni pour vous connecter à votre compte.')
		              }
		              else
		              	echec("Une erreur est survenue pendant tentative d'inscription, contactez l'administrateur: 697 00 82 83");

	            }
	          });
	          return false;
	}
});

$('#formConnect').submit(function(event){

		event.preventDefault();
      	var dataSEND = $(this).serialize();
      	var base_url = $('#base_url').val();
		var url = base_url+'accueil/get_connexion';

          $.ajax({
            type:'POST',
            url:url,
            dataType:'html',
            data:dataSEND,
            beforeSend: function(){
                $('#btnConnect').html('<i class="fa fa-spinner fa-spin fa-fw"></i>Traitement...');
              },
            error: function(resultat, statut, erreur){
            	 $('#btnConnect').html('<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> CONNEXION');
                 serveur(erreur);
            },

            success: function(donnees){
            	$('#btnConnect').html('<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> CONNEXION');
              	if(donnees == 'OK')
	            {

	                reussite('Connexion établie! Chargement des paramètres et redirection <i class="fa fa-spinner fa-spin fa-fw"></i>...');
	                setTimeout(function(){
	                	$("#myModal_connexion").modal('hide');
                      window.location.href=base_url+'compte';
                    },3000);
	            }
	            else
	            {
	              	if(donnees == 'IN')
	              	{
	              		echec('Votre compte est inactif, Merci de contacter l\'administrateur <a href="tel:+237697008283">+237 6970082833</a>');
	              	}
	              	else
	              	{
	              		echec('Numéro de téléphone et/ou mot de passe incorrect!');
	              	}
	            }


            }
          });
          return false;
});

function modal_loader(pState,text="")
{
	text = (text=='') ? "Chargement en cours...Veuillez patienter SVP" : text;
	if (pState === true)
	{
		$('#loader_title').html(text);
		$("#load_modal").modal("show");
	}
	else
	{
		$('#loader_title').html(text);
		$("#load_modal").modal("hide");
	}
}

function send_fichier()
  {
      var formData = new FormData();
    formData.append('fichier', $('input[name=fichier]')[0].files[0]);


    $.ajax({
        type:'POST',
        url:'accueil/send_fichier',
        contentType: false,
              processData: false,
              data: formData,
              beforeSend:function()
              {
                $("#img-loader").removeClass('hidden');
              },
        error: function(resultat, statut, erreur){
           $("#img-loader").addClass('hidden');
                 serveur(erreur);

        },
        success: function(donnees){
          $("#img-loader").addClass('hidden');
          donnees = JSON.parse(donnees);
          if(donnees.type=='PHOTO')
          {

            $('#photoEDIT').val(donnees.photo);
          }
          else
          {
            echec(donnees.message);
          }
        }
      });
      return false;
  }

  function clipboard(reference)
        {
            var copyText = document.getElementById('clipboardUrl-'+reference);
            /* Select the text field */
            copyText.select();
            /* Copy the text inside the text field */
            document.execCommand('copy');
        }


//   function internaute()
//   {
//   $.ajax({
//       type:'POST',
//       url:'accueil/internaute',
//       dataType:'html',
//       error: function(){
//                serveur();
//       },

//       success: function(donnees){
//         if(donnees != '')
//         {
//         }
//       }
//     });
//     return false;
//   }

//   function load_actions()
//   {
//       internaute();
//       liste_candidates();


//   }

// function compteur_internaute()
//   {
//   $.ajax({
//       type:'POST',
//       url:'accueil/compteur_internaute',
//       dataType:'html',
//       error: function(){
//                console.log('impossible de traiter la requette');
//       },

//       success: function(donnees){
//         if(donnees != '')
//         {
//           $('#bloc_internaute').html(donnees);
//         }
//       }
//     });
//     return false;
//   }
