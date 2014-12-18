<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa
 *
 * @author LuizCarlos
 */
class Empresa extends AppModel
{
    public $name = 'Empresa';
    public $useTable = 'tb_empresas';
    public $primaryKey = 'cd_empresa';
    
    public $validate = array(
        'nm_empresa' => array(
            'nomeEmpresa' => array(
                'rule' => 'notEmpty',
                'message' => 'Informação necessária.'
            )
        ),
        'ds_cnpj' => array(
            'cnpj' => array(
                'rule' => '/^[0-9]{14}$/i',
                'required' => 'true',
                'message' => 'Informe o CNPJ no formato 99999999999999.'
            ),
            'cnpj2' => array(
                'rule' => 'isUnique',
                'message' => 'Empresa já cadastrada'
            )
        ),
        'ds_logradouro' => array(
            'endereco' => array(
                'rule' => 'notEmpty',
                'required' => 'true',
                'message' => 'Informe o endereço.'
            )
        ),
        'ds_bairro' => array(
            'bairro' => array(
                'rule' => 'notEmpty',
                'message' => 'Informe o bairro.'
            )
        ),
        'ds_cidade' => array(
            'cidade' => array(
                'rule' => 'notEmpty',
                'message' => 'Informe a cidade.'
            )
        ),
        'ds_cep' => array(
            'cep_br' => array(
                'rule' => '/^[0-9]{8}$/i',
                'required' => 'true',
                'message' => 'Informe o CEP no formato 99999999'
            )
        )
    );
}
