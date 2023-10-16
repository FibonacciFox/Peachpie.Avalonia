<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait InvariantModeCasingMethodsOverride
{
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] protected static function ToLower_1($c){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function ToLower_2($s){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ToLower_3($source, $destination){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] protected static function ToUpper_1($c){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function ToUpper_2($s){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ToUpper_3($source, $destination){}
}
/**
 */
class InvariantModeCasing extends \System\Object
{
	/**
	 * @uses InvariantModeCasingMethodsOverride::ToLower_1 ($c)
	 * @uses InvariantModeCasingMethodsOverride::ToLower_2 ($s)
	 * @uses InvariantModeCasingMethodsOverride::ToLower_3 ($source, $destination)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToLower(mixed ...$args){}
	/**
	 * @uses InvariantModeCasingMethodsOverride::ToUpper_1 ($c)
	 * @uses InvariantModeCasingMethodsOverride::ToUpper_2 ($s)
	 * @uses InvariantModeCasingMethodsOverride::ToUpper_3 ($source, $destination)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToUpper(mixed ...$args){}
	/**
	 * @param \System\Char& $source
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetScalar($source, $index, $length){}
	/**
	 * @param \System\Char& $strA
	 * @param \System\Int32|int $lengthA
	 * @param \System\Char& $strB
	 * @param \System\Int32|int $lengthB
	 * @return \System\Int32|int
	 */
	protected static function CompareStringIgnoreCase($strA, $lengthA, $strB, $lengthB){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $value
	 * @return \System\Int32|int
	 */
	protected static function IndexOfIgnoreCase($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $value
	 * @return \System\Int32|int
	 */
	protected static function LastIndexOfIgnoreCase($source, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
