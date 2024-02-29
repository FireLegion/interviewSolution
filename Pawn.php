<?php

class Pawn extends Figure {
    public $figureType = 'Pawn';

    public function __toString() {
        return $this->isBlack ? '♟' : '♙';
    }

    public function move($xFrom, $yFrom, $xTo, $yTo, $figures, $xCoords) {
        $validMoves = [];
        $moveKeyFrom = array_search($xFrom, $xCoords);
        $moveKeyTo = array_search($xTo, $xCoords);
        $atStartPosition = false;
        if ($this->isBlack) {
            $moveDirection = -1;
            if ($yFrom == 7) {
                $atStartPosition = true;
            }
        } else {
            $moveDirection = 1;
            if ($yFrom == 2) {
                $atStartPosition = true;
            }
        }
        //шаг вперед, если там свободно
        if (!isset($figures[$xTo][$yFrom + $moveDirection])) {
            $validMoves[] = [$moveKeyFrom, $yFrom + $moveDirection];
        }
        //Ход из стартовой позиции, если перед пешкой никого нет
        if (!isset($figures[$xTo][$yFrom + $moveDirection]) && !isset($figures[$xTo][$yFrom + $moveDirection*2]) && $atStartPosition) {
            $validMoves[] = [$moveKeyFrom, $yFrom + $moveDirection*2];
        }
        //взятие по диагонали
        if ($moveKeyFrom != $moveKeyTo) {
            //если попытка хода не дальше 1 клетки по диагонали
            if (abs($moveKeyFrom-$moveKeyTo)==1) {
                //если в этой клетке есть фигура и это фигура другого цвета
                if (isset($figures[$xTo][$yFrom + $moveDirection]) && ($this->isBlack != $figures[$xTo][$yFrom + $moveDirection]->isBlack)) {
                    $validMoves[] = [$moveKeyTo, $yFrom + $moveDirection];
                }
            }
        }

        foreach ($validMoves as $moveCandidate) {
            if ($moveCandidate[0] == $moveKeyTo && $moveCandidate[1] == $yTo) {
                return true;
            }
        }
    }
}
