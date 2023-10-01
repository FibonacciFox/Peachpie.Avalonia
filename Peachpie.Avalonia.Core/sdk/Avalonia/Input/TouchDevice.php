<?php
namespace Avalonia\Input;
/**
 */
class TouchDevice extends \System\Object implements 
	\Avalonia\Input\IPointerDevice,
	\Avalonia\Input\IInputDevice,
	\System\IDisposable
{
	/**
	 * @param \Avalonia\Input\RawInputModifiers $modifiers
	 * @param \System\Boolean $isLeftButtonDown
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetModifiers($modifiers, $isLeftButtonDown){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $ev
	 * @return \System\Void|void
	 */
	public  function ProcessRawEvent($ev){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerEventArgs $ev
	 * @return \Avalonia\Input\IPointer
	 */
	public  function TryGetPointer($ev){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
