<?php

namespace Com\Math\Base;

interface ConverterInterface extends BaseInterface
{
    public function convert(int ...$decimal) : BaseInterface;
}
