<?php
namespace Avalonia\Win32\DirectX;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait HANDLEMethodsOverride
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
class HANDLE extends \System\ValueType
{
	/**
	 * @var \System\Void*
	 * @field
	 */
	public readonly $Value;
	/**
	 * @var \Avalonia\Win32\DirectX\HANDLE
	 * @property
	 */
	public readonly $INVALID_VALUE;
	/**
	 * @var \Avalonia\Win32\DirectX\HANDLE
	 * @property
	 */
	public readonly $NULL;
	/**
	 * @return \Avalonia\Win32\DirectX\HANDLE
	 */
	public static function get_INVALID_VALUE(){}
	/**
	 * @return \Avalonia\Win32\DirectX\HANDLE
	 */
	public static function get_NULL(){}
	/**
	 * @param \Avalonia\Win32\DirectX\HANDLE $left
	 * @param \Avalonia\Win32\DirectX\HANDLE $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Win32\DirectX\HANDLE $left
	 * @param \Avalonia\Win32\DirectX\HANDLE $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses HANDLEMethodsOverride::Equals_1 ($obj)
	 * @uses HANDLEMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
