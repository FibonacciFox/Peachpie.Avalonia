<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventSourceAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $Name;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Guid;
	/**
	 * @var \System\String
	 * @property
	 */
	public $LocalizationResources;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Name($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Guid(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Guid($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_LocalizationResources(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_LocalizationResources($value){}
}
