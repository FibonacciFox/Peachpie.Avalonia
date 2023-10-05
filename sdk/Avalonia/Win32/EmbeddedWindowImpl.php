<?php
namespace Avalonia\Win32;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EmbeddedWindowImplMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\IPlatformHandle
	 */
	#[MethodOverride] public  function get_Handle_1(){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private  function get_Handle_2(){}
}
/**
 */
class EmbeddedWindowImpl extends \Avalonia\Win32\WindowImpl implements 
	\Avalonia\Platform\IWindowImpl,
	\Avalonia\Platform\IWindowBaseImpl,
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable,
	\Avalonia\OpenGL\Egl\IEglWindowGlPlatformSurfaceInfo
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_ignoreWmChar;
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
	 * @var \System\Action
	 * @property
	 */
	public $Closed;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $Deactivated;
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
	 * @var \System\Action_1[Avalonia\PixelPoint]
	 * @property
	 */
	public $PositionChanged;
	/**
	 * @var \System\Action_1[Avalonia\Controls\WindowState]
	 * @property
	 */
	public $WindowStateChanged;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $LostFocus;
	/**
	 * @var \System\Action_1[Avalonia\Controls\WindowTransparencyLevel]
	 * @property
	 */
	public $TransparencyLevelChanged;
	/**
	 * @var \Avalonia\Thickness
	 * @property
	 */
	public readonly $BorderThickness;
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
	 * @var \Avalonia\Platform\IScreenImpl
	 * @property
	 */
	public readonly $Screen;
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
	 * @var \Avalonia\Input\IMouseDevice
	 * @property
	 */
	public readonly $MouseDevice;
	/**
	 * @var \Avalonia\Controls\WindowState
	 * @property
	 */
	public $WindowState;
	/**
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @property
	 */
	public readonly $TransparencyLevel;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Object]
	 * @property
	 */
	public readonly $Surfaces;
	/**
	 * @var \Avalonia\PixelPoint
	 * @property
	 */
	public $Position;
	/**
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @property
	 */
	public readonly $Compositor;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $GotInputWhenDisabled;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsClientAreaExtendedToDecorations;
	/**
	 * @var \System\Action_1[System\Boolean]
	 * @property
	 */
	public $ExtendClientAreaToDecorationsChanged;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $NeedsManagedDecorations;
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
	 * @var \Avalonia\Controls\AcrylicPlatformCompensationLevels
	 * @property
	 */
	public readonly $AcrylicCompensationLevels;
	/**
	 * @var \Avalonia\Controls\Platform\INativeControlHostImpl
	 * @property
	 */
	public readonly $NativeControlHost;
	/**
	 * @uses EmbeddedWindowImplMethodsOverride::get_Handle_1 ()
	 * @uses EmbeddedWindowImplMethodsOverride::get_Handle_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Handle(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Size(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Scaling(){}
}
