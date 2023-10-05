<?php
namespace Avalonia\Metadata;
/**
 */
class XmlnsPrefixAttribute extends \System\Attribute
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
	public readonly $Prefix;
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
	public  function get_Prefix(){}
}
