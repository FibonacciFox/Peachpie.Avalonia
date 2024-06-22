<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ServerObjectOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $prop
	 * @param \T& $field
	 * @param \System\TimeSpan $committedAt
	 * @param \Avalonia\Rendering\Composition\Animations\IAnimationInstance $animation
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetAnimatedValue_1 ($prop, $field, $committedAt, $animation){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $property
	 * @param \T& &$field
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetAnimatedValue_2 ($property, &$field, $value){}
}
class ServerObject extends \Avalonia\Rendering\Composition\Server\SimpleServerObject implements
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject
{
	use ServerObjectOverride;

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
	 * @param \System\String|string $name
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public function GetPropertyForAnimation($name){}
	private function GetProperty($name){}
	/**
	 * @return \System\Void|void
	 */
	public function Activate(){}
	/**
	 * @return \System\Void|void
	 */
	public function Deactivate(){}
	/**
	 * @return \System\Void|void
	 */
	protected function Activated(){}
	/**
	 * @return \System\Void|void
	 */
	protected function Deactivated(){}
	private function InvalidateSubscriptions($property){}
	/**
	 * @uses ServerObjectOverride::SetAnimatedValue_1 <br>protected , args: ($prop, $field, $committedAt, $animation)<br>
	 * @uses ServerObjectOverride::SetAnimatedValue_2 <br>protected , args: ($property, &$field, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function SetAnimatedValue (\override ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $property
	 * @param \T& $field
	 * @return \T|object
	 */
	protected function GetAnimatedValue($property, $field){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $prop
	 * @return \System\Void|void
	 */
	public function NotifyAnimatedValueChanged($prop){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $member
	 * @param \Avalonia\Rendering\Composition\Animations\IAnimationInstance $animation
	 * @return \System\Void|void
	 */
	public function SubscribeToInvalidation($member, $animation){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $member
	 * @param \Avalonia\Rendering\Composition\Animations\IAnimationInstance $animation
	 * @return \System\Void|void
	 */
	public function UnsubscribeFromInvalidation($member, $animation){}
	/**
	 * @param \System\String|string $fieldName
	 * @return \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	public function GetCompositionProperty($fieldName){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositor $compositor
	 */
	public function __construct($compositor){}
}