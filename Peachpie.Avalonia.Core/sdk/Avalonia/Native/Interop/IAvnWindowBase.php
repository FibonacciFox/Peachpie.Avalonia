<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnWindowBase
{
	/**
	 * @param \System\Int32|int $activate
	 * @param \System\Int32|int $isDialog
	 */
	public function Show($activate, $isDialog);
	/**
	 */
	public function Hide();
	/**
	 */
	public function Close();
	/**
	 */
	public function Activate();
	/**
	 */
	public function get_ClientSize();
	/**
	 * @param \Avalonia\Native\Interop\AvnSize* $result
	 */
	public function GetFrameSize($result);
	/**
	 */
	public function get_Scaling();
	/**
	 * @param \Avalonia\Native\Interop\AvnSize $minSize
	 * @param \Avalonia\Native\Interop\AvnSize $maxSize
	 */
	public function SetMinMaxSize($minSize, $maxSize);
	/**
	 * @param \System\Double|double $width
	 * @param \System\Double|double $height
	 * @param \Avalonia\Native\Interop\AvnPlatformResizeReason $reason
	 */
	public function Resize($width, $height, $reason);
	/**
	 * @param \Avalonia\Native\Interop\AvnRect $rect
	 */
	public function Invalidate($rect);
	/**
	 */
	public function BeginMoveDrag();
	/**
	 * @param \Avalonia\Native\Interop\AvnWindowEdge $edge
	 */
	public function BeginResizeDrag($edge);
	/**
	 */
	public function get_Position();
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 */
	public function SetPosition($point);
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 */
	public function PointToClient($point);
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 */
	public function PointToScreen($point);
	/**
	 * @param \System\Int32|int $value
	 */
	public function SetTopMost($value);
	/**
	 * @param \Avalonia\Native\Interop\IAvnCursor $cursor
	 */
	public function SetCursor($cursor);
	/**
	 * @param \Avalonia\Native\Interop\IAvnGlContext $context
	 */
	public function CreateGlRenderTarget($context);
	/**
	 */
	public function CreateSoftwareRenderTarget();
	/**
	 * @param \Avalonia\Native\Interop\IAvnMetalDevice $device
	 */
	public function CreateMetalRenderTarget($device);
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenu $menu
	 */
	public function SetMainMenu($menu);
	/**
	 */
	public function ObtainNSWindowHandle();
	/**
	 */
	public function ObtainNSWindowHandleRetained();
	/**
	 */
	public function ObtainNSViewHandle();
	/**
	 */
	public function ObtainNSViewHandleRetained();
	/**
	 */
	public function CreateNativeControlHost();
	/**
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effects
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \Avalonia\Native\Interop\IAvnClipboard $clipboard
	 * @param \Avalonia\Native\Interop\IAvnDndResultCallback $cb
	 * @param \System\IntPtr $sourceHandle
	 */
	public function BeginDragAndDropOperation($effects, $point, $clipboard, $cb, $sourceHandle);
	/**
	 * @param \Avalonia\Native\Interop\AvnWindowTransparencyMode $mode
	 */
	public function SetTransparencyMode($mode);
	/**
	 * @param \Avalonia\Native\Interop\AvnPlatformThemeVariant $mode
	 */
	public function SetFrameThemeVariant($mode);
	/**
	 */
	public function get_InputMethod();
}
