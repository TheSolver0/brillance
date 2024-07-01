$("#form_voter").submit(function(event) {
      event.preventDefault();
          $.ajax({
            type:'POST',
            url:'voter/save_vote',
            dataType:'html',
            data:$(this).serialize(),

            error: function(){
                     alert('Serveur de données inaccessible');
            },
            success: function(donnees){

            }
          });
          return false;
    });


function vote_code()
{
	var code = $("#code").val();
	var candidate = $("#candidate").val();
	if(code == '' || code.length < 5)
	{
		echec('Code insuffisant ou non renseigné');
	}
	else
	{
		$.ajax({
			type:'POST',
			url:'voter/save_vote_code',
			data:{code:code,candidate:candidate},
			dataType:'html',

			error: function(){
          		serveur();
			},

			success: function(donnees){
               if(donnees == 'OK')
               {
               		reussite('Vote effectué avec succès');
	                 $('#myModal_voter').modal('hide');
	                 document.location.href='accueil';
               }
               else
               {
               		echec('Code incorrect ou usé');
               }
			}
		});
		return false;
	}
}

function show_gift()
{
    var montant = $("#montant1").val();
    var unite = $("#unite").val();
    var bonus = $("#bonus").val();

    $("#giftGadget").html('');
    $("#giftGadget").addClass('hidden');

    var gift = 0;
    var votes = 0;
    var total = 0;
    var accords = "";

    if(bonus==="OUI")
    {
        if(montant>=1000)
        {
            if(unite==200)
            {
                gift = Math.floor(2*(montant/1000));
                votes = montant/200;
            }   
            else
            {
                gift = Math.floor(1*(montant/1000));
                votes = montant/100;
            } 
            total = votes+gift;
            accords = (votes>1) ? "s" : "";
            $("#giftGadget").html(votes+' vote'+accords+ ' | <i class="fa fa-gift"></i><b>+'+gift+' </b> | Total= '+total+' vote'+accords);
            $("#giftGadget").removeClass('hidden');
        }
        else
        {
            votes = montant/unite;
            accords = (votes>1) ? "s" : "";
            if(montant>=unite)
            {
                $("#giftGadget").html(votes+' vote'+accords);
                $("#giftGadget").removeClass('hidden');
            }
            else
            {
                $("#giftGadget").html('');
                $("#giftGadget").addClass('hidden');
            }
            
        }
    }
    else
    {
        if(montant>=unite)
        {
            if(unite==200)
            {
                votes = montant/200;
            }   
            else
            {
                votes = montant/100;
            } 
            accords = (votes>1) ? "s" : "";
            $("#giftGadget").html(votes+' vote'+accords);
            $("#giftGadget").removeClass('hidden');
        }
        else
        {
            $("#giftGadget").html('');
            $("#giftGadget").addClass('hidden');
        }
    }
}
function detail_vote(code)
{
    $("#giftGadget").html('');
    $("#giftGadget").addClass('hidden');
    var url = $(location).attr("href");
	$.ajax({
			type:'POST',
			url:'voter/detail_vote',
			data:{code:code,url:url},
			dataType:'html',
            beforeSend: function(){
                $("#btn-voter").html('<i class="fa fa-spinner fa-spin fa-fw loader-perso"></i>');
            },
			error: function(){
                $("#btn-voter").html('<i class="fa fa-heart"></i>&nbsp;VOTE');
          		 $('.msg-error').html('Erreur de chargement des détails de ce vote');
	        	$('.alert-danger').slideDown('swing').delay(3000).slideUp('swing');
			},

			success: function(donnees){
                $("#btn-voter").html('<i class="fa fa-heart"></i>&nbsp;VOTE');
				if(donnees !== '')
				{
					donnees = donnees.split('|');
					$('.modal-title').html('<i>Je choisis <i> '+donnees[0]);

					$('#img_cdt').html(donnees[1]);
					$('#elt_form').html(donnees[2]);
					$('#myModal_voter').modal('show');
				}
			}
		});
		return false;
}



    function select_paiement(idRadio)
    {
        console.log(idRadio);
        $("#montant2").val('') ;
        $("#montant1").val('') ;
        $("#codeVote").val('') ;
        $("#"+idRadio).prop("checked", true);
      var devise = $("input[name='devise']:checked").val();
      console.log(devise);
      //var devise = $('#devise').val();
      switch(devise)
      {
          case "USD":
            {
                  $("#label_devise span").html('USD');
                  $("#montant2").prop('required',true);
                  $("#montant1").removeAttr('required');
                  $("#codeVote").removeAttr('required');
                  $("#bloc_nat").addClass('hidden') ;
                  $("#bloc_code").addClass('hidden') ;
                  $("#bloc_int").removeClass('hidden') ;
                  console.log('bloc usd');
    
              $("#btn_code").addClass('hidden') ;
              $("#btn_paid").removeClass('hidden') ;
            }break;
            case "EUR":
            {
                  $("#label_devise span").html('EUR');
                  $("#montant2").prop('required',true);
                  $("#montant1").removeAttr('required');
                  $("#codeVote").removeAttr('required');
                  $("#bloc_nat").addClass('hidden') ;
                  $("#bloc_code").addClass('hidden') ;
                  $("#bloc_int").removeClass('hidden') ;
                    console.log('bloc eur');
                  $("#btn_code").addClass('hidden') ;
                  $("#btn_paid").removeClass('hidden') ;
            }break;
            case "CODE":
            {
                 $("#codeVote").prop('required',true);
                  $("#montant1").removeAttr('required');
                  $("#montant2").removeAttr('required');
                  $("#bloc_nat").addClass('hidden') ;
                  $("#bloc_int").addClass('hidden') ;
                  $("#bloc_code").removeClass('hidden') ;
    
                  $("#btn_paid").addClass('hidden') ;
                  $("#btn_code").removeClass('hidden') ;
            }break;
            default:
            {
                 $("#bloc_int").addClass('hidden') ;
                    $("#bloc_code").addClass('hidden') ;
                      $("#bloc_nat").removeClass('hidden') ;
                      $("#montant2").removeAttr('required');
                       $("#montant1").prop('required',true);
                      $("#codeVote").removeAttr('required');
                      $("#montant1").prop('required',true);
                    console.log('bloc cfa');
                      $("#btn_code").addClass('hidden') ;
                      $("#btn_paid").removeClass('hidden') ;
            }
      }
      
      /*if(devise==="USD")
      {
          $("#label_devise span").html('USD');
          $("#montant2").prop('required',true);
          $("#montant1").removeAttr('required');
          $("#codeVote").removeAttr('required');
          $("#bloc_nat").addClass('hidden') ;
          $("#bloc_code").addClass('hidden') ;
          $("#bloc_int").removeClass('hidden') ;

          $("#btn_code").addClass('hidden') ;
          $("#btn_paid").removeClass('hidden') ;
      }
      else
      {
          if(devise==="EUR")
          {
              $("#label_devise span").html('EUR');
              $("#montant2").prop('required',true);
              $("#montant1").removeAttr('required');
              $("#codeVote").removeAttr('required');
              $("#bloc_nat").addClass('hidden') ;
              $("#bloc_code").addClass('hidden') ;
              $("#bloc_int").removeClass('hidden') ;
    
              $("#btn_code").addClass('hidden') ;
              $("#btn_paid").removeClass('hidden') ;
          }
          else
          {
              if(devise==="CODE")
              {
    
                  $("#codeVote").prop('required',true);
                  $("#montant1").removeAttr('required');
                  $("#montant2").removeAttr('required');
                  $("#bloc_nat").addClass('hidden') ;
                  $("#bloc_int").addClass('hidden') ;
                  $("#bloc_code").removeClass('hidden') ;
    
                  $("#btn_paid").addClass('hidden') ;
                  $("#btn_code").removeClass('hidden') ;
              }
              else
              {
                    $("#bloc_int").addClass('hidden') ;
                    $("#bloc_code").addClass('hidden') ;
                      $("#bloc_nat").removeClass('hidden') ;
                      $("#montant2").removeAttr('required');
                      $("#codeVote").removeAttr('required');
                      $("#montant1").prop('required',true);
    
                      $("#btn_code").addClass('hidden') ;
                      $("#btn_paid").removeClass('hidden') ;
              }
          }

      }*/
    }

    function voter()
    {
        var cdt = $('#code').val();
        var code = $('#codeVote').val();
        var vote = $('#vote').val();

        if(code=="")
            echec("Veuillez renseigner un code de vote");
        else
        {
      $.ajax({
          type:'POST',
          url:'voter/save_vote',
          data:{code:code,vote:vote,cdt:cdt},
          dataType:'html',

          error: function(){
                   echec("une erreur est survenue pendant la tentative d'enregistrement.");
          },

          success: function(donnees){
              if(donnees==="NEX")
                  echec("Code incorrect, usée ou inexistant.");
              else
              {
                  if(donnees==="OK")
                  {
                      reussite("Vote enregistré avec succès.");
                      $('#myModal_voter').modal('hide');
                  }
                  else
                       echec("Système indisponible, reéssayez plus tard.");
              }
          }
        });
        return false;
        }
    }

    function fermer()
    {
        $("#blocInfos").removeClass('hidden') ;
       $("#frameVote").attr('src','') ;
       $("#frameVote").addClass('hidden') ;
        $("#myModal_voter").modal('hide') ;
    }

    function change_picture(source,code)
    {
        var img_base = $(".show_"+code).attr('data');
        var img_modif = $("."+source+"_"+code).attr('data');

        var src_base = '../assets/img/candidats/'+img_base;
        var src_modif = '../assets/img/candidats/'+img_modif;

       $(".show_"+code).attr('src',src_modif);
       /*$("."+source+"_"+code).attr('src',src_base);*/
       $(".img_album").css({'border':'none'});
       $("."+source+"_"+code).css({'border':'3px solid #000'});
    }


function edit_price()
{
	var prix = $('#pack').val();
	prix = prix.split('-');

	$('#amount1').val(prix[1]);

}
 function bouton_voter_one()
{
	var pack = $('#pack').val();
	if(pack !== '')
	{
	contenu_cible = '';
	$.ajax({
			type:'POST',
			url:'voter/bouton_voter',
			data:{pack:pack},
			dataType:'html',
             beforeSend: function(){
                AjaxBox_loader('chargement',true,contenu_cible);
              },
			error: function(){
			    AjaxBox_loader('chargement',false,contenu_cible);
          		 $('#chargement').html('Serveur inaccessible').slideDown('swing').delay(3000).slideUp('swing');
			},

			success: function(donnees){
			    AjaxBox_loader('chargement',false,contenu_cible);
				if(donnees !== '')
				{
					$('#voter_data').html(donnees);
				}
			}
		});
		return false;
	}

}

function AjaxBox_loader(bloc,pState,contenu_cible)
	{
		if (pState === true)
		{
			contenu_cible = '<i class="fa fa-cog fa-spin fa-fw loader-perso"></i> Patientez SVP...';
			$('#'+bloc).html(contenu_cible);
		}
		// Suppression de l'image de loading
		else
			var ajaxBox = $('#'+bloc).html(contenu_cible);
	}
	
	function select_currency()
    {
        $("#montant2").val('') ;
        $("#montant1").val('') ;
        $("#codeVote").val('') ;
      var devise = $("#devise").val();
      switch(devise)
      {
          case "USD":
            {
                  $("#label_devise").html('USD');
                  $("#montant2").prop('required',true);
                  $("#montant1").removeAttr('required');
                  $("#codeVote").removeAttr('required');
                  $("#bloc_nat").addClass('hidden') ;
                  $("#bloc_code").addClass('hidden') ;
                  $("#bloc_int").removeClass('hidden') ;
                  console.log('bloc usd');
    
              $("#btn_code").addClass('hidden') ;
              $("#btn_paid").removeClass('hidden') ;
            }break;
            case "EUR":
            {
                  $("#label_devise").html('EUR');
                  $("#montant2").prop('required',true);
                  $("#montant1").removeAttr('required');
                  $("#codeVote").removeAttr('required');
                  $("#bloc_nat").addClass('hidden') ;
                  $("#bloc_code").addClass('hidden') ;
                  $("#bloc_int").removeClass('hidden') ;
                    console.log('bloc eur');
                  $("#btn_code").addClass('hidden') ;
                  $("#btn_paid").removeClass('hidden') ;
            }break;
            case "XOF":
            {
                  $("#label_devise1").html('FCFA');
                  $("#bloc_int").addClass('hidden') ;
                    $("#bloc_code").addClass('hidden') ;
                      $("#bloc_nat").removeClass('hidden') ;
                      $("#montant2").removeAttr('required');
                       $("#montant1").prop('required',true);
                      $("#codeVote").removeAttr('required');
                      $("#montant1").prop('required',true);
                      $("#btn_code").addClass('hidden') ;
                      $("#btn_paid").removeClass('hidden') ;
            }break;
            case "MRU":
            {
                  $("#label_devise1").html('FCFA');
                  $("#bloc_int").addClass('hidden') ;
                    $("#bloc_code").addClass('hidden') ;
                      $("#bloc_nat").removeClass('hidden') ;
                      $("#montant2").removeAttr('required');
                       $("#montant1").prop('required',true);
                      $("#codeVote").removeAttr('required');
                      $("#montant1").prop('required',true);
                      $("#btn_code").addClass('hidden') ;
                      $("#btn_paid").removeClass('hidden') ;
            }break;
            case "CODE":
            {
                 $("#codeVote").prop('required',true);
                  $("#montant1").removeAttr('required');
                  $("#montant2").removeAttr('required');
                  $("#bloc_nat").addClass('hidden') ;
                  $("#bloc_int").addClass('hidden') ;
                  $("#bloc_code").removeClass('hidden') ;
    
                  $("#btn_paid").addClass('hidden') ;
                  $("#btn_code").removeClass('hidden') ;
            }break;
            default:
            {
                $("#label_devise1").html('FCFA');
                 $("#bloc_int").addClass('hidden') ;
                    $("#bloc_code").addClass('hidden') ;
                      $("#bloc_nat").removeClass('hidden') ;
                      $("#montant2").removeAttr('required');
                       $("#montant1").prop('required',true);
                      $("#codeVote").removeAttr('required');
                      $("#montant1").prop('required',true);
                    console.log('bloc cfa');
                      $("#btn_code").addClass('hidden') ;
                      $("#btn_paid").removeClass('hidden') ;
            }
      }
    }




