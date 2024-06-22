<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PointerOverPreProcessorOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function ClearPointerOver_1 (){}
	/**
	 * @deprecated
	 * @param \Avalonia\Input\IPointer $pointer
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \System\UInt64 $timestamp
	 * @param \System\Nullable_1 $position [generic: Avalonia\Point]
	 * @param \Avalonia\Input\PointerPointProperties $properties
	 * @param \Avalonia\Input\KeyModifiers $inputModifiers
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function ClearPointerOver_2 ($pointer, $root, $timestamp, $position, $properties, $inputModifiers){}
}
class PointerOverPreProcessor extends \System\Object implements
	\System\IObserver_1
{
	use PointerOverPreProcessorOverride;

	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\PixelPoint]
	 * @since readonly
	 */
	public $LastPosition;
	/**
	 * @return \System\Void|void
	 */
	public function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public function OnError($error){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $value
	 * @return \System\Void|void
	 */
	public function OnNext($value){}
	/**
	 * @param \Avalonia\Rect $dirtyRect
	 * @return \System\Void|void
	 */
	public function SceneInvalidated($dirtyRect){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses PointerOverPreProcessorOverride::ClearPointerOver_1 <br>private , args: ()<br>
	 * @uses PointerOverPreProcessorOverride::ClearPointerOver_2 <br>private , args: ($pointer, $root, $timestamp, $position, $properties, $inputModifiers)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function ClearPointerOver (\override ...$args){}
	private function ClearChildrenPointerOver($e, $element, $clearRoot){}
	private function SetPointerOver($pointer, $root, $element, $timestamp, $position, $properties, $inputModifiers){}
	private function SetPointerOverToElement($pointer, $root, $element, $timestamp, $position, $properties, $inputModifiers){}
	private static function GetVisualParent($e){}
	private static function PointToClient($root, $p){}
	/**
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 */
	public function __construct($inputRoot){}
}