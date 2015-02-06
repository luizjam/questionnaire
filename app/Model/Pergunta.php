<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pergunta
 *
 * @author luizcarlos.fonseca
 */
class Pergunta extends AppModel
{
    //put your code here
    public $name = 'Pergunta';
    public $useTable = 'tb_perguntas';
    public $primaryKey = 'cd_pergunta';
    
    public $validate = array(
        'ds_titulo' => array(
            'rule' => 'notEmpty',
            'message' => 'Campo obrigatório.'
        )
    );
    
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        ),
        'Edital' => array(
            'className' => 'Edital',
            'foreignKey' => 'cd_edital'
        )
    );
}
