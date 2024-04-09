<?php
namespace System\Reflection;
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
	private static function TryConvertPointer($srcObject, &$dstPtr){}
}