<?php
namespace System\Runtime\CompilerServices;
/**
 */
class CompilerFeatureRequiredAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $RefStructs;
	/**
	 * @var \System\String
	 * @field
	 */
	public $RequiredMembers;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FeatureName;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsOptional;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_FeatureName(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsOptional(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsOptional($value){}
}
