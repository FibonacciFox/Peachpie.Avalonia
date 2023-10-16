<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 */
class UnconditionalSuppressMessageAttribute extends \System\Attribute
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
	public readonly $CheckId;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Scope;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Target;
	/**
	 * @var \System\String
	 * @property
	 */
	public $MessageId;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Justification;
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
	public  function get_CheckId(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Scope(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Scope($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Target(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Target($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_MessageId(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_MessageId($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Justification(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Justification($value){}
}
