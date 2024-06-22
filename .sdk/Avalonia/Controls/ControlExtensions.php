<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ControlExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function BringIntoView_1 ($control){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function BringIntoView_2 ($control, $rect){}
}
class ControlExtensions extends \System\Object
{
	use ControlExtensionsOverride;


	/**
	 * @uses ControlExtensionsOverride::BringIntoView_1 <br>public , args: ($control)<br>
	 * @uses ControlExtensionsOverride::BringIntoView_2 <br>public , args: ($control, $rect)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function BringIntoView (\override ...$args){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\String|string $name
	 * @return \T|object
	 */
	public static function FindControl($control, $name){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\String|string $name
	 * @return \T|object
	 */
	public static function GetControl($control, $name){}
	/**
	 * @param \Avalonia\Controls\IPseudoClasses $classes
	 * @param \System\String|string $name
	 * @param \System\IObservable_1 $trigger [generic: System\Boolean]
	 * @return \System\IDisposable
	 */
	public static function Set($classes, $name, $trigger){}
}