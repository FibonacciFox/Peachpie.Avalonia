<?php
namespace Avalonia\Controls\Embedding\Offscreen;
/**
 */
class OffscreenTopLevelImplBase extends \System\Object implements 
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\Input\IInputRoot
	 */
	public  function get_InputRoot(){}
	/**
	 * @param \Avalonia\Input\IInputRoot $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_InputRoot($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDisposed(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsDisposed($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Compositor
	 */
	public  function get_Compositor(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Surfaces(){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_ClientSize(){}
	/**
	 * @param \Avalonia\Size $value
	 * @return \System\Void|void
	 */
	public  function set_ClientSize($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_FrameSize(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_RenderScaling(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_RenderScaling($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_Input(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Input($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_Paint(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Paint($value){}
	/**
	 * @return \System\Action_2
	 */
	public  function get_Resized(){}
	/**
	 * @param \System\Action_2 $value
	 * @return \System\Void|void
	 */
	public  function set_Resized($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_ScalingChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_ScalingChanged($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_TransparencyLevelChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_TransparencyLevelChanged($value){}
	/**
	 * @param \Avalonia\Platform\PlatformThemeVariant $themeVariant
	 * @return \System\Void|void
	 */
	public  function SetFrameThemeVariant($themeVariant){}
	/**
	 * @return \Avalonia\Controls\AcrylicPlatformCompensationLevels
	 */
	public  function get_AcrylicCompensationLevels(){}
	/**
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 * @return \System\Void|void
	 */
	public  function SetInputRoot($inputRoot){}
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \Avalonia\Point
	 */
	public  function PointToClient($point){}
	/**
	 * @param \Avalonia\Point $point
	 * @return \Avalonia\PixelPoint
	 */
	public  function PointToScreen($point){}
	/**
	 * @param \Avalonia\Platform\ICursorImpl $cursor
	 * @return \System\Void|void
	 */
	public  function SetCursor($cursor){}
	/**
	 * @return \System\Action
	 */
	public  function get_Closed(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_Closed($value){}
	/**
	 * @return \System\Action
	 */
	public  function get_LostFocus(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_LostFocus($value){}
	/**
	 * @return \Avalonia\Input\IMouseDevice
	 */
	public  function get_MouseDevice(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $transparencyLevel
	 * @return \System\Void|void
	 */
	public  function SetTransparencyLevelHint($transparencyLevel){}
	/**
	 * @return \Avalonia\Controls\WindowTransparencyLevel
	 */
	public  function get_TransparencyLevel(){}
	/**
	 * @return \Avalonia\Platform\IPopupImpl
	 */
	public  function CreatePopup(){}
	/**
	 * @param \System\Type $featureType
	 * @return \System\Object|object
	 */
	public  function TryGetFeature($featureType){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
