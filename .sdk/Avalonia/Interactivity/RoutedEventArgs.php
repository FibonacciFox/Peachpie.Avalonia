<?php
namespace Avalonia\Interactivity;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RoutedEvent_1Override {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 */
	#[MethodOverride]public function __construct_2 ($routedEvent){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \System\Object|object $source
	 */
	#[MethodOverride]public function __construct_3 ($routedEvent, $source){}
}
class RoutedEventArgs extends \System\EventArgs
{
	use RoutedEvent_1Override;
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
	 * @uses RoutedEventArgsOverride::__construct_1 <br>public , args: ()<br>
	 * @uses RoutedEventArgsOverride::__construct_2 <br>public , args: ($routedEvent)<br>
	 * @uses RoutedEventArgsOverride::__construct_3 <br>public , args: ($routedEvent, $source)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}