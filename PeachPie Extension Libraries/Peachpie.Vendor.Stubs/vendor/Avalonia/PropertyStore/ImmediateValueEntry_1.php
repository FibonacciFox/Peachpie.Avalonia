<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ImmediateValueEntry_1Override {
	/**
	 * @deprecated
	 * @return \Avalonia\StyledProperty_1
	 */
	#[MethodOverride]public function get_Property_1 (){}
	/**
	 * @deprecated
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride]private function get_Property_2 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function GetValue_1 (){}
	/**
	 * @deprecated
	 * @return \T|object
	 */
	#[MethodOverride]private function GetValue_2 (){}
}
class ImmediateValueEntry_1 extends \System\Object implements
	\Avalonia\PropertyStore\IValueEntry_1,
	\Avalonia\PropertyStore\IValueEntry,
	\System\IDisposable
{
	use ImmediateValueEntry_1Override;
	/**
	 * @property
	 * @var \Avalonia\StyledProperty_1[T]
	 * @since readonly
	 */
	public $Property;
	/**
	 * @uses ImmediateValueEntry_1Override::get_Property_1 <br>public , args: ()<br>
	 * @uses ImmediateValueEntry_1Override::get_Property_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\StyledProperty_1|\Avalonia\AvaloniaProperty|mixed|\override
	 */
	#[MethodOverridePublic]function get_Property (){}
	/**
	 * @return \System\Void|void
	 */
	public function Unsubscribe(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function HasValue(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ImmediateValueEntry_1Override::GetValue_1 <br>private , args: ()<br>
	 * @uses ImmediateValueEntry_1Override::GetValue_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\T|object|mixed|\override
	 */
	#[MethodOverridePrivate]function GetValue (){}
	private function GetDataValidationState(&$state, &$error){}
	/**
	 * @param \Avalonia\PropertyStore\ImmediateValueFrame $owner
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $value
	 */
	public function __construct($owner, $property, $value){}
}