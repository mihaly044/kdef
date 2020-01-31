<?php
/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2020, Mihaly Meszaros
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/
namespace kdef;
require 'Operand.php';
require 'Constants.php';

/**
 * Class Lim
 * @package lib
 */
class Lim
{
    /**
     * @var Operand
     */
    private $v1;

    /**
     * @var Operand
     */
    private $v2;

    /**
     * Lim constructor.
     */
    function __construct()
    {
        $this->v1 = new Operand();
        $this->v2 = new Operand();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $str = 'lim_{x\\to';

        $v1ls = $this->v1->getLsign();
        $v1rs = $this->v1->getRsign();
        $v2ls = $this->v2->getLsign();

        if($this->v1->isFinite()) {
            $str .= $this->v1->getValue();
            if($v1rs == Constants::SIGN_NEGATIVE)
                $str .= '^-';
            else if($v1ls == Constants::SIGN_POSITIVE)
                $str .= '^+';
        } else {
            if($v1ls == Constants::SIGN_NEGATIVE)
                $str .= '-';
            $str .= '\\infty';
        }

        $str .= '}f(x)=';

        if($this->v2->isFinite())
            $str .= $this->v2->getValue();
        else {
            if($v2ls == Constants::SIGN_NEGATIVE)
                $str .= '-';
            $str .= '\\infty';
        }

        return $str;
    }

    public function describe() {
        $v1ls = $this->v1->getLsign();
        $v1rs = $this->v1->getRsign();
        $v2ls = $this->v2->getLsign();

        $str = '\\forall ';

        if($this->v2->isFinite())
            $str .= '\\varepsilon > 0 : \\exists \\delta > 0 ';
        else
            $str .= 'K \\epsilon \\mathbb{R} : \\exists N \\epsilon \\mathbb{R}';

        $str .= '\\text{, hogy ha } ';

        if($this->v1->isFinite()) {
            $v1val = $this->v1->getValue();
            if($v1val < 0)
                $x0 = "($v1val)";
            else
                $x0 = $v1val;

            switch ($v1rs) {
                case Constants::SIGN_NEGATIVE:
                    $str .= "$x0-\\delta < x < $x0";
                    break;
                case Constants::SIGN_POSITIVE:
                    $str .= "$x0 < x < $x0+\\delta";
                    break;
                case Constants::SIGN_NEUTRAL:
                    $str .= "0 < |x-$x0| < \\delta";
                    break;
            }
        } else {
            if($v1ls == Constants::SIGN_NEGATIVE)
                $str .=  'x < N';
            else
                $str .= 'x > N';
        }

        $str .= '\\text{ akkor }';

        if($this->v2->isFinite()) {
            $str .= '|f(x)-';
            $v2val = $this->v2->getValue();
            if($v2val < 0)
                $a = "($v2val)";
            else
                $a = $v2val;

            $str .= "$a| < \\varepsilon";
        } else {
            if($v2ls == Constants::SIGN_NEGATIVE)
                $str .= 'f(x) < K';
            else
                $str .= 'f(x) > K';
        }

        return $str;
    }
}