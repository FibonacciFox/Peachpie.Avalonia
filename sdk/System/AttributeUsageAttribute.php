<?php
namespace System;
/**
 */
class AttributeUsageAttribute extends \System\Attribute
{
	/**
	 * @var \System\AttributeUsageAttribute
	 * @field
	 */
	protected readonly $Default;
	/**
	 * @var \System\AttributeTargets
	 * @property
	 */
	public readonly $ValidOn;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $AllowMultiple;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Inherited;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\AttributeTargets
	 */
	public  function get_ValidOn(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AllowMultiple(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_AllowMultiple($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Inherited(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Inherited($value){}
}
