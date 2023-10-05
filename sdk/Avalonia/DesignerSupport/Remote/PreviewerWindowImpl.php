<?php
namespace Avalonia\DesignerSupport\Remote;
/**
 */
class PreviewerWindowImpl extends \Avalonia\Controls\Remote\Server\RemoteServerTopLevelImpl implements 
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable,
	\Avalonia\Controls\Platform\Surfaces\IFramebufferPlatformSurface,
	\Avalonia\Platform\IWindowImpl,
	\Avalonia\Platform\IWindowBaseImpl
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $DesktopScaling;
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
	 * @var \System\Func_2[Avalonia\Controls\WindowCloseReason,System\Boolean]
	 * @property
	 */
	public $Closing;
	/**
	 * @var \Avalonia\Platform\IPlatformHandle
	 * @property
	 */
	public readonly $Handle;
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
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $MaxAutoSizeHint;
	/**
	 * @var \Avalonia\Platform\IScreenImpl
	 * @property
	 */
	public readonly $Screen;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $GotInputWhenDisabled;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsClientAreaExtendedToDecorations;
	/**
	 * @var \Avalonia\Thickness
	 * @property
	 */
	public readonly $OffScreenMargin;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $NeedsManagedDecorations;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Object]
	 * @property
	 */
	public readonly $Surfaces;
	/**
	 * @var \Avalonia\Input\IMouseDevice
	 * @property
	 */
	public readonly $MouseDevice;
	/**
	 * @var \Avalonia\Input\IKeyboardDevice
	 * @property
	 */
	public readonly $KeyboardDevice;
	/**
	 * @var \Avalonia\Input\IInputRoot
	 * @property
	 */
	public readonly $InputRoot;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDisposed;
	/**
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @property
	 */
	public readonly $Compositor;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public $ClientSize;
	/**
	 * @var \System\Nullable_1[Avalonia\Size]
	 * @property
	 */
	public readonly $FrameSize;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $RenderScaling;
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
	 * @var \System\Action_1[Avalonia\Controls\WindowTransparencyLevel]
	 * @property
	 */
	public $TransparencyLevelChanged;
	/**
	 * @var \Avalonia\Controls\AcrylicPlatformCompensationLevels
	 * @property
	 */
	public readonly $AcrylicCompensationLevels;
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
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @property
	 */
	public readonly $TransparencyLevel;
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
	 * @return \System\Double|double
	 */
	public  function get_DesktopScaling(){}
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
	 * @return \System\Func_2
	 */
	public  function get_Closing(){}
	/**
	 * @param \System\Func_2 $value
	 * @return \System\Void|void
	 */
	public  function set_Closing($value){}
	/**
	 * @return \Avalonia\Platform\IPlatformHandle
	 */
	public  function get_Handle(){}
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
	 * @return \Avalonia\Size
	 */
	public  function get_MaxAutoSizeHint(){}
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
	 * @param \Avalonia\Size $minSize
	 * @param \Avalonia\Size $maxSize
	 * @return \System\Void|void
	 */
	public  function SetMinMaxSize($minSize, $maxSize){}
	/**
	 * @return \Avalonia\Platform\IScreenImpl
	 */
	public  function get_Screen(){}
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
	 * @return \System\Boolean
	 */
	public  function get_IsClientAreaExtendedToDecorations(){}
	/**
	 * @return \Avalonia\Thickness
	 */
	public  function get_OffScreenMargin(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_NeedsManagedDecorations(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Activate(){}
	/**
	 * @param \System\String|string $title
	 * @return \System\Void|void
	 */
	public  function SetTitle($title){}
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
}
