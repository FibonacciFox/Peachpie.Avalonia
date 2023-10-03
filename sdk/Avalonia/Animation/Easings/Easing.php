<?php
namespace Avalonia\Animation\Easings;
/**
 */
class Easing extends \System\Object implements 
	\Avalonia\Animation\Easings\IEasing
{
	/**
	 * @param \System\Double|double $progress
	 * @return \System\Double|double
	 */
	public  function Ease($progress){}
	/**
	 * @param \System\String|string $type
	 * @param \Avalonia\Animation\Easings\Easing& $instance
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCreateEasingInstance($type, $instance){}
	/**
	 * @param \System\String|string $e
	 * @return \Avalonia\Animation\Easings\Easing
	 */
	public static function Parse($e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
