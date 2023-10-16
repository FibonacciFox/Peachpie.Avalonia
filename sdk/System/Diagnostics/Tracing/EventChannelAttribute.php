<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventChannelAttribute extends \System\Attribute
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Enabled;
	/**
	 * @var \System\Diagnostics\Tracing\EventChannelType
	 * @property
	 */
	public $EventChannelType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Boolean
	 */
	public  function get_Enabled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Enabled($value){}
	/**
	 * @return \System\Diagnostics\Tracing\EventChannelType
	 */
	public  function get_EventChannelType(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventChannelType $value
	 * @return \System\Void|void
	 */
	public  function set_EventChannelType($value){}
}
