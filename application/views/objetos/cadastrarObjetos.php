<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--Inserçãode dados com as telas (cadastraobjetos_model;cadastraobjetoEntity,Controller Objetos)-->

    <head>

        <link href="../../assets/css/cadastrar-objetos.css" rel="stylesheet"/>

   
        <script>
            (function ($) {

                AddTableRow = function () {
                    var newRow = $("<tr class='listas'>");
                    var cols = "";

                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';

                    newRow.append(cols);
                    $("#playlistTable").append(newRow);

                    return false;
                };
            })(jQuery);

        </script>
    </head>
    <body>
        <form  method="post" action="http://localhost:9090/gaming/index.php/objetos/createObjetos" >

            <!--container-->
            <div class="col-md-10  container-style" id="elemento1">
                <div id="page-content" class="margembranca"> 



                    <div class="col-md-12" id="elemento1">

                        <div class="col-sm-6 col-lg-8" id="elemento1">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label" id="elemento1">Categoria</label>
                                <div class="col-md-5">
                                    <select class="col-md-4 form-control" id="categoria" name="categoria">
                                        <option value="1">Selecione a Categoria</option>
                                        <option value="2">Viagem</option>
                                        <option value="3">Eletrodomésticos</option>
                                        <option value="4">Eletroeletrónico</option>
                                        <option value="5">Celular/Smartphone</option>
                                        <option value="6">Computador/Tablet</option>
                                        <option value="7">Show/Entretenimento</option>
                                        <option value="8">Comida/Gastronomia</option>
                                        <option value="9">Bebida/Enogastronomia</option>
                                    </select>
                                </div> <br/>
                            </div><br/>
                        </div>

                        <div class="col-sm-6 col-lg-8" id="elemento1">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label"id="elemento1">Pergunta</label>
                                <div class="col-md-8">
                                    <input type="text" id="pergunta" name="pergunta" class="form-control "placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-8" id="elemento1">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control1-labe" id="elemento1">Resposta</label>
                                <div class="col-md-8">
                                    <div class = "checbox checboxcontainer" >
                                        <input type="radio" id="respdescritiva" name="respdescritiva" value="1"> Descritiva
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-10" id="elemento1">
                            <div class="col-md-10 pull-right" id="elemento1">
                                <label for="inputEmail" class="col-md-3 control1-labe" id="elemento1">Qtd.min.caracteres </label>
                                <div class="col-md-2" id="elemento1">
                                    <input type="number" id="qtdcaracteres" name="qtdcaracteres" class="form-control "placeholder="">  
                                </div>
                                <label for="inputEmail" class="col-md-6 control1-labe">Deixe em branco se não houver mínimo</label>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-10" id="elemento1">
                            <div class="col-md-10 pull-right" id="elemento1">
                                <label for="inputEmail" class="col-md-3 control1-labe" id="elemento1">Pontos</label>
                                <div class="col-md-2" id="elemento1">
                                    <input type="number" id="qtdpontos" name="qtdpontos" class="form-control "placeholder="">  
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-8" id="elemento1">
                            <div class="col-md-2">
                            </div>
                            <div class = "checbox checboxcontainer col-md-3">
                                <input type="radio" id="alternativas" name="alternativas" value="1"> Alternativas
                            </div> 
                        </div>

                        <div class="col-sm-6 col-lg-10" id="elemento1">
                            <div class="col-md-10 pull-right" id="elemento1">
                                <table id="playlistTable">
                                    <thead>
                                        <tr>
                                            <th style="border-width: thin; border-style: solid; border-color: black;">#</th>
                                            <th style="border-width: thin; border-style: solid; border-color: black;">Resposta</th>
                                            <th style="border-width: thin; border-style: solid; border-color: black;"><center>Certa</center></th>
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Ganha/Perde</th>
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Pontos</th>
                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/></center></th>
                                    </tr>
                                    </thead>


                                    <!--  <?php foreach ($objetoss as $objetoss) {
   ?>  -->

                                    <tbody>
                                        <tr>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objetos['pontos']; ?></td>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objetos['resposta']; ?></td>
                                            <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"checked /></center></th>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objetos['ganharperder']; ?></td>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"></td>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"><center> <span  class = "glyphicon glyphicon-ban-circle"= oculto-ária "true"> </center></span> </td>
                                    </tr>  

                                    <!--      <?php } ?>      -->

                                    </tbody>
                                </table>

                                <!--esse aqui é o botãoque adiciona linhas-->
                                <div class="col-md-2 pull-right adicional">
                                    <button onclick="AddTableRow()" type="button"><span class="glyphicon glyphicon-plus col-md-1" aria-hidden="true"></span></button>
                                </div>
                                <!--FIM esse aqui é o botãoque adiciona linhas--> <br/>
                            </div>
                        </div> 

                        <div class="col-sm-6 col-lg-10" id="elemento1">
                            <div class="col-md-10 pull-right" id="elemento1"
                                 <div class = "checbox checboxcontainer col-md-2" id="elemento1" >
                                    <input type="checkbox" id="respcorreta" name="respcorreta" value="1"> Mostrar resposta(s) correta(s) 
                                </div> 
                            </div>


                            <div class="col-sm-6 col-lg-10" id="elemento1"><br/>
                                <div class="col-md-10 pull-right" id="elemento1">
                                    <label for="inputEmail" class="col-md-3 control1-labe" id="elemento1">Numero de tentativas</label>
                                    <div class="col-md-2" id="elemento1">
                                        <input type="number" id="numtentativas" name="numtentativas" class="form-control "placeholder="">  
                                    </div>
                                    <label for="inputEmail" class="col-md-6 control1-labe">Mínimo1 vez</label>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-10" id="elemento1">
                                <div class="col-md-10 pull-right" id="elemento1">
                                    <label for="inputEmail" class="col-md-3 control1-labe" id="elemento1">Limite de tempo (seg.)</label>
                                    <div class="col-md-2" id="elemento1">
                                        <input type="number" id="limittempo" name="limittempo" class="form-control "placeholder="">  
                                    </div>
                                    <label for="inputEmail" class="col-md-6 control1-labe">Deixe em branco se não houver limite</label>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-8" id="elemento1">
                                <div class="col-md-2">
                                </div>
                                <div class = "checbox checboxcontainer col-md-3">
                                    <input type="radio" id="escala" name="escala"  value="1">  Escala
                                </div> 
                            </div>


                            <div class="col-sm-6 col-lg-10"id="elemento1"><br/>

                                <div class="col-md-10 pull-right" id="elemento1">
                                    <div class="col-md-4" id="elemento1">
                                        <label for="inputEmail" class="col-md-6 control1-labe" id="elemento1">Valor inicial/min.</label>
                                        <div class="col-md-5" id="elemento1">
                                            <input type="number" id="valorinicial" name="valorinicial" class="form-control "placeholder="">  
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="inputEmail" class="col-md-6 control1-labe">Incremento</label>
                                        <div class="col-md-4" id="elemento1">
                                            <input type="number" id="incremento" name="incremento" class="form-control "placeholder="">  
                                        </div>
                                    </div>

                                    <div class="col-md-4" id="elemento1" >
                                        <label for="inputEmail" class="col-md-6 control1-labe" id="elemento1">Valor final/máx.</label>
                                        <div class="col-md-5" id="elemento1">
                                            <input type="number" id="valorfinal" name="valorfinal" class="form-control "placeholder="">  
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!-- começo do ponto médio 
                            <div class=" col-md-12"> 
                                <div class="col-md-6 col-lg-10 pull-right">
                                    <div class="col-md-8">
                                        <input type="text" name="qtd." size="8" maxlength="8" id="qtd." placeholder=" Label incial"> 
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="qtd." size="8" maxlength="8" id="qtd." placeholder=" Label final"> 
                                    </div>
                                </div>
                            </div>
                            Fim  do ponto médio-->


                            <div class="col-sm-6 col-lg-10" id="elemento1"><br/>
                                <div class="col-md-2">
                                </div>
                                <div class = "checbox checboxcontainer col-md-4" id="elemento1">
                                    <input type="radio" id="pontmedio" name="pontmedio"  value="1"> Pontuação por Ponto Médio 
                                </div> 

                                <div class="col-md-3" id="elemento1">
                                    <label for="inputEmail" class="col-md-5 control1-labe" id="elemento1">Abaixo</label>
                                    <div class="col-md-5" id="elemento1">
                                        <input type="number" id="qtd." name="qtd." class="form-control "placeholder="">  
                                    </div>
                                    <div class="pull-right">
                                        <form action="demo_form.asp"><big><big> <big>  | </big> </big> </big></form>
                                    </div>
                                </div>

                                <div class="col-md-3"id="elemento1">
                                    <div class="col-md-6" >
                                        <input type="number" id="qtd." name="qtd." class="form-control "placeholder="">  
                                    </div>
                                    <label for="inputEmail" class="col-md-6 control1-labe pull-right" id="elemento1">Acima</label>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-10" id="elemento1">
                                <div class="col-md-2">
                                </div>
                                <div class = "checbox checboxcontainer col-md-4" id="elemento1">
                                    <input type="radio" id="pontescala" name="pontescala" value="1"> Pontuação conforme Escala 
                                </div> 
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-8" id="elemento1"><br/>
                            <div class="col-md-2">
                            </div>
                            <div class = "checbox checboxcontainer col-md-3">
                                <input type="radio" id="interacaofisicareal" name="interacaofisicareal" value="1">  Interção física/real
                            </div> 
                        </div>

                        <div class="col-sm-6 col-lg-10" id="elemento1"> <br/>
                            <div class="col-md-10 pull-right" id="elemento1">
                                <label for="inputEmail" class="col-md-1 control1-labe" id="elemento1">Resposta</label>
                                <div class="col-md-7" >
                                    <input type="varchar" id="resposta" name="resposta" class="form-control " placeholder=""> 
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-10" id="elemento1"> <br/>
                            <div class="col-md-10 pull-right" id="elemento1">
                                <label for="inputEmail" class="col-md-1 control1-labe" id="elemento1">Pontos</label>
                                <div class="col-md-2" >
                                    <input type="number" d="pontos" name="pontos" class="form-control " placeholder=""> 
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-10" id="elemento1"><br/>
                            <div class="col-md-2">
                            </div>
                            <div class = "checbox checboxcontainer col-md-4" id="elemento1">
                                <input type="checkbox" idid="habiiitaqr" name="habilitaqr" value="1"> Habilita QR-Code Reader
                            </div> 
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-8" id="elemento1"><br/>
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label"id="elemento1">Ícone</label>
                            <div class="col-md-8 ">
                                <a href="#" class="ico-search">Clique aqui para importar outra imagem</a>
                            </div>
                            <br/>
                        </div>
                    </div>

                    <div class="col-md-11">
                        <button type="button" class="btn btn-primary pull-right btnazul">Salvar e criar Ação</button>
                        <button class="btn btn-deafult pull-right btnazul">Salvar</button>
                        <button class="btn btn-deafult pull-right">Cancelar</button>
                    </div> 
                </div> 

                <!-- rodape -->
        </form>
    </body>
</html>

<!--FIM container-->