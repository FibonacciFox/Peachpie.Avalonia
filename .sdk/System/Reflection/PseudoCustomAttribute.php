<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PseudoCustomAttributeOverride {
	/**
	 * @deprecated
	 * @param \System\RuntimeType $type
	 * @param \System\RuntimeType $caType
	 * @param \System\RuntimeType+ListBuilder_1 $pcas [generic: System\Attribute]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function GetCustomAttributes_1 ($type, $caType, $pcas){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeMethodInfo $method
	 * @param \System\RuntimeType $caType
	 * @param \System\RuntimeType+ListBuilder_1 $pcas [generic: System\Attribute]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function GetCustomAttributes_2 ($method, $caType, $pcas){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeParameterInfo $parameter
	 * @param \System\RuntimeType $caType
	 * @param \System\RuntimeType+ListBuilder_1 $pcas [generic: System\Attribute]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function GetCustomAttributes_3 ($parameter, $caType, $pcas){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeFieldInfo $field
	 * @param \System\RuntimeType $caType
	 * @param \System\RuntimeType+ListBuilder_1 $pcas [generic: System\Attribute]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function GetCustomAttributes_4 ($field, $caType, $pcas){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $type
	 * @param \System\RuntimeType $caType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsDefined_1 ($type, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeMethodInfo $method
	 * @param \System\RuntimeType $caType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsDefined_2 ($method, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeParameterInfo $parameter
	 * @param \System\RuntimeType $caType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsDefined_3 ($parameter, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeFieldInfo $field
	 * @param \System\RuntimeType $caType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsDefined_4 ($field, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeParameterInfo $parameter
	 * @return \System\Runtime\InteropServices\MarshalAsAttribute
	 */
	#[MethodOverride]private static function GetMarshalAsCustomAttribute_1 ($parameter){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeFieldInfo $field
	 * @return \System\Runtime\InteropServices\MarshalAsAttribute
	 */
	#[MethodOverride]private static function GetMarshalAsCustomAttribute_2 ($field){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $token
	 * @param \System\Reflection\RuntimeModule $scope
	 * @return \System\Runtime\InteropServices\MarshalAsAttribute
	 */
	#[MethodOverride]private static function GetMarshalAsCustomAttribute_3 ($token, $scope){}
}
class PseudoCustomAttribute extends \System\Object
{
	use PseudoCustomAttributeOverride;

	private static function CreatePseudoCustomAttributeHashSet(){}
	/**
	 * @uses PseudoCustomAttributeOverride::GetCustomAttributes_1 <br>protected , args: ($type, $caType, $pcas)<br>
	 * @uses PseudoCustomAttributeOverride::GetCustomAttributes_2 <br>protected , args: ($method, $caType, $pcas)<br>
	 * @uses PseudoCustomAttributeOverride::GetCustomAttributes_3 <br>protected , args: ($parameter, $caType, $pcas)<br>
	 * @uses PseudoCustomAttributeOverride::GetCustomAttributes_4 <br>protected , args: ($field, $caType, $pcas)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function GetCustomAttributes (\override ...$args){}
	/**
	 * @uses PseudoCustomAttributeOverride::IsDefined_1 <br>protected , args: ($type, $caType)<br>
	 * @uses PseudoCustomAttributeOverride::IsDefined_2 <br>protected , args: ($method, $caType)<br>
	 * @uses PseudoCustomAttributeOverride::IsDefined_3 <br>protected , args: ($parameter, $caType)<br>
	 * @uses PseudoCustomAttributeOverride::IsDefined_4 <br>protected , args: ($field, $caType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function IsDefined (\override ...$args){}
	private static function GetDllImportCustomAttribute($method){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses PseudoCustomAttributeOverride::GetMarshalAsCustomAttribute_1 <br>private , args: ($parameter)<br>
	 * @uses PseudoCustomAttributeOverride::GetMarshalAsCustomAttribute_2 <br>private , args: ($field)<br>
	 * @uses PseudoCustomAttributeOverride::GetMarshalAsCustomAttribute_3 <br>private , args: ($token, $scope)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\InteropServices\MarshalAsAttribute|mixed|\override
	 */
	#[MethodOverridePrivate]function GetMarshalAsCustomAttribute (\override ...$args){}
	private static function GetFieldOffsetCustomAttribute($field){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Runtime\InteropServices\StructLayoutAttribute
	 */
	protected static function GetStructLayoutCustomAttribute($type){}
}