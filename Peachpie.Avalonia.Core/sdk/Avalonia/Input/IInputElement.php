<?php
namespace Avalonia\Input;
/**
 */
interface IInputElement
{
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_GotFocus($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_GotFocus($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_LostFocus($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_LostFocus($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_KeyDown($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_KeyDown($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_KeyUp($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_KeyUp($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_TextInput($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_TextInput($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_PointerEntered($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_PointerEntered($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_PointerExited($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_PointerExited($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_PointerPressed($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_PointerPressed($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_PointerMoved($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_PointerMoved($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_PointerReleased($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_PointerReleased($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_PointerWheelChanged($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_PointerWheelChanged($value);
	/**
	 */
	public function get_Focusable();
	/**
	 */
	public function get_IsEnabled();
	/**
	 */
	public function get_Cursor();
	/**
	 */
	public function get_IsEffectivelyEnabled();
	/**
	 */
	public function get_IsEffectivelyVisible();
	/**
	 */
	public function get_IsKeyboardFocusWithin();
	/**
	 */
	public function get_IsFocused();
	/**
	 */
	public function get_IsHitTestVisible();
	/**
	 */
	public function get_IsPointerOver();
	/**
	 * @param \Avalonia\Input\NavigationMethod $method
	 * @param \Avalonia\Input\KeyModifiers $keyModifiers
	 */
	public function Focus($method, $keyModifiers);
	/**
	 */
	public function get_KeyBindings();
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \System\Delegate $handler
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean $handledEventsToo
	 */
	public function AddHandler($routedEvent, $handler, $routes, $handledEventsToo);
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \System\Delegate $handler
	 */
	public function RemoveHandler($routedEvent, $handler);
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 */
	public function RaiseEvent($e);
}
