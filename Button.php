<?php

namespace pdima88\twbsHelper;
use Nette\Utils\Html;

class Button {
    static function success($html) {
        return Html::el('button', ['class' => 'btn btn-success'])->addHtml($html);
    }

    
    
}