<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 */
class ExcludeFromCodeCoverageAttribute extends \System\Attribute
{
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
	public  function get_Justification(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Justification($value){}
}
