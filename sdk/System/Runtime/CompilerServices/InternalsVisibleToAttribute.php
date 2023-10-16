<?php
namespace System\Runtime\CompilerServices;
/**
 */
class InternalsVisibleToAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $AssemblyName;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $AllInternalsVisible;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_AssemblyName(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AllInternalsVisible(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_AllInternalsVisible($value){}
}
