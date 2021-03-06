<?php

/**
 * @copyright Copyright (c) 2018 Carlos Ramos
 * @package ktaris-cfdi
 * @version 0.1.1
 */

namespace ktaris\cfdi\complemento\pago10;

use ktaris\cfdi\components\BaseModel;

class Pagos extends BaseModel
{
    public $Version;

    public function rules()
    {
        return [
            [['Version'], 'safe'],
        ];
    }

    protected function atributosPropiosParaJson()
    {
        return [
            'Version',
        ];
    }
}
