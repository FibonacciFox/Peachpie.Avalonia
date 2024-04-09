<?php
namespace System\Reflection\Metadata;
class AssemblyExtensions extends \System\Object
{

	private static function InternalTryGetRawMetadata($assembly, $blob, $length){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\Byte*& &$blob
	 * @param \System\Int32& &$length
	 * @return \System\Boolean|bool
	 */
	public static function TryGetRawMetadata($assembly, &$blob, &$length){}
}