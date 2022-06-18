<?php
require_once 'link.php';

echo (new Link())->setAttr('href', '/OOP_php/1.php')->setText('1')->show().'<br>';
echo (new Link())->setAttr('href', '/OOP_php/2.php')->setText('2')->show().'<br>';
echo (new Link())->setAttr('href', '/OOP_php/3.php')->setText('3')->show().'<br>';
echo (new Link())->setAttr('href', '/OOP_php/4.php')->setText('4')->show().'<br>';
echo (new Link())->setAttr('href', '/OOP_php/5.php')->setText('5')->show().'<br>';
