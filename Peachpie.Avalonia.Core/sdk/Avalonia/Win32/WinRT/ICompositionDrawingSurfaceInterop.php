<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositionDrawingSurfaceInterop
{
	/**
	 * @param \Avalonia\Win32\Interop\RECT* $updateRect
	 * @param \System\Guid* $iid
	 * @param \System\Void** $updateObject
	 */
	public function BeginDraw($updateRect, $iid, $updateObject);
	/**
	 */
	public function EndDraw();
	/**
	 * @param \Avalonia\Win32\Interop\POINT $sizePixels
	 */
	public function Resize($sizePixels);
	/**
	 * @param \Avalonia\Win32\Interop\RECT* $scrollRect
	 * @param \Avalonia\Win32\Interop\RECT* $clipRect
	 * @param \System\Int32|int $offsetX
	 * @param \System\Int32|int $offsetY
	 */
	public function Scroll($scrollRect, $clipRect, $offsetX, $offsetY);
	/**
	 */
	public function ResumeDraw();
	/**
	 */
	public function SuspendDraw();
}
