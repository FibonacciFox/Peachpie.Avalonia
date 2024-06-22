<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RefreshContainerOverride {
	/**
	 * @param \System\Action $deferredAction
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 */
	#[MethodOverride]public function __construct_1 ($deferredAction, $routedEvent){}
	/**
	 * @param \Avalonia\Controls\RefreshCompletionDeferral $completionDeferral
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 */
	#[MethodOverride]public function __construct_2 ($completionDeferral, $routedEvent){}
}
class RefreshRequestedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	use RefreshContainerOverride;

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
	 * @return \Avalonia\Controls\RefreshCompletionDeferral
	 */
	public function GetDeferral(){}
	/**
	 * @return \System\Void|void
	 */
	protected function IncrementCount(){}
	/**
	 * @return \System\Void|void
	 */
	protected function DecrementCount(){}
	/**
	 * @uses RefreshRequestedEventArgsOverride::__construct_1 <br>public , args: ($deferredAction, $routedEvent)<br>
	 * @uses RefreshRequestedEventArgsOverride::__construct_2 <br>public , args: ($completionDeferral, $routedEvent)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}