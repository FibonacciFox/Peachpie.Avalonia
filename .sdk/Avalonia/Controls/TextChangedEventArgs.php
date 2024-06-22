<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TextBoxTextInputMethodClientOverride {
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 */
	#[MethodOverride]public function __construct_1 ($routedEvent){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \Avalonia\Interactivity\Interactive $source
	 */
	#[MethodOverride]public function __construct_2 ($routedEvent, $source){}
}
class TextChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	use TextBoxTextInputMethodClientOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Handled;
	/**
	 * @property
	 * @var \Avalonia\Interactivity\RoutedEvent
	 */
	public $RoutedEvent;
	/**
	 * @property
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 */
	public $Route;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Source;
	/**
	 * @uses TextChangedEventArgsOverride::__construct_1 <br>public , args: ($routedEvent)<br>
	 * @uses TextChangedEventArgsOverride::__construct_2 <br>public , args: ($routedEvent, $source)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}