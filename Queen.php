<?php

class Queen extends Figure {
    public $figureType = 'Queen';

    public function __toString() {
        return $this->isBlack ? '♛' : '♕';
    }
    
    public function move($xFrom, $yFrom, $xTo, $yTo, $figures, $xCoords) {
        return true;
    }
}
