<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BinarySearchExtensionMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function BinarySearch_1($list, $value, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function BinarySearch_2($list, $index, $length, $value, $comparer){}
}
/**
 */
class BinarySearchExtension extends \System\Object
{
	/**
	 * @param \System\Int32|int $low
	 * @param \System\Int32|int $hi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMedian($low, $hi){}
	/**
	 * @uses BinarySearchExtensionMethodsOverride::BinarySearch_1 ($list, $value, $comparer)
	 * @uses BinarySearchExtensionMethodsOverride::BinarySearch_2 ($list, $index, $length, $value, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function BinarySearch(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
