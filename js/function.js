$(function(){
    var atual_fs, next_fs, prev_fs;
    var formulario = $('form[name=formulario]');

    function next(elem){
        atual_fs = $(elem).parent();
        next_fs = $(elem).parent().next();

        $('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo');
        atual_fs.hide(500);
        next_fs.show(500);
    }

    $('.prev').click(function(){
        atual_fs = $(this).parent();
        prev_fs = $(this).parent().prev();

        $('#progress li').eq($('fieldset').index(atual_fs)).removeClass('ativo');
        atual_fs.hide(500);
        prev_fs.show(500);
    });

    $("input[name='next1']").click(function(){

        var array = formulario.serializeArray();
        $('.resp').html('teste');

        if(array[0].value == '' || array[1].value == '' || array[2].value == ''){
            $('.resp').html('<div class="erros"><p>Preencha todos os campos</p></div>');

        }else{
            $('.resp').html('');
            next($(this));
        }
    });

    $('input[type=submit]').click(function(evento){
       
        var array = formulario.serializeArray();
        $('.resp').html('teste');

        if(array[6].value == '' || array[7].value == '' || array[8].value == ''){
            $('.resp').html('<div class="erros"><p>Preencha todos os campos</p></div>');

        }else{
            $.ajax({
                method: 'post',
                url: 'cadastrar.php',
                data: {cadastrar: 'sim', campos: array},
                dataType: 'json',
                beforeSend: function(){
                    $('resp').html('<div class="erros">Aguarde enquanto processamos seus dados</div>');
                },
                success: function(valor){

                    if(valor.erro == 'sim'){
                        $('.resp').html('<div class="erros"><p>'+valor.getErro+'</p></div>')
                    
                    }else{
                        $('.resp').html('<div class="ok"><p>'+valor.msg+'</p></div>');
                    }

                    
                }
                
            });
             
        }
        evento.preventDefault();
    });
});

