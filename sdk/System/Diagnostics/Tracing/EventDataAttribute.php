<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventDataAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $Name;
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
	 * @return \System\Diagnostics\Tracing\EventLevel
	 */
	protected  function get_Level(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventOpcode
	 */
	protected  function get_Opcode(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventKeywords
	 */
	protected  function get_Keywords(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventTags
	 */
	protected  function get_Tags(){}
}
