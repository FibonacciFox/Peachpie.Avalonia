<?php
namespace System\Reflection;
final class AssemblyNameParts extends \System\ValueType
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public $_name;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Version
	 */
	public $_version;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public $_cultureName;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\AssemblyNameFlags
	 */
	public $_flags;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Byte[]
	 */
	public $_publicKeyOrToken;
	/**
	 * @param \System\String|string $name
	 * @param \System\Version $version
	 * @param \System\String|string $cultureName
	 * @param \System\Reflection\AssemblyNameFlags $flags
	 * @param \System\Byte $publicKeyOrToken
	 */
	public function __construct($name, $version, $cultureName, $flags, $publicKeyOrToken){}
}