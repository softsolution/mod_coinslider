<?php
function info_module_mod_coinslider(){
        $_module['title']         = 'C������-�������� Coin Slider';
        $_module['name']          = 'C������-�������� Coin Slider';
        $_module['description']   = 'C������-�������� Coin Slider';
        $_module['link']          = 'mod_coinslider';
        $_module['position']      = 'maintop';
        $_module['author']        = 'soft-solution.ru';
        $_module['version']       = '1';

        $_module['config'] = array();
        $_module['config']['shownum']='5';
        $_module['config']['album_id']='0';
        $_module['config']['effect']='random';
        $_module['config']['width']='565';
        $_module['config']['height']='290';
        $_module['config']['showtitle']='1';
        $_module['config']['shownav']='1';


        return $_module;

    }

    function install_module_mod_coinslider(){

        return true;

    }

    function upgrade_module_mod_coinslider(){

        return true;

    }

?>