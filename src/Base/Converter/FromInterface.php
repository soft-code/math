<?php

namespace Com\Math\Base\Converter;

use Com\Math\Base\BaseInterface;

interface FromInterface extends BaseInterface
{
    public function base(int $base) : ToInterface;
}
