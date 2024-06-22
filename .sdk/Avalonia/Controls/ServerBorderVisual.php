<?php
namespace Avalonia\Controls;
class ServerBorderVisual extends \Avalonia\Rendering\Composition\Server\ServerCompositionDrawListVisual implements
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver
{

	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $IsDirtyComposition;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $OwnContentBounds;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositionVisualCollection
	 * @since readonly
	 */
	public $Children;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 * @since readonly
	 */
	public $CombinedTransformMatrix;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 * @since readonly
	 */
	public $GlobalTransformMatrix;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsVisibleInFrame;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsHitTestVisibleInFrame;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $EffectiveOpacity;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $TransformedOwnContentBounds;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositionTarget
	 */
	public $Root;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositionVisual
	 */
	public $Parent;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Visible;
	/**
	 * @property
	 * @var \System\Single
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\Platform\IGeometryImpl
	 */
	public $Clip;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ClipToBounds;
	/**
	 * @property
	 * @var \Avalonia\Vector3D
	 */
	public $Offset;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 */
	public $Size;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 */
	public $AnchorPoint;
	/**
	 * @property
	 * @var \Avalonia\Vector3D
	 */
	public $CenterPoint;
	/**
	 * @property
	 * @var \System\Single
	 */
	public $RotationAngle;
	/**
	 * @property
	 * @var \System\Numerics\Quaternion
	 */
	public $Orientation;
	/**
	 * @property
	 * @var \Avalonia\Vector3D
	 */
	public $Scale;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 */
	public $TransformMatrix;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositionVisual
	 */
	public $AdornedVisual;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AdornerIsClipped;
	/**
	 * @property
	 * @var \Avalonia\Media\IImmutableBrush
	 */
	public $OpacityMaskBrush;
	/**
	 * @property
	 * @var \Avalonia\Media\IImmutableEffect
	 */
	public $Effect;
	/**
	 * @property
	 * @var \Avalonia\Media\RenderOptions
	 */
	public $RenderOptions;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsActive;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @since readonly
	 */
	public $Compositor;
	private function GetProperty($name){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositor $compositor
	 * @param \Avalonia\Visual $v
	 */
	public function __construct($compositor, $v){}
}