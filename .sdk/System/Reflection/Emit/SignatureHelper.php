<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SignatureHelperOverride {
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $mod
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]public static function GetMethodSigHelper_1 ($mod, $returnType, $parameterTypes){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $mod
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]public static function GetMethodSigHelper_2 ($mod, $callingConvention, $returnType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $scope
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $requiredReturnTypeCustomModifiers
	 * @param \System\Type $optionalReturnTypeCustomModifiers
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $requiredParameterTypeCustomModifiers [generic: ][]
	 * @param \System\Type $optionalParameterTypeCustomModifiers [generic: ][]
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]protected static function GetMethodSigHelper_3 ($scope, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $scope
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Int32|int $cGenericParam
	 * @param \System\Type $returnType
	 * @param \System\Type $requiredReturnTypeCustomModifiers
	 * @param \System\Type $optionalReturnTypeCustomModifiers
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $requiredParameterTypeCustomModifiers [generic: ][]
	 * @param \System\Type $optionalParameterTypeCustomModifiers [generic: ][]
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]protected static function GetMethodSigHelper_4 ($scope, $callingConvention, $cGenericParam, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $mod
	 * @param \System\Runtime\InteropServices\CallingConvention $unmanagedCallConv
	 * @param \System\Type $returnType
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]protected static function GetMethodSigHelper_5 ($mod, $unmanagedCallConv, $returnType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]public static function GetMethodSigHelper_6 ($callingConvention, $returnType){}
	/**
	 * @deprecated
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]public static function GetLocalVarSigHelper_1 (){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $mod
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]public static function GetLocalVarSigHelper_2 ($mod){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $mod
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]public static function GetPropertySigHelper_1 ($mod, $returnType, $parameterTypes){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $mod
	 * @param \System\Type $returnType
	 * @param \System\Type $requiredReturnTypeCustomModifiers
	 * @param \System\Type $optionalReturnTypeCustomModifiers
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $requiredParameterTypeCustomModifiers [generic: ][]
	 * @param \System\Type $optionalParameterTypeCustomModifiers [generic: ][]
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]public static function GetPropertySigHelper_2 ($mod, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $mod
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $requiredReturnTypeCustomModifiers
	 * @param \System\Type $optionalReturnTypeCustomModifiers
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $requiredParameterTypeCustomModifiers [generic: ][]
	 * @param \System\Type $optionalParameterTypeCustomModifiers [generic: ][]
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]public static function GetPropertySigHelper_3 ($mod, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $mod
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Init_1 ($mod){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $mod
	 * @param \System\Reflection\MdSigCallingConvention $callingConvention
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Init_2 ($mod, $callingConvention){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $mod
	 * @param \System\Reflection\MdSigCallingConvention $callingConvention
	 * @param \System\Int32|int $cGenericParam
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Init_3 ($mod, $callingConvention, $cGenericParam){}
	/**
	 * @deprecated
	 * @param \System\Type $argument
	 * @param \System\Boolean|bool $pinned
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function AddOneArgTypeHelper_1 ($argument, $pinned){}
	/**
	 * @deprecated
	 * @param \System\Type $clsArgument
	 * @param \System\Type $requiredCustomModifiers
	 * @param \System\Type $optionalCustomModifiers
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function AddOneArgTypeHelper_2 ($clsArgument, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @deprecated
	 * @param \System\Type $clsArgument
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function AddOneArgTypeHelper_3 ($clsArgument){}
	/**
	 * @deprecated
	 * @param \System\Byte $inArray
	 * @return \System\Byte
	 */
	#[MethodOverride]private static function ExpandArray_1 ($inArray){}
	/**
	 * @deprecated
	 * @param \System\Byte $inArray
	 * @param \System\Int32|int $requiredLength
	 * @return \System\Byte
	 */
	#[MethodOverride]private static function ExpandArray_2 ($inArray, $requiredLength){}
	/**
	 * @deprecated
	 * @param \System\Type $clsArgument
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddArgument_1 ($clsArgument){}
	/**
	 * @deprecated
	 * @param \System\Type $argument
	 * @param \System\Boolean|bool $pinned
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddArgument_2 ($argument, $pinned){}
	/**
	 * @deprecated
	 * @param \System\Type $argument
	 * @param \System\Type $requiredCustomModifiers
	 * @param \System\Type $optionalCustomModifiers
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddArgument_3 ($argument, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @deprecated
	 * @return \System\Byte
	 */
	#[MethodOverride]public function GetSignature_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $appendEndOfSig
	 * @return \System\Byte
	 */
	#[MethodOverride]protected function GetSignature_2 ($appendEndOfSig){}
}
final class SignatureHelper extends \System\Object
{
	use SignatureHelperOverride;


	/**
	 * @uses SignatureHelperOverride::GetMethodSigHelper_1 <br>public , args: ($mod, $returnType, $parameterTypes)<br>
	 * @uses SignatureHelperOverride::GetMethodSigHelper_2 <br>public , args: ($mod, $callingConvention, $returnType)<br>
	 * @uses SignatureHelperOverride::GetMethodSigHelper_3 <br>protected , args: ($scope, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers)<br>
	 * @uses SignatureHelperOverride::GetMethodSigHelper_4 <br>protected , args: ($scope, $callingConvention, $cGenericParam, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers)<br>
	 * @uses SignatureHelperOverride::GetMethodSigHelper_5 <br>protected , args: ($mod, $unmanagedCallConv, $returnType)<br>
	 * @uses SignatureHelperOverride::GetMethodSigHelper_6 <br>public , args: ($callingConvention, $returnType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\SignatureHelper|mixed|\override
	 */
	#[MethodOverridePublic]function GetMethodSigHelper (\override ...$args){}
	/**
	 * @param \System\Reflection\Module $scope
	 * @param \System\Type $inst
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	protected static function GetMethodSpecSigHelper($scope, $inst){}
	/**
	 * @uses SignatureHelperOverride::GetLocalVarSigHelper_1 <br>public , args: ()<br>
	 * @uses SignatureHelperOverride::GetLocalVarSigHelper_2 <br>public , args: ($mod)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\SignatureHelper|mixed|\override
	 */
	#[MethodOverridePublic]function GetLocalVarSigHelper (\override ...$args){}
	/**
	 * @param \System\Reflection\Module $mod
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	public static function GetFieldSigHelper($mod){}
	/**
	 * @uses SignatureHelperOverride::GetPropertySigHelper_1 <br>public , args: ($mod, $returnType, $parameterTypes)<br>
	 * @uses SignatureHelperOverride::GetPropertySigHelper_2 <br>public , args: ($mod, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers)<br>
	 * @uses SignatureHelperOverride::GetPropertySigHelper_3 <br>public , args: ($mod, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\SignatureHelper|mixed|\override
	 */
	#[MethodOverridePublic]function GetPropertySigHelper (\override ...$args){}
	/**
	 * @param \System\Reflection\Module $module
	 * @param \System\Type $type
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	protected static function GetTypeSigToken($module, $type){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SignatureHelperOverride::Init_1 <br>private , args: ($mod)<br>
	 * @uses SignatureHelperOverride::Init_2 <br>private , args: ($mod, $callingConvention)<br>
	 * @uses SignatureHelperOverride::Init_3 <br>private , args: ($mod, $callingConvention, $cGenericParam)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function Init (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SignatureHelperOverride::AddOneArgTypeHelper_1 <br>private , args: ($argument, $pinned)<br>
	 * @uses SignatureHelperOverride::AddOneArgTypeHelper_2 <br>private , args: ($clsArgument, $requiredCustomModifiers, $optionalCustomModifiers)<br>
	 * @uses SignatureHelperOverride::AddOneArgTypeHelper_3 <br>private , args: ($clsArgument)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function AddOneArgTypeHelper (\override ...$args){}
	private function AddOneArgTypeHelperWorker($clsArgument, $lastWasGenericInst){}
	private function AddData($data){}
	private function AddElementType($cvt){}
	private function AddToken($token){}
	private function InternalAddTypeToken($clsToken, $CorType){}
	private function InternalAddRuntimeType($type){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SignatureHelperOverride::ExpandArray_1 <br>private , args: ($inArray)<br>
	 * @uses SignatureHelperOverride::ExpandArray_2 <br>private , args: ($inArray, $requiredLength)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|mixed|\override
	 */
	#[MethodOverridePrivate]function ExpandArray (\override ...$args){}
	private function IncrementArgCounts(){}
	private function SetNumberOfSignatureElements($forceCopy){}
	/**
	 * @param \System\Reflection\CorElementType $type
	 * @return \System\Boolean|bool
	 */
	protected static function IsSimpleType($type){}
	/**
	 * @param \System\Int32& &$length
	 * @return \System\Byte[]
	 */
	protected function InternalGetSignature(&$length){}
	/**
	 * @return \System\Byte[]
	 */
	protected function InternalGetSignatureArray(){}
	/**
	 * @param \System\Reflection\Emit\DynamicScope $dynamicScope
	 * @param \System\Type $clsArgument
	 * @param \System\Type $requiredCustomModifiers
	 * @param \System\Type $optionalCustomModifiers
	 * @return \System\Void|void
	 */
	protected function AddDynamicArgument($dynamicScope, $clsArgument, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @uses SignatureHelperOverride::AddArgument_1 <br>public , args: ($clsArgument)<br>
	 * @uses SignatureHelperOverride::AddArgument_2 <br>public , args: ($argument, $pinned)<br>
	 * @uses SignatureHelperOverride::AddArgument_3 <br>public , args: ($argument, $requiredCustomModifiers, $optionalCustomModifiers)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AddArgument (\override ...$args){}
	/**
	 * @param \System\Type $arguments
	 * @param \System\Type $requiredCustomModifiers [generic: ][]
	 * @param \System\Type $optionalCustomModifiers [generic: ][]
	 * @return \System\Void|void
	 */
	public function AddArguments($arguments, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @return \System\Void|void
	 */
	public function AddSentinel(){}
	/**
	 * @uses SignatureHelperOverride::GetSignature_1 <br>public , args: ()<br>
	 * @uses SignatureHelperOverride::GetSignature_2 <br>protected , args: ($appendEndOfSig)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|mixed|\override
	 */
	#[MethodOverridePublic]function GetSignature (\override ...$args){}
}