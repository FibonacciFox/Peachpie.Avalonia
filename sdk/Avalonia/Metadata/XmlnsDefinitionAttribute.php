<?php
namespace Avalonia\Metadata;
/**
 */
class XmlnsDefinitionAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $XmlNamespace;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ClrNamespace;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_XmlNamespace(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ClrNamespace(){}
}
