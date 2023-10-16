<?php
namespace System\Runtime\CompilerServices;
/**
 */
class CastHelpers extends \System\Object
{
	/**
	 * @param \System\Int32& $tableData
	 * @param \System\UIntPtr $source
	 * @param \System\UIntPtr $target
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function KeyToBucket($tableData, $source, $target){}
	/**
	 * @param \System\Int32[] $table
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TableData($table){}
	/**
	 * @param \System\Int32& $tableData
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Element($tableData, $index){}
	/**
	 * @param \System\Int32& $tableData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HashShift($tableData){}
	/**
	 * @param \System\Int32& $tableData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TableMask($tableData){}
	/**
	 * @param \System\UIntPtr $source
	 * @param \System\UIntPtr $target
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGet($source, $target){}
	/**
	 * @param \System\Void* $toTypeHnd
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInstanceOfAny_NoCacheLookup($toTypeHnd, $obj){}
	/**
	 * @param \System\Void* $toTypeHnd
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ChkCastAny_NoCacheLookup($toTypeHnd, $obj){}
	/**
	 * @param \System\Void* $toTypeHnd
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Unbox_Helper($toTypeHnd, $obj){}
	/**
	 * @param \System\Object& $dst
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteBarrier($dst, $obj){}
	/**
	 * @param \System\Void* $toTypeHnd
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInstanceOfAny($toTypeHnd, $obj){}
	/**
	 * @param \System\Void* $toTypeHnd
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInstanceOfInterface($toTypeHnd, $obj){}
	/**
	 * @param \System\Void* $toTypeHnd
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInstanceOfClass($toTypeHnd, $obj){}
	/**
	 * @param \System\Void* $toTypeHnd
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInstance_Helper($toTypeHnd, $obj){}
	/**
	 * @param \System\Void* $toTypeHnd
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ChkCastAny($toTypeHnd, $obj){}
	/**
	 * @param \System\Void* $toTypeHnd
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ChkCast_Helper($toTypeHnd, $obj){}
	/**
	 * @param \System\Void* $toTypeHnd
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ChkCastInterface($toTypeHnd, $obj){}
	/**
	 * @param \System\Void* $toTypeHnd
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ChkCastClass($toTypeHnd, $obj){}
	/**
	 * @param \System\Void* $toTypeHnd
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ChkCastClassSpecial($toTypeHnd, $obj){}
	/**
	 * @param \System\Void* $toTypeHnd
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Unbox($toTypeHnd, $obj){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowArrayMismatchException(){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\IntPtr $index
	 * @param \System\Void* $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LdelemaRef($array, $index, $type){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\IntPtr $index
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StelemRef($array, $index, $obj){}
	/**
	 * @param \System\Object& $element
	 * @param \System\Void* $elementType
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StelemRef_Helper($element, $elementType, $obj){}
	/**
	 * @param \System\Object& $element
	 * @param \System\Void* $elementType
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StelemRef_Helper_NoCacheLookup($element, $elementType, $obj){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
