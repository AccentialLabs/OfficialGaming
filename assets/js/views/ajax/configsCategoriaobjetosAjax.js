/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
  var contador=0;
  
       $("#openModalDelete").fadeOut(0);
     var acaoParaExcluir = '';
     var handle = '';
    
     //muda status
    $(".statusCheckbox").click(function() {

        alert(id);
        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");
        
        $.ajax({
            url: '../Configuracoes/mudaStatusCategoria',
            type: 'POST',
            data: { 
                id: id,
                statusAtual: statusAtual
            },
            success: function(msg) {
                alert(sucesso);
            }
        }); 
    });
    
    //exclui categoria

    $(".excluirCategoria").click(function() {
      
        handle = $(this);
        acaoParaExcluir = $(this).attr("id");

        $("#openModalDelete").click();

    });
    
 $("#confirmExcluirAcao").click(function() {

        $.ajax({ 
            url: '../Configuracoes/deleteCategoria',
            type: 'POST',
            data: {
                id: acaoParaExcluir
            },
            success: function(msg) {

              var tr = $(handle).closest('tr');
                tr.fadeOut(600, function() {
                    tr.remove();
                });

            $('#myModalDeleteAcao').modal('toggle');
            $('#myModalDeleteAcao').modal('hide');


            }
        });

    });
    
      AddTableRow = function(){ 
        var newRow = $("<tr class='listas'>");
        var cols = "";
        
        if (contador == 0) {
            
            contador++;
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="text" class="form-control" placeholder="Descrição" id="addNome' + contador + '"</td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><input type="checkbox" checked disabled="disabled"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
            newRow.append(cols);
            $("#imbatman").append(newRow);
            return false;
        } else {
            
            var addDescricao = $("#addNome" + contador).val();
            
            addCategoriatb (addDescricao);
            
            contador++;
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="text" class="form-control" placeholder="Descrição" id="addNome' + contador + '"</td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><input type="checkbox" checked disabled="disabled"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
            newRow.append(cols);
            $("#imbatman").append(newRow);
            return false;
        }
    };
        
});

    function addCategoriatb(categoriaobjetos) {

    $.ajax({
        url: '../Configuracoes/insertCategoriatb',
        type: 'POST',
        data: {
            categoriaobjetos: categoriaobjetos,
            status: 1
        },
        success: function(msg) {
            
        }
    });

}