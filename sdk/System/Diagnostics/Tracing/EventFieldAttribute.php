<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventFieldAttribute extends \System\Attribute
{
	/**
	 * @var \System\Diagnostics\Tracing\EventFieldTags
	 * @property
	 */
	public $Tags;
	/**
	 * @var \System\Diagnostics\Tracing\EventFieldFormat
	 * @property
	 */
	public $Format;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Diagnostics\Tracing\EventFieldTags
	 */
	public  function get_Tags(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventFieldTags $value
	 * @return \System\Void|void
	 */
	public  function set_Tags($value){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_Name(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventFieldFormat
	 */
	public  function get_Format(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventFieldFormat $value
	 * @return \System\Void|void
	 */
	public  function set_Format($value){}
}
