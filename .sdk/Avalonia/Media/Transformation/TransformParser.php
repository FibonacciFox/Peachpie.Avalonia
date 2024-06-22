<?php
namespace Avalonia\Media\Transformation;
class TransformParser extends \System\Object
{


	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\Transformation\TransformOperations
	 */
	public static function Parse($s){}
	private static function ParseFunction(&$functionPart, $function, &$builder){}
	private static function VerifyZeroOrUnit($function, &$value, $unit){}
	private static function VerifyZeroOrAngle($function, &$value){}
	private static function IsAngleUnit($unit){}
	private static function ThrowFormatInvalidValue($function, &$value){}
	private static function ThrowFormatInvalidValueCount($function, $count){}
	private static function ParseUnit(&$part){}
	private static function ParseTransformFunction(&$part){}
	private static function ToRadians(&$value){}
}