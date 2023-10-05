<?php
namespace Avalonia\Data\Core;
/**
 */
class ClrPropertyInfo extends \System\Object implements 
	\Avalonia\Data\Core\IPropertyInfo
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $PropertyType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanSet;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanGet;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Type
	 */
	public  function get_PropertyType(){}
	/**
	 * @param \System\Object|object $target
	 * @return \System\Object|object
	 */
	public  function Get($target){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function Set($target, $value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanSet(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanGet(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
