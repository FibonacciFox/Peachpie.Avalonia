<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StyleInstanceOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\ISetterInstance $instance
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_1 ($instance){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IList_1 $animations [generic: Avalonia\Animation\IAnimation]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_2 ($animations){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function MakeShared_1 (){}
}
class StyleInstance extends \Avalonia\PropertyStore\ValueFrame implements
	\Avalonia\Styling\IStyleInstance,
	\Avalonia\Styling\Activators\IStyleActivatorSink,
	\System\IDisposable
{
	use StyleInstanceOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasActivator;
	/**
	 * @property
	 * @var \Avalonia\Styling\IStyle
	 * @since readonly
	 */
	public $Source;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $EntryCount;
	/**
	 * @property
	 * @var \Avalonia\PropertyStore\ValueStore
	 * @since readonly
	 */
	public $Owner;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingPriority
	 * @since readonly
	 */
	public $Priority;
	/**
	 * @property
	 * @var \Avalonia\PropertyStore\FramePriority
	 * @since readonly
	 */
	public $FramePriority;
	private function get_IsActive(){}
	/**
	 * @uses StyleInstanceOverride::Add_1 <br>public , args: ($instance)<br>
	 * @uses StyleInstanceOverride::Add_2 <br>public , args: ($animations)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @param \Avalonia\AvaloniaObject $control
	 * @return \System\Void|void
	 */
	public function ApplyAnimations($control){}
	private function OnNext($value){}
	private static function GetPriority($activator){}
	/**
	 * @param \Avalonia\Styling\IStyle $style
	 * @param \Avalonia\Styling\Activators\IStyleActivator $activator
	 * @param \Avalonia\PropertyStore\FrameType $type
	 */
	public function __construct($style, $activator, $type){}
}