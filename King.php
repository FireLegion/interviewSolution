<?php

class King extends Figure {
    public $figureType = 'King';

    public function __toString() {
        return $this->isBlack ? '♚' : '♔';
    }
    
    public function move($xFrom, $yFrom, $xTo, $yTo, $figures, $xCoords) {
        return true;
    }
}
