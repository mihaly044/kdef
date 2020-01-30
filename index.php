<!--
The MIT License (MIT)

Copyright (c) 2020, Mihaly Meszaros

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
-->
<!DOCTYPE HTML>
<html lang="hu">
<head>
    <title>kdef</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<p>
<?php
require 'lib/Lim.php';
use kdef\Lim;
$lim = new Lim();
echo "\(".strval($lim)."\)<br/><br/>";
echo "<span class='spoiler'>\(".$lim->describe()."\)</span>"
?>
</p>
<small><a href="https://github.com/mihaly044" target="_blank">&copy; mihály mészáros</a>, pwd by <a href="https://www.mathjax.org" target="_blank">mathjax</a> <br/>
    Linux is better#1775</small>
</body>
</html>