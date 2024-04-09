<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AvaloniaPropertyRegistryOverride {
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride]public function GetRegistered_1 ($type){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $o
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride]public function GetRegistered_2 ($o){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride]public function GetRegisteredDirect_1 ($type){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @return \Avalonia\DirectPropertyBase_1
	 */
	#[MethodOverride]public function GetRegisteredDirect_2 ($o, $property){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\String|string $name
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride]public function FindRegistered_1 ($type, $name){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \System\String|string $name
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride]public function FindRegistered_2 ($o, $name){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $id
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride]protected function FindRegistered_3 ($id){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsRegistered_1 ($type, $property){}
	/**
	 * @deprecated
	 * @param \System\Object|object $o
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsRegistered_2 ($o, $property){}
}
class AvaloniaPropertyRegistry extends \System\Object
{
	use AvaloniaPropertyRegistryOverride;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaPropertyRegistry
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @uses AvaloniaPropertyRegistryOverride::GetRegistered_1 <br>public , args: ($type)<br>
	 * @uses AvaloniaPropertyRegistryOverride::GetRegistered_2 <br>public , args: ($o)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IReadOnlyList_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetRegistered (\override ...$args){}
	/**
	 * @param \System\Type $type
	 * @return \System\Collections\Generic\IReadOnlyList_1[Avalonia\AvaloniaProperty]
	 */
	public function GetRegisteredAttached($type){}
	/**
	 * @uses AvaloniaPropertyRegistryOverride::GetRegisteredDirect_1 <br>public , args: ($type)<br>
	 * @uses AvaloniaPropertyRegistryOverride::GetRegisteredDirect_2 <br>public , args: ($o, $property)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IReadOnlyList_1|\Avalonia\DirectPropertyBase_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetRegisteredDirect (\override ...$args){}
	/**
	 * @param \System\Type $type
	 * @return \System\Collections\Generic\IReadOnlyList_1[Avalonia\AvaloniaProperty]
	 */
	public function GetRegisteredInherited($type){}
	/**
	 * @uses AvaloniaPropertyRegistryOverride::FindRegistered_1 <br>public , args: ($type, $name)<br>
	 * @uses AvaloniaPropertyRegistryOverride::FindRegistered_2 <br>public , args: ($o, $name)<br>
	 * @uses AvaloniaPropertyRegistryOverride::FindRegistered_3 <br>protected , args: ($id)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\AvaloniaProperty|mixed|\override
	 */
	#[MethodOverridePublic]function FindRegistered (\override ...$args){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @return \Avalonia\DirectPropertyBase_1[T]
	 */
	public function FindRegisteredDirect($o, $property){}
	/**
	 * @uses AvaloniaPropertyRegistryOverride::IsRegistered_1 <br>public , args: ($type, $property)<br>
	 * @uses AvaloniaPropertyRegistryOverride::IsRegistered_2 <br>public , args: ($o, $property)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsRegistered (\override ...$args){}
	/**
	 * @param \System\Type $type
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public function Register($type, $property){}
	/**
	 * @param \System\Type $type
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public function RegisterAttached($type, $property){}
	/**
	 */
	public function __construct(){}
}