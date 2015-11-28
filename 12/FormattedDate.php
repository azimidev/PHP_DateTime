<?php
class FormattedDate extends DateTime
{
    protected $formatString = 'l, F j, Y';

    public function mdy()
    {
        $this->formatString = 'n/j/Y';
    }

    public function __toString()
    {
        return $this->format($this->formatString);
    }
}