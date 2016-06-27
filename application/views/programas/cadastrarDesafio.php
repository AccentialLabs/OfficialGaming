<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <link href="../../assets/css/cadastrar-desafio.css" rel="stylesheet"/>
        <script src="../../assets/js/views/cadastrarDesafio.js"></script> 
        <script src="../../assets/js/views/ajax/programasAjax.js"></script>
    <body>
        
        <form  method="post" action="../programas/createDesafio" >

        <!--container-->
        <div class="col-md-10  container-style ">
            <div id="page-content" class="margembranca "> 

                <div class="col-md-12" >

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                          
                                <label for="inputEmail" class="col-md-2 control-label">Desafio</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" id="nome" name="nome" class="form-control " placeholder="">
                                    <br/>
                                </div>
                          
                        </div>
                    </div>

                    <div class="col-md-1 pull-right celular">
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                            <label class="onoffswitch-label" for="myonoffswitch">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>

                    <!--Linha da Agência -->
                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-10">
                          
                                <label for="inputEmail" class="col-md-2 control-label">Vigência</label>
                                <div class="col-md-3">
                                    <input type="date" name="nascimento" id="datainicio" value=" " class= "textbox70"/>

                                    <div class="col-md-1 textpos"> 
                                        <p>a</p> 
                                    </div>
                                </div>

                                <div class="col-md-3 ">
                                    <input name="datatermino" type="date"  id="datatermino" value=" " class= "textbox70"/>
                                    <div class="col-md-1 textpos">
                                        <p>das</p>
                                    </div>
                                </div>

                                <div class="col-md-2 ">
                                    <input type="text" class="form-control " id="horainicio" name="horainicio" placeholder="00:00">
                                    <div class="col-md-4 textpos1">
                                        <p>ás</p>
                                    </div>
                                </div>

                                <div class="col-md-2 mudar">
                                    <input type="text" class="form-control " id="horatermino" name="horatermino" placeholder="00:00"> 
                                </div>

                       
                        </div>
                    </div>
                    <!--FIM Linha da Agência -->

                    <div class="col-sm-6 col-lg-10"> 
                        <label for="text" class="col-md-2 control1-labe" >Desafiante</label>
                        <div class="col-md-10" >
                            <div class = "checbox checboxcontainer" >
                                <input type="radio"  value="0" id="selecdesafianteequipe" name="selecdesafianteequipe" > Selecione o Desafiante
                                <div class="col-md-8 pull-right ">
                                    <select class="col-md-6" id="selecfuncionario" name="selecfuncionario">
                                        <option valie="1">Selecione o Funcionário</option>
                                        <option value="2">Viagem</option>
                                        <option value="3">Eletrodomésticos</option>
                                    </select>
                                </div>
                            </div>    
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-10"> 
                        <label for="inputEmail" class="col-md-2 control1-labe" ></label>
                        <div class="col-md-10" >
                            <div class = "checbox checboxcontainer" >
                                <input type="radio"  value="1" id="selecdesafianteequipe" name="selecdesafianteequipe"> Selecione a Equipe Desafiante
                                <div class="col-md-8 pull-right ">
                                    <select class="col-md-6" id="selecequipe" name="selecequipe">
                                        <option value="1">Selecione a Equipe</option>
                                        <option value="2">Viagem</option>
                                        <option value="3">Eletrodomésticos</option>
                                    </select>
                                </div>
                            </div>    
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-10"> <br/>
                        <label for="inputEmail" class="col-md-2 control1-labe" >Desafiados</label>
                        <div class="col-md-10" >
                            <div class = "checbox checboxcontainer" >
                                <input type="radio"  value="0" id="desafiantetodos" name="desafiantetodos"> Desafiante escolhe manualmente
                            </div>    
                            <div class = "checbox checboxcontainer" >
                                <input type="radio"  value="1" id="desafiantetodos" name="desafiantetodos"> Todos da(s) Equipes(s)
                            </div>   
                        </div>
                    </div>

                    <div class="col-md-10 corpotabequipes">
                        <div id="table-responsive" class="col-lg-10 pull-right tabelap">

                            <div class="table-responsive">
                                <table class="tablesorter">
                                    <thead>
                                        <tr>
                                            <th style="border-width: thin; border-style: solid; border-color: black;">Selecione a Equipe</th>
                                            <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                    </tr>
                                    </thead>
                                    <tbody>
            
                                <?php foreach ($equipestab as $equipestab) {     
                                    ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                                        
                                    <tr>
                                         <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipestab['equipes'];?></td>
                                         <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="cep" class="statusCheckbox" id="<?php echo $equipestab['id']; ?>" value="<?php echo $equipestab['status']; ?>" <?php
                                         if ($equipestab['status'] == 1) {
                                    echo "checked";
                                }
                                ?> /> </center> </td>
                                    </tr>
                                <?php }?> <!penultimo passo>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5">
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="radio" value="0" id="definirmanualmente" name="definirmanualmente"> Definir manualmente
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 ">    <br/>
                        <div class="col-sm-6 col-lg-9 ">
                            
                                <label for="inputEmail" class="col-md-2 control-label">Objetos</label>
                                <div class="col-md-10 corpotabobjetos">
                                    <div id="table-responsive" class="col-lg-12 pull-right tabelap">
                                        <table class="tablesorter">
                                            <thead>
                                                <tr>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Objetos</th>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center>Categoria</center></th>
                                            <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php foreach ($objetos as $objetos) {     
                                    ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                                                
                                                <tr>
                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objetos['perguntas'];?></td>
                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objetos['categoria'];?></td>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="cep" class="statusCheckbox" id="<?php echo $objetos['id']; ?>" value="<?php echo $objetos['status']; ?>" <?php
                                         if ($objetos['status'] == 1) {
                                    echo "checked";
                                }
                                ?> /> </center></td>
                                            </tr>
                                             <?php }?> <!penultimo passo>
                         
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                          
                        </div>
                    </div>
                    
                     <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                           
                                <label for="inputEmail" class="col-md-2 control-label">Interação</label>
                                <div class="col-md-8 pull-right">
                                    <input type="radio"  value="0" name="identificada" name="identificada" checked> Identificada
                                </div>
                                <div class="col-md-8 pull-right">
                                    <input type="radio"  value="0" id="anonima" name="anonima"> Anônima(resposta através da web)
                                </div>
                                <div class="col-md-8 pull-right">
                                    <input type="radio"  value="0" id="desafiadoescolhe" name="desafiadoescolhe"> Deixar Desafiado(s) escolher(em)
                                </div>
                          
                        </div>
                         
                            <div class="col-sm-6 col-lg-5" >
                           
                                <label for="inputEmail" class="col-md-2 control-label">Obrigatório</label>
                                <div class="col-md-8 pull-right">
                                    <input type="radio"  value="0" id="obrigatorio" name="obrigatorio"> Sim
                                </div>
                                 <div class="col-md-8 pull-right">
                                     <input type="radio"  value="1" id="obrigatorio" name="obrigatorio"> Não
                                </div>
                            </div>
                     
                    </div> 
                    
                     <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10" >
                            
                                <label for="inputEmail" class="col-md-2 control-label"> Pontuação </br>Extra para</br>Desafiante</label>
                                <div class="col-md-10 pull-right">
                                    <input type="checkbox"  value="0" id="" name="pontuacaoextra" checked> Recebe os pontos das respostas/Interações erradas
                                </div>
                                <div class="col-md-2">
                                     Perde 
                                </div>
                                 <div class="col-md-7 verbocx">
                                     <input type="number" name="perde" size="10" maxlength="8" id="perde" placeholder=""> pontos se não receber nenhuma interação
                                </div>
                               
                                <div class="col-md-2">
                                     Ganha
                                </div>
                                 <div class="col-md-7 verbocx">
                                     <input type="number" name="ganha" size="10" maxlength="8" id="ganha" placeholder=""> pontos se receber interação
                                </div>
                           
                        </div> 

                      <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-5" >
                           
                                <label for="inputEmail" class="col-md-3 control-label">Dica de tela</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" id="dicatela" name="dicatela" class="form-control " placeholder="">
                                    <br/>
                                </div>
                           
                        </div>
                    </div>

                </div>
            </div>

                <!-- linha de codigo para o onoffswit-->
                  <input type="hidden" name="status" id="status"/>
                
                <!-- rodape -->
            <div>
                <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
                <button class="btn btn-deafult pull-right">Cancelar</button>
            </div> 

          </div>
    </div>
        
</form>
</body>
</html>

<!--FIM container-->