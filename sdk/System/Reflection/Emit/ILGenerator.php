<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ILGeneratorMethodsOverride
{
	/**
	 * @return \System\Reflection\Emit\T[]
	 */
	#[MethodOverride] protected static function EnlargeArray_1($incoming){}
	/**
	 * @return \System\Reflection\Emit\T[]
	 */
	#[MethodOverride] protected static function EnlargeArray_2($incoming, $requiredSize){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] protected  function GetMemberRefSignature_1($call, $returnType, $parameterTypes, $optionalParameterTypes){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] protected  function GetMemberRefSignature_2($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] private  function GetMemberRefSignature_3($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes, $cGenericParameters){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_1($opcode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_2($opcode, $arg){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_3($opcode, $arg){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_4($opcode, $arg){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_5($opcode, $arg){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_6($opcode, $meth){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_7($opcode, $signature){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_8($opcode, $con){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_9($opcode, $cls){}
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
	#[MethodOverride] public  function Emit_13($opcode, $label){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_14($opcode, $labels){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_15($opcode, $field){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Emit_16($opcode, $str){}
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
	 * @return \System\Reflection\Emit\Label
	 */
	#[MethodOverride] public  function DefineLabel_1(){}
	/**
	 * @return \System\Reflection\Emit\Label
	 */
	#[MethodOverride] private  function DefineLabel_2($depth){}
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
	/**
	 * @return \System\Reflection\Emit\LocalBuilder
	 */
	#[MethodOverride] public  function DeclareLocal_1($localType){}
	/**
	 * @return \System\Reflection\Emit\LocalBuilder
	 */
	#[MethodOverride] public  function DeclareLocal_2($localType, $pinned){}
}
/**
 */
class ILGenerator extends \System\Object
{
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
	 * @uses ILGeneratorMethodsOverride::EnlargeArray_1 ($incoming)
	 * @uses ILGeneratorMethodsOverride::EnlargeArray_2 ($incoming, $requiredSize)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function EnlargeArray(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_CurrExcStackCount(){}
	/**
	 * @return \System\Reflection\Emit\__ExceptionInfo[]
	 */
	protected  function get_CurrExcStack(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RecordTokenFixup(){}
	/**
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @return \System\Void|void
	 */
	protected  function InternalEmit($opcode){}
	/**
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Int32|int $stackchange
	 * @return \System\Void|void
	 */
	protected  function UpdateStackSize($opcode, $stackchange){}
	/**
	 * @param \System\Reflection\MethodBase $method
	 * @param \System\Type[] $optionalParameterTypes
	 * @param \System\Boolean $useMethodDef
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetMethodToken($method, $optionalParameterTypes, $useMethodDef){}
	/**
	 * @uses ILGeneratorMethodsOverride::GetMemberRefSignature_1 ($call, $returnType, $parameterTypes, $optionalParameterTypes)
	 * @uses ILGeneratorMethodsOverride::GetMemberRefSignature_2 ($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes)
	 * @uses ILGeneratorMethodsOverride::GetMemberRefSignature_3 ($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes, $cGenericParameters)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMemberRefSignature(mixed ...$args){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function BakeByteArray(){}
	/**
	 * @return \System\Reflection\Emit\__ExceptionInfo[]
	 */
	protected  function GetExceptions(){}
	/**
	 * @param \System\Int32|int $size
	 * @return \System\Void|void
	 */
	protected  function EnsureCapacity($size){}
	/**
	 * @param \System\Int32|int $size
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IncreaseCapacity($size){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	protected  function PutInteger4($value){}
	/**
	 * @param \System\Reflection\Emit\Label $lbl
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetLabelPos($lbl){}
	/**
	 * @param \System\Reflection\Emit\Label $lbl
	 * @param \System\Int32|int $pos
	 * @param \System\Int32|int $instSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddFixup($lbl, $pos, $instSize){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetMaxStackSize(){}
	/**
	 * @param \System\Reflection\Emit\__ExceptionInfo[] $exceptions
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SortExceptions($exceptions){}
	/**
	 * @return \System\Int32[]
	 */
	protected  function GetTokenFixups(){}
	/**
	 * @uses ILGeneratorMethodsOverride::Emit_1 ($opcode)
	 * @uses ILGeneratorMethodsOverride::Emit_2 ($opcode, $arg)
	 * @uses ILGeneratorMethodsOverride::Emit_3 ($opcode, $arg)
	 * @uses ILGeneratorMethodsOverride::Emit_4 ($opcode, $arg)
	 * @uses ILGeneratorMethodsOverride::Emit_5 ($opcode, $arg)
	 * @uses ILGeneratorMethodsOverride::Emit_6 ($opcode, $meth)
	 * @uses ILGeneratorMethodsOverride::Emit_7 ($opcode, $signature)
	 * @uses ILGeneratorMethodsOverride::Emit_8 ($opcode, $con)
	 * @uses ILGeneratorMethodsOverride::Emit_9 ($opcode, $cls)
	 * @uses ILGeneratorMethodsOverride::Emit_10 ($opcode, $arg)
	 * @uses ILGeneratorMethodsOverride::Emit_11 ($opcode, $arg)
	 * @uses ILGeneratorMethodsOverride::Emit_12 ($opcode, $arg)
	 * @uses ILGeneratorMethodsOverride::Emit_13 ($opcode, $label)
	 * @uses ILGeneratorMethodsOverride::Emit_14 ($opcode, $labels)
	 * @uses ILGeneratorMethodsOverride::Emit_15 ($opcode, $field)
	 * @uses ILGeneratorMethodsOverride::Emit_16 ($opcode, $str)
	 * @uses ILGeneratorMethodsOverride::Emit_17 ($opcode, $local)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Emit(mixed ...$args){}
	/**
	 * @uses ILGeneratorMethodsOverride::EmitCalli_1 ($opcode, $callingConvention, $returnType, $parameterTypes, $optionalParameterTypes)
	 * @uses ILGeneratorMethodsOverride::EmitCalli_2 ($opcode, $unmanagedCallConv, $returnType, $parameterTypes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EmitCalli(mixed ...$args){}
	/**
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Reflection\MethodInfo $methodInfo
	 * @param \System\Type[] $optionalParameterTypes
	 * @return \System\Void|void
	 */
	public  function EmitCall($opcode, $methodInfo, $optionalParameterTypes){}
	/**
	 * @return \System\Reflection\Emit\Label
	 */
	public  function BeginExceptionBlock(){}
	/**
	 * @return \System\Void|void
	 */
	public  function EndExceptionBlock(){}
	/**
	 * @return \System\Void|void
	 */
	public  function BeginExceptFilterBlock(){}
	/**
	 * @param \System\Type $exceptionType
	 * @return \System\Void|void
	 */
	public  function BeginCatchBlock($exceptionType){}
	/**
	 * @return \System\Void|void
	 */
	public  function BeginFaultBlock(){}
	/**
	 * @return \System\Void|void
	 */
	public  function BeginFinallyBlock(){}
	/**
	 * @uses ILGeneratorMethodsOverride::DefineLabel_1 ()
	 * @uses ILGeneratorMethodsOverride::DefineLabel_2 ($depth)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DefineLabel(mixed ...$args){}
	/**
	 * @param \System\Reflection\Emit\Label $loc
	 * @return \System\Void|void
	 */
	public  function MarkLabel($loc){}
	/**
	 * @param \System\Type $excType
	 * @return \System\Void|void
	 */
	public  function ThrowException($excType){}
	/**
	 * @uses ILGeneratorMethodsOverride::EmitWriteLine_1 ($value)
	 * @uses ILGeneratorMethodsOverride::EmitWriteLine_2 ($localBuilder)
	 * @uses ILGeneratorMethodsOverride::EmitWriteLine_3 ($fld)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EmitWriteLine(mixed ...$args){}
	/**
	 * @uses ILGeneratorMethodsOverride::DeclareLocal_1 ($localType)
	 * @uses ILGeneratorMethodsOverride::DeclareLocal_2 ($localType, $pinned)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DeclareLocal(mixed ...$args){}
	/**
	 * @param \System\String|string $usingNamespace
	 * @return \System\Void|void
	 */
	public  function UsingNamespace($usingNamespace){}
	/**
	 * @return \System\Void|void
	 */
	public  function BeginScope(){}
	/**
	 * @return \System\Void|void
	 */
	public  function EndScope(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ILOffset(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
