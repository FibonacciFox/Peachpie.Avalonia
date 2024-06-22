<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MouseDeviceOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ProcessRawEvent_1 ($e){}
	/**
	 * @deprecated
	 * @param \Avalonia\Input\Raw\RawPointerEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function ProcessRawEvent_2 ($e){}
}
class MouseDevice extends \System\Object implements
	\Avalonia\Input\IMouseDevice,
	\Avalonia\Input\IPointerDevice,
	\Avalonia\Input\IInputDevice,
	\System\IDisposable
{
	use MouseDeviceOverride;


	/**
	 * @uses MouseDeviceOverride::ProcessRawEvent_1 <br>public , args: ($e)<br>
	 * @uses MouseDeviceOverride::ProcessRawEvent_2 <br>private , args: ($e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ProcessRawEvent (\override ...$args){}
	private static function ButtonCount($props){}
	private function LeaveWindow(){}
	private static function CreateProperties($args){}
	private function MouseDown($device, $timestamp, $root, $p, $properties, $inputModifiers, $hitTest){}
	private function MouseMove($device, $timestamp, $root, $p, $properties, $inputModifiers, $intermediatePoints, $hitTest){}
	private function MouseUp($device, $timestamp, $root, $p, $props, $inputModifiers, $hitTest){}
	private function MouseWheel($device, $timestamp, $root, $p, $props, $delta, $inputModifiers, $hitTest){}
	private function GestureMagnify($device, $timestamp, $root, $p, $props, $delta, $inputModifiers, $hitTest){}
	private function GestureRotate($device, $timestamp, $root, $p, $props, $delta, $inputModifiers, $hitTest){}
	private function GestureSwipe($device, $timestamp, $root, $p, $props, $delta, $inputModifiers, $hitTest){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerEventArgs $ev
	 * @return \Avalonia\Input\IPointer
	 */
	public function TryGetPointer($ev){}
	/**
	 * @param \Avalonia\Input\Pointer $pointer
	 */
	public function __construct($pointer){}
}