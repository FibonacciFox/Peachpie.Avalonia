<?php
namespace Avalonia\Controls;
/**
 */
class ToolTipService extends \System\Object
{
	/**
	 * @var \Avalonia\Controls\ToolTipService
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @return \Avalonia\Controls\ToolTipService
	 */
	public static function get_Instance(){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function TipChanged($e){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function TipOpenChanged($e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ControlDetaching($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ControlPointerEntered($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ControlPointerExited($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Layout\EffectiveViewportChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ControlEffectiveViewportChanged($sender, $e){}
	/**
	 * @param \System\Int32|int $showDelay
	 * @param \Avalonia\Controls\Control $control
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StartShowTimer($showDelay, $control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Open($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Close($control){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StopTimer(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
