<?php
namespace System\Runtime\InteropServices;
/**
 */
class DefaultDllImportSearchPathsAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\InteropServices\DllImportSearchPath
	 * @property
	 */
	public readonly $Paths;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\InteropServices\DllImportSearchPath
	 */
	public  function get_Paths(){}
}
