<?php
namespace Avalonia\Win32\WinRT;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WinRTColorMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class WinRTColor extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $A;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $R;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $G;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $B;
	/**
	 * @param \System\Byte $a
	 * @param \System\Byte $r
	 * @param \System\Byte $g
	 * @param \System\Byte $b
	 * @return \Avalonia\Win32\WinRT\WinRTColor
	 */
	public static function FromArgb($a, $r, $g, $b){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function ToAvalonia(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Win32\WinRT\WinRTColor $left
	 * @param \Avalonia\Win32\WinRT\WinRTColor $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Win32\WinRT\WinRTColor $left
	 * @param \Avalonia\Win32\WinRT\WinRTColor $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses WinRTColorMethodsOverride::Equals_1 ($obj)
	 * @uses WinRTColorMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
