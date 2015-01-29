<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Editais
 *
 * @author luizcarlos.fonseca
 */
class Edital extends AppModel{
    public $name = 'Edital';
    public $useTable = 'tb_editais';
    public $primaryKey = 'cd_edital';
    
    public $validate = array(
        'nm_edital' => array(
            'nomeEdital' => array(
                'rule' => 'notEmpty',
                'message' => 'Campo obrigatório.'
            )
        )
    );
    
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );
}
