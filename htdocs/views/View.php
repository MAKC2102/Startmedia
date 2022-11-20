<?php

class View
{

    //подключение шаблона tpl
    public function render($tpl, $pageData) {

        include ROOT. $tpl;

    }

}