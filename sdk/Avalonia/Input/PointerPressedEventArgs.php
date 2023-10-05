<?php
namespace Avalonia\Input;
/**
 */
class PointerPressedEventArgs extends \Avalonia\Input\PointerEventArgs
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ClickCount;
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
	 * @return \System\Int32|int
	 */
	public  function get_ClickCount(){}
	/**
	 * @param \Avalonia\Visual $relativeTo
	 * @return \Avalonia\Point
	 */
	public  function GetPosition($relativeTo){}
}
