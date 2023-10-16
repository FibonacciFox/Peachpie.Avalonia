<?php
namespace System\Diagnostics;
/**
 */
class DebuggerVisualizerAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $VisualizerObjectSourceTypeName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $VisualizerTypeName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Description;
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
	public  function get_VisualizerObjectSourceTypeName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_VisualizerTypeName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Description(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Description($value){}
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
