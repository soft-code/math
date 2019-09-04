<?php declare(strict_types=1);

namespace Com\Math\Base;

use Com\Math\Base\Converter\From;
use Com\Math\Base\Converter\To;
use Com\Math\Base\Converter\FromInterface;
use Com\Math\Base\Converter\ToInterface;

class Converter implements ConverterInterface
{
    public function __construct(FromInterface $from = null, ToInterface $to = null)
    {
        $this->from = $from ?? new From;
        $this->to = $to ?? new To;
    }
    
    public function convert(int ...$args) : BaseInterface
    {
        $two = true; $args[1] ?? $two = false;
       
        $this->from->data = $args;
        $this->to->decimal = $args[0];
       
        return $two ? $this->from : $this->to;
    }
}
