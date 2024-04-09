<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CompositionPropertySetOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $key
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Set_1 ($key, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $key
	 * @param \Avalonia\Rendering\Composition\CompositionObject $obj
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Set_2 ($key, $obj){}
}
class CompositionPropertySet extends \Avalonia\Rendering\Composition\CompositionObject implements
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	use CompositionPropertySetOverride;
	/**
	 * @field
	 * @var \Avalonia\Utilities\InlineDictionary_2[Avalonia\Rendering\Composition\Server\CompositionProperty,Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 */
	protected $PendingAnimations;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Animations\ImplicitAnimationCollection
	 */
	public $ImplicitAnimations;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @since readonly
	 */
	public $Compositor;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDisposed;
	/**
	 * @uses CompositionPropertySetOverride::Set_1 <br>protected , args: ($key, $value)<br>
	 * @uses CompositionPropertySetOverride::Set_2 <br>protected , args: ($key, $obj)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function Set (\override ...$args){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \Avalonia\Media\Color $value
	 * @return \System\Void|void
	 */
	public function InsertColor($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Matrix3x2 $value
	 * @return \System\Void|void
	 */
	public function InsertMatrix3x2($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Matrix4x4 $value
	 * @return \System\Void|void
	 */
	public function InsertMatrix4x4($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Quaternion $value
	 * @return \System\Void|void
	 */
	public function InsertQuaternion($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public function InsertScalar($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Vector2 $value
	 * @return \System\Void|void
	 */
	public function InsertVector2($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Void|void
	 */
	public function InsertVector3($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Vector4 $value
	 * @return \System\Void|void
	 */
	public function InsertVector4($propertyName, $value){}
	private function TryGetVariant($key, &$value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \Avalonia\Media\Color& &$value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public function TryGetColor($propertyName, &$value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Matrix3x2& &$value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public function TryGetMatrix3x2($propertyName, &$value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Matrix4x4& &$value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public function TryGetMatrix4x4($propertyName, &$value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Quaternion& &$value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public function TryGetQuaternion($propertyName, &$value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Single& &$value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public function TryGetScalar($propertyName, &$value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Vector2& &$value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public function TryGetVector2($propertyName, &$value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Vector3& &$value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public function TryGetVector3($propertyName, &$value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Numerics\Vector4& &$value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public function TryGetVector4($propertyName, &$value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public function InsertBoolean($propertyName, $value){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Boolean& &$value
	 * @return \Avalonia\Rendering\Composition\CompositionGetValueStatus
	 */
	public function TryGetBoolean($propertyName, &$value){}
	/**
	 * @return \System\Void|void
	 */
	protected function ClearAll(){}
	/**
	 * @param \System\String|string $key
	 * @return \System\Void|void
	 */
	protected function Clear($key){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\PropertySetSnapshot
	 */
	protected function Snapshot(){}
	private function SnapshotCore($allowedNestingLevel){}
	private function TryGetServer($c){}
	private function SerializeChanges($c, $writer){}
}