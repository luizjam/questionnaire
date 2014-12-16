<h1>Adicionar Empresa</h1>
<?php
    echo $this->Form->create('Empresa', array('type' => 'get'));
    echo $this->Form->input('nm_empresa');
    echo $this->Form->input('ds_cnpj');
    echo $this->Form->input('ds_logradouro');
    echo $this->Form->input('ds_bairro');
    echo $this->Form->input('ds_cidade');
    echo $this->Form->input('sg_uf');
    echo $this->Form->input('ds_cep');
    echo $this->Form->input('ds_fone');
    echo $this->Form->end('Salvar');
    

