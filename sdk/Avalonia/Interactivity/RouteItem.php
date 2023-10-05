<?php
namespace Avalonia\Interactivity;
/**
 */
class RouteItem extends \System\ValueType
{
	/**
	 * @var \Avalonia\Interactivity\Interactive
	 * @property
	 */
	public readonly $Target;
	/**
	 * @var \System\Delegate
	 * @property
	 */
	public readonly $Handler;
	/**
	 * @var \System\Action_3[System\Delegate,System\Object,Avalonia\Interactivity\RoutedEventArgs]
	 * @property
	 */
	public readonly $Adapter;
	/**
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 * @property
	 */
	public readonly $Routes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HandledEventsToo;
	/**
	 * @return \Avalonia\Interactivity\Interactive
	 */
	public  function get_Target(){}
	/**
	 * @return \System\Delegate
	 */
	public  function get_Handler(){}
	/**
	 * @return \System\Action_3
	 */
	public  function get_Adapter(){}
	/**
	 * @return \Avalonia\Interactivity\RoutingStrategies
	 */
	public  function get_Routes(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HandledEventsToo(){}
}
