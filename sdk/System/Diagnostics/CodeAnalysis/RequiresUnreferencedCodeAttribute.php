<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 */
class RequiresUnreferencedCodeAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Message;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Url;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_Message(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Url(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Url($value){}
}
