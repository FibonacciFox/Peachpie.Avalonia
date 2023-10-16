<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventAttribute extends \System\Attribute
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $EventId;
	/**
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @property
	 */
	public $Level;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @property
	 */
	public $Keywords;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @property
	 */
	public $Opcode;
	/**
	 * @var \System\Diagnostics\Tracing\EventTask
	 * @property
	 */
	public $Task;
	/**
	 * @var \System\Diagnostics\Tracing\EventChannel
	 * @property
	 */
	public $Channel;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public $Version;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Message;
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
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_EventId(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_EventId($value){}
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
	 * @return \System\Diagnostics\Tracing\EventKeywords
	 */
	public  function get_Keywords(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventKeywords $value
	 * @return \System\Void|void
	 */
	public  function set_Keywords($value){}
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
	 * @return \System\Diagnostics\Tracing\EventTask
	 */
	public  function get_Task(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventTask $value
	 * @return \System\Void|void
	 */
	public  function set_Task($value){}
	/**
	 * @return \System\Diagnostics\Tracing\EventChannel
	 */
	public  function get_Channel(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventChannel $value
	 * @return \System\Void|void
	 */
	public  function set_Channel($value){}
	/**
	 * @return \System\Byte
	 */
	public  function get_Version(){}
	/**
	 * @param \System\Byte $value
	 * @return \System\Void|void
	 */
	public  function set_Version($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Message(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Message($value){}
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
