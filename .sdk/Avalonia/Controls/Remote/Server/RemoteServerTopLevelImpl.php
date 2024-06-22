<?php
namespace Avalonia\Controls\Remote\Server;
class RemoteServerTopLevelImpl extends \Avalonia\Controls\Embedding\Offscreen\OffscreenTopLevelImplBase implements
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable,
	\Avalonia\Controls\Platform\Surfaces\IFramebufferPlatformSurface
{

	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Object]
	 * @since readonly
	 */
	public $Surfaces;
	/**
	 * @property
	 * @var \Avalonia\Input\IMouseDevice
	 * @since readonly
	 */
	public $MouseDevice;
	/**
	 * @property
	 * @var \Avalonia\Input\IKeyboardDevice
	 * @since readonly
	 */
	public $KeyboardDevice;
	/**
	 * @property
	 * @var \Avalonia\Input\IInputRoot
	 * @since readonly
	 */
	public $InputRoot;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDisposed;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @since readonly
	 */
	public $Compositor;
	/**
	 * @property
	 * @var \Avalonia\Size
	 */
	public $ClientSize;
	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Size]
	 * @since readonly
	 */
	public $FrameSize;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $RenderScaling;
	/**
	 * @property
	 * @var \System\Action_1[Avalonia\Input\Raw\RawInputEventArgs]
	 */
	public $Input;
	/**
	 * @property
	 * @var \System\Action_1[Avalonia\Rect]
	 */
	public $Paint;
	/**
	 * @property
	 * @var \System\Action_2[Avalonia\Size,Avalonia\Controls\WindowResizeReason]
	 */
	public $Resized;
	/**
	 * @property
	 * @var \System\Action_1[System\Double]
	 */
	public $ScalingChanged;
	/**
	 * @property
	 * @var \System\Action_1[Avalonia\Controls\WindowTransparencyLevel]
	 */
	public $TransparencyLevelChanged;
	/**
	 * @property
	 * @var \Avalonia\Controls\AcrylicPlatformCompensationLevels
	 * @since readonly
	 */
	public $AcrylicCompensationLevels;
	/**
	 * @property
	 * @var \System\Action
	 */
	public $Closed;
	/**
	 * @property
	 * @var \System\Action
	 */
	public $LostFocus;
	/**
	 * @property
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @since readonly
	 */
	public $TransparencyLevel;
	private static function GetAvaloniaEventType($button, $pressed){}
	private static function GetAvaloniaRawInputModifiers($modifiers){}
	/**
	 * @param \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection $transport
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	protected function OnMessage($transport, $obj){}
	private static function TryGetValidPixelFormat($formats){}
	/**
	 * @param \Avalonia\Size $constraint
	 * @return \Avalonia\Size
	 */
	protected function Measure($constraint){}
	private function GetOrCreateFramebuffer(){}
	private function SendLastFrameIfNeeded(){}
	/**
	 * @return \System\Void|void
	 */
	protected function RenderAndSendFrameIfNeeded(){}
	/**
	 * @return \Avalonia\Controls\Platform\Surfaces\IFramebufferRenderTarget
	 */
	public function CreateFramebufferRenderTarget(){}
	/**
	 * @param \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection $transport
	 */
	public function __construct($transport){}
}