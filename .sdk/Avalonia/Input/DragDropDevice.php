<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DragDropDeviceOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ProcessRawEvent_1 ($e){}
	/**
	 * @deprecated
	 * @param \Avalonia\Input\Raw\RawDragEvent $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function ProcessRawEvent_2 ($e){}
}
class DragDropDevice extends \System\Object implements
	\Avalonia\Input\Raw\IDragDropDevice,
	\Avalonia\Input\IInputDevice
{
	use DragDropDeviceOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Input\DragDropDevice
	 */
	public static $Instance;
	private static function GetTarget($root, $local){}
	private static function RaiseDragEvent($target, $inputRoot, $point, $routedEvent, $operation, $data, $modifiers){}
	private function DragEnter($inputRoot, $point, $data, $effects, $modifiers){}
	private function DragOver($inputRoot, $point, $data, $effects, $modifiers){}
	private function DragLeave($inputRoot, $point, $data, $effects, $modifiers){}
	private function Drop($inputRoot, $point, $data, $effects, $modifiers){}
	/**
	 * @uses DragDropDeviceOverride::ProcessRawEvent_1 <br>public , args: ($e)<br>
	 * @uses DragDropDeviceOverride::ProcessRawEvent_2 <br>private , args: ($e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ProcessRawEvent (\override ...$args){}
	/**
	 */
	public function __construct(){}
}