<?php

class Rook extends Figure {
    public $figureType = 'Rook';

    public function __toString() {
        return $this->isBlack ? '♜' : '♖';
    }
    
    public function move($xFrom, $yFrom, $xTo, $yTo, $figures, $xCoords) {
        return true;
    }
}
