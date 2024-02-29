<?php

class Knight extends Figure {
    public $figureType = 'Knight';

    public function __toString() {
        return $this->isBlack ? '♞' : '♘';
    }

    public function move($xFrom, $yFrom, $xTo, $yTo, $figures, $xCoords) {
        return true;
    }
}
