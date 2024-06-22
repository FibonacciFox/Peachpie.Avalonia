<?php
namespace Avalonia\Input;
class TouchDevice extends \System\Object implements
	\Avalonia\Input\IPointerDevice,
	\Avalonia\Input\IInputDevice,
	\System\IDisposable
{


	private static function GetModifiers($modifiers, $isLeftButtonDown){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $ev
	 * @return \System\Void|void
	 */
	public function ProcessRawEvent($ev){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerEventArgs $ev
	 * @return \Avalonia\Input\IPointer
	 */
	public function TryGetPointer($ev){}
	/**
	 */
	public function __construct(){}
}