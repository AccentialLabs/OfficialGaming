<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link href="../../assets/css/cadastrar-f2.css" rel="stylesheet"/>
<script src="../../assets/js/views/cadastrarFuncionario.js"></script>    

<form  method="post" <?php  if (!empty($this->session->flashdata('editJogador'))) { echo 'action="../funcionario/editaFunctionario"'; }else{ echo 'action="../funcionario/createFuncionario"'; }?> >

    <div class="col-md-10  container-style" id="corpo-funcionario">
        <div id="page-content" class="margembranca pull-right"> 
                       
            <div class="col-md-12">
                <div class="col-sm-6 col-lg-5">
                    <label for="inputEmail" class="col-md-2 control-label">Nome</label>
                    <div class="col-md-8 pull-right" w>
                        <input type="text" class="form-control " id="nome" name="nome" placeholder="" required="required" value="<?php if(!empty($funcParaEdit)){ echo $funcParaEdit['nome']; }?>">
                        <br/>
                    </div>
                </div>
            </div>
            
            <!--ativo celular-->
            <div class="celular col-md-3" >
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
            </div>
            <!--FIM ativo celular-->

            <div class="col-md-12">
                <div class="col-sm-6 col-lg-5" >
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-2 control-label">Cargo</label>
                        <div class="col-md-8 pull-right">
                            <input type="text" class="form-control " id="cargo" name="cargo" placeholder="" required="required" value="<?php if(!empty($funcParaEdit)){ echo $funcParaEdit['cargo_id']; }?>">
                            <br/>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="col-sm-6 col-lg-5">
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-2 control-label">Departamento</label>
                        <div class="col-md-8 pull-right">
                            <input type="textl" class="form-control " id="departamento" name="departamento" placeholder="" required="required" value="<?php if(!empty($funcParaEdit)){ echo $funcParaEdit['departamento_id']; }?>">
                            <br/>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-5">
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-2 control-label">Unidade</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control " id="unidade"name="unidade"  placeholder="" required="required" value="<?php if(!empty($funcParaEdit)){ echo $funcParaEdit['unidade_id']; }?>">
                            <br/>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="col-md-12">
                <div class="col-sm-6 col-lg-5">
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-2 control-label">Endereço</label>
                        <div class="col-md-8 pull-right">
                            <input type="text" class="form-control " id="endereco" name="endereco" placeholder="" required="required" value="<?php if(!empty($funcParaEdit)){ echo $funcParaEdit['endereco']; }?>">
                            <br/>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Cidade</label>
                            <div class="col-md-8 pull-right">
                                <input type="text" class="form-control " id="cidade" name="cidade" placeholder="" required="required" value="<?php if(!empty($funcParaEdit)){ echo $funcParaEdit['cidade']; }?>">
                                <br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="inputEmagbvil" class="control-label">Estado</label>
                            </div>
                            <div class="col-md-8">
                                <select class="col-md-12 col-lg-12 form-control" id="estado" name="estado" required="required" value="<?php if(!empty($funcParaEdit)){ echo $funcParaEdit['estado']; }?>"> 
                                    <option>AC</option>
                                    <option>SP</option>
                                    <option>BR</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="inputEmail" class="col-md-2 control-label">País</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control " id="pais" name="pais" placeholder=""required="required" value="<?php if(!empty($funcParaEdit)){ echo $funcParaEdit['pais']; }?>">
                        </div>
                    </div>

                </div>


                <div class="col-md-12">

                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Telefone</label>
                            <div class="col-md-8 pull-right">
                                <input type="tel" class="form-control " id="telefone" name="telefone" placeholder="" required="required" value="<?php if(!empty($funcParaEdit)){ echo $funcParaEdit['telefone']; }?>">
                                <br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <div class="col-md-2">
                                <label for="inputEmail" class=" control-label">Ramal</label>
                            </div>
                            <div class="col-md-4">
                                <input type="number" class="form-control " id="ramal" name="ramal" placeholder="" value="<?php if(!empty($funcParaEdit)){ echo $funcParaEdit['ramal']; }?>" >
                                <br/>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="col-md-12">
                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Celular</label>
                            <div class="col-md-8 pull-right">
                                <input type="tel" class="form-control " id="celular" name="celular" placeholder="" value="<?php if(!empty($funcParaEdit)){ echo $funcParaEdit['celular']; }?>">
                                <br/>
                            </div>
                        </div>
                    </div>
                </div> 


                <div class="col-md-12">
                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-3 control-label">E-mail</label>
                            <div class="col-md-8 pull-right">
                                <input type="email" class="form-control " id="email" name="email" placeholder="" required="required" value="<?php if(!empty($funcParaEdit)){ echo $funcParaEdit['email']; }?>">
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Sexo</label>
                            <div class="col-md-8 pull-right">
                                <label>
                                    <input type="radio" value="1" id="sexo" name="sexo" >
                                    Masculino
                                </label>

                                <label>
                                    <input type="radio" value="0" id="sexo" name="sexo">
                                    Feminino
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="inputEmail" class="control-label">Data Nascimento</label>
                            </div>
                            <div class="col-md-6" >
                                <label class="unit11-1">
                                    <input name="nascimento" type="date"  id="month" value= " " class = "textbox70 form-control " value="<?php if(!empty($funcParaEdit)){ echo $funcParaEdit['datanascimento']; }?>"/>
                                </label>
                            </div>
                        </div>                            
                    </div> 
                    
                    <?php 
                    
                    //caso seja edição, deve-se ter um input com o id do usuário a ser editado
                    if(!empty($funcParaEdit)){ ?>
                    <input type="hidden" name="id" id="id" value="<?php echo $funcParaEdit['id']; ?>"
                    <?php }?>

                </div>

                <div class="col-md-12">
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Foto</label>
                            <div class="col-md-9 pull-right">
                                
                                <img src="" id="imgFuncionarioFoto" class="col-md-4"/>
                                    <a href="#" class="ico-search1" id="labelFucnionarioFoto">clique aqui para selecionar a imagem</a>
                                    <input type="file" id="funcionarioFoto" name="photo" class="hide"/>
                                    
                            </div>
                        </div>
                    </div>
                </div> 

                
                <div  class="col-md-12 hide">															
                    <div class="tabbable tabs-left">  
                        <div class="col-md-3">      			<!--Aqui começa a tab do lado esquerdo com tabela-->
                            <ul class ="nav nav-tabs nav-stacked"><!--Aqui começa o cabeçalho da tab-->
                                <li><a href="#tab1" data-toggle="tab">Pontos</a></li>
                                <li class="active"><a href="#tab2" data-toggle="tab">Conquistas</a></li>
                                <li><a href="#tab3" data-toggle="tab">Equipes</a></li>
                            </ul>     <!--Aqui Termina o cabeçalho da tab-->
                        </div>
                        <div class="col-md-9"> 
                            <div class="tab-content">

                                <div class="tab-pane" id="tab1">
                                    <p>Estou na seção 1</p>
                                </div> 

                                <!--layout de troca de (tab-pane)-->
                                <div class="tab-pane active" id="tab2">
                                    <div class="tab-pane" id="tab2">  
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover table-condensed">

                                                <thead>
                                                    <tr>
                                                        <th>Realizações</th> 
                                                        <th>Data aquisição</th>
                                                        <td><center><input type="checkbox" name="opcoes"  value="html"/></center></td>
                                                </tr>
                                                </thead>

                                                <tbody ng-repeat="membro in membroSede">

                                                    <?php foreach ($realizacoestab as $realizacoestab) {
                                                        ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                                                        <tr class="listas">
                                                            <td><?php echo $realizacoestab['realizacoes']; ?></td>  
                                                            <td><?php echo $realizacoestab['dataaquisicao']; ?></td>
                                                            <td><center><span  class ="glyphicon glyphicon-ban-circle" = oculto-ária "true" ></span></center></td>
                                                    </tr>
                                                <?php } ?> <!penultimo passo>

                                                </tbody>
                                            </table>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab3">
                                    <p>Hey, estou na seção 3</p>
                                </div>
                                <!--layout de troca de (tab-pane)-->

                            </div>
                        </div>
                    </div>							<!--Aqui termina a tab do lado esquerdo com tabela-->

                </div>

            </div>

            <!-- rodape -->
            <div>
                <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
                <button class="btn btn-deafult pull-right">Cancelar</button>
            </div>  

        </div>
    </div>
</form>
<!--FIM container-->