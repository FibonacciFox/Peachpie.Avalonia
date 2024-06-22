<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MetadataImportOverride {
	/**
	 * @deprecated
	 * @param \System\Reflection\MetadataImport $import
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Equals_1 ($import){}
}
final class MetadataImport extends \System\ValueType
{
	use MetadataImportOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\MetadataImport
	 */
	protected static $EmptyImport;
	private static function _GetMarshalAs($pNativeType, $cNativeType, &$unmanagedType, &$safeArraySubType, &$safeArrayUserDefinedSubType, &$arraySubType, &$sizeParamIndex, &$sizeConst, &$marshalType, &$marshalCookie, &$iidParamIndex){}
	/**
	 * @param \System\Reflection\ConstArray $nativeType
	 * @param \System\Runtime\InteropServices\UnmanagedType& &$unmanagedType
	 * @param \System\Runtime\InteropServices\VarEnum& &$safeArraySubType
	 * @param \System\String& &$safeArrayUserDefinedSubType
	 * @param \System\Runtime\InteropServices\UnmanagedType& &$arraySubType
	 * @param \System\Int32& &$sizeParamIndex
	 * @param \System\Int32& &$sizeConst
	 * @param \System\String& &$marshalType
	 * @param \System\String& &$marshalCookie
	 * @param \System\Int32& &$iidParamIndex
	 * @return \System\Void|void
	 */
	protected static function GetMarshalAs($nativeType, &$unmanagedType, &$safeArraySubType, &$safeArrayUserDefinedSubType, &$arraySubType, &$sizeParamIndex, &$sizeConst, &$marshalType, &$marshalCookie, &$iidParamIndex){}
	/**
	 * @param \System\Int32|int $hResult
	 * @return \System\Void|void
	 */
	protected static function ThrowError($hResult){}
	private static function _Enum($scope, $type, $parent, &$result){}
	/**
	 * @param \System\Reflection\MetadataTokenType $type
	 * @param \System\Int32|int $parent
	 * @param \System\Reflection\MetadataEnumResult& &$result
	 * @return \System\Void|void
	 */
	public function Enum($type, $parent, &$result){}
	/**
	 * @param \System\Int32|int $mdTypeDef
	 * @param \System\Reflection\MetadataEnumResult& &$result
	 * @return \System\Void|void
	 */
	public function EnumNestedTypes($mdTypeDef, &$result){}
	/**
	 * @param \System\Int32|int $mdToken
	 * @param \System\Reflection\MetadataEnumResult& &$result
	 * @return \System\Void|void
	 */
	public function EnumCustomAttributes($mdToken, &$result){}
	/**
	 * @param \System\Int32|int $mdMethodDef
	 * @param \System\Reflection\MetadataEnumResult& &$result
	 * @return \System\Void|void
	 */
	public function EnumParams($mdMethodDef, &$result){}
	/**
	 * @param \System\Int32|int $mdTypeDef
	 * @param \System\Reflection\MetadataEnumResult& &$result
	 * @return \System\Void|void
	 */
	public function EnumFields($mdTypeDef, &$result){}
	/**
	 * @param \System\Int32|int $mdTypeDef
	 * @param \System\Reflection\MetadataEnumResult& &$result
	 * @return \System\Void|void
	 */
	public function EnumProperties($mdTypeDef, &$result){}
	/**
	 * @param \System\Int32|int $mdTypeDef
	 * @param \System\Reflection\MetadataEnumResult& &$result
	 * @return \System\Void|void
	 */
	public function EnumEvents($mdTypeDef, &$result){}
	private static function _GetDefaultValue($scope, $mdToken, &$value, &$length, &$corElementType){}
	/**
	 * @param \System\Int32|int $mdToken
	 * @param \System\Int64& &$value
	 * @param \System\Int32& &$length
	 * @param \System\Reflection\CorElementType& &$corElementType
	 * @return \System\String|string
	 */
	public function GetDefaultValue($mdToken, &$value, &$length, &$corElementType){}
	private static function _GetUserString($scope, $mdToken, $name, &$length){}
	/**
	 * @param \System\Int32|int $mdToken
	 * @return \System\String|string
	 */
	public function GetUserString($mdToken){}
	private static function _GetName($scope, $mdToken, $name){}
	/**
	 * @param \System\Int32|int $mdToken
	 * @return \System\MdUtf8String
	 */
	public function GetName($mdToken){}
	private static function _GetNamespace($scope, $mdToken, $namesp){}
	/**
	 * @param \System\Int32|int $mdToken
	 * @return \System\MdUtf8String
	 */
	public function GetNamespace($mdToken){}
	private static function _GetEventProps($scope, $mdToken, $name, &$eventAttributes){}
	/**
	 * @param \System\Int32|int $mdToken
	 * @param \System\Void*& &$name
	 * @param \System\Reflection\EventAttributes& &$eventAttributes
	 * @return \System\Void|void
	 */
	public function GetEventProps($mdToken, &$name, &$eventAttributes){}
	private static function _GetFieldDefProps($scope, $mdToken, &$fieldAttributes){}
	/**
	 * @param \System\Int32|int $mdToken
	 * @param \System\Reflection\FieldAttributes& &$fieldAttributes
	 * @return \System\Void|void
	 */
	public function GetFieldDefProps($mdToken, &$fieldAttributes){}
	private static function _GetPropertyProps($scope, $mdToken, $name, &$propertyAttributes, &$signature){}
	/**
	 * @param \System\Int32|int $mdToken
	 * @param \System\Void*& &$name
	 * @param \System\Reflection\PropertyAttributes& &$propertyAttributes
	 * @param \System\Reflection\ConstArray& &$signature
	 * @return \System\Void|void
	 */
	public function GetPropertyProps($mdToken, &$name, &$propertyAttributes, &$signature){}
	private static function _GetParentToken($scope, $mdToken, &$tkParent){}
	/**
	 * @param \System\Int32|int $tkToken
	 * @return \System\Int32|int
	 */
	public function GetParentToken($tkToken){}
	private static function _GetParamDefProps($scope, $parameterToken, &$sequence, &$attributes){}
	/**
	 * @param \System\Int32|int $parameterToken
	 * @param \System\Int32& &$sequence
	 * @param \System\Reflection\ParameterAttributes& &$attributes
	 * @return \System\Void|void
	 */
	public function GetParamDefProps($parameterToken, &$sequence, &$attributes){}
	private static function _GetGenericParamProps($scope, $genericParameter, &$flags){}
	/**
	 * @param \System\Int32|int $genericParameter
	 * @param \System\Reflection\GenericParameterAttributes& &$attributes
	 * @return \System\Void|void
	 */
	public function GetGenericParamProps($genericParameter, &$attributes){}
	private static function _GetScopeProps($scope, &$mvid){}
	/**
	 * @param \System\Guid& &$mvid
	 * @return \System\Void|void
	 */
	public function GetScopeProps(&$mvid){}
	/**
	 * @param \System\Reflection\MetadataToken $token
	 * @return \System\Reflection\ConstArray
	 */
	public function GetMethodSignature($token){}
	private static function _GetSigOfMethodDef($scope, $methodToken, $signature){}
	/**
	 * @param \System\Int32|int $methodToken
	 * @return \System\Reflection\ConstArray
	 */
	public function GetSigOfMethodDef($methodToken){}
	private static function _GetSignatureFromToken($scope, $methodToken, $signature){}
	/**
	 * @param \System\Int32|int $token
	 * @return \System\Reflection\ConstArray
	 */
	public function GetSignatureFromToken($token){}
	private static function _GetMemberRefProps($scope, $memberTokenRef, &$signature){}
	/**
	 * @param \System\Int32|int $memberTokenRef
	 * @return \System\Reflection\ConstArray
	 */
	public function GetMemberRefProps($memberTokenRef){}
	private static function _GetCustomAttributeProps($scope, $customAttributeToken, &$constructorToken, &$signature){}
	/**
	 * @param \System\Int32|int $customAttributeToken
	 * @param \System\Int32& &$constructorToken
	 * @param \System\Reflection\ConstArray& &$signature
	 * @return \System\Void|void
	 */
	public function GetCustomAttributeProps($customAttributeToken, &$constructorToken, &$signature){}
	private static function _GetClassLayout($scope, $typeTokenDef, &$packSize, &$classSize){}
	/**
	 * @param \System\Int32|int $typeTokenDef
	 * @param \System\Int32& &$packSize
	 * @param \System\Int32& &$classSize
	 * @return \System\Void|void
	 */
	public function GetClassLayout($typeTokenDef, &$packSize, &$classSize){}
	private static function _GetFieldOffset($scope, $typeTokenDef, $fieldTokenDef, &$offset){}
	/**
	 * @param \System\Int32|int $typeTokenDef
	 * @param \System\Int32|int $fieldTokenDef
	 * @param \System\Int32& &$offset
	 * @return \System\Boolean|bool
	 */
	public function GetFieldOffset($typeTokenDef, $fieldTokenDef, &$offset){}
	private static function _GetSigOfFieldDef($scope, $fieldToken, $fieldMarshal){}
	/**
	 * @param \System\Int32|int $fieldToken
	 * @return \System\Reflection\ConstArray
	 */
	public function GetSigOfFieldDef($fieldToken){}
	private static function _GetFieldMarshal($scope, $fieldToken, $fieldMarshal){}
	/**
	 * @param \System\Int32|int $fieldToken
	 * @return \System\Reflection\ConstArray
	 */
	public function GetFieldMarshal($fieldToken){}
	private static function _GetPInvokeMap($scope, $token, &$attributes, $importName, $importDll){}
	/**
	 * @param \System\Int32|int $token
	 * @param \System\Reflection\PInvokeAttributes& &$attributes
	 * @param \System\String& &$importName
	 * @param \System\String& &$importDll
	 * @return \System\Void|void
	 */
	public function GetPInvokeMap($token, &$attributes, &$importName, &$importDll){}
	private static function _IsValidToken($scope, $token){}
	/**
	 * @param \System\Int32|int $token
	 * @return \System\Boolean|bool
	 */
	public function IsValidToken($token){}
}