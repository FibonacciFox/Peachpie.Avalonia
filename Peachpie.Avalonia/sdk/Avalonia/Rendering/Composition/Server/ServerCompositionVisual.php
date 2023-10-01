<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionVisualMethodsOverride
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
class ServerCompositionVisual extends \Avalonia\Rendering\Composition\Server\ServerObject implements 
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject
{
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositorDrawingContextProxy $canvas
	 * @param \Avalonia\Rect $currentTransformedClip
	 * @return \System\Void|void
	 */
	protected  function RenderCore($canvas, $currentTransformedClip){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositorDrawingContextProxy $canvas
	 * @param \Avalonia\Rect $currentTransformedClip
	 * @return \System\Void|void
	 */
	public  function Render($canvas, $currentTransformedClip){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HandlesClipToBounds(){}
	/**
	 * @param \System\Int32|int $idx
	 * @return \Avalonia\Rendering\Composition\Server\ReadbackData&
	 */
	public  function GetReadback($idx){}
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function get_CombinedTransformMatrix(){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CombinedTransformMatrix($value){}
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function get_GlobalTransformMatrix(){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_GlobalTransformMatrix($value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionTarget $root
	 * @return \Avalonia\Rendering\Composition\Server\UpdateResult
	 */
	public  function Update($root){}
	/**
	 * @param \Avalonia\Rect $rc
	 * @return \System\Void|void
	 */
	protected  function AddDirtyRect($rc){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionTarget $target
	 * @return \System\Void|void
	 */
	protected  function OnDetachedFromRoot($target){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionTarget $target
	 * @return \System\Void|void
	 */
	protected  function OnAttachedToRoot($target){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsVisibleInFrame(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsVisibleInFrame($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsHitTestVisibleInFrame(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsHitTestVisibleInFrame($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_EffectiveOpacity(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_EffectiveOpacity($value){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_TransformedOwnContentBounds(){}
	/**
	 * @param \Avalonia\Rect $value
	 * @return \System\Void|void
	 */
	public  function set_TransformedOwnContentBounds($value){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_OwnContentBounds(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamReader $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DeserializeChangesExtra($c){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionTarget
	 */
	public  function get_Root(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionTarget $value
	 * @return \System\Void|void
	 */
	public  function set_Root($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnRootChanged(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnRootChanging(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionVisual
	 */
	public  function get_Parent(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisual $value
	 * @return \System\Void|void
	 */
	public  function set_Parent($value){}
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
	public  function get_Clip(){}
	/**
	 * @param \Avalonia\Platform\IGeometryImpl $value
	 * @return \System\Void|void
	 */
	public  function set_Clip($value){}
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
	public  function get_TransformMatrix(){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @return \System\Void|void
	 */
	public  function set_TransformMatrix($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionVisual
	 */
	public  function get_AdornedVisual(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisual $value
	 * @return \System\Void|void
	 */
	public  function set_AdornedVisual($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AdornerIsClipped(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_AdornerIsClipped($value){}
	/**
	 * @return \Avalonia\Media\IImmutableBrush
	 */
	public  function get_OpacityMaskBrush(){}
	/**
	 * @param \Avalonia\Media\IImmutableBrush $value
	 * @return \System\Void|void
	 */
	public  function set_OpacityMaskBrush($value){}
	/**
	 * @return \Avalonia\Media\IImmutableEffect
	 */
	public  function get_Effect(){}
	/**
	 * @param \Avalonia\Media\IImmutableEffect $value
	 * @return \System\Void|void
	 */
	public  function set_Effect($value){}
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
	 * @param \\CompositionVisualChangedFields $changed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnFieldsDeserialized($changed){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetProperty($name){}
	/**
	 * @uses ServerCompositionVisualMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionVisualMethodsOverride::SetValue_2 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionVisualMethodsOverride::GetValue_1 ($prop, $field)
	 * @uses ServerCompositionVisualMethodsOverride::GetValue_2 ($prop, $field)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionVisualMethodsOverride::SetAnimatedValue_1 ($prop, $field, $committedAt, $animation)
	 * @uses ServerCompositionVisualMethodsOverride::SetAnimatedValue_2 ($property, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAnimatedValue(mixed ...$args){}
}
