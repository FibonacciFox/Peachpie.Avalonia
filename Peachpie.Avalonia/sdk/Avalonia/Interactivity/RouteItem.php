<?php
namespace Avalonia\Interactivity;
/**
 */
class RouteItem extends \System\ValueType
{
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
