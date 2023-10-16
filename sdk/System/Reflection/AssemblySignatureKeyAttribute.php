<?php
namespace System\Reflection;
/**
 */
class AssemblySignatureKeyAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $PublicKey;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Countersignature;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_PublicKey(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Countersignature(){}
}
