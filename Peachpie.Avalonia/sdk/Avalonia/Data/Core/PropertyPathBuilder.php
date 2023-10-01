<?php
namespace Avalonia\Data\Core;
/**
 */
class PropertyPathBuilder extends \System\Object
{
	/**
	 * @param \Avalonia\Data\Core\IPropertyInfo $property
	 * @return \Avalonia\Data\Core\PropertyPathBuilder
	 */
	public  function Property($property){}
	/**
	 * @return \Avalonia\Data\Core\PropertyPathBuilder
	 */
	public  function ChildTraversal(){}
	/**
	 * @param \System\Type $type
	 * @return \Avalonia\Data\Core\PropertyPathBuilder
	 */
	public  function EnsureType($type){}
	/**
	 * @param \System\Type $type
	 * @return \Avalonia\Data\Core\PropertyPathBuilder
	 */
	public  function Cast($type){}
	/**
	 * @return \Avalonia\Data\Core\PropertyPath
	 */
	public  function Build(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
