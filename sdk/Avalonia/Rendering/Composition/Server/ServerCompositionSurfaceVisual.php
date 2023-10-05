<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionSurfaceVisualMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_1($prop, $field, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_2($prop, $field, $value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\T
	 */
	#[MethodOverride] protected  function GetValue_1($prop, $field){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\T
	 */
	#[MethodOverride] protected  function GetValue_2($prop, $field){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetAnimatedValue_1($prop, $field, $committedAt, $animation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetAnimatedValue_2($property, $field, $value){}
}
/**
 */
class ServerCompositionSurfaceVisual extends \Avalonia\Rendering\Composition\Server\ServerCompositionContainerVisual implements 
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject
{
	/**
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 * @field
	 */
	protected $s_IdOfSurfaceProperty;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $IsDirtyComposition;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositionSurface
	 * @property
	 */
	public $Surface;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositionVisualCollection
	 * @property
	 */
	public readonly $Children;
	/**
	 * @var \Avalonia\Matrix
	 * @property
	 */
	public readonly $CombinedTransformMatrix;
	/**
	 * @var \Avalonia\Matrix
	 * @property
	 */
	public readonly $GlobalTransformMatrix;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsVisibleInFrame;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsHitTestVisibleInFrame;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $EffectiveOpacity;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public $TransformedOwnContentBounds;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public readonly $OwnContentBounds;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositionTarget
	 * @property
	 */
	public $Root;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositionVisual
	 * @property
	 */
	public $Parent;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Visible;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $Opacity;
	/**
	 * @var \Avalonia\Platform\IGeometryImpl
	 * @property
	 */
	public $Clip;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ClipToBounds;
	/**
	 * @var \Avalonia\Vector3D
	 * @property
	 */
	public $Offset;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public $Size;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public $AnchorPoint;
	/**
	 * @var \Avalonia\Vector3D
	 * @property
	 */
	public $CenterPoint;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $RotationAngle;
	/**
	 * @var \System\Numerics\Quaternion
	 * @property
	 */
	public $Orientation;
	/**
	 * @var \Avalonia\Vector3D
	 * @property
	 */
	public $Scale;
	/**
	 * @var \Avalonia\Matrix
	 * @property
	 */
	public $TransformMatrix;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositionVisual
	 * @property
	 */
	public $AdornedVisual;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $AdornerIsClipped;
	/**
	 * @var \Avalonia\Media\IImmutableBrush
	 * @property
	 */
	public $OpacityMaskBrush;
	/**
	 * @var \Avalonia\Media\IImmutableEffect
	 * @property
	 */
	public $Effect;
	/**
	 * @var \Avalonia\Media\RenderOptions
	 * @property
	 */
	public $RenderOptions;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsActive;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @property
	 */
	public readonly $Compositor;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSurfaceInvalidated(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionSurface
	 */
	public  function get_Surface(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionSurface $value
	 * @return \System\Void|void
	 */
	public  function set_Surface($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSurfaceChanged(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSurfaceChanging(){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetProperty($name){}
	/**
	 * @uses ServerCompositionSurfaceVisualMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionSurfaceVisualMethodsOverride::SetValue_2 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionSurfaceVisualMethodsOverride::GetValue_1 ($prop, $field)
	 * @uses ServerCompositionSurfaceVisualMethodsOverride::GetValue_2 ($prop, $field)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionSurfaceVisualMethodsOverride::SetAnimatedValue_1 ($prop, $field, $committedAt, $animation)
	 * @uses ServerCompositionSurfaceVisualMethodsOverride::SetAnimatedValue_2 ($property, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAnimatedValue(mixed ...$args){}
}
