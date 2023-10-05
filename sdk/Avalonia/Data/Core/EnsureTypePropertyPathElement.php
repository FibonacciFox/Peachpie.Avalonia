<?php
namespace Avalonia\Data\Core;
/**
 */
class EnsureTypePropertyPathElement extends \System\Object implements 
	\Avalonia\Data\Core\IPropertyPathElement
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $Type;
	/**
	 * @return \System\Type
	 */
	public  function get_Type(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
