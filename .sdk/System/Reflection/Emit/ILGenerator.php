<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ILGeneratorOverride {
	/**
	 * @deprecated
	 * @param \T $incoming
	 * @return \T
	 */
	#[MethodOverride]protected static function EnlargeArray_1 ($incoming){}
	/**
	 * @deprecated
	 * @param \T $incoming
	 * @param \System\Int32|int $requiredSize
	 * @return \T
	 */
	#[MethodOverride]protected static function EnlargeArray_2 ($incoming, $requiredSize){}
	/**
	 * @deprecated
	 * @param \System\Reflection\CallingConventions $call
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $optionalParameterTypes
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]protected function GetMemberRefSignature_1 ($call, $returnType, $parameterTypes, $optionalParameterTypes){}
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
	#[MethodOverride]protected function GetMemberRefSignature_2 ($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes){}
	/**
	 * @deprecated
	 * @param \System\Reflection\CallingConventions $call
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $requiredCustomModifiers [generic: ][]
	 * @param \System\Type $optionalCustomModifiers [generic: ][]
	 * @param \System\Type $optionalParameterTypes
	 * @param \System\Int32|int $cGenericParameters
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]private function GetMemberRefSignature_3 ($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes, $cGenericParameters){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_1 ($opcode){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Byte $arg
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_2 ($opcode, $arg){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\SByte $arg
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_3 ($opcode, $arg){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Int16 $arg
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_4 ($opcode, $arg){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Int32|int $arg
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_5 ($opcode, $arg){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Reflection\MethodInfo $meth
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_6 ($opcode, $meth){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Reflection\Emit\SignatureHelper $signature
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_7 ($opcode, $signature){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Reflection\ConstructorInfo $con
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_8 ($opcode, $con){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Type $cls
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_9 ($opcode, $cls){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Int64|int $arg
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_10 ($opcode, $arg){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Single $arg
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_11 ($opcode, $arg){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Double|double $arg
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_12 ($opcode, $arg){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Reflection\Emit\Label $label
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_13 ($opcode, $label){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Reflection\Emit\Label $labels
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_14 ($opcode, $labels){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Reflection\FieldInfo $field
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_15 ($opcode, $field){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\String|string $str
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_16 ($opcode, $str){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Reflection\Emit\LocalBuilder $local
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Emit_17 ($opcode, $local){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $optionalParameterTypes
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function EmitCalli_1 ($opcode, $callingConvention, $returnType, $parameterTypes, $optionalParameterTypes){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Runtime\InteropServices\CallingConvention $unmanagedCallConv
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function EmitCalli_2 ($opcode, $unmanagedCallConv, $returnType, $parameterTypes){}
	/**
	 * @deprecated
	 * @return \System\Reflection\Emit\Label
	 */
	#[MethodOverride]public function DefineLabel_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $depth
	 * @return \System\Reflection\Emit\Label
	 */
	#[MethodOverride]private function DefineLabel_2 ($depth){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function EmitWriteLine_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\LocalBuilder $localBuilder
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function EmitWriteLine_2 ($localBuilder){}
	/**
	 * @deprecated
	 * @param \System\Reflection\FieldInfo $fld
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function EmitWriteLine_3 ($fld){}
	/**
	 * @deprecated
	 * @param \System\Type $localType
	 * @return \System\Reflection\Emit\LocalBuilder
	 */
	#[MethodOverride]public function DeclareLocal_1 ($localType){}
	/**
	 * @deprecated
	 * @param \System\Type $localType
	 * @param \System\Boolean|bool $pinned
	 * @return \System\Reflection\Emit\LocalBuilder
	 */
	#[MethodOverride]public function DeclareLocal_2 ($localType, $pinned){}
}
class ILGenerator extends \System\Object
{
	use ILGeneratorOverride;

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
	 * @uses ILGeneratorOverride::EnlargeArray_1 <br>protected , args: ($incoming)<br>
	 * @uses ILGeneratorOverride::EnlargeArray_2 <br>protected , args: ($incoming, $requiredSize)<br>
	 * @var mixed|\override ...$args
	 * @return \T|mixed|\override
	 */
	#[MethodOverrideProtected]function EnlargeArray (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected function RecordTokenFixup(){}
	/**
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @return \System\Void|void
	 */
	protected function InternalEmit($opcode){}
	/**
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Int32|int $stackchange
	 * @return \System\Void|void
	 */
	protected function UpdateStackSize($opcode, $stackchange){}
	private function GetMethodToken($method, $optionalParameterTypes, $useMethodDef){}
	/**
	 * @uses ILGeneratorOverride::GetMemberRefSignature_1 <br>protected , args: ($call, $returnType, $parameterTypes, $optionalParameterTypes)<br>
	 * @uses ILGeneratorOverride::GetMemberRefSignature_2 <br>protected , args: ($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes)<br>
	 * @uses ILGeneratorOverride::GetMemberRefSignature_3 <br>private , args: ($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes, $cGenericParameters)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\SignatureHelper|mixed|\override
	 */
	#[MethodOverrideProtected]function GetMemberRefSignature (\override ...$args){}
	/**
	 * @return \System\Byte[]
	 */
	protected function BakeByteArray(){}
	/**
	 * @return \System\Reflection\Emit\__ExceptionInfo[]
	 */
	protected function GetExceptions(){}
	/**
	 * @param \System\Int32|int $size
	 * @return \System\Void|void
	 */
	protected function EnsureCapacity($size){}
	private function IncreaseCapacity($size){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	protected function PutInteger4($value){}
	private function GetLabelPos($lbl){}
	private function AddFixup($lbl, $pos, $instSize){}
	/**
	 * @return \System\Int32|int
	 */
	protected function GetMaxStackSize(){}
	private static function SortExceptions($exceptions){}
	/**
	 * @return \System\Int32[]|array
	 */
	protected function GetTokenFixups(){}
	/**
	 * @uses ILGeneratorOverride::Emit_1 <br>public , args: ($opcode)<br>
	 * @uses ILGeneratorOverride::Emit_2 <br>public , args: ($opcode, $arg)<br>
	 * @uses ILGeneratorOverride::Emit_3 <br>public , args: ($opcode, $arg)<br>
	 * @uses ILGeneratorOverride::Emit_4 <br>public , args: ($opcode, $arg)<br>
	 * @uses ILGeneratorOverride::Emit_5 <br>public , args: ($opcode, $arg)<br>
	 * @uses ILGeneratorOverride::Emit_6 <br>public , args: ($opcode, $meth)<br>
	 * @uses ILGeneratorOverride::Emit_7 <br>public , args: ($opcode, $signature)<br>
	 * @uses ILGeneratorOverride::Emit_8 <br>public , args: ($opcode, $con)<br>
	 * @uses ILGeneratorOverride::Emit_9 <br>public , args: ($opcode, $cls)<br>
	 * @uses ILGeneratorOverride::Emit_10 <br>public , args: ($opcode, $arg)<br>
	 * @uses ILGeneratorOverride::Emit_11 <br>public , args: ($opcode, $arg)<br>
	 * @uses ILGeneratorOverride::Emit_12 <br>public , args: ($opcode, $arg)<br>
	 * @uses ILGeneratorOverride::Emit_13 <br>public , args: ($opcode, $label)<br>
	 * @uses ILGeneratorOverride::Emit_14 <br>public , args: ($opcode, $labels)<br>
	 * @uses ILGeneratorOverride::Emit_15 <br>public , args: ($opcode, $field)<br>
	 * @uses ILGeneratorOverride::Emit_16 <br>public , args: ($opcode, $str)<br>
	 * @uses ILGeneratorOverride::Emit_17 <br>public , args: ($opcode, $local)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Emit (\override ...$args){}
	/**
	 * @uses ILGeneratorOverride::EmitCalli_1 <br>public , args: ($opcode, $callingConvention, $returnType, $parameterTypes, $optionalParameterTypes)<br>
	 * @uses ILGeneratorOverride::EmitCalli_2 <br>public , args: ($opcode, $unmanagedCallConv, $returnType, $parameterTypes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function EmitCalli (\override ...$args){}
	/**
	 * @param \System\Reflection\Emit\OpCode $opcode
	 * @param \System\Reflection\MethodInfo $methodInfo
	 * @param \System\Type $optionalParameterTypes
	 * @return \System\Void|void
	 */
	public function EmitCall($opcode, $methodInfo, $optionalParameterTypes){}
	/**
	 * @return \System\Reflection\Emit\Label
	 */
	public function BeginExceptionBlock(){}
	/**
	 * @return \System\Void|void
	 */
	public function EndExceptionBlock(){}
	/**
	 * @return \System\Void|void
	 */
	public function BeginExceptFilterBlock(){}
	/**
	 * @param \System\Type $exceptionType
	 * @return \System\Void|void
	 */
	public function BeginCatchBlock($exceptionType){}
	/**
	 * @return \System\Void|void
	 */
	public function BeginFaultBlock(){}
	/**
	 * @return \System\Void|void
	 */
	public function BeginFinallyBlock(){}
	/**
	 * @uses ILGeneratorOverride::DefineLabel_1 <br>public , args: ()<br>
	 * @uses ILGeneratorOverride::DefineLabel_2 <br>private , args: ($depth)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\Label|mixed|\override
	 */
	#[MethodOverridePublic]function DefineLabel (\override ...$args){}
	/**
	 * @param \System\Reflection\Emit\Label $loc
	 * @return \System\Void|void
	 */
	public function MarkLabel($loc){}
	/**
	 * @param \System\Type $excType
	 * @return \System\Void|void
	 */
	public function ThrowException($excType){}
	/**
	 * @uses ILGeneratorOverride::EmitWriteLine_1 <br>public , args: ($value)<br>
	 * @uses ILGeneratorOverride::EmitWriteLine_2 <br>public , args: ($localBuilder)<br>
	 * @uses ILGeneratorOverride::EmitWriteLine_3 <br>public , args: ($fld)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function EmitWriteLine (\override ...$args){}
	/**
	 * @uses ILGeneratorOverride::DeclareLocal_1 <br>public , args: ($localType)<br>
	 * @uses ILGeneratorOverride::DeclareLocal_2 <br>public , args: ($localType, $pinned)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\LocalBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function DeclareLocal (\override ...$args){}
	/**
	 * @param \System\String|string $usingNamespace
	 * @return \System\Void|void
	 */
	public function UsingNamespace($usingNamespace){}
	/**
	 * @return \System\Void|void
	 */
	public function BeginScope(){}
	/**
	 * @return \System\Void|void
	 */
	public function EndScope(){}
}