/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    
    //muda status
    $(".statusCheckbox").click(function() {

        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");
        
        $.ajax({
            url: '../Equipes/mudaStatusEquipes',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
            success: function(msg) {
                alert(msg);

            }
        }); 

    });

    //exclui usuario
    $(".excluirEquipes").click(function() {

        var handle = $(this);
        var id = $(this).attr("id");

        $.ajax({
            url: '../Equipes/deleteEquipes',
            type: 'POST',
            data: {
                id: id
            },
            success: function(msg) {

                var tr = $(handle).closest('tr');
                tr.fadeOut(600, function() {
                    tr.remove();
                });

            }
        });

    });
    
});

