<?php
namespace Avalonia;
/**
 */
class ClassBindingManager extends \System\Object
{
	/**
	 * @param \Avalonia\StyledElement $target
	 * @param \System\String|string $className
	 * @param \Avalonia\Data\IBinding $source
	 * @param \System\Object|object $anchor
	 * @return \System\IDisposable
	 */
	public static function Bind($target, $className, $source, $anchor){}
	/**
	 * @param \System\String|string $className
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RegisterClassProxyProperty($className){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
