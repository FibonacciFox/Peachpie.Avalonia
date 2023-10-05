<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositionVisualMethodsOverride
{
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionVisual
	 */
	#[MethodOverride] protected  function get_Server_1(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\SimpleServerObject
	 */
	#[MethodOverride] protected  function get_Server_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function StartAnimation_1($propertyName, $animation, $finalValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function StartAnimation_2($propertyName, $animation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function StartAnimationGroup_1($grp){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function StartAnimationGroup_2($grp, $target, $finalValue){}
}
/**
 */
class CompositionVisual extends \Avalonia\Rendering\Composition\CompositionObject implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	/**
	 * @var \Avalonia\Utilities\InlineDictionary_2[Avalonia\Rendering\Composition\Server\CompositionProperty,Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 * @field
	 */
	protected $PendingAnimations;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $OpacityMask;
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
	 * @var \Avalonia\Media\RenderOptions
	 * @property
	 */
	public $RenderOptions;
	/**
	 * @var \Avalonia\Rendering\Composition\Animations\ImplicitAnimationCollection
	 * @property
	 */
	public $ImplicitAnimations;
	/**
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @property
	 */
	public readonly $Compositor;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDisposed;
	/**
	 * @return \System\Void|void
	 */
	protected  function OnRootChangedCore(){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_OpacityMask(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_OpacityMask($value){}
	/**
	 * @return \System\Nullable_1
	 */
	protected  function TryGetServerGlobalTransform(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_Tag(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected  function set_Tag($value){}
	/**
	 * @param \Avalonia\Point $point
	 * @return \System\Boolean
	 */
	protected  function HitTest($point){}
	/**
	 * @uses CompositionVisualMethodsOverride::get_Server_1 ()
	 * @uses CompositionVisualMethodsOverride::get_Server_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Server(mixed ...$args){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionTarget
	 */
	protected  function get_Root(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionTarget $value
	 * @return \System\Void|void
	 */
	protected  function set_Root($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnRootChanged(){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionVisual
	 */
	protected  function get_Parent(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $value
	 * @return \System\Void|void
	 */
	protected  function set_Parent($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnParentChanged(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Visible(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Visible($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_Opacity(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_Opacity($value){}
	/**
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	protected  function get_Clip(){}
	/**
	 * @param \Avalonia\Platform\IGeometryImpl $value
	 * @return \System\Void|void
	 */
	protected  function set_Clip($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ClipToBounds(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ClipToBounds($value){}
	/**
	 * @return \Avalonia\Vector3D
	 */
	public  function get_Offset(){}
	/**
	 * @param \Avalonia\Vector3D $value
	 * @return \System\Void|void
	 */
	public  function set_Offset($value){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Size(){}
	/**
	 * @param \Avalonia\Vector $value
	 * @return \System\Void|void
	 */
	public  function set_Size($value){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_AnchorPoint(){}
	/**
	 * @param \Avalonia\Vector $value
	 * @return \System\Void|void
	 */
	public  function set_AnchorPoint($value){}
	/**
	 * @return \Avalonia\Vector3D
	 */
	public  function get_CenterPoint(){}
	/**
	 * @param \Avalonia\Vector3D $value
	 * @return \System\Void|void
	 */
	public  function set_CenterPoint($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_RotationAngle(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_RotationAngle($value){}
	/**
	 * @return \System\Numerics\Quaternion
	 */
	public  function get_Orientation(){}
	/**
	 * @param \System\Numerics\Quaternion $value
	 * @return \System\Void|void
	 */
	public  function set_Orientation($value){}
	/**
	 * @return \Avalonia\Vector3D
	 */
	public  function get_Scale(){}
	/**
	 * @param \Avalonia\Vector3D $value
	 * @return \System\Void|void
	 */
	public  function set_Scale($value){}
	/**
	 * @return \Avalonia\Matrix
	 */
	protected  function get_TransformMatrix(){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @return \System\Void|void
	 */
	protected  function set_TransformMatrix($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionVisual
	 */
	protected  function get_AdornedVisual(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $value
	 * @return \System\Void|void
	 */
	protected  function set_AdornedVisual($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_AdornerIsClipped(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_AdornerIsClipped($value){}
	/**
	 * @return \Avalonia\Media\IImmutableBrush
	 */
	protected  function get_OpacityMaskBrush(){}
	/**
	 * @param \Avalonia\Media\IImmutableBrush $value
	 * @return \System\Void|void
	 */
	protected  function set_OpacityMaskBrush($value){}
	/**
	 * @return \Avalonia\Media\IImmutableEffect
	 */
	protected  function get_Effect(){}
	/**
	 * @param \Avalonia\Media\IImmutableEffect $value
	 * @return \System\Void|void
	 */
	protected  function set_Effect($value){}
	/**
	 * @return \Avalonia\Media\RenderOptions
	 */
	public  function get_RenderOptions(){}
	/**
	 * @param \Avalonia\Media\RenderOptions $value
	 * @return \System\Void|void
	 */
	public  function set_RenderOptions($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeDefaults(){}
	/**
	 * @uses CompositionVisualMethodsOverride::StartAnimation_1 ($propertyName, $animation, $finalValue)
	 * @uses CompositionVisualMethodsOverride::StartAnimation_2 ($propertyName, $animation)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimation(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetServer($c){}
	/**
	 * @uses CompositionVisualMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses CompositionVisualMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimationGroup(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SerializeChanges($c, $writer){}
}
