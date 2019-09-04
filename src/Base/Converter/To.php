<?php declare(strict_types=1);

namespace Com\Math\Base\Converter;

class To implements ToInterface
{
    public function base(int $base) : FromInterface
    {
        $decimal = $this->decimal;
        
        while ($decimal) {
            $decimal = ($decimal - ($data[] = $decimal % $base)) / $base;
        }
        
        $this->from = $this->from ?? new From;
        $this->from->data = array_reverse($data);
        return $this->from;
    }
}
