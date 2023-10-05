<?php
namespace Avalonia\Input;
/**
 */
class PointerWheelEventArgs extends \Avalonia\Input\PointerEventArgs
{
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $Delta;
	/**
	 * @var \Avalonia\Input\IPointer
	 * @property
	 */
	public readonly $Pointer;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public readonly $Timestamp;
	/**
	 * @var \Avalonia\Input\KeyModifiers
	 * @property
	 */
	public readonly $KeyModifiers;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Handled;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent
	 * @property
	 */
	public $RoutedEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 * @property
	 */
	public $Route;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Source;
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Delta(){}
	/**
	 * @param \Avalonia\Visual $relativeTo
	 * @return \Avalonia\Point
	 */
	public  function GetPosition($relativeTo){}
}
