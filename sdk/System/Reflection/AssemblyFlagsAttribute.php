<?php
namespace System\Reflection;
/**
 */
class AssemblyFlagsAttribute extends \System\Attribute
{
	/**
	 * @var \System\UInt32
	 * @property
	 */
	public readonly $Flags;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $AssemblyFlags;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\UInt32
	 */
	public  function get_Flags(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_AssemblyFlags(){}
}
