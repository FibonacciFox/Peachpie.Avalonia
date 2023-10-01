<?php
namespace Avalonia\Input;
/**
 */
class Pointer extends \System\Object implements 
	\Avalonia\Input\IPointer,
	\System\IDisposable
{
	/**
	 * @return \System\Int32|int
	 */
	public static function GetNextFreeId(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Id(){}
	/**
	 * @param \Avalonia\Input\IInputElement $control1
	 * @param \Avalonia\Input\IInputElement $control2
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindCommonParent($control1, $control2){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @return \System\Void|void
	 */
	protected  function PlatformCapture($element){}
	/**
	 * @param \Avalonia\Input\IInputElement $control
	 * @return \System\Void|void
	 */
	public  function Capture($control){}
	/**
	 * @param \Avalonia\Visual $parent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNextCapture($parent){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnCaptureDetached($sender, $e){}
	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	public  function get_Captured(){}
	/**
	 * @param \Avalonia\Input\IInputElement $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Captured($value){}
	/**
	 * @return \Avalonia\Input\PointerType
	 */
	public  function get_Type(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPrimary(){}
	/**
	 * @return \Avalonia\Input\GestureRecognizers\GestureRecognizer
	 */
	protected  function get_CapturedGestureRecognizer(){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\GestureRecognizer $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CapturedGestureRecognizer($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\GestureRecognizer $gestureRecognizer
	 * @return \System\Void|void
	 */
	protected  function CaptureGestureRecognizer($gestureRecognizer){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
