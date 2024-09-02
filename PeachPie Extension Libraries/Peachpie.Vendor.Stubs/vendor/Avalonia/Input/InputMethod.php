<?php
namespace Avalonia\Input;
class InputMethod extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AvaloniaProperty_1[System\Boolean]
	 */
	public static $IsInputMethodEnabledProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\TextInput\TextInputMethodClientRequeryRequestedEventArgs]
	 */
	public static $TextInputMethodClientRequeryRequestedEvent;
	/**
	 * @param \Avalonia\Input\InputElement $target
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetIsInputMethodEnabled($target, $value){}
	/**
	 * @param \Avalonia\Input\InputElement $target
	 * @return \System\Boolean|bool
	 */
	public static function GetIsInputMethodEnabled($target){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddTextInputMethodClientRequeryRequestedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemoveTextInputMethodClientRequeryRequestedHandler($element, $handler){}
}