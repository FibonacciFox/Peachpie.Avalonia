<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EventDescriptorMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class EventDescriptor extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $EventId;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $Version;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $Channel;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $Level;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $Opcode;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Task;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Keywords;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_EventId(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_Version(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_Channel(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_Level(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_Opcode(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Task(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Keywords(){}
	/**
	 * @uses EventDescriptorMethodsOverride::Equals_1 ($obj)
	 * @uses EventDescriptorMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
