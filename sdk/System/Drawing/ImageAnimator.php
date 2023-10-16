<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImageAnimatorMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function UpdateFrames_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function UpdateFrames_2($image){}
}
/**
 */
class ImageAnimator extends \System\Object
{
	/**
	 * @param \System\Drawing\Image $image
	 * @param \System\EventHandler $onFrameChangedHandler
	 * @return \System\Void|void
	 */
	public static function Animate($image, $onFrameChangedHandler){}
	/**
	 * @param \System\Drawing\Image $image
	 * @return \System\Boolean
	 */
	public static function CanAnimate($image){}
	/**
	 * @param \System\Drawing\Image $image
	 * @param \System\EventHandler $onFrameChangedHandler
	 * @return \System\Void|void
	 */
	public static function StopAnimate($image, $onFrameChangedHandler){}
	/**
	 * @uses ImageAnimatorMethodsOverride::UpdateFrames_1 ()
	 * @uses ImageAnimatorMethodsOverride::UpdateFrames_2 ($image)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UpdateFrames(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
