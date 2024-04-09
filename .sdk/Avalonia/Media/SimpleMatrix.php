<?php
namespace Avalonia\Media;
final class SimpleMatrix extends \System\ValueType
{

	/**
	 * @param \Avalonia\Media\PreciseEllipticArcHelper+EllipticalArc+SimpleMatrix $m
	 * @param \Avalonia\Point $p
	 * @return \Avalonia\Point
	 */
	public static function op_Multiply($m, $p){}
	/**
	 * @param \System\Double|double $a
	 * @param \System\Double|double $b
	 * @param \System\Double|double $c
	 * @param \System\Double|double $d
	 */
	public function __construct($a, $b, $c, $d){}
}