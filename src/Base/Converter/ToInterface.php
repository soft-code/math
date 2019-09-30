<?php

namespace Com\Math\Base\Converter;

use Com\Math\Base\BaseInterface;

interface ToInterface extends BaseInterface
{
    public function base(int $base) : FromInterface;
}
