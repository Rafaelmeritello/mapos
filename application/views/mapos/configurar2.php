<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title" style="margin: -20px 0 0">
                <span class="icon">
                    <i class="fas fa-wrench"></i>
                </span>
                <h5>Configurações do Sistema  </h5>
                      
            </div>

            <ul class="nav nav-tabs">
        
                <li><a data-toggle="tab" href="#menu1">Financeiro</a></li>
               
                <li><a data-toggle="tab" href="#menu3">Notificações</a></li>
              
                 <?php 
// Verifica se o usuário tem a permissão ID 1 (Admin)
if ($this->session->userdata('permissao') == 1) { 
?>
    <!-- Estas abas SÓ APARECEM para o Admin -->
    <!-- <li><a data-toggle="tab" href="#menu6">API</a></li> -->
    <!-- <li><a data-toggle="tab" href="#menu4">Atualizações</a></li> -->
<?php 
} 
?>
            </ul>
            <form action="<?php echo current_url(); ?>" id="formConfigurar" method="post" class="form-horizontal">
                <div class="widget-content nopadding tab-content">
                    <?php echo $custom_error; ?>
                    <!-- Menu Gerais -->
                    <div id="home" class="tab-pane fade in active">
                        <div class="control-group">
                            <label for="app_name" class="control-label">Nome do Sistema</label>
                            <div class="controls">
                                <input type="text" required name="app_name" value="<?= $configuration['app_name'] ?>">
                                <span class="help-inline">Nome do sistema</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="app_theme" class="control-label">Tema do Sistema</label>
                            <div class="controls">
                                <select name="app_theme" id="app_theme">
                                    <option value="default">Escuro</option>
                                    <option value="white" <?= $configuration['app_theme'] == 'white' ? 'selected' : ''; ?>>Claro</option>
                                    <option value="puredark" <?= $configuration['app_theme'] == 'puredark' ? 'selected' : ''; ?>>Pure dark</option>
                                    <option value="darkorange" <?= $configuration['app_theme'] == 'darkorange' ? 'selected' : ''; ?>>Dark orange</option>
                                    <option value="darkviolet" <?= $configuration['app_theme'] == 'darkviolet' ? 'selected' : ''; ?>>Dark violet</option>
                                    <option value="whitegreen" <?= $configuration['app_theme'] == 'whitegreen' ? 'selected' : ''; ?>>White green</option>
                                    <option value="whiteblack" <?= $configuration['app_theme'] == 'whiteblack' ? 'selected' : ''; ?>>White black</option>
                                </select>
                                <span class="help-inline">Selecione o tema que que deseja usar no sistema</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="per_page" class="control-label">Registros por Página</label>
                            <div class="controls">
                                <select name="per_page" id="theme">
                                    <option value="10">10</option>
                                    <option value="20" <?= $configuration['per_page'] == '20' ? 'selected' : ''; ?>>20</option>
                                    <option value="50" <?= $configuration['per_page'] == '50' ? 'selected' : ''; ?>>50</option>
                                    <option value="100" <?= $configuration['per_page'] == '100' ? 'selected' : ''; ?>>100</option>
                                </select>
                                <span class="help-inline">Selecione quantos registros deseja exibir nas listas</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="control_datatable" class="control-label">Visualização em DataTables</label>
                            <div class="controls">
                                <select name="control_datatable" id="control_datatable">
                                    <option value="1">Sim</option>
                                    <option value="0" <?= $configuration['control_datatable'] == '0' ? 'selected' : ''; ?>>Não</option>
                                </select>
                                <span class="help-inline">Ativar ou desativar a visualização em tabelas dinâmicas</span>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="span8">
                                <div class="span9">
                                    <button type="submit" class="button btn btn-primary">
                                    <span class="button__icon"><i class='bx bx-save'></i></span><span class="button__text2">Salvar Alterações</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Financeiro -->
                    <div id="menu1" class="tab-pane fade">
                        <div class="control-group">
                            <label for="control_baixa" class="control-label">Controle de baixa retroativa</label>
                            <div class="controls">
                                <select name="control_baixa" id="control_baixa">
                                    <option value="1">Ativar</option>
                                    <option value="0" <?= $configuration['control_baixa'] == '0' ? 'selected' : ''; ?>>Desativar</option>
                                </select>
                                <span class="help-inline">Ativar ou desativar o controle de baixa financeira, com data retroativa.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="control_editos" class="control-label">Controle de edição de OS</label>
                            <div class="controls">
                                <select name="control_editos" id="control_editos">
                                    <option value="1" <?= $configuration['control_editos'] == '0' ? 'selected' : ''; ?>>Ativar</option>
                                    <option value="0" <?= $configuration['control_editos'] == '0' ? 'selected' : ''; ?>>Desativar</option>
                                </select>
                                <span class="help-inline">Ativar ou desativar a permissão para alterar ou excluir OS faturada e/ou cancelada.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="control_edit_vendas" class="control-label">Controle de edição de Vendas</label>
                            <div class="controls">
                                <select name="control_edit_vendas" id="control_edit_vendas">
                                    <option value="1" <?= $configuration['control_edit_vendas'] == '0' ? 'selected' : ''; ?>>Ativar</option>
                                    <option value="0" <?= $configuration['control_edit_vendas'] == '0' ? 'selected' : ''; ?>>Desativar</option>
                                </select>
                                <span class="help-inline">Ativar ou desativar a permissão para alterar ou excluir vendas faturada.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="pix_key" class="control-label">Chave Pix para Recebimento de Pagamentos</label>
                            <div class="controls">
                                <input type="text" name="pix_key" value="<?= $configuration['pix_key'] ?>">
                                <span class="help-inline">Chave Pix para Recebimento de Pagamentos</span>
                            </div>
                        </div>

                        <!-- Configrações do EFI -->
                        <hr>
                        <h5 style="margin-left:10px;">Configrações do EFI (antiga GerenciaNet)</h5>
                        <div class="control-group">
                            <label for="EFI_PRODUCTION" class="control-label">Ambiente</label>
                            <div class="controls">
                                <select name="PAYMENT_GATEWAYS_EFI_PRODUCTION" id="EFI_PRODUCTION">
                                    <option value="false" <?= !filter_var($_ENV['PAYMENT_GATEWAYS_EFI_PRODUCTION'] ?? false, FILTER_VALIDATE_BOOLEAN) ? 'selected' : ''; ?>>Sandbox</option>
                                    <option value="true" <?= filter_var($_ENV['PAYMENT_GATEWAYS_EFI_PRODUCTION'] ?? false, FILTER_VALIDATE_BOOLEAN) ? 'selected' : ''; ?>>Produção</option>
                                </select>
                                <span class="help-inline">Sandbox é um ambiente para testes.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="EFI_CREDENTIAIS_CLIENT_ID" class="control-label">CLIENT_ID</label>
                            <div class="controls">
                                <input type="text" name="PAYMENT_GATEWAYS_EFI_CREDENTIAIS_CLIENT_ID" value="<?= $_ENV['PAYMENT_GATEWAYS_EFI_CREDENTIAIS_CLIENT_ID'] ?>" id="EFI_CREDENTIAIS_CLIENT_ID">
                                <span class="help-inline">Pode ser encontrado no menu <a href="https://app.sejaefi.com.br/api/aplicacoes" target="_blank" rel="noopener noreferrer">"API" -> "Aplicações"</a></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="EFI_CREDENTIAIS_CLIENT_SECRET" class="control-label">CLIENT_SECRET</label>
                            <div class="controls">
                                <input type="text" name="PAYMENT_GATEWAYS_EFI_CREDENTIAIS_CLIENT_SECRET" value="<?= $_ENV['PAYMENT_GATEWAYS_EFI_CREDENTIAIS_CLIENT_SECRET'] ?>" id="EFI_CREDENTIAIS_CLIENT_SECRET">
                                <span class="help-inline">Pode ser encontrado no menu <a href="https://app.sejaefi.com.br/api/aplicacoes" target="_blank" rel="noopener noreferrer">"API" -> "Aplicações"</a></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="EFI_BOLETO_EXPIRATION" class="control-label">Dias para vencimento do boleto</label>
                            <div class="controls">
                                <select name="PAYMENT_GATEWAYS_EFI_BOLETO_EXPIRATION" id="EFI_BOLETO_EXPIRATION">
                                    <?php for ($i = 1; $i <= 30; $i++) :
                                        $diasEFI = "P{$i}D";
                                        ?>
                                        <option value="<?= $diasEFI ?>" <?= $diasEFI == $_ENV['PAYMENT_GATEWAYS_EFI_BOLETO_EXPIRATION'] ? 'selected' : '' ?>><?= $i ?> dia<?= $i > 1 ? 's' : '' ?></option>
                                    <?php endfor; ?>
                                </select>
                                <span class="help-inline">A quantidade de dias selecionado será somado a data que a cobrança for gerada.</span>
                            </div>
                        </div>

                        <!-- Configrações do Mercado Pago -->
                        <hr>
                        <h5 style="margin-left:10px;">Configrações do Mercado Pago</h5>
                        <div class="control-group">
                            <label for="MERCADO_PAGO_CREDENTIALS_PUBLIC_KEY" class="control-label">PUBLIC_KEY</label>
                            <div class="controls">
                                <input type="text" name="PAYMENT_GATEWAYS_MERCADO_PAGO_CREDENTIALS_PUBLIC_KEY" value="<?= $_ENV['PAYMENT_GATEWAYS_MERCADO_PAGO_CREDENTIALS_PUBLIC_KEY'] ?>" id="MERCADO_PAGO_CREDENTIALS_PUBLIC_KEY">
                                <span class="help-inline">Pode ser encontrado no menu <a href="https://www.mercadopago.com.br/settings/account/credentials" target="_blank" rel="noopener noreferrer">"Seu Negócio" -> "Configurações" -> "Credenciais"</a></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="MERCADO_PAGO_CREDENTIALS_ACCESS_TOKEN" class="control-label">ACCESS_TOKEN</label>
                            <div class="controls">
                                <input type="text" name="PAYMENT_GATEWAYS_MERCADO_PAGO_CREDENTIALS_ACCESS_TOKEN" value="<?= $_ENV['PAYMENT_GATEWAYS_MERCADO_PAGO_CREDENTIALS_ACCESS_TOKEN'] ?>" id="MERCADO_PAGO_CREDENTIALS_ACCESS_TOKEN">
                                <span class="help-inline">Pode ser encontrado no menu <a href="https://www.mercadopago.com.br/settings/account/credentials" target="_blank" rel="noopener noreferrer">"Seu Negócio" -> "Configurações" -> "Credenciais"</a></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="MERCADO_PAGO_CREDENTIALS_CLIENT_ID" class="control-label">CLIENT_ID</label>
                            <div class="controls">
                                <input type="text" name="PAYMENT_GATEWAYS_MERCADO_PAGO_CREDENTIALS_CLIENT_ID" value="<?= $_ENV['PAYMENT_GATEWAYS_MERCADO_PAGO_CREDENTIALS_CLIENT_ID'] ?>" id="MERCADO_PAGO_CREDENTIALS_CLIENT_ID">
                                <span class="help-inline">Pode ser encontrado no menu <a href="https://www.mercadopago.com.br/settings/account/credentials" target="_blank" rel="noopener noreferrer">"Seu Negócio" -> "Configurações" -> "Credenciais"</a></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="MERCADO_PAGO_CREDENTIALS_CLIENT_SECRET" class="control-label">CLIENT_SECRET</label>
                            <div class="controls">
                                <input type="text" name="PAYMENT_GATEWAYS_MERCADO_PAGO_CREDENTIALS_CLIENT_SECRET" value="<?= $_ENV['PAYMENT_GATEWAYS_MERCADO_PAGO_CREDENTIALS_CLIENT_SECRET'] ?>" id="MERCADO_PAGO_CREDENTIALS_CLIENT_SECRET">
                                <span class="help-inline">Pode ser encontrado no menu <a href="https://www.mercadopago.com.br/settings/account/credentials" target="_blank" rel="noopener noreferrer">"Seu Negócio" -> "Configurações" -> "Credenciais"</a></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="MERCADO_PAGO_BOLETO_EXPIRATION" class="control-label">Dias para vencimento do boleto</label>
                            <div class="controls">
                                <select name="PAYMENT_GATEWAYS_MERCADO_PAGO_BOLETO_EXPIRATION" id="MERCADO_PAGO_BOLETO_EXPIRATION">
                                    <?php for ($i = 1; $i <= 30; $i++) :
                                        $diasMP = "P{$i}D";
                                        ?>
                                        <option value="<?= $diasMP ?>" <?= $diasMP == $_ENV['PAYMENT_GATEWAYS_MERCADO_PAGO_BOLETO_EXPIRATION'] ? 'selected' : '' ?>><?= $i ?> dia<?= $i > 1 ? 's' : '' ?></option>
                                    <?php endfor; ?>
                                </select>
                                <span class="help-inline">A quantidade de dias selecionado será somado a data que a cobrança for gerada.</span>
                            </div>
                        </div>

                        <!-- Configrações do ASAAS -->
                        <hr>
                        <h5 style="margin-left:10px;">Configrações do ASAAS</h5>
                        <div class="control-group">
                            <label for="ASAAS_PRODUCTION" class="control-label">Ambiente</label>
                            <div class="controls">
                                <select name="PAYMENT_GATEWAYS_ASAAS_PRODUCTION" id="ASAAS_PRODUCTION">
                                    <option value="false" <?= !filter_var($_ENV['PAYMENT_GATEWAYS_ASAAS_PRODUCTION'] ?? false, FILTER_VALIDATE_BOOLEAN) ? 'selected' : ''; ?>>Sandbox</option>
                                    <option value="true" <?= filter_var($_ENV['PAYMENT_GATEWAYS_ASAAS_PRODUCTION'] ?? false, FILTER_VALIDATE_BOOLEAN) ? 'selected' : ''; ?>>Produção</option>
                                </select>
                                <span class="help-inline">Sandbox é um ambiente para testes.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="ASAAS_NOTIFY" class="control-label">Notify</label>
                            <div class="controls">
                                <select name="PAYMENT_GATEWAYS_ASAAS_NOTIFY" id="ASAAS_NOTIFY">
                                    <option value="false" <?= !filter_var($_ENV['PAYMENT_GATEWAYS_ASAAS_NOTIFY'] ?? false, FILTER_VALIDATE_BOOLEAN) ? 'selected' : ''; ?>>Desativado</option>
                                    <option value="true" <?= filter_var($_ENV['PAYMENT_GATEWAYS_ASAAS_NOTIFY'] ?? false, FILTER_VALIDATE_BOOLEAN) ? 'selected' : ''; ?>>Ativado</option>
                                </select>
                                <span class="help-inline">Ativar ou desativar o Notify do Asaas.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="ASAAS_CREDENTIAIS_API_KEY" class="control-label">API_KEY</label>
                            <div class="controls">
                                <input type="text" name="PAYMENT_GATEWAYS_ASAAS_CREDENTIAIS_API_KEY" value="<?= $_ENV['PAYMENT_GATEWAYS_ASAAS_CREDENTIAIS_API_KEY'] ?>" id="ASAAS_CREDENTIAIS_API_KEY">
                                <span class="help-inline">Pode ser encontrado no menu "Minha Conta", clique em "Integração" e depois em "Gerar API Key"</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="ASAAS_BOLETO_EXPIRATION" class="control-label">Dias para vencimento do boleto</label>
                            <div class="controls">
                                <select name="PAYMENT_GATEWAYS_ASAAS_BOLETO_EXPIRATION" id="ASAAS_BOLETO_EXPIRATION">
                                    <?php for ($i = 1; $i <= 30; $i++) :
                                        $diasASAAS = "P{$i}D";
                                        ?>
                                        <option value="<?= $diasASAAS ?>" <?= $diasASAAS == $_ENV['PAYMENT_GATEWAYS_ASAAS_BOLETO_EXPIRATION'] ? 'selected' : '' ?>><?= $i ?> dia<?= $i > 1 ? 's' : '' ?></option>
                                    <?php endfor; ?>
                                </select>
                                <span class="help-inline">A quantidade de dias selecionado será somado a data que a cobrança for gerada.</span>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="span8">
                                <div class="span9">
                                  <button type="submit" class="button btn btn-primary">
                                  <span class="button__icon"><i class='bx bx-save'></i></span><span class="button__text2">Salvar Alterações</span></button>
                                </div>
                            </div>
                        </div>
                    </div>

                
                    <!-- Menu E-mail -->
                    <div id="menu7" class="tab-pane fade">
                        <div class="control-group">
                            <label for="EMAIL_PROTOCOL" class="control-label">Protocolo de E-mail</label>
                            <div class="controls">
                                <input type="text" name="EMAIL_PROTOCOL" value="<?= $_ENV['EMAIL_PROTOCOL'] ?>" id="EMAIL_PROTOCOL">
                                <span class="help-inline">Informe o protocolo que será utilizado</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="EMAIL_SMTP_HOST" class="control-label">Endereço do Host</label>
                            <div class="controls">
                                <input type="text" name="EMAIL_SMTP_HOST" value="<?= $_ENV['EMAIL_SMTP_HOST'] ?>" id="EMAIL_SMTP_HOST">
                                <span class="help-inline">Informe o endereço do host</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="EMAIL_SMTP_CRYPTO" class="control-label">Tipo de criptografia</label>
                            <div class="controls">
                                <select name="EMAIL_SMTP_CRYPTO" id="EMAIL_SMTP_CRYPTO">
                                    <option value="tls" <?= $_ENV['EMAIL_SMTP_CRYPTO'] == 'tls' ? 'selected' : ''; ?>>tls</option>
                                    <option value="ssl" <?= $_ENV['EMAIL_SMTP_CRYPTO'] == 'ssl' ? 'selected' : ''; ?>>ssl</option>
                                </select>
                                <span class="help-inline">Tipo de criptografia que será utilizada.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="EMAIL_SMTP_PORT" class="control-label">Porta</label>
                            <div class="controls">
                                <input type="text" name="EMAIL_SMTP_PORT" value="<?= $_ENV['EMAIL_SMTP_PORT'] ?>" id="EMAIL_SMTP_PORT">
                                <span class="help-inline">Informe a porta que será utilizada.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="EMAIL_SMTP_USER" class="control-label">Usuário</label>
                            <div class="controls">
                                <input type="text" name="EMAIL_SMTP_USER" value="<?= $_ENV['EMAIL_SMTP_USER'] ?>" id="EMAIL_SMTP_USER">
                                <span class="help-inline">Informe nome de usuáriodo e-mail.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="EMAIL_SMTP_PASS" class="control-label">Senha</label>
                            <div class="controls">
                                <input type="password" name="EMAIL_SMTP_PASS" value="<?= $_ENV['EMAIL_SMTP_PASS'] ?>" id="EMAIL_SMTP_PASS">
                                <span class="help-inline">Informe a senha do e-mail.</span>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="span8">
                                <div class="span9">
                                  <button type="submit" class="button btn btn-primary">
                                  <span class="button__icon"><i class='bx bx-save'></i></span><span class="button__text2">Salvar Alterações</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div id="modal-confirmaratualiza" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="<?php echo base_url() ?>index.php/clientes/excluir" method="post">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Atualização de sistema</h5>
        </div>
        <div class="modal-body">
            <h5 style="text-align: left">Deseja realmente fazer a atualização de sistema?</h5>
            <h7 style="text-align: left">Recomendamos que faça um backup antes de prosseguir!</h7>
            <h7 style="text-align: left"><br>Faça o backup dos seguintes arquivos pois os mesmo serão excluídos:</h7>
            <h7 style="text-align: left"><br>* ./assets/anexos</h7>
            <h7 style="text-align: left"><br>* ./assets/arquivos</h7>
        </div>
        <div class="modal-footer" style="display:flex;justify-content: center">
          <button class="button btn btn-mini btn-danger" data-dismiss="modal" aria-hidden="true"><span class="button__icon"><i class='bx bx-x' ></i></span> <span class="button__text2">Cancelar</span></button>
          <button id="update-mapos" type="button" class="button btn btn-warning"><span class="button__icon"><i class="bx bx-sync"></i></span><span class="button__text2">Atualizar</span></button>
        </div>
    </form>
</div>
<!-- Modal -->
<div id="modal-confirmabanco" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="<?php echo base_url() ?>index.php/clientes/excluir" method="post">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Atualização de sistema</h5>
        </div>
        <div class="modal-body">
            <h5 style="text-align: left">Deseja realmente fazer a atualização do banco de dados?</h5>
            <h7 style="text-align: left">Recomendamos que faça um backup antes de prosseguir!
                <a target="_blank" title="Fazer Bakup" class="btn btn-mini btn-inverse" href="<?php echo site_url() ?>/mapos/backup">Fazer Backup</a>
            </h7>
        </div>
        <div class="modal-footer" style="display:flex;justify-content: center">
          <button class="button btn btn-mini btn-danger" data-dismiss="modal" aria-hidden="true"><span class="button__icon"><i class='bx bx-x' ></i></span> <span class="button__text2">Cancelar</span></button>
          <button id="update-database" type="button" class="button btn btn-warning"><span class="button__icon"><i class="bx bx-sync"></i></span><span class="button__text2">Atualizar</span></button>
        </div>
    </form>
</div>
<script>
    $('#update-database').click(function() {
        window.location = "<?= site_url('mapos/atualizarBanco') ?>"
    });
    $('#update-mapos').click(function() {
        window.location = "<?= site_url('mapos/atualizarMapos') ?>"
    });
    $(document).ready(function() {
        $('#notifica_whats_select').change(function() {
            if ($(this).val() != "0")
                document.getElementById("notifica_whats").value += $(this).val();
            $(this).prop('selectedIndex', 0);
        });
    });
</script>
