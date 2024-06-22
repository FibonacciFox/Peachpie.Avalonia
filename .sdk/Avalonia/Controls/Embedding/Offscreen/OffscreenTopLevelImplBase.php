<?php
namespace Avalonia\Controls\Embedding\Offscreen;
class OffscreenTopLevelImplBase extends \System\Object implements
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable
{

	/**
	 * @property
	 * @var \Avalonia\Input\IInputRoot
	 */
	public $InputRoot;
	/**
	 * @property
	 * @var \System\Boolean|bool
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
	 * @var \System\Collections\Generic\IEnumerable_1[System\Object]
	 * @since readonly
	 */
	public $Surfaces;
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
	 * @var \Avalonia\Input\IMouseDevice
	 * @since readonly
	 */
	public $MouseDevice;
	/**
	 * @property
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @since readonly
	 */
	public $TransparencyLevel;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Platform\PlatformThemeVariant $themeVariant
	 * @return \System\Void|void
	 */
	public function SetFrameThemeVariant($themeVariant){}
	/**
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 * @return \System\Void|void
	 */
	public function SetInputRoot($inputRoot){}
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \Avalonia\Point
	 */
	public function PointToClient($point){}
	/**
	 * @param \Avalonia\Point $point
	 * @return \Avalonia\PixelPoint
	 */
	public function PointToScreen($point){}
	/**
	 * @param \Avalonia\Platform\ICursorImpl $cursor
	 * @return \System\Void|void
	 */
	public function SetCursor($cursor){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $transparencyLevel [generic: Avalonia\Controls\WindowTransparencyLevel]
	 * @return \System\Void|void
	 */
	public function SetTransparencyLevelHint($transparencyLevel){}
	/**
	 * @return \Avalonia\Platform\IPopupImpl
	 */
	public function CreatePopup(){}
	/**
	 * @param \System\Type $featureType
	 * @return \System\Object|object
	 */
	public function TryGetFeature($featureType){}
	/**
	 */
	public function __construct(){}
}