<?php
namespace Avalonia\Media;
/**
 */
class TransformExtensions extends \System\Object
{
	/**
	 * @param \Avalonia\Media\ITransform $transform
	 * @return \Avalonia\Media\Immutable\ImmutableTransform
	 */
	public static function ToImmutable($transform){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
