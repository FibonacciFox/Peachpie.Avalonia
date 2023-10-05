<?php
namespace Avalonia\SourceGenerator;
/**
 */
class SubtypesFactoryAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Namespace;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $BaseType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_Namespace(){}
	/**
	 * @return \System\Type
	 */
	public  function get_BaseType(){}
}
