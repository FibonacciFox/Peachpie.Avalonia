<?php
namespace Avalonia\Rendering\Composition\Animations;
class CompositionAnimation extends \Avalonia\Rendering\Composition\CompositionObject implements
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase
{
	/**
	 * @field
	 * @var \Avalonia\Utilities\InlineDictionary_2[Avalonia\Rendering\Composition\Server\CompositionProperty,Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 */
	protected $PendingAnimations;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Target;
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
	 * @return \System\Void|void
	 */
	public function ClearAllParameters(){}
	/**
	 * @param \System\String|string $key
	 * @return \System\Void|void
	 */
	public function ClearParameter($key){}
	private function SetVariant($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \Avalonia\Media\Color $value
	 * @return \System\Void|void
	 */
	public function SetColorParameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Numerics\Matrix3x2 $value
	 * @return \System\Void|void
	 */
	public function SetMatrix3x2Parameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Numerics\Matrix4x4 $value
	 * @return \System\Void|void
	 */
	public function SetMatrix4x4Parameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Numerics\Quaternion $value
	 * @return \System\Void|void
	 */
	public function SetQuaternionParameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \Avalonia\Rendering\Composition\CompositionObject $compositionObject
	 * @return \System\Void|void
	 */
	public function SetReferenceParameter($key, $compositionObject){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public function SetScalarParameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Numerics\Vector2 $value
	 * @return \System\Void|void
	 */
	public function SetVector2Parameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Void|void
	 */
	public function SetVector3Parameter($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Numerics\Vector4 $value
	 * @return \System\Void|void
	 */
	public function SetVector4Parameter($key, $value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerObject $targetObject
	 * @param \System\Nullable_1 $finalValue [generic: Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @return \Avalonia\Rendering\Composition\Animations\IAnimationInstance
	 */
	abstract protected function CreateInstance($targetObject, $finalValue);
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\PropertySetSnapshot
	 */
	protected function CreateSnapshot(){}
	private function InternalOnly(){}
	private function TryGetServer($c){}
	private function SerializeChanges($c, $writer){}
}