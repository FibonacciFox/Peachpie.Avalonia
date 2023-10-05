<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositionPropertySetMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Set_1($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Set_2($key, $obj){}
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
class CompositionPropertySet extends \Avalonia\Rendering\Composition\CompositionObject implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	/**
	 * @var \Avalonia\Utilities\InlineDictionary_2[Avalonia\Rendering\Composition\Server\CompositionProperty,Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 * @field
	 */
	protected $PendingAnimations;
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
	 * @uses CompositionPropertySetMethodsOverride::Set_1 ($key, $value)
	 * @uses CompositionPropertySetMethodsOverride::Set_2 ($key, $obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Set(mixed ...$args){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \Avalonia\Media\Color $value
	 * @return \System\Void|void
	 */
	public  function InsertColor($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Matrix3x2 $value
	 * @return \System\Void|void
	 */
	public  function InsertMatrix3x2($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Matrix4x4 $value
	 * @return \System\Void|void
	 */
	public  function InsertMatrix4x4($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Quaternion $value
	 * @return \System\Void|void
	 */
	public  function InsertQuaternion($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function InsertScalar($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Vector2 $value
	 * @return \System\Void|void
	 */
	public  function InsertVector2($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Void|void
	 */
	public  function InsertVector3($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Vector4 $value
	 * @return \System\Void|void
	 */
	public  function InsertVector4($propertyName, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \Avalonia\Rendering\Composition\T& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetVariant($key, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \Avalonia\Media\Color& $value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public  function TryGetColor($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Matrix3x2& $value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public  function TryGetMatrix3x2($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Matrix4x4& $value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public  function TryGetMatrix4x4($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Quaternion& $value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public  function TryGetQuaternion($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Single& $value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public  function TryGetScalar($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Vector2& $value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public  function TryGetVector2($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Vector3& $value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public  function TryGetVector3($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Vector4& $value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public  function TryGetVector4($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function InsertBoolean($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Boolean& $value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public  function TryGetBoolean($propertyName, $value){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ClearAll(){}
	/**
	 * @param \System\String|string $key
	 * @return \System\Void|void
	 */
	protected  function Clear($key){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\PropertySetSnapshot
	 */
	protected  function Snapshot(){}
	/**
	 * @param \System\Int32|int $allowedNestingLevel
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SnapshotCore($allowedNestingLevel){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetServer($c){}
	/**
	 * @uses CompositionPropertySetMethodsOverride::StartAnimation_1 ($propertyName, $animation)
	 * @uses CompositionPropertySetMethodsOverride::StartAnimation_2 ($propertyName, $animation, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimation(mixed ...$args){}
	/**
	 * @uses CompositionPropertySetMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses CompositionPropertySetMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
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
