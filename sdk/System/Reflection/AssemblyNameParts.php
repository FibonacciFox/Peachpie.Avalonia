<?php
namespace System\Reflection;
/**
 */
class AssemblyNameParts extends \System\ValueType
{
	/**
	 * @var \System\String
	 * @field
	 */
	public readonly $_name;
	/**
	 * @var \System\Version
	 * @field
	 */
	public readonly $_version;
	/**
	 * @var \System\String
	 * @field
	 */
	public readonly $_cultureName;
	/**
	 * @var \System\Reflection\AssemblyNameFlags
	 * @field
	 */
	public readonly $_flags;
	/**
	 * @var \System\Byte[]
	 * @field
	 */
	public readonly $_publicKeyOrToken;
}
