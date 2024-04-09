<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PenDeviceOverride {
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
class PenDevice extends \System\Object implements
	\Avalonia\Input\IPenDevice,
	\Avalonia\Input\IPointerDevice,
	\Avalonia\Input\IInputDevice,
	\System\IDisposable
{
	use PenDeviceOverride;

	/**
	 * @uses PenDeviceOverride::ProcessRawEvent_1 <br>public , args: ($e)<br>
	 * @uses PenDeviceOverride::ProcessRawEvent_2 <br>private , args: ($e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ProcessRawEvent (\override ...$args){}
	private function PenDown($pointer, $timestamp, $root, $p, $properties, $inputModifiers, $hitTest){}
	private static function PenMove($pointer, $timestamp, $root, $p, $properties, $inputModifiers, $hitTest, $intermediatePoints){}
	private function PenUp($pointer, $timestamp, $root, $p, $properties, $inputModifiers, $hitTest){}
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
	 */
	public function __construct(){}
}