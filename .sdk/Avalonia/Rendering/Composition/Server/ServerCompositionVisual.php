<?php
namespace Avalonia\Rendering\Composition\Server;
class ServerCompositionVisual extends \Avalonia\Rendering\Composition\Server\ServerObject implements
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject
{

	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $IsDirtyComposition;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfRootProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfParentProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfVisibleProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfOpacityProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfClipProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfClipToBoundsProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfOffsetProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfSizeProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfAnchorPointProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfCenterPointProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfRotationAngleProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfOrientationProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfScaleProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfTransformMatrixProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfAdornedVisualProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfAdornerIsClippedProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfOpacityMaskBrushProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfEffectProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfRenderOptionsProperty;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 */
	public $CombinedTransformMatrix;
	/**
	 * @property
	 * @var \Avalonia\Matrix
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
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $OwnContentBounds;
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
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositorDrawingContextProxy $canvas
	 * @param \Avalonia\Rect $currentTransformedClip
	 * @return \System\Void|void
	 */
	protected function RenderCore($canvas, $currentTransformedClip){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositorDrawingContextProxy $canvas
	 * @param \Avalonia\Rect $currentTransformedClip
	 * @return \System\Void|void
	 */
	public function Render($canvas, $currentTransformedClip){}
	/**
	 * @param \System\Int32|int $idx
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionVisual+ReadbackData&
	 */
	public function GetReadback($idx){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionTarget $root
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionVisual+UpdateResult
	 */
	public function Update($root){}
	/**
	 * @param \Avalonia\Rect $rc
	 * @return \System\Void|void
	 */
	protected function AddDirtyRect($rc){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionTarget $target
	 * @return \System\Void|void
	 */
	protected function OnDetachedFromRoot($target){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionTarget $target
	 * @return \System\Void|void
	 */
	protected function OnAttachedToRoot($target){}
	private function DeserializeChangesExtra($c){}
	private function OnRootChanged(){}
	private function OnRootChanging(){}
	private function OnFieldsDeserialized($changed){}
	private function GetProperty($name){}
}