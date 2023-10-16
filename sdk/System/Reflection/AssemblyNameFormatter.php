<?php
namespace System\Reflection;
/**
 */
class AssemblyNameFormatter extends \System\Object
{
	/**
	 * @param \System\String|string $name
	 * @param \System\Version $version
	 * @param \System\String|string $cultureName
	 * @param \System\Byte[] $pkt
	 * @param \System\Reflection\AssemblyNameFlags $flags
	 * @param \System\Reflection\AssemblyContentType $contentType
	 * @return \System\String|string
	 */
	public static function ComputeDisplayName($name, $version, $cultureName, $pkt, $flags, $contentType){}
	/**
	 * @param \System\Text\ValueStringBuilder& $vsb
	 * @param \System\String|string $s
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AppendQuoted($vsb, $s){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
