<?php

class Bishop extends Figure {
    public $figureType = 'Bishop';

    public function __toString() {
        return $this->isBlack ? '♝' : '♗';
    }
    
    public function move($xFrom, $yFrom, $xTo, $yTo, $figures, $xCoords) {
        return true;
    }
}
