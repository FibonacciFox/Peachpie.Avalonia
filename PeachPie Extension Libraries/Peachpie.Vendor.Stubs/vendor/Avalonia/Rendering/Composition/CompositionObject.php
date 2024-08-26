<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CompositionObjectOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $propertyName
	 * @param \Avalonia\Rendering\Composition\Animations\CompositionAnimation $animation
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function StartAnimation_1 ($propertyName, $animation){}
	/**
	 * @deprecated
	 * @param \System\String|string $propertyName
	 * @param \Avalonia\Rendering\Composition\Animations\CompositionAnimation $animation
	 * @param \System\Nullable_1 $finalValue [generic: Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function StartAnimation_2 ($propertyName, $animation, $finalValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase $grp
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function StartAnimationGroup_1 ($grp){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase $grp
	 * @param \System\String|string $target
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $finalValue
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function StartAnimationGroup_2 ($grp, $target, $finalValue){}
}
class CompositionObject extends \System\Object implements
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	use CompositionObjectOverride;
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
	 */
	public $IsDisposed;
	private function TryGetServer($c){}
	private static function ThrowInvalidOperation(){}
	/**
	 * @return \System\Void|void
	 */
	protected function Dispose(){}
	/**
	 * @uses CompositionObjectOverride::StartAnimation_1 <br>public , args: ($propertyName, $animation)<br>
	 * @uses CompositionObjectOverride::StartAnimation_2 <br>protected , args: ($propertyName, $animation, $finalValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function StartAnimation (\override ...$args){}
	/**
	 * @uses CompositionObjectOverride::StartAnimationGroup_1 <br>public , args: ($grp)<br>
	 * @uses CompositionObjectOverride::StartAnimationGroup_2 <br>protected , args: ($grp, $target, $finalValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function StartAnimationGroup (\override ...$args){}
	private function StartAnimationGroupPart($animation, $target, $finalValue){}
	/**
	 * @return \System\Void|void
	 */
	protected function RegisterForSerialization(){}
	private function SerializeChanges($c, $writer){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @return \System\Void|void
	 */
	protected function SerializeChangesCore($writer){}
}