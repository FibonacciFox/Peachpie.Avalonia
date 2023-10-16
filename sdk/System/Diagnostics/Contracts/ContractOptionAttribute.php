<?php
namespace System\Diagnostics\Contracts;
/**
 */
class ContractOptionAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Category;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Setting;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Enabled;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_Category(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Setting(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Enabled(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Value(){}
}
