<?php

abstract class Figure {
    public $isBlack;
    public $figureType;

    public function __construct($isBlack) {
        $this->isBlack = $isBlack;
    }

    /** @noinspection PhpToStringReturnInspection */
    abstract public function __toString();
    abstract public function move($xFrom, $yFrom, $xTo, $yTo, $figures, $xCoords);
}
