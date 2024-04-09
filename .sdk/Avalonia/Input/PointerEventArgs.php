<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PointerEventArgsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Point $pt
	 * @param \Avalonia\Visual $relativeTo
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]private function GetPosition_1 ($pt, $relativeTo){}
	/**
	 * @deprecated
	 * @param \Avalonia\Visual $relativeTo
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]public function GetPosition_2 ($relativeTo){}
}
class PointerEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	use PointerEventArgsOverride;
	/**
	 * @property
	 * @var \Avalonia\Input\IPointer
	 * @since readonly
	 */
	public $Pointer;
	/**
	 * @property
	 * @var \System\UInt64
	 * @since readonly
	 */
	public $Timestamp;
	/**
	 * @property
	 * @var \Avalonia\Input\KeyModifiers
	 * @since readonly
	 */
	public $KeyModifiers;
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
	 * @uses PointerEventArgsOverride::GetPosition_1 <br>private , args: ($pt, $relativeTo)<br>
	 * @uses PointerEventArgsOverride::GetPosition_2 <br>public , args: ($relativeTo)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Point|mixed|\override
	 */
	#[MethodOverridePublic]function GetPosition (\override ...$args){}
	/**
	 * @param \Avalonia\Visual $relativeTo
	 * @return \Avalonia\Input\PointerPoint
	 */
	public function GetCurrentPoint($relativeTo){}
	/**
	 * @param \Avalonia\Visual $relativeTo
	 * @return \System\Collections\Generic\IReadOnlyList_1[Avalonia\Input\PointerPoint]
	 */
	public function GetIntermediatePoints($relativeTo){}
	/**
	 * @return \System\Void|void
	 */
	public function PreventGestureRecognition(){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \System\Object|object $source
	 * @param \Avalonia\Input\IPointer $pointer
	 * @param \Avalonia\Visual $rootVisual
	 * @param \Avalonia\Point $rootVisualPosition
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\PointerPointProperties $properties
	 * @param \Avalonia\Input\KeyModifiers $modifiers
	 */
	public function __construct($routedEvent, $source, $pointer, $rootVisual, $rootVisualPosition, $timestamp, $properties, $modifiers){}
}