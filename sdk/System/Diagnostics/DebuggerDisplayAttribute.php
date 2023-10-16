<?php
namespace System\Diagnostics;
/**
 */
class DebuggerDisplayAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Name;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Type;
	/**
	 * @var \System\Type
	 * @property
	 */
	public $Target;
	/**
	 * @var \System\String
	 * @property
	 */
	public $TargetTypeName;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_Value(){}
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
	public  function get_Type(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Type($value){}
	/**
	 * @return \System\Type
	 */
	public  function get_Target(){}
	/**
	 * @param \System\Type $value
	 * @return \System\Void|void
	 */
	public  function set_Target($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_TargetTypeName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_TargetTypeName($value){}
}
