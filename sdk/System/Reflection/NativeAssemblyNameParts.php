<?php
namespace System\Reflection;
/**
 */
class NativeAssemblyNameParts extends \System\ValueType
{
	/**
	 * @var \System\Char*
	 * @field
	 */
	public $_pName;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $_major;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $_minor;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $_build;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $_revision;
	/**
	 * @var \System\Char*
	 * @field
	 */
	public $_pCultureName;
	/**
	 * @var \System\Byte*
	 * @field
	 */
	public $_pPublicKeyOrToken;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $_cbPublicKeyOrToken;
	/**
	 * @var \System\Reflection\AssemblyNameFlags
	 * @field
	 */
	public $_flags;
	/**
	 * @param \System\Version $version
	 * @param \System\UInt16 $defaultValue
	 * @return \System\Void|void
	 */
	public  function SetVersion($version, $defaultValue){}
	/**
	 * @return \System\Version
	 */
	public  function GetVersion(){}
}
