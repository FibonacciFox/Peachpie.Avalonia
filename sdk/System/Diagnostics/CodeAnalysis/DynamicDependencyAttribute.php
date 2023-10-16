<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 */
class DynamicDependencyAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $MemberSignature;
	/**
	 * @var \System\Diagnostics\CodeAnalysis\DynamicallyAccessedMemberTypes
	 * @property
	 */
	public readonly $MemberTypes;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $Type;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $TypeName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $AssemblyName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Condition;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_MemberSignature(){}
	/**
	 * @return \System\Diagnostics\CodeAnalysis\DynamicallyAccessedMemberTypes
	 */
	public  function get_MemberTypes(){}
	/**
	 * @return \System\Type
	 */
	public  function get_Type(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_TypeName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_AssemblyName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Condition(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Condition($value){}
}
