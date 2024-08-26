<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DynamicILInfoOverride {
	/**
	 * @deprecated
	 * @param \System\Byte $code
	 * @param \System\Int32|int $maxStackSize
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetCode_1 ($code, $maxStackSize){}
	/**
	 * @deprecated
	 * @param \System\Byte* $code
	 * @param \System\Int32|int $codeSize
	 * @param \System\Int32|int $maxStackSize
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetCode_2 ($code, $codeSize, $maxStackSize){}
	/**
	 * @deprecated
	 * @param \System\Byte $exceptions
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetExceptions_1 ($exceptions){}
	/**
	 * @deprecated
	 * @param \System\Byte* $exceptions
	 * @param \System\Int32|int $exceptionsSize
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetExceptions_2 ($exceptions, $exceptionsSize){}
	/**
	 * @deprecated
	 * @param \System\Byte $localSignature
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetLocalSignature_1 ($localSignature){}
	/**
	 * @deprecated
	 * @param \System\Byte* $localSignature
	 * @param \System\Int32|int $signatureSize
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetLocalSignature_2 ($localSignature, $signatureSize){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandle $method
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_1 ($method){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\DynamicMethod $method
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_2 ($method){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandle $method
	 * @param \System\RuntimeTypeHandle $contextType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_3 ($method, $contextType){}
	/**
	 * @deprecated
	 * @param \System\RuntimeFieldHandle $field
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_4 ($field){}
	/**
	 * @deprecated
	 * @param \System\RuntimeFieldHandle $field
	 * @param \System\RuntimeTypeHandle $contextType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_5 ($field, $contextType){}
	/**
	 * @deprecated
	 * @param \System\RuntimeTypeHandle $type
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_6 ($type){}
	/**
	 * @deprecated
	 * @param \System\String|string $literal
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_7 ($literal){}
	/**
	 * @deprecated
	 * @param \System\Byte $signature
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_8 ($signature){}
}
class DynamicILInfo extends \System\Object
{
	use DynamicILInfoOverride;
	/**
	 * @property
	 * @var \System\Reflection\Emit\DynamicMethod
	 * @since readonly
	 */
	public $DynamicMethod;
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\Reflection\Emit\DynamicMethod $dm
	 * @return \System\Void|void
	 */
	protected function GetCallableMethod($module, $dm){}
	/**
	 * @uses DynamicILInfoOverride::SetCode_1 <br>public , args: ($code, $maxStackSize)<br>
	 * @uses DynamicILInfoOverride::SetCode_2 <br>public , args: ($code, $codeSize, $maxStackSize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCode (\override ...$args){}
	/**
	 * @uses DynamicILInfoOverride::SetExceptions_1 <br>public , args: ($exceptions)<br>
	 * @uses DynamicILInfoOverride::SetExceptions_2 <br>public , args: ($exceptions, $exceptionsSize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetExceptions (\override ...$args){}
	/**
	 * @uses DynamicILInfoOverride::SetLocalSignature_1 <br>public , args: ($localSignature)<br>
	 * @uses DynamicILInfoOverride::SetLocalSignature_2 <br>public , args: ($localSignature, $signatureSize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetLocalSignature (\override ...$args){}
	/**
	 * @uses DynamicILInfoOverride::GetTokenFor_1 <br>public , args: ($method)<br>
	 * @uses DynamicILInfoOverride::GetTokenFor_2 <br>public , args: ($method)<br>
	 * @uses DynamicILInfoOverride::GetTokenFor_3 <br>public , args: ($method, $contextType)<br>
	 * @uses DynamicILInfoOverride::GetTokenFor_4 <br>public , args: ($field)<br>
	 * @uses DynamicILInfoOverride::GetTokenFor_5 <br>public , args: ($field, $contextType)<br>
	 * @uses DynamicILInfoOverride::GetTokenFor_6 <br>public , args: ($type)<br>
	 * @uses DynamicILInfoOverride::GetTokenFor_7 <br>public , args: ($literal)<br>
	 * @uses DynamicILInfoOverride::GetTokenFor_8 <br>public , args: ($signature)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetTokenFor (\override ...$args){}
}