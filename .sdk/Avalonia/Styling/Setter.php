<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SetterOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride]public function get_Property_1 (){}
	/**
	 * @deprecated
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride]private function get_Property_2 (){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Object|object $value
	 */
	#[MethodOverride]public function __construct_2 ($property, $value){}
}
class Setter extends \Avalonia\Styling\SetterBase implements
	\Avalonia\PropertyStore\IValueEntry,
	\Avalonia\Styling\ISetterInstance,
	\Avalonia\Animation\IAnimationSetter
{
	use SetterOverride;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaProperty
	 */
	public $Property;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Value;
	/**
	 * @uses SetterOverride::get_Property_1 <br>public , args: ()<br>
	 * @uses SetterOverride::get_Property_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\AvaloniaProperty|mixed|\override
	 */
	#[MethodOverridePublic]function get_Property (){}
	private function Unsubscribe(){}
	private function HasValue(){}
	private function GetValue(){}
	private function GetDataValidationState(&$state, &$error){}
	private function EnsureProperty(){}
	private function SetBinding($instance, $target, $binding){}
	private function SetDirectValue($target){}
	/**
	 * @uses SetterOverride::__construct_1 <br>public , args: ()<br>
	 * @uses SetterOverride::__construct_2 <br>public , args: ($property, $value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}