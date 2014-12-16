<h1>Adicionar Empresa</h1>
<?php
    echo $this->Form->create('Empresa', array('action' => 'add'));
    echo $this->Form->input('nm_empresa', array('label' => 'Empresa', 'type' => 'text'));
    echo $this->Form->input('ds_cnpj', array('label' => 'CNPJ', 'type' => 'text'));
    echo $this->Form->input('ds_logradouro', array('label' => 'Endereço', 'type' => 'text'));
    echo $this->Form->input('ds_bairro', array('label' => 'Bairro', 'type' => 'text'));
    echo $this->Form->input('ds_cidade', array('label' => 'Cidade', 'type' => 'text'));
    echo $this->Form->input('sg_uf', array('label' => 'UF', 'type' => 'text'));
    echo $this->Form->input('ds_cep', array('label' => 'CEP', 'type' => 'text'));
    echo $this->Form->input('ds_fone', array('label' => 'Telefone', 'type' => 'text'));
    echo $this->Form->end('Salvar');
?>
    

