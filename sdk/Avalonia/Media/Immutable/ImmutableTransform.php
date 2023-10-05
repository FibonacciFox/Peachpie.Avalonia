<?php
namespace Avalonia\Media\Immutable;
/**
 */
class ImmutableTransform extends \System\Object implements 
	\Avalonia\Media\ITransform
{
	/**
	 * @var \Avalonia\Matrix
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
