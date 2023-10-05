<?php
namespace Avalonia;
/**
 */
class Win32PlatformOptions extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $OverlayPopups;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Win32RenderingMode]
	 * @property
	 */
	public $RenderingMode;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Win32CompositionMode]
	 * @property
	 */
	public $CompositionMode;
	/**
	 * @var \System\Nullable_1[System\Single]
	 * @property
	 */
	public $WinUICompositionBackdropCornerRadius;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ShouldRenderOnUIThread;
	/**
	 * @var \System\Collections\Generic\IList_1[Avalonia\OpenGL\GlVersion]
	 * @property
	 */
	public $WglProfiles;
	/**
	 * @var \Avalonia\Platform\IPlatformGraphics
	 * @property
	 */
	public $CustomPlatformGraphics;
	/**
	 * @return \System\Boolean
	 */
	public  function get_OverlayPopups(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_OverlayPopups($value){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_RenderingMode(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_RenderingMode($value){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_CompositionMode(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_CompositionMode($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_WinUICompositionBackdropCornerRadius(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_WinUICompositionBackdropCornerRadius($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ShouldRenderOnUIThread(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ShouldRenderOnUIThread($value){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_WglProfiles(){}
	/**
	 * @param \System\Collections\Generic\IList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_WglProfiles($value){}
	/**
	 * @return \Avalonia\Platform\IPlatformGraphics
	 */
	public  function get_CustomPlatformGraphics(){}
	/**
	 * @param \Avalonia\Platform\IPlatformGraphics $value
	 * @return \System\Void|void
	 */
	public  function set_CustomPlatformGraphics($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
