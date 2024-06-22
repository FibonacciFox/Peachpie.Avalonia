<?php
namespace System\Reflection;
final class NativeAssemblyNameParts extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Char*
	 */
	public $_pName;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	public $_major;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	public $_minor;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	public $_build;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	public $_revision;
	/**
	 * @field
	 * @var \System\Char*
	 */
	public $_pCultureName;
	/**
	 * @field
	 * @var \System\Byte*
	 */
	public $_pPublicKeyOrToken;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $_cbPublicKeyOrToken;
	/**
	 * @field
	 * @var \System\Reflection\AssemblyNameFlags
	 */
	public $_flags;
	/**
	 * @param \System\Version $version
	 * @param \System\UInt16 $defaultValue
	 * @return \System\Void|void
	 */
	public function SetVersion($version, $defaultValue){}
	/**
	 * @return \System\Version
	 */
	public function GetVersion(){}
}