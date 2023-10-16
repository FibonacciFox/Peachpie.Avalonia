<?php
namespace System\Runtime\Serialization;
/**
 */
class StreamingContext extends \System\ValueType
{
	/**
	 * @var \System\Runtime\Serialization\StreamingContextStates
	 * @property
	 */
	public readonly $State;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Context;
	/**
	 * @return \System\Runtime\Serialization\StreamingContextStates
	 */
	public  function get_State(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Context(){}
}
