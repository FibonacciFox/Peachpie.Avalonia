<?php
namespace Avalonia\Controls\Mixins;
/**
 */
class PressedMixin extends \System\Object
{
	/**
	 * @return \System\Void|void
	 */
	public static function Attach(){}
	/**
	 * @param \Avalonia\Controls\Mixins\TControl $sender
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HandlePointerPressed($sender, $e){}
	/**
	 * @param \Avalonia\Controls\Mixins\TControl $sender
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HandlePointerReleased($sender){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
