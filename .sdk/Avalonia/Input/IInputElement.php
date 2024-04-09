<?php
namespace Avalonia\Input;
/**
 * @method \System\Void|void add_GotFocus($value) [modifier: public]
 * @method \System\Void|void remove_GotFocus($value) [modifier: public]
 * @method \System\Void|void add_LostFocus($value) [modifier: public]
 * @method \System\Void|void remove_LostFocus($value) [modifier: public]
 * @method \System\Void|void add_KeyDown($value) [modifier: public]
 * @method \System\Void|void remove_KeyDown($value) [modifier: public]
 * @method \System\Void|void add_KeyUp($value) [modifier: public]
 * @method \System\Void|void remove_KeyUp($value) [modifier: public]
 * @method \System\Void|void add_TextInput($value) [modifier: public]
 * @method \System\Void|void remove_TextInput($value) [modifier: public]
 * @method \System\Void|void add_PointerEntered($value) [modifier: public]
 * @method \System\Void|void remove_PointerEntered($value) [modifier: public]
 * @method \System\Void|void add_PointerExited($value) [modifier: public]
 * @method \System\Void|void remove_PointerExited($value) [modifier: public]
 * @method \System\Void|void add_PointerPressed($value) [modifier: public]
 * @method \System\Void|void remove_PointerPressed($value) [modifier: public]
 * @method \System\Void|void add_PointerMoved($value) [modifier: public]
 * @method \System\Void|void remove_PointerMoved($value) [modifier: public]
 * @method \System\Void|void add_PointerReleased($value) [modifier: public]
 * @method \System\Void|void remove_PointerReleased($value) [modifier: public]
 * @method \System\Void|void add_PointerWheelChanged($value) [modifier: public]
 * @method \System\Void|void remove_PointerWheelChanged($value) [modifier: public]
*/
interface IInputElement
{

	/**
	 * @param \Avalonia\Input\NavigationMethod $method
	 * @param \Avalonia\Input\KeyModifiers $keyModifiers
	 * @return \System\Boolean|bool
	 */
	public function Focus($method, $keyModifiers);
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \System\Delegate $handler
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean|bool $handledEventsToo
	 * @return \System\Void|void
	 */
	public function AddHandler($routedEvent, $handler, $routes, $handledEventsToo);
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \System\Delegate $handler
	 * @return \System\Void|void
	 */
	public function RemoveHandler($routedEvent, $handler);
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	public function RaiseEvent($e);
}