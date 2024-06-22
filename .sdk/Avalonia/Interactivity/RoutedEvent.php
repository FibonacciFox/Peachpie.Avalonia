<?php
namespace Avalonia\Interactivity;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RoutedEventOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \Avalonia\Interactivity\RoutingStrategies $routingStrategy
	 * @return \Avalonia\Interactivity\RoutedEvent_1
	 */
	#[MethodOverride]public static function Register_1 ($name, $routingStrategy){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \Avalonia\Interactivity\RoutingStrategies $routingStrategy
	 * @param \System\Type $ownerType
	 * @return \Avalonia\Interactivity\RoutedEvent_1
	 */
	#[MethodOverride]public static function Register_2 ($name, $routingStrategy, $ownerType){}
}
class RoutedEvent extends \System\Object
{
	use RoutedEventOverride;

	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $EventArgsType;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $OwnerType;
	/**
	 * @property
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 * @since readonly
	 */
	public $RoutingStrategies;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasRaisedSubscriptions;
	/**
	 * @property
	 * @var \System\IObservable_1[System\ValueTuple_2[System\Object,Avalonia\Interactivity\RoutedEventArgs]]
	 * @since readonly
	 */
	public $Raised;
	/**
	 * @property
	 * @var \System\IObservable_1[Avalonia\Interactivity\RoutedEventArgs]
	 * @since readonly
	 */
	public $RouteFinished;
	/**
	 * @uses RoutedEventOverride::Register_1 <br>public , args: ($name, $routingStrategy)<br>
	 * @uses RoutedEventOverride::Register_2 <br>public , args: ($name, $routingStrategy, $ownerType)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Interactivity\RoutedEvent_1|mixed|\override
	 */
	#[MethodOverridePublic]function Register (\override ...$args){}
	/**
	 * @param \System\Type $targetType
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean|bool $handledEventsToo
	 * @return \System\IDisposable
	 */
	public function AddClassHandler($targetType, $handler, $routes, $handledEventsToo){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function InvokeRaised($sender, $e){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function InvokeRouteFinished($e){}
	/**
	 * @param \System\String|string $name
	 * @param \Avalonia\Interactivity\RoutingStrategies $routingStrategies
	 * @param \System\Type $eventArgsType
	 * @param \System\Type $ownerType
	 */
	public function __construct($name, $routingStrategies, $eventArgsType, $ownerType){}
}