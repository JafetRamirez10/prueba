$(document).ready(function(){
	$(".solicitar").click(function(){
		plan=$(this).siblings(".plan").val();
		$(".planSelected").html(plan);
		$("#planSelectedOnly").val(plan);
	})

// Comprobar Tarjeta
$("#cc-number").keyup(function(e){
    var num = $(this).val().toString();
    var charCount = num.length;

    /* VALIDACION DE TIPO */
    if(charCount == 1) { 
        if(num == "4"){
            //$("#type").html("VISA");
            $("#cc-number").attr("class","form-control cc-number identified visa");
             $("#marca").val("visa");
        }
    }
    if(charCount == 2){
        if(num == "34" || num == "37"){
           $("#cc-number").attr("class","form-control cc-number identified amex");
           $("#marca").val("amex");
        } else if( num == "51" || num == "55" || num == "53"){
            $("##cc-number").attr("class","form-control cc-number identified mastercard");
             $("#marca").val("mastercard");
        } else if( num == "55" ){
            //$("#type").html("DISCOVER");
            $("##cc-number").attr("class","form-control cc-number identified discover");
             $("#marca").val("discover");
        }
    }
    if(charCount == 3){
        if(num == "644"){
            $("#cc-number").attr("class","form-control cc-number identified discover");
             $("#marca").val("discover");
        }
    }
    if(charCount == 4){
        if(num == "6011"){
             $("#cc-number").attr("class","form-control cc-number identified discover");
              $("#marca").val("discover");
        }
    }
    /* !VALIDACION DE TIPO */

    /* ALGORITMO */
    if(charCount == 13 || charCount == 14 || charCount == 15 || charCount == 16){
        var valid = isValid(num, charCount);
        if(valid){
            $("#type").html("valida");
            $("input").attr("name", "checkout.cardNumber").attr("class", "valid-card");
        } else {
           alert("Esta tarjeta no encontro registro");
           $("##cc-number").val(" ");
            //$("#marca").val("al parecer el cliente, introdujo una tarjeta no valida");
        }
    }
    /* !ALGORITMO */    
});

// Fin de Comprobar Tarjeta

// $(function () {
//   $('[data-toggle="popover"]').popover()
// })


$("#payment-button").click(function(e) {

    // Fetch form to apply Bootstrap validation
    var form = $(this).parents('form');
    
    if (form[0].checkValidity() === false) {
      e.preventDefault();
      e.stopPropagation();
    }
    else {
      // Perform ajax submit here
      form.submit();
    }
    
    form.addClass('was-validated');
});


})

// $(function () {
//   $('[data-toggle="popover"]').popover()
// })

