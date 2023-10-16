<?php
namespace System\Reflection;
/**
 */
class InvokeUtils extends \System\Object
{
	/**
	 * @param \System\Type $srcType
	 * @param \System\Reflection\CorElementType $srcElementType
	 * @param \System\Object|object $srcObject
	 * @param \System\Type $dstType
	 * @param \System\Reflection\CorElementType $dstElementType
	 * @return \System\Object|object
	 */
	public static function ConvertOrWiden($srcType, $srcElementType, $srcObject, $dstType, $dstElementType){}
	/**
	 * @param \System\Object|object $srcObject
	 * @param \System\Object& $dstPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertPointer($srcObject, $dstPtr){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
