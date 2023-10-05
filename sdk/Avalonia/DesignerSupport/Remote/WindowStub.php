<?php
namespace Avalonia\DesignerSupport\Remote;
/**
 */
class WindowStub extends \System\Object implements 
	\Avalonia\Platform\IWindowImpl,
	\Avalonia\Platform\IWindowBaseImpl,
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable,
	\Avalonia\Platform\IPopupImpl
{
	/**
	 * @var \System\Action
	 * @property
	 */
	public $Deactivated;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $Activated;
	/**
	 * @var \Avalonia\Platform\IPlatformHandle
	 * @property
	 */
	public readonly $Handle;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $MaxAutoSizeHint;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $ClientSize;
	/**
	 * @var \System\Nullable_1[Avalonia\Size]
	 * @property
	 */
	public readonly $FrameSize;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $RenderScaling;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $DesktopScaling;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Object]
	 * @property
	 */
	public readonly $Surfaces;
	/**
	 * @var \System\Action_1[Avalonia\Input\Raw\RawInputEventArgs]
	 * @property
	 */
	public $Input;
	/**
	 * @var \System\Action_1[Avalonia\Rect]
	 * @property
	 */
	public $Paint;
	/**
	 * @var \System\Action_2[Avalonia\Size,Avalonia\Controls\WindowResizeReason]
	 * @property
	 */
	public $Resized;
	/**
	 * @var \System\Action_1[System\Double]
	 * @property
	 */
	public $ScalingChanged;
	/**
	 * @var \System\Func_2[Avalonia\Controls\WindowCloseReason,System\Boolean]
	 * @property
	 */
	public $Closing;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $Closed;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $LostFocus;
	/**
	 * @var \Avalonia\Input\IMouseDevice
	 * @property
	 */
	public readonly $MouseDevice;
	/**
	 * @var \Avalonia\PixelPoint
	 * @property
	 */
	public $Position;
	/**
	 * @var \System\Action_1[Avalonia\PixelPoint]
	 * @property
	 */
	public $PositionChanged;
	/**
	 * @var \Avalonia\Controls\WindowState
	 * @property
	 */
	public $WindowState;
	/**
	 * @var \System\Action_1[Avalonia\Controls\WindowState]
	 * @property
	 */
	public $WindowStateChanged;
	/**
	 * @var \System\Action_1[Avalonia\Controls\WindowTransparencyLevel]
	 * @property
	 */
	public $TransparencyLevelChanged;
	/**
	 * @var \System\Action_1[System\Boolean]
	 * @property
	 */
	public $ExtendClientAreaToDecorationsChanged;
	/**
	 * @var \Avalonia\Thickness
	 * @property
	 */
	public readonly $ExtendedMargins;
	/**
	 * @var \Avalonia\Thickness
	 * @property
	 */
	public readonly $OffScreenMargin;
	/**
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @property
	 */
	public readonly $Compositor;
	/**
	 * @var \Avalonia\Platform\IScreenImpl
	 * @property
	 */
	public readonly $Screen;
	/**
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\IPopupPositioner
	 * @property
	 */
	public readonly $PopupPositioner;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $GotInputWhenDisabled;
	/**
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @property
	 */
	public readonly $TransparencyLevel;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsClientAreaExtendedToDecorations;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $NeedsManagedDecorations;
	/**
	 * @var \Avalonia\Controls\AcrylicPlatformCompensationLevels
	 * @property
	 */
	public readonly $AcrylicCompensationLevels;
	/**
	 * @return \System\Action
	 */
	public  function get_Deactivated(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_Deactivated($value){}
	/**
	 * @return \System\Action
	 */
	public  function get_Activated(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_Activated($value){}
	/**
	 * @return \Avalonia\Platform\IPlatformHandle
	 */
	public  function get_Handle(){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_MaxAutoSizeHint(){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_ClientSize(){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_FrameSize(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_RenderScaling(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_DesktopScaling(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Surfaces(){}
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
	 * @return \System\Func_2
	 */
	public  function get_Closing(){}
	/**
	 * @param \System\Func_2 $value
	 * @return \System\Void|void
	 */
	public  function set_Closing($value){}
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
	 * @return \Avalonia\Platform\IPopupImpl
	 */
	public  function CreatePopup(){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	public  function get_Position(){}
	/**
	 * @param \Avalonia\PixelPoint $value
	 * @return \System\Void|void
	 */
	public  function set_Position($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_PositionChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_PositionChanged($value){}
	/**
	 * @return \Avalonia\Controls\WindowState
	 */
	public  function get_WindowState(){}
	/**
	 * @param \Avalonia\Controls\WindowState $value
	 * @return \System\Void|void
	 */
	public  function set_WindowState($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_WindowStateChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_WindowStateChanged($value){}
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
	 * @return \System\Action_1
	 */
	public  function get_ExtendClientAreaToDecorationsChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_ExtendClientAreaToDecorationsChanged($value){}
	/**
	 * @return \Avalonia\Thickness
	 */
	public  function get_ExtendedMargins(){}
	/**
	 * @return \Avalonia\Thickness
	 */
	public  function get_OffScreenMargin(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Compositor
	 */
	public  function get_Compositor(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public  function Invalidate($rect){}
	/**
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 * @return \System\Void|void
	 */
	public  function SetInputRoot($inputRoot){}
	/**
	 * @param \Avalonia\PixelPoint $p
	 * @return \Avalonia\Point
	 */
	public  function PointToClient($p){}
	/**
	 * @param \Avalonia\Point $p
	 * @return \Avalonia\PixelPoint
	 */
	public  function PointToScreen($p){}
	/**
	 * @param \Avalonia\Platform\ICursorImpl $cursor
	 * @return \System\Void|void
	 */
	public  function SetCursor($cursor){}
	/**
	 * @param \System\Boolean $activate
	 * @param \System\Boolean $isDialog
	 * @return \System\Void|void
	 */
	public  function Show($activate, $isDialog){}
	/**
	 * @return \System\Void|void
	 */
	public  function Hide(){}
	/**
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	public  function BeginMoveDrag($e){}
	/**
	 * @param \Avalonia\Controls\WindowEdge $edge
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	public  function BeginResizeDrag($edge, $e){}
	/**
	 * @return \System\Void|void
	 */
	public  function Activate(){}
	/**
	 * @param \Avalonia\Size $clientSize
	 * @param \Avalonia\Controls\WindowResizeReason $reason
	 * @return \System\Void|void
	 */
	public  function Resize($clientSize, $reason){}
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \System\Void|void
	 */
	public  function Move($point){}
	/**
	 * @return \Avalonia\Platform\IScreenImpl
	 */
	public  function get_Screen(){}
	/**
	 * @param \Avalonia\Size $minSize
	 * @param \Avalonia\Size $maxSize
	 * @return \System\Void|void
	 */
	public  function SetMinMaxSize($minSize, $maxSize){}
	/**
	 * @param \System\String|string $title
	 * @return \System\Void|void
	 */
	public  function SetTitle($title){}
	/**
	 * @param \Avalonia\Platform\IWindowImpl $parent
	 * @return \System\Void|void
	 */
	public  function ShowDialog($parent){}
	/**
	 * @param \Avalonia\Controls\SystemDecorations $enabled
	 * @return \System\Void|void
	 */
	public  function SetSystemDecorations($enabled){}
	/**
	 * @param \Avalonia\Platform\IWindowIconImpl $icon
	 * @return \System\Void|void
	 */
	public  function SetIcon($icon){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function ShowTaskbarIcon($value){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function CanResize($value){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function SetTopmost($value){}
	/**
	 * @param \Avalonia\Platform\IWindowImpl $parent
	 * @return \System\Void|void
	 */
	public  function SetParent($parent){}
	/**
	 * @param \System\Boolean $enable
	 * @return \System\Void|void
	 */
	public  function SetEnabled($enable){}
	/**
	 * @param \System\Boolean $extendIntoClientAreaHint
	 * @return \System\Void|void
	 */
	public  function SetExtendClientAreaToDecorationsHint($extendIntoClientAreaHint){}
	/**
	 * @param \Avalonia\Platform\ExtendClientAreaChromeHints $hints
	 * @return \System\Void|void
	 */
	public  function SetExtendClientAreaChromeHints($hints){}
	/**
	 * @param \System\Double|double $titleBarHeight
	 * @return \System\Void|void
	 */
	public  function SetExtendClientAreaTitleBarHeightHint($titleBarHeight){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\IPopupPositioner
	 */
	public  function get_PopupPositioner(){}
	/**
	 * @return \System\Action
	 */
	public  function get_GotInputWhenDisabled(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_GotInputWhenDisabled($value){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $transparencyLevel
	 * @return \System\Void|void
	 */
	public  function SetTransparencyLevelHint($transparencyLevel){}
	/**
	 * @param \System\Boolean $enabled
	 * @return \System\Void|void
	 */
	public  function SetWindowManagerAddShadowHint($enabled){}
	/**
	 * @return \Avalonia\Controls\WindowTransparencyLevel
	 */
	public  function get_TransparencyLevel(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsClientAreaExtendedToDecorations(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_NeedsManagedDecorations(){}
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
