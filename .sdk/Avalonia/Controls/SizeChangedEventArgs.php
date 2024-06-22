<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SeparatorOverride {
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 */
	#[MethodOverride]public function __construct_1 ($routedEvent){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \System\Object|object $source
	 */
	#[MethodOverride]public function __construct_2 ($routedEvent, $source){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \System\Object|object $source
	 * @param \Avalonia\Size $previousSize
	 * @param \Avalonia\Size $newSize
	 */
	#[MethodOverride]public function __construct_3 ($routedEvent, $source, $previousSize, $newSize){}
}
class SizeChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	use SeparatorOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HeightChanged;
	/**
	 * @property
	 * @var \Avalonia\Size
	 */
	public $NewSize;
	/**
	 * @property
	 * @var \Avalonia\Size
	 */
	public $PreviousSize;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $WidthChanged;
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
	 * @uses SizeChangedEventArgsOverride::__construct_1 <br>public , args: ($routedEvent)<br>
	 * @uses SizeChangedEventArgsOverride::__construct_2 <br>public , args: ($routedEvent, $source)<br>
	 * @uses SizeChangedEventArgsOverride::__construct_3 <br>public , args: ($routedEvent, $source, $previousSize, $newSize)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}