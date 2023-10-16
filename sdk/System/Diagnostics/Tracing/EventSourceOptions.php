<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventSourceOptions extends \System\ValueType
{
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @field
	 */
	protected $keywords;
	/**
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @field
	 */
	protected $tags;
	/**
	 * @var \System\Diagnostics\Tracing\EventActivityOptions
	 * @field
	 */
	protected $activityOptions;
	/**
	 * @var \System\Byte
	 * @field
	 */
	protected $level;
	/**
	 * @var \System\Byte
	 * @field
	 */
	protected $opcode;
	/**
	 * @var \System\Byte
	 * @field
	 */
	protected $valuesSet;
	/**
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @property
	 */
	public $Level;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @property
	 */
	public $Opcode;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @property
	 */
	public $Keywords;
	/**
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @property
	 */
	public $Tags;
	/**
	 * @var \System\Diagnostics\Tracing\EventActivityOptions
	 * @property
	 */
	public $ActivityOptions;
	/**
	 * @return \System\Diagnostics\Tracing\EventLevel
	 */
	public  function get_Level(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventLevel $value
	 * @return \System\Void|void
	 */
	public  function set_Level($value){}
	/**
	 * @return \System\Diagnostics\Tracing\EventOpcode
	 */
	public  function get_Opcode(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventOpcode $value
	 * @return \System\Void|void
	 */
	public  function set_Opcode($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsOpcodeSet(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventKeywords
	 */
	public  function get_Keywords(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventKeywords $value
	 * @return \System\Void|void
	 */
	public  function set_Keywords($value){}
	/**
	 * @return \System\Diagnostics\Tracing\EventTags
	 */
	public  function get_Tags(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventTags $value
	 * @return \System\Void|void
	 */
	public  function set_Tags($value){}
	/**
	 * @return \System\Diagnostics\Tracing\EventActivityOptions
	 */
	public  function get_ActivityOptions(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventActivityOptions $value
	 * @return \System\Void|void
	 */
	public  function set_ActivityOptions($value){}
}
