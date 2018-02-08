(function ($) {
    var $form = $("main form");

    $form.on("submit", function (e) {
        e.preventDefault();

        return false;
    });

    $form.validate({
        errorClass: "input-error",
        errorElement: "em",
        submitHandler: function (e) {

            $.ajax({
                url: $form.attr("action"),
                type: "POST",
                data: new FormData($form[0]),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    var main = $("main");

                    main.find(".alert").remove();

                    if (!data.hasOwnProperty("code") || !data.hasOwnProperty("message")) {
                        main.prepend(
                            '<div class="alert alert-danger" role="alert">Ocorreu um erro inesperado.</div>');
                    } else {
                        main.prepend(
                            '<div class="alert alert-' + ((data.code === 200) ? 'success' : 'danger') + '" role="alert">' + data.message + '</div>');

                        if(data.code === 200){
                            $("main form").remove();
                        }
                    }

                    $("html, body").animate({scrollTop: 0}, "slow");
                }
            });

            return false;
        }
    });
})(jQuery);

function alteraEtapa(etapa){
    $('#tabEtapas a[href="#etapa'+etapa+'"]').tab('show');
  }
  
  function exibePopover(dica){
    $('#'+dica).popover('show');
  }
  function escondePopover(dica){
    $('#'+dica).popover('hide');
  }
  function validaFormulario(){
    let nome = $('#nome').val();
    let email = $('#email').val();
    let cidade = $('#cidade').val();
    let estado = $('#estado').val();
    let facebook = $('#facebook').val();
    let twitter = $('#twitter').val();
    if(nome == ''){
      alteraEtapa(1);
      $('#nome').focus();
      $('#nome').tooltip('show');
      setTimeout(function () {
        $('#nome').tooltip('destroy');
      }, 3000);
      return;
    }
    if(email == ''){
      alteraEtapa(1);
      $('#email').focus();
      $('#email').tooltip('show');
      setTimeout(function () {
        $('#email').tooltip('destroy');
      }, 3000);
      return;
    }
   
  
    console.log(nome,email);
  }
  