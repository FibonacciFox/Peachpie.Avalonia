<?php
namespace System\Reflection;
/**
 */
class NullabilityInfo extends \System\Object
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $Type;
	/**
	 * @var \System\Reflection\NullabilityState
	 * @property
	 */
	public $ReadState;
	/**
	 * @var \System\Reflection\NullabilityState
	 * @property
	 */
	public $WriteState;
	/**
	 * @var \System\Reflection\NullabilityInfo
	 * @property
	 */
	public readonly $ElementType;
	/**
	 * @var \System\Reflection\NullabilityInfo[]
	 * @property
	 */
	public readonly $GenericTypeArguments;
	/**
	 * @return \System\Type
	 */
	public  function get_Type(){}
	/**
	 * @return \System\Reflection\NullabilityState
	 */
	public  function get_ReadState(){}
	/**
	 * @param \System\Reflection\NullabilityState $value
	 * @return \System\Void|void
	 */
	protected  function set_ReadState($value){}
	/**
	 * @return \System\Reflection\NullabilityState
	 */
	public  function get_WriteState(){}
	/**
	 * @param \System\Reflection\NullabilityState $value
	 * @return \System\Void|void
	 */
	protected  function set_WriteState($value){}
	/**
	 * @return \System\Reflection\NullabilityInfo
	 */
	public  function get_ElementType(){}
	/**
	 * @return \System\Reflection\NullabilityInfo[]
	 */
	public  function get_GenericTypeArguments(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
