<?php declare(strict_types=1);

namespace Com\Math\Base\Converter;

class From implements FromInterface
{
    public function base(int $base) : ToInterface
    {
        $number = 0;
        foreach ($this->data as $v) {
            $number = $number * $base + $v;
        }
        
        $this->to = $this->to ?? new To;
        $this->to->decimal = $number;
        return $this->to;
    }
}
