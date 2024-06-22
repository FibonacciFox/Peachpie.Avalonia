<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BindingEntryBase_2Override {
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
	 * @return \TValue
	 */
	#[MethodOverride]public function GetValue_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function GetValue_2 (){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Start_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $produceValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Start_2 ($produceValue){}
	/**
	 * @deprecated
	 * @param \TSource $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function OnNext_1 ($value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Data\BindingValue_1 $value [generic: TSource]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function OnNext_2 ($value){}
	/**
	 * @deprecated
	 * @param \TSource $value
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride]protected function ConvertAndValidate_1 ($value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Data\BindingValue_1 $value [generic: TSource]
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride]protected function ConvertAndValidate_2 ($value){}
}
class BindingEntryBase_2 extends \System\Object implements
	\Avalonia\PropertyStore\IValueEntry_1,
	\Avalonia\PropertyStore\IValueEntry,
	\System\IObserver_1,
	\System\IDisposable
{
	use BindingEntryBase_2Override;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSubscribed;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaProperty
	 * @since readonly
	 */
	public $Property;
	/**
	 * @uses BindingEntryBase_2Override::get_Property_1 <br>public , args: ()<br>
	 * @uses BindingEntryBase_2Override::get_Property_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\AvaloniaProperty|mixed|\override
	 */
	#[MethodOverridePublic]function get_Property (){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function HasValue(){}
	/**
	 * @uses BindingEntryBase_2Override::GetValue_1 <br>public , args: ()<br>
	 * @uses BindingEntryBase_2Override::GetValue_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \TValue|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetValue (){}
	/**
	 * @param \Avalonia\Data\BindingValueType& &$state
	 * @param \System\Exception& &$error
	 * @return \System\Boolean|bool
	 */
	public function GetDataValidationState(&$state, &$error){}
	/**
	 * @uses BindingEntryBase_2Override::Start_1 <br>public , args: ()<br>
	 * @uses BindingEntryBase_2Override::Start_2 <br>protected , args: ($produceValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Start (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public function OnError($error){}
	/**
	 * @uses BindingEntryBase_2Override::OnNext_1 <br>public , args: ($value)<br>
	 * @uses BindingEntryBase_2Override::OnNext_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function OnNext (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Unsubscribe(){}
	/**
	 * @uses BindingEntryBase_2Override::ConvertAndValidate_1 <br>protected , args: ($value)<br>
	 * @uses BindingEntryBase_2Override::ConvertAndValidate_2 <br>protected , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Data\BindingValue_1|mixed|\override
	 */
	#[MethodOverrideProtected]function ConvertAndValidate (\override ...$args){}
	/**
	 * @param \System\Type $ownerType
	 * @return \TValue
	 */
	abstract protected function GetDefaultValue($ownerType);
	private function SetValue($value){}
	private function BindingCompleted(){}
	private function GetCachedDefaultValue(){}
}