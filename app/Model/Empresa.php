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
            'vazio' => array(
                'rule' => 'notEmpty',
                'message' => 'Informação necessária.'
            ),
            'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'required' => 'true',
                'allowEmpty' => 'false',
                'message' => 'Informe o nome da empresa.'
            )
        ),
        'ds_cnpj' => array(
            'numeric' => array(
                'rule' => 'numeric',
                'required' => 'true',
                'allowEmpty' => 'false',
                'message' => 'Somente números.'
            )
        ),
        'ds_logradouro' => array(
            'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'required' => 'true',
                'allowEmpty' => 'false',
                'message' => 'Informe o endereço.'
            )
        ),
        'ds_bairro' => array(
            'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'required' => 'true',
                'allowEmpty' => 'false',
                'message' => 'Informe o bairro.'
            )
        ),
        'ds_cidade' => array(
            'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'required' => 'true',
                'allowEmpty' => 'false',
                'message' => 'Informe a cidade.'
            )
        )
    );
}
