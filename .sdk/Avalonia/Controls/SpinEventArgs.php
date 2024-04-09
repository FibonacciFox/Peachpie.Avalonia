<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SliderOverride {
	/**
	 * @param \Avalonia\Controls\SpinDirection $direction
	 */
	#[MethodOverride]public function __construct_1 ($direction){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \Avalonia\Controls\SpinDirection $direction
	 */
	#[MethodOverride]public function __construct_2 ($routedEvent, $direction){}
	/**
	 * @param \Avalonia\Controls\SpinDirection $direction
	 * @param \System\Boolean|bool $usingMouseWheel
	 */
	#[MethodOverride]public function __construct_3 ($direction, $usingMouseWheel){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \Avalonia\Controls\SpinDirection $direction
	 * @param \System\Boolean|bool $usingMouseWheel
	 */
	#[MethodOverride]public function __construct_4 ($routedEvent, $direction, $usingMouseWheel){}
}
class SpinEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	use SliderOverride;
	/**
	 * @property
	 * @var \Avalonia\Controls\SpinDirection
	 * @since readonly
	 */
	public $Direction;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $UsingMouseWheel;
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
	 * @uses SpinEventArgsOverride::__construct_1 <br>public , args: ($direction)<br>
	 * @uses SpinEventArgsOverride::__construct_2 <br>public , args: ($routedEvent, $direction)<br>
	 * @uses SpinEventArgsOverride::__construct_3 <br>public , args: ($direction, $usingMouseWheel)<br>
	 * @uses SpinEventArgsOverride::__construct_4 <br>public , args: ($routedEvent, $direction, $usingMouseWheel)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}