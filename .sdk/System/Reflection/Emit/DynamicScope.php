<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DynamicScopeOverride {
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\VarArgMethod $varArgMethod
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetTokenFor_1 ($varArgMethod){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandle $method
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_2 ($method){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandle $method
	 * @param \System\RuntimeTypeHandle $typeContext
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_3 ($method, $typeContext){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\DynamicMethod $method
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_4 ($method){}
	/**
	 * @deprecated
	 * @param \System\RuntimeFieldHandle $field
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_5 ($field){}
	/**
	 * @deprecated
	 * @param \System\RuntimeFieldHandle $field
	 * @param \System\RuntimeTypeHandle $typeContext
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_6 ($field, $typeContext){}
	/**
	 * @deprecated
	 * @param \System\RuntimeTypeHandle $type
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_7 ($type){}
	/**
	 * @deprecated
	 * @param \System\String|string $literal
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_8 ($literal){}
	/**
	 * @deprecated
	 * @param \System\Byte $signature
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetTokenFor_9 ($signature){}
}
final class DynamicScope extends \System\Object
{
	use DynamicScopeOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Generic\List_1[System\Object]
	 */
	protected $m_tokens;
	/**
	 * @uses DynamicScopeOverride::GetTokenFor_1 <br>protected , args: ($varArgMethod)<br>
	 * @uses DynamicScopeOverride::GetTokenFor_2 <br>public , args: ($method)<br>
	 * @uses DynamicScopeOverride::GetTokenFor_3 <br>public , args: ($method, $typeContext)<br>
	 * @uses DynamicScopeOverride::GetTokenFor_4 <br>public , args: ($method)<br>
	 * @uses DynamicScopeOverride::GetTokenFor_5 <br>public , args: ($field)<br>
	 * @uses DynamicScopeOverride::GetTokenFor_6 <br>public , args: ($field, $typeContext)<br>
	 * @uses DynamicScopeOverride::GetTokenFor_7 <br>public , args: ($type)<br>
	 * @uses DynamicScopeOverride::GetTokenFor_8 <br>public , args: ($literal)<br>
	 * @uses DynamicScopeOverride::GetTokenFor_9 <br>public , args: ($signature)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetTokenFor (\override ...$args){}
	/**
	 * @param \System\Int32|int $token
	 * @return \System\String|string
	 */
	protected function GetString($token){}
	/**
	 * @param \System\Int32|int $token
	 * @param \System\Int32|int $fromMethod
	 * @return \System\Byte[]
	 */
	protected function ResolveSignature($token, $fromMethod){}
	/**
	 */
	public function __construct(){}
}