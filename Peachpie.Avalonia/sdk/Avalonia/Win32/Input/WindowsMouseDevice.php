<?php
namespace Avalonia\Win32\Input;
/**
 */
class WindowsMouseDevice extends \Avalonia\Input\MouseDevice implements 
	\Avalonia\Input\IMouseDevice,
	\Avalonia\Input\IPointerDevice,
	\Avalonia\Input\IInputDevice,
	\System\IDisposable
{
	/**
	 * @param \Avalonia\Input\IInputElement $control
	 * @return \System\Void|void
	 */
	protected  function Capture($control){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $e
	 * @return \System\Void|void
	 */
	public  function ProcessRawEvent($e){}
}
