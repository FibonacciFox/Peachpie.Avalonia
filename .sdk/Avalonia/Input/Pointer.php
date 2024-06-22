<?php
namespace Avalonia\Input;
class Pointer extends \System\Object implements
	\Avalonia\Input\IPointer,
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Id;
	/**
	 * @property
	 * @var \Avalonia\Input\IInputElement
	 */
	public $Captured;
	/**
	 * @property
	 * @var \Avalonia\Input\PointerType
	 * @since readonly
	 */
	public $Type;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPrimary;
	/**
	 * @return \System\Int32|int
	 */
	public static function GetNextFreeId(){}
	private static function FindCommonParent($control1, $control2){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @return \System\Void|void
	 */
	protected function PlatformCapture($element){}
	/**
	 * @param \Avalonia\Input\IInputElement $control
	 * @return \System\Void|void
	 */
	public function Capture($control){}
	private static function GetNextCapture($parent){}
	private function OnCaptureDetached($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\GestureRecognizer $gestureRecognizer
	 * @return \System\Void|void
	 */
	protected function CaptureGestureRecognizer($gestureRecognizer){}
	/**
	 * @param \System\Int32|int $id
	 * @param \Avalonia\Input\PointerType $type
	 * @param \System\Boolean|bool $isPrimary
	 */
	public function __construct($id, $type, $isPrimary){}
}