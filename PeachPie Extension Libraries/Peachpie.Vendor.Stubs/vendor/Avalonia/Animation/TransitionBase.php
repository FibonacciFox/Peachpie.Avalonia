<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TransitionBaseOverride {
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
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function set_Property_1 ($value){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_Property_2 ($value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\Object|object $oldValue
	 * @param \System\Object|object $newValue
	 * @return \System\IDisposable
	 */
	#[MethodOverride]private function Apply_1 ($control, $clock, $oldValue, $newValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\Object|object $oldValue
	 * @param \System\Object|object $newValue
	 * @return \System\IDisposable
	 */
	#[MethodOverride]protected function Apply_2 ($control, $clock, $oldValue, $newValue){}
}
class TransitionBase extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Animation\ITransition
{
	use TransitionBaseOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Animation\TransitionBase,System\TimeSpan]
	 */
	public static $DurationProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Animation\TransitionBase,System\TimeSpan]
	 */
	public static $DelayProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Animation\TransitionBase,Avalonia\Animation\Easings\Easing]
	 */
	public static $EasingProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Animation\TransitionBase,Avalonia\AvaloniaProperty]
	 */
	public static $PropertyProperty;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Duration;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Delay;
	/**
	 * @property
	 * @var \Avalonia\Animation\Easings\Easing
	 */
	public $Easing;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaProperty
	 */
	public $Property;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @uses TransitionBaseOverride::get_Property_1 <br>public , args: ()<br>
	 * @uses TransitionBaseOverride::get_Property_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\AvaloniaProperty|mixed|\override
	 */
	#[MethodOverridePublic]function get_Property (){}
	/**
	 * @uses TransitionBaseOverride::set_Property_1 <br>public , args: ($value)<br>
	 * @uses TransitionBaseOverride::set_Property_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function set_Property (\override ...$args){}
	/**
	 * @uses TransitionBaseOverride::Apply_1 <br>private , args: ($control, $clock, $oldValue, $newValue)<br>
	 * @uses TransitionBaseOverride::Apply_2 <br>protected , args: ($control, $clock, $oldValue, $newValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IDisposable|mixed|\override
	 */
	#[MethodOverrideProtected]function Apply (\override ...$args){}
	private function GetPropertyChangedSubscribers(){}
}