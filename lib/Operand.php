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
class Operand
{
    private $lsign;
    private $rsign;
    private $value;
    private $isFinite;

    /**
     * Operand constructor.
     */
    function __construct()
    {
        $this->lsign = rand(0, 2);
        $this->rsign = rand(0, 2);

        if(rand(0, 1) == 1) {
            $this->value = rand(-20, 30);
            $this->isFinite = true;
        }
    }

    /**
     * @return int
     */
    public function getLsign(): int
    {
        return $this->lsign;
    }

    /**
     * @return int
     */
    public function getRsign(): int
    {
        return $this->rsign;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFinite() {
        return $this->isFinite;
    }

}