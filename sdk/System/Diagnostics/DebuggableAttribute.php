<?php
namespace System\Diagnostics;
/**
 */
class DebuggableAttribute extends \System\Attribute
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsJITTrackingEnabled;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsJITOptimizerDisabled;
	/**
	 * @var \System\Diagnostics\DebuggableAttribute+DebuggingModes
	 * @property
	 */
	public readonly $DebuggingFlags;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsJITTrackingEnabled(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsJITOptimizerDisabled(){}
	/**
	 * @return \System\Diagnostics\DebuggingModes
	 */
	public  function get_DebuggingFlags(){}
}
