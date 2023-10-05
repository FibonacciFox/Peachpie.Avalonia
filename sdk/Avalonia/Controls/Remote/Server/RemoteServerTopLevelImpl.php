<?php
namespace Avalonia\Controls\Remote\Server;
/**
 */
class RemoteServerTopLevelImpl extends \Avalonia\Controls\Embedding\Offscreen\OffscreenTopLevelImplBase implements 
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable,
	\Avalonia\Controls\Platform\Surfaces\IFramebufferPlatformSurface
{
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
	 * @param \Avalonia\Remote\Protocol\Input\MouseButton $button
	 * @param \System\Boolean $pressed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAvaloniaEventType($button, $pressed){}
	/**
	 * @param \Avalonia\Remote\Protocol\Input\InputModifiers[] $modifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAvaloniaRawInputModifiers($modifiers){}
	/**
	 * @param \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection $transport
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	protected  function OnMessage($transport, $obj){}
	/**
	 * @param \Avalonia\Remote\Protocol\Viewport\PixelFormat[] $formats
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetValidPixelFormat($formats){}
	/**
	 * @param \Avalonia\Size $constraint
	 * @return \Avalonia\Size
	 */
	protected  function Measure($constraint){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetOrCreateFramebuffer(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SendLastFrameIfNeeded(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RenderAndSendFrameIfNeeded(){}
	/**
	 * @return \Avalonia\Input\IKeyboardDevice
	 */
	public  function get_KeyboardDevice(){}
	/**
	 * @return \Avalonia\Controls\Platform\Surfaces\IFramebufferRenderTarget
	 */
	public  function CreateFramebufferRenderTarget(){}
}
