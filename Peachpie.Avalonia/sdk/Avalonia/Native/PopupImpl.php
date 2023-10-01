<?php
namespace Avalonia\Native;
/**
 */
class PopupImpl extends \Avalonia\Native\WindowBaseImpl implements 
	\Avalonia\Platform\IWindowBaseImpl,
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable,
	\Avalonia\Controls\Platform\Surfaces\IFramebufferPlatformSurface,
	\Avalonia\Platform\IPopupImpl
{
	/**
	 * @param \Avalonia\PixelPoint $position
	 * @param \Avalonia\Size $size
	 * @param \System\Double|double $scaling
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveResize($position, $size, $scaling){}
	/**
	 * @param \System\Boolean $enabled
	 * @return \System\Void|void
	 */
	public  function SetWindowManagerAddShadowHint($enabled){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\IPopupPositioner
	 */
	public  function get_PopupPositioner(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateFramebufferRenderTarget(){}
}
