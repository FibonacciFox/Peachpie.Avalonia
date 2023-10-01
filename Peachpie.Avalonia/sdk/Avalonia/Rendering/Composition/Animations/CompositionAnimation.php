<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositionAnimationMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function StartAnimation_1($propertyName, $animation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function StartAnimation_2($propertyName, $animation, $finalValue){}
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
class CompositionAnimation extends \Avalonia\Rendering\Composition\CompositionObject implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase
{
	/**
	 * @return \System\Void|void
	 */
	public  function ClearAllParameters(){}
	/**
	 * @param \System\String|string $key
	 * @return \System\Void|void
	 */
	public  function ClearParameter($key){}
	/**
	 * @param \System\String|string $key
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetVariant($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \Avalonia\Media\Color $value
	 * @return \System\Void|void
	 */
	public  function SetColorParameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Numerics\Matrix3x2 $value
	 * @return \System\Void|void
	 */
	public  function SetMatrix3x2Parameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Numerics\Matrix4x4 $value
	 * @return \System\Void|void
	 */
	public  function SetMatrix4x4Parameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Numerics\Quaternion $value
	 * @return \System\Void|void
	 */
	public  function SetQuaternionParameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \Avalonia\Rendering\Composition\CompositionObject $compositionObject
	 * @return \System\Void|void
	 */
	public  function SetReferenceParameter($key, $compositionObject){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function SetScalarParameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Numerics\Vector2 $value
	 * @return \System\Void|void
	 */
	public  function SetVector2Parameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Void|void
	 */
	public  function SetVector3Parameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Numerics\Vector4 $value
	 * @return \System\Void|void
	 */
	public  function SetVector4Parameter($key, $value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Target(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Target($value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerObject $targetObject
	 * @param \System\Nullable_1 $finalValue
	 * @return \Avalonia\Rendering\Composition\Animations\IAnimationInstance
	 */
	protected  function CreateInstance($targetObject, $finalValue){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\PropertySetSnapshot
	 */
	protected  function CreateSnapshot(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalOnly(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetServer($c){}
	/**
	 * @uses CompositionAnimationMethodsOverride::StartAnimation_1 ($propertyName, $animation)
	 * @uses CompositionAnimationMethodsOverride::StartAnimation_2 ($propertyName, $animation, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimation(mixed ...$args){}
	/**
	 * @uses CompositionAnimationMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses CompositionAnimationMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
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
