<?php
namespace System\Reflection;
class AssemblyNameFormatter extends \System\Object
{


	/**
	 * @param \System\String|string $name
	 * @param \System\Version $version
	 * @param \System\String|string $cultureName
	 * @param \System\Byte $pkt
	 * @param \System\Reflection\AssemblyNameFlags $flags
	 * @param \System\Reflection\AssemblyContentType $contentType
	 * @return \System\String|string
	 */
	public static function ComputeDisplayName($name, $version, $cultureName, $pkt, $flags, $contentType){}
	private static function AppendQuoted($vsb, $s){}
}