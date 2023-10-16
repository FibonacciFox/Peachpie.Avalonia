<?php
namespace System\Reflection\Metadata;
/**
 */
class AssemblyExtensions extends \System\Object
{
	/**
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Byte*& $blob
	 * @param \System\Int32& $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalTryGetRawMetadata($assembly, $blob, $length){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\Byte*& $blob
	 * @param \System\Int32& $length
	 * @return \System\Boolean
	 */
	public static function TryGetRawMetadata($assembly, $blob, $length){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
