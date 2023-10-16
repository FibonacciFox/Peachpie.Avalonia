<?php
namespace System\Drawing\Printing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PrinterUnitConvertMethodsOverride
{
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Convert_1($value, $fromUnit, $toUnit){}
	/**
	 * @return \System\Drawing\Point
	 */
	#[MethodOverride] public static function Convert_2($value, $fromUnit, $toUnit){}
	/**
	 * @return \System\Drawing\Printing\Margins
	 */
	#[MethodOverride] public static function Convert_3($value, $fromUnit, $toUnit){}
	/**
	 * @return \System\Drawing\Rectangle
	 */
	#[MethodOverride] public static function Convert_4($value, $fromUnit, $toUnit){}
	/**
	 * @return \System\Drawing\Size
	 */
	#[MethodOverride] public static function Convert_5($value, $fromUnit, $toUnit){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Convert_6($value, $fromUnit, $toUnit){}
}
/**
 */
class PrinterUnitConvert extends \System\Object
{
	/**
	 * @uses PrinterUnitConvertMethodsOverride::Convert_1 ($value, $fromUnit, $toUnit)
	 * @uses PrinterUnitConvertMethodsOverride::Convert_2 ($value, $fromUnit, $toUnit)
	 * @uses PrinterUnitConvertMethodsOverride::Convert_3 ($value, $fromUnit, $toUnit)
	 * @uses PrinterUnitConvertMethodsOverride::Convert_4 ($value, $fromUnit, $toUnit)
	 * @uses PrinterUnitConvertMethodsOverride::Convert_5 ($value, $fromUnit, $toUnit)
	 * @uses PrinterUnitConvertMethodsOverride::Convert_6 ($value, $fromUnit, $toUnit)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Convert(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
