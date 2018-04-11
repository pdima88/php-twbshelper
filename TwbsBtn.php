<?php

namespace pdima88\twbsHelper;
use Nette\Utils\Html;

class TwbsBtn {
    static function success($html, $classNames) {
        return self::btn($html, 'btn btn-success '.$classNames);
    }

    static function danger($html, $classNames) {
        return self::btn($html, 'btn btn-danger '.$classNames);
    }

    static function dangerXs($html, $classNames) {
        return self::danger($html, 'btn-xs '.$classNames);
    }

    static function warning($html, $classNames) {
        return self::btn($html, 'btn btn-warning '.$classNames);
    }

    static function btn($html, $classNames = null) {
        return Html::el('button', ['class' => $classNames])->addHtml($html);
    }


    
}