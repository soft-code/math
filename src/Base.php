<?php declare(strict_types=1);

namespace Com\Math;

use Com\Math\Base\Converter;
use Com\Math\Base\ConverterInterface;
use Com\Math\Base\BaseInterface;

class Base implements MathInterface
{
    public function __construct(ConverterInterface $converter = null)
    {
        $this->converter = $converter ?? new Converter;
    }
    
    public function convert(int ...$args) : BaseInterface
    {
        return $this->converter->convert(...$args);
    }
}
