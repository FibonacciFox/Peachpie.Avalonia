<?php
namespace Avalonia\Controls\Primitives;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RangeBaseOverride {
	/**
	 * @param \System\Double|double $oldValue
	 * @param \System\Double|double $newValue
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 */
	#[MethodOverride]public function __construct_1 ($oldValue, $newValue, $routedEvent){}
	/**
	 * @param \System\Double|double $oldValue
	 * @param \System\Double|double $newValue
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \System\Object|object $source
	 */
	#[MethodOverride]public function __construct_2 ($oldValue, $newValue, $routedEvent, $source){}
}
class RangeBaseValueChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	use RangeBaseOverride;

	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $OldValue;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $NewValue;
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
	 * @uses RangeBaseValueChangedEventArgsOverride::__construct_1 <br>public , args: ($oldValue, $newValue, $routedEvent)<br>
	 * @uses RangeBaseValueChangedEventArgsOverride::__construct_2 <br>public , args: ($oldValue, $newValue, $routedEvent, $source)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}