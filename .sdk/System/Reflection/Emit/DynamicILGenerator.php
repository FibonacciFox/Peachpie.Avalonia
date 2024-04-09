<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DynamicILGeneratorOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\InteropServices\CallingConvention $unmanagedCallConv
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]private function GetMethodSigHelper_1 ($unmanagedCallConv, $returnType, $parameterTypes){}
	/**
	 * @deprecated
	 * @param \System\Reflection\CallingConventions $call
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $requiredCustomModifiers [generic: ][]
	 * @param \System\Type $optionalCustomModifiers [generic: ][]
	 * @param \System\Type $optionalParameterTypes
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]private function GetMethodSigHelper_2 ($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $rtType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetTokenFor_1 ($rtType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeFieldInfo $runtimeField
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetTokenFor_2 ($runtimeField){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeFieldInfo $runtimeField
	 * @param \System\RuntimeType $rtType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetTokenFor_3 ($runtimeField, $rtType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeConstructorInfo $rtMeth
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetTokenFor_4 ($rtMeth){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeConstructorInfo $rtMeth
	 * @param \System\RuntimeType $rtType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetTokenFor_5 ($rtMeth, $rtType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeMethodInfo $rtMeth
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetTokenFor_6 ($rtMeth){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeMethodInfo $rtMeth
	 * @param \System\RuntimeType $rtType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetTokenFor_7 ($rtMeth, $rtType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\DynamicMethod $dm
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetTokenFor_8 ($dm){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeMethodInfo $rtMeth
	 * @param \System\Reflection\Emit\SignatureHelper $sig
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetTokenForVarArgMethod_1 ($rtMeth, $sig){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\DynamicMethod $dm
	 * @param \System\Reflection\Emit\SignatureHelper $sig
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetTokenForVarArgMethod_2 ($dm, $sig){}
}
final class DynamicILGenerator extends \System\Reflection\Emit\ILGenerator
{
	use DynamicILGeneratorOverride;
	/**
	 * @field
	 * @var \System\Reflection\Emit\DynamicScope
	 */
	protected $m_scope;
	/**
	 * @field
	 * @var \System\Reflection\Emit\ScopeTree
	 */
	protected $m_ScopeTree;
	/**
	 * @field
	 * @var \System\Reflection\MethodInfo
	 */
	protected $m_methodBuilder;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_localCount;
	/**
	 * @field
	 * @var \System\Reflection\Emit\SignatureHelper
	 */
	protected $m_localSignature;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ILOffset;
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\Reflection\Emit\DynamicMethod $dm
	 * @return \System\Void|void
	 */
	protected function GetCallableMethod($module, $dm){}
	private function GetMemberRefToken($methodInfo, $optionalParameterTypes){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses DynamicILGeneratorOverride::GetMethodSigHelper_1 <br>private , args: ($unmanagedCallConv, $returnType, $parameterTypes)<br>
	 * @uses DynamicILGeneratorOverride::GetMethodSigHelper_2 <br>private , args: ($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\SignatureHelper|mixed|\override
	 */
	#[MethodOverridePrivate]function GetMethodSigHelper (\override ...$args){}
	private function AddParameters($sigHelp, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses DynamicILGeneratorOverride::GetTokenFor_1 <br>private , args: ($rtType)<br>
	 * @uses DynamicILGeneratorOverride::GetTokenFor_2 <br>private , args: ($runtimeField)<br>
	 * @uses DynamicILGeneratorOverride::GetTokenFor_3 <br>private , args: ($runtimeField, $rtType)<br>
	 * @uses DynamicILGeneratorOverride::GetTokenFor_4 <br>private , args: ($rtMeth)<br>
	 * @uses DynamicILGeneratorOverride::GetTokenFor_5 <br>private , args: ($rtMeth, $rtType)<br>
	 * @uses DynamicILGeneratorOverride::GetTokenFor_6 <br>private , args: ($rtMeth)<br>
	 * @uses DynamicILGeneratorOverride::GetTokenFor_7 <br>private , args: ($rtMeth, $rtType)<br>
	 * @uses DynamicILGeneratorOverride::GetTokenFor_8 <br>private , args: ($dm)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function GetTokenFor (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses DynamicILGeneratorOverride::GetTokenForVarArgMethod_1 <br>private , args: ($rtMeth, $sig)<br>
	 * @uses DynamicILGeneratorOverride::GetTokenForVarArgMethod_2 <br>private , args: ($dm, $sig)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function GetTokenForVarArgMethod (\override ...$args){}
	private function GetTokenForString($s){}
	private function GetTokenForSig($sig){}
}