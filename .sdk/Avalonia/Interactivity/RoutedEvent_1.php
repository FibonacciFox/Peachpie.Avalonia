<?php
namespace Avalonia\Interactivity;
class RoutedEvent_1 extends \Avalonia\Interactivity\RoutedEvent
{

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
	 * @param \System\String|string $name
	 * @param \Avalonia\Interactivity\RoutingStrategies $routingStrategies
	 * @param \System\Type $ownerType
	 */
	public function __construct($name, $routingStrategies, $ownerType){}
}