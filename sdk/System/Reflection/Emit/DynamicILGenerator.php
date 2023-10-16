<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DynamicILGeneratorMethodsOverride
{
	/**
	 * @return \System\Reflection\Emit\LocalBuilder
	 */
	#[MethodOverride] public  function DeclareLocal_1($localType, $pinned){}
	/**
	 * @return \System\Reflection\Emit\LocalBuilder
	 */
	#[MethodOverride] public  function DeclareLocal_2($localType){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_1($opcode, $meth){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_2($opcode, $con){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_3($opcode, $type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_4($opcode, $field){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_5($opcode, $str){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_6($opcode, $signature){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_7($opcode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_8($opcode, $arg){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_9($opcode, $arg){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_10($opcode, $arg){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_11($opcode, $arg){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_12($opcode, $arg){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_13($opcode, $arg){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_14($opcode, $arg){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_15($opcode, $label){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_16($opcode, $labels){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_17($opcode, $local){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EmitCalli_1($opcode, $callingConvention, $returnType, $parameterTypes, $optionalParameterTypes){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EmitCalli_2($opcode, $unmanagedCallConv, $returnType, $parameterTypes){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] private  function GetMethodSigHelper_1($unmanagedCallConv, $returnType, $parameterTypes){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] private  function GetMethodSigHelper_2($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetTokenFor_1($rtType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetTokenFor_2($runtimeField){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetTokenFor_3($runtimeField, $rtType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetTokenFor_4($rtMeth){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetTokenFor_5($rtMeth, $rtType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetTokenFor_6($rtMeth){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetTokenFor_7($rtMeth, $rtType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetTokenFor_8($dm){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetTokenForVarArgMethod_1($rtMeth, $sig){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetTokenForVarArgMethod_2($dm, $sig){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] protected  function GetMemberRefSignature_1($call, $returnType, $parameterTypes, $optionalParameterTypes){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] protected  function GetMemberRefSignature_2($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EmitWriteLine_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EmitWriteLine_2($localBuilder){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EmitWriteLine_3($fld){}
}
/**
 */
class DynamicILGenerator extends \System\Reflection\Emit\ILGenerator
{
	/**
	 * @var \System\Reflection\Emit\DynamicScope
	 * @field
	 */
	protected $m_scope;
	/**
	 * @var \System\Reflection\Emit\ScopeTree
	 * @field
	 */
	protected $m_ScopeTree;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @field
	 */
	protected $m_methodBuilder;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_localCount;
	/**
	 * @var \System\Reflection\Emit\SignatureHelper
	 * @field
	 */
	protected $m_localSignature;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ILOffset;
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\Reflection\Emit\DynamicMethod $dm
	 * @return \System\Void|void
	 */
	protected  function GetCallableMethod($module, $dm){}
	/**
	 * @uses DynamicILGeneratorMethodsOverride::DeclareLocal_1 ($localType, $pinned)
	 * @uses DynamicILGeneratorMethodsOverride::DeclareLocal_2 ($localType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DeclareLocal(mixed ...$args){}
	/**
	 * @uses DynamicILGeneratorMethodsOverride::Emit_1 ($opcode, $meth)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_2 ($opcode, $con)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_3 ($opcode, $type)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_4 ($opcode, $field)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_5 ($opcode, $str)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_6 ($opcode, $signature)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_7 ($opcode)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_8 ($opcode, $arg)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_9 ($opcode, $arg)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_10 ($opcode, $arg)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_11 ($opcode, $arg)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_12 ($opcode, $arg)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_13 ($opcode, $arg)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_14 ($opcode, $arg)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_15 ($opcode, $label)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_16 ($opcode, $labels)
	 * @uses DynamicILGeneratorMethodsOverride::Emit_17 ($opcode, $local)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Emit(mixed ...$args){}
	/**
	 * @uses DynamicILGeneratorMethodsOverride::EmitCalli_1 ($opcode, $callingConvention, $returnType, $parameterTypes, $optionalParameterTypes)
	 * @uses DynamicILGeneratorMethodsOverride::EmitCalli_2 ($opcode, $unmanagedCallConv, $returnType, $parameterTypes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EmitCalli(mixed ...$args){}
	/**
	 * @param \System\Reflection\MethodBase $methodInfo
	 * @param \System\Type[] $optionalParameterTypes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetMemberRefToken($methodInfo, $optionalParameterTypes){}
	/**
	 * @uses DynamicILGeneratorMethodsOverride::GetMethodSigHelper_1 ($unmanagedCallConv, $returnType, $parameterTypes)
	 * @uses DynamicILGeneratorMethodsOverride::GetMethodSigHelper_2 ($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethodSigHelper(mixed ...$args){}
	/**
	 * @param \System\Reflection\Emit\SignatureHelper $sigHelp
	 * @param \System\Type[] $parameterTypes
	 * @param \System\Type[][] $requiredCustomModifiers
	 * @param \System\Type[][] $optionalCustomModifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddParameters($sigHelp, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @uses DynamicILGeneratorMethodsOverride::GetTokenFor_1 ($rtType)
	 * @uses DynamicILGeneratorMethodsOverride::GetTokenFor_2 ($runtimeField)
	 * @uses DynamicILGeneratorMethodsOverride::GetTokenFor_3 ($runtimeField, $rtType)
	 * @uses DynamicILGeneratorMethodsOverride::GetTokenFor_4 ($rtMeth)
	 * @uses DynamicILGeneratorMethodsOverride::GetTokenFor_5 ($rtMeth, $rtType)
	 * @uses DynamicILGeneratorMethodsOverride::GetTokenFor_6 ($rtMeth)
	 * @uses DynamicILGeneratorMethodsOverride::GetTokenFor_7 ($rtMeth, $rtType)
	 * @uses DynamicILGeneratorMethodsOverride::GetTokenFor_8 ($dm)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetTokenFor(mixed ...$args){}
	/**
	 * @uses DynamicILGeneratorMethodsOverride::GetTokenForVarArgMethod_1 ($rtMeth, $sig)
	 * @uses DynamicILGeneratorMethodsOverride::GetTokenForVarArgMethod_2 ($dm, $sig)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetTokenForVarArgMethod(mixed ...$args){}
	/**
	 * @param \System\String|string $s
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTokenForString($s){}
	/**
	 * @param \System\Byte[] $sig
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTokenForSig($sig){}
	/**
	 * @uses DynamicILGeneratorMethodsOverride::GetMemberRefSignature_1 ($call, $returnType, $parameterTypes, $optionalParameterTypes)
	 * @uses DynamicILGeneratorMethodsOverride::GetMemberRefSignature_2 ($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMemberRefSignature(mixed ...$args){}
	/**
	 * @return \System\Reflection\Emit\Label
	 */
	public  function DefineLabel(){}
	/**
	 * @uses DynamicILGeneratorMethodsOverride::EmitWriteLine_1 ($value)
	 * @uses DynamicILGeneratorMethodsOverride::EmitWriteLine_2 ($localBuilder)
	 * @uses DynamicILGeneratorMethodsOverride::EmitWriteLine_3 ($fld)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EmitWriteLine(mixed ...$args){}
}
