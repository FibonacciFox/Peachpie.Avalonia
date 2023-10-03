<?php
namespace Avalonia\Controls\Platform;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DefaultMenuInteractionHandlerMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function KeyDown_1($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function KeyDown_2($item, $e){}
}
/**
 */
class DefaultMenuInteractionHandler extends \System\Object implements 
	\Avalonia\Controls\Platform\IMenuInteractionHandler
{
	/**
	 * @param \Avalonia\Controls\MenuBase $menu
	 * @return \System\Void|void
	 */
	public  function Attach($menu){}
	/**
	 * @param \Avalonia\Controls\MenuBase $menu
	 * @return \System\Void|void
	 */
	public  function Detach($menu){}
	/**
	 * @return \System\Action_2
	 */
	protected  function get_DelayRun(){}
	/**
	 * @return \Avalonia\Input\IInputManager
	 */
	protected  function get_InputManager(){}
	/**
	 * @return \Avalonia\Controls\IMenu
	 */
	protected  function get_Menu(){}
	/**
	 * @param \Avalonia\Controls\IMenu $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Menu($value){}
	/**
	 * @return \System\TimeSpan
	 */
	protected static function get_MenuShowDelay(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\GotFocusEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function GotFocus($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function LostFocus($sender, $e){}
	/**
	 * @uses DefaultMenuInteractionHandlerMethodsOverride::KeyDown_1 ($sender, $e)
	 * @uses DefaultMenuInteractionHandlerMethodsOverride::KeyDown_2 ($item, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function KeyDown(mixed ...$args){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function AccessKeyPressed($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function PointerEntered($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function PointerMoved($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function PointerExited($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function PointerPressed($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerReleasedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function PointerReleased($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function MenuOpened($sender, $e){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function RawInput($e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function RootPointerPressed($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	protected  function WindowDeactivated($sender, $e){}
	/**
	 * @param \Avalonia\StyledElement $item
	 * @return \Avalonia\Controls\MenuItem
	 */
	protected static function GetMenuItem($item){}
	/**
	 * @param \Avalonia\Controls\IMenu $menu
	 * @return \System\Void|void
	 */
	protected  function AttachCore($menu){}
	/**
	 * @param \Avalonia\Controls\IMenu $menu
	 * @return \System\Void|void
	 */
	protected  function DetachCore($menu){}
	/**
	 * @param \Avalonia\Controls\IMenuItem $item
	 * @return \System\Void|void
	 */
	protected  function Click($item){}
	/**
	 * @param \Avalonia\Controls\IMenuItem $item
	 * @return \System\Void|void
	 */
	protected  function CloseMenu($item){}
	/**
	 * @param \Avalonia\Controls\IMenuItem $item
	 * @return \System\Void|void
	 */
	protected  function CloseWithDelay($item){}
	/**
	 * @param \Avalonia\Controls\IMenuItem $item
	 * @param \System\Boolean $selectFirst
	 * @return \System\Void|void
	 */
	protected  function Open($item, $selectFirst){}
	/**
	 * @param \Avalonia\Controls\IMenuItem $item
	 * @return \System\Void|void
	 */
	protected  function OpenWithDelay($item){}
	/**
	 * @param \Avalonia\Controls\IMenuItem $item
	 * @return \System\Void|void
	 */
	protected  function SelectItemAndAncestors($item){}
	/**
	 * @param \Avalonia\StyledElement $item
	 * @return \Avalonia\Controls\IMenuItem
	 */
	protected static function GetMenuItemCore($item){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TopLevelLostPlatformFocus(){}
	/**
	 * @param \System\Action $action
	 * @param \System\TimeSpan $timeSpan
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DefaultDelayRun($action, $timeSpan){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
