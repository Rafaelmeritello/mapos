<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title" style="margin: -20px 0 0">
                <span class="icon">
                    <i class="fas fa-wrench"></i>
                </span>
                <h5>Configurações do Sistema</h5>
            </div>
            
            <div class="widget-content nopadding tab-content">
                <?php echo $custom_error; ?>
                
                <form action="<?php echo current_url(); ?>" id="formConfigurar" method="post" class="form-horizontal">
                    
                    <div class="widget-content">
                        <!-- TEMA DO SISTEMA -->
                        <div class="control-group">
                            <label for="app_theme" class="control-label">Tema do Sistema</label>
                            <div class="controls">
                                <select name="app_theme" id="app_theme">
                                    <option value="default" <?= $configuration['app_theme'] == 'default' ? 'selected' : ''; ?>>Claro</option>
                                    <option value="white" <?= $configuration['app_theme'] == 'white' ? 'selected' : ''; ?>>Neve</option>
                                    <option value="dark" <?= $configuration['app_theme'] == 'dark' ? 'selected' : ''; ?>>Escuro</option>
                                </select>
                                <span class="help-inline">Selecione o tema que deseja usar no sistema.</span>
                            </div>
                        </div>

                        <!-- CONTROLE DE BAIXA RETROATIVA -->
                        <div class="control-group">
                            <label for="control_baixa" class="control-label">Controle de baixa retroativa</label>
                            <div class="controls">
                                <select name="control_baixa" id="control_baixa">
                                    <option value="1" <?= $configuration['control_baixa'] == '1' ? 'selected' : ''; ?>>Ativar</option>
                                    <option value="0" <?= $configuration['control_baixa'] == '0' ? 'selected' : ''; ?>>Desativar</option>
                                </select>
                                <span class="help-inline">Ativar ou desativar o controle de baixa financeira, com data retroativa.</span>
                            </div>
                        </div>

                        <!-- CONTROLE DE EDIÇÃO DE OS -->
                        <div class="control-group">
                            <label for="control_editos" class="control-label">Controle de edição de OS</label>
                            <div class="controls">
                                <select name="control_editos" id="control_editos">
                                    <option value="1" <?= $configuration['control_editos'] == '1' ? 'selected' : ''; ?>>Ativar</option>
                                    <option value="0" <?= $configuration['control_editos'] == '0' ? 'selected' : ''; ?>>Desativar</option>
                                </select>
                                <span class="help-inline">Ativar ou desativar a permissão para alterar ou excluir OS faturada e/ou cancelada.</span>
                            </div>
                        </div>

                        <!-- CONTROLE DE EDIÇÃO DE VENDAS -->
                        <div class="control-group">
                            <label for="control_edit_vendas" class="control-label">Controle de edição de Vendas</label>
                            <div class="controls">
                                <select name="control_edit_vendas" id="control_edit_vendas">
                                    <option value="1" <?= $configuration['control_edit_vendas'] == '1' ? 'selected' : ''; ?>>Ativar</option>
                                    <option value="0" <?= $configuration['control_edit_vendas'] == '0' ? 'selected' : ''; ?>>Desativar</option>
                                </select>
                                <span class="help-inline">Ativar ou desativar a permissão para alterar ou excluir vendas faturadas.</span>
                            </div>
                        </div>

                        <!-- CHAVE PIX -->
                        <div class="control-group">
                            <label for="pix_key" class="control-label">Chave Pix para Recebimento de Pagamentos</label>
                            <div class="controls">
                                <input type="text" name="pix_key" id="pix_key" value="<?= $configuration['pix_key']; ?>">
                                <span class="help-inline">Chave Pix para Recebimento de Pagamentos.</span>
                            </div>
                        </div>
                    </div>

                    <!-- BOTÃO DE SALVAR -->
                    <div class="form-actions">
                        <div class="span8">
                            <div class="span9">
                                <button type="submit" class="button btn btn-primary">
                                    <span class="button__icon"><i class='bx bx-save'></i></span>
                                    <span class="button__text2">Salvar Alterações</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
