<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CustomAttributeEncodedArgumentOverride {
	/**
	 * @deprecated
	 * @param \System\IntPtr $pCa
	 * @param \System\Int32|int $cCa
	 * @param \System\Reflection\CustomAttributeCtorParameter $CustomAttributeCtorParameters
	 * @param \System\Reflection\CustomAttributeNamedParameter $CustomAttributeTypedArgument
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function ParseAttributeArguments_1 ($pCa, $cCa, $CustomAttributeCtorParameters, $CustomAttributeTypedArgument, $assembly){}
	/**
	 * @deprecated
	 * @param \System\Reflection\ConstArray $attributeBlob
	 * @param \System\Reflection\CustomAttributeCtorParameter $customAttributeCtorParameters
	 * @param \System\Reflection\CustomAttributeNamedParameter $customAttributeNamedParameters
	 * @param \System\Reflection\RuntimeModule $customAttributeModule
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ParseAttributeArguments_2 ($attributeBlob, $customAttributeCtorParameters, $customAttributeNamedParameters, $customAttributeModule){}
}
final class CustomAttributeEncodedArgument extends \System\ValueType
{
	use CustomAttributeEncodedArgumentOverride;
	/**
	 * @property
	 * @var \System\Reflection\CustomAttributeType
	 * @since readonly
	 */
	public $CustomAttributeType;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $PrimitiveValue;
	/**
	 * @property
	 * @var \System\Reflection\CustomAttributeEncodedArgument[]
	 * @since readonly
	 */
	public $ArrayValue;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $StringValue;
	/**
	 * @uses CustomAttributeEncodedArgumentOverride::ParseAttributeArguments_1 <br>private , args: ($pCa, $cCa, $CustomAttributeCtorParameters, $CustomAttributeTypedArgument, $assembly)<br>
	 * @uses CustomAttributeEncodedArgumentOverride::ParseAttributeArguments_2 <br>protected , args: ($attributeBlob, $customAttributeCtorParameters, $customAttributeNamedParameters, $customAttributeModule)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function ParseAttributeArguments (\override ...$args){}
}