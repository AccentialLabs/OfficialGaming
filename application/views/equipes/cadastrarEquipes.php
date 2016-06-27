<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


        <!--configurações do Gantt-->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css" rel="stylesheet" type="text/css">
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="../../assets/js/cadastrar-equipes.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <script src="../../assets/js/jquery.fn.gantt.js"></script>

        <!--fim das configurações do Gantt-->

        <link href="../../assets/css/cadastrar-equipes.css" rel="stylesheet"/>
        <script src="../../assets/js/cadastrar-equipes2.js"></script> 
        
        <script src="../../assets/js/views/ajax/cadastrarEquipesAjax.js"></script>
        
        <form  method="post" action="../equipes/createEquipes">
    <body>
     
        <!--container-->
        <div class="col-md-10  container-style">
            <div id="page-content" class="margembranca"> 

                <div class="col-md-12" >

                    <div  class="col-md-12">

                        <div class = "checbox checboxcontainer">
                            <label><input type="checkbox"  VALUE="" checked> Campo do Cadastro </label>
                        </div> 

                        <div class="col-md-2 checboxx " >

                            <div class = "checbox checboxcontainer">
                                <label><input type="checkbox"  VALUE="" checked> Cargo </label>
                            </div> 

                            <div class = "checbox checboxcontainer">
                                <label><input type="checkbox"  VALUE="" checked> Departamento</label>
                            </div> 
                            <div class = "checbox disabled checboxcontainer">
                                <label><input type="checkbox"  VALUE="" checked> Unidade</label>
                            </div> 

                        </div>


                        <div  class="col-md-3 " >

                            <div class = "checbox checboxcontainer">
                                <label><input type="checkbox"  VALUE="" checked> Cidade </label>
                            </div>  
                            <div class = "checbox checboxcontainer">
                                <label><input type="checkbox"  VALUE="" checked> Estado</label>
                            </div> 
                            <div class = "checbox disabled checboxcontainer">
                                <label><input type="checkbox"  VALUE="" checked > País</label>
                            </div> 
                        </div>

                    </div>

                    <!--primeiro radiobox-->
                    <div class="col-sm-6 col-lg-7" >
                        <div class="col-md-5 ">
                            <label>
                                <input type="radio" name="todos" value="equipes"> 
                                Aleatório
                            </label>
                        </div>
                    </div>
                    <!--Fim doo primeiro radiobox-->

                    <div class="col-md-12" >
                        <div class="col-sm-1 col-lg-5"  >
                            <div class="col-md-7">
                                  Qtd.Equipes   
                                    <input class="input-mini" type="text">
                                                      
                            </div>
                        </div>

                        <div class="col-sm-1 col-lg-7" >
                            <div class="col-md-7 " >
                                Nome das Equipes (prefixo)
                                    <input class="input-mini pull-right" type="text"style="border: 1px solid blue;">  
                                
                            </div>

                            <div class="col-sm-5 col-lg-5 pull-right" >
                                <div class="col-md-1 " >
                                     +Sequencial
                                 
                                    <br/>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--segundo radiobox-->
                    <div class="col-sm-6 col-lg-6" >
                        <div class="col-md-5 ">
                            <label>
                                <input type="radio" checked name="todos" value="equipes"> 
                                Manual
                            </label>
                        </div>
                    </div>
                    <!--Fim dosegundo radiobox-->



                    <div  class="col-md-12 ">	<!--esse aqui muda a lagura da tabela toda-->														
                        <div class="tabbable tabs-left">  

                            <div class="col-md-10"> <!--esse aqui muda a lagura de dentro da tabela-->
                                <div class="tab-content">


                                    <!--aqui começa o restante da tabela-->
                                    <div id="Layer1" class="positiontab">
                                        <div class="table-responsive">
                                            <table class="tablesorter">
                                                <thead>
                                                    <tr>
                                                        <th style="border-width: thin; border-style: solid; border-color: black;">Nome</th>
                                                        <th style="border-width: thin; border-style: solid; border-color: black;">Cargo</th>
                                                        <th style="border-width: thin; border-style: solid; border-color: black;">Departamento</th>
                                                        <th style="border-width: thin; border-style: solid; border-color: black;">Unidade</th>
                                                        <th style="border-width: thin; border-style: solid; border-color: black;">Cidade</th>
                                                        <th style="border-width: thin; border-style: solid; border-color: black;">Estado</th>
                                                        <th style="border-width: thin; border-style: solid; border-color: black;">Pais</th>
                                                        <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                                </tr>
                                                </thead>
                                                <tbody ng-repeat="membro in membroSede">
                                                    
                                            <?php foreach ($usuariotb as $usuariotb) {     
                                              ?> 
                                                    
                                              <tr>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['nome'];?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['cargo'];?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['departamento'];?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><?php echo $usuariotb['unidade'];?></center></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['cidade'];?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['estado'];?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['pais'];?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="cep" class="statusCheckbox" id="<?php echo $usuariotb['id']; ?>" value="<?php echo $usuariotb['status']; ?>" <?php
                                         if ($usuariotb['status'] == 1) {
                                    echo "checked";
                                }
                                ?> /> </center></td>
                                              </tr>
                                             
                                            <?php }?> 
                                            
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!--aqui termina a tabela-->

                                    <!--ultima caixa-->
                                    <div class="col-sm-1 col-lg-9"  >
                                        <div class="col-md-7">
                                              Nome da Equipe  
                                                <input class="input-mini" type="text">
                                                                
                                        </div>
                                    </div>
                                    <!-- Fim da ultima caixa -->

                                </div>
                            </div>
                        </div>							<!--Aqui termina a tab do lado esquerdo com tabela-->
                    </div>

     <!--DIV QUE CHAMA O GANTT => -->    <!--<div class="gantt"></div>-->

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-6" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-3 control-label">Tema para Equipe</label>
                                <div class="col-md-8 pull-right">

                                    <select class="span1">
                                        <option>Selecione o Tema (MOD/Pack)</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- rodape -->
                <div>
                    <button type="submit" class="btn btn-primary pull-right btnazul">Criar Equipes</button>
                    <button class="btn btn-deafult pull-right">Cancelar</button>
                </div> 

            </div>
        </div>
</form>

<!--FIM container-->


