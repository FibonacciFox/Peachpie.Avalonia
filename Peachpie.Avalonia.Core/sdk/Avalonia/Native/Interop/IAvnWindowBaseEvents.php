<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnWindowBaseEvents
{
	/**
	 */
	public function Paint();
	/**
	 */
	public function Closed();
	/**
	 */
	public function Activated();
	/**
	 */
	public function Deactivated();
	/**
	 * @param \Avalonia\Native\Interop\AvnSize* $size
	 * @param \Avalonia\Native\Interop\AvnPlatformResizeReason $reason
	 */
	public function Resized($size, $reason);
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $position
	 */
	public function PositionChanged($position);
	/**
	 * @param \Avalonia\Native\Interop\AvnRawMouseEventType $type
	 * @param \System\UInt64 $timeStamp
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \Avalonia\Native\Interop\AvnVector $delta
	 */
	public function RawMouseEvent($type, $timeStamp, $modifiers, $point, $delta);
	/**
	 * @param \Avalonia\Native\Interop\AvnRawKeyEventType $type
	 * @param \System\UInt64 $timeStamp
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \System\UInt32 $key
	 */
	public function RawKeyEvent($type, $timeStamp, $modifiers, $key);
	/**
	 * @param \System\UInt64 $timeStamp
	 * @param \System\String|string $text
	 */
	public function RawTextInputEvent($timeStamp, $text);
	/**
	 * @param \System\Double|double $scaling
	 */
	public function ScalingChanged($scaling);
	/**
	 */
	public function RunRenderPriorityJobs();
	/**
	 */
	public function LostFocus();
	/**
	 * @param \Avalonia\Native\Interop\AvnDragEventType $type
	 * @param \Avalonia\Native\Interop\AvnPoint $position
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effects
	 * @param \Avalonia\Native\Interop\IAvnClipboard $clipboard
	 * @param \System\IntPtr $dataObjectHandle
	 */
	public function DragEvent($type, $position, $modifiers, $effects, $clipboard, $dataObjectHandle);
	/**
	 */
	public function get_AutomationPeer();
}
