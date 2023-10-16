<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SignatureHelperMethodsOverride
{
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] public static function GetMethodSigHelper_1($mod, $returnType, $parameterTypes){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] public static function GetMethodSigHelper_2($mod, $callingConvention, $returnType){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] protected static function GetMethodSigHelper_3($scope, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] protected static function GetMethodSigHelper_4($scope, $callingConvention, $cGenericParam, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] protected static function GetMethodSigHelper_5($mod, $unmanagedCallConv, $returnType){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] public static function GetMethodSigHelper_6($callingConvention, $returnType){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] public static function GetLocalVarSigHelper_1(){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] public static function GetLocalVarSigHelper_2($mod){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] public static function GetPropertySigHelper_1($mod, $returnType, $parameterTypes){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] public static function GetPropertySigHelper_2($mod, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] public static function GetPropertySigHelper_3($mod, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Init_1($mod){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Init_2($mod, $callingConvention){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Init_3($mod, $callingConvention, $cGenericParam){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function AddOneArgTypeHelper_1($argument, $pinned){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function AddOneArgTypeHelper_2($clsArgument, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function AddOneArgTypeHelper_3($clsArgument){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] private static function ExpandArray_1($inArray){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] private static function ExpandArray_2($inArray, $requiredLength){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddArgument_1($clsArgument){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddArgument_2($argument, $pinned){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddArgument_3($argument, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetSignature_1(){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] protected  function GetSignature_2($appendEndOfSig){}
}
/**
 */
class SignatureHelper extends \System\Object
{
	/**
	 * @uses SignatureHelperMethodsOverride::GetMethodSigHelper_1 ($mod, $returnType, $parameterTypes)
	 * @uses SignatureHelperMethodsOverride::GetMethodSigHelper_2 ($mod, $callingConvention, $returnType)
	 * @uses SignatureHelperMethodsOverride::GetMethodSigHelper_3 ($scope, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers)
	 * @uses SignatureHelperMethodsOverride::GetMethodSigHelper_4 ($scope, $callingConvention, $cGenericParam, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers)
	 * @uses SignatureHelperMethodsOverride::GetMethodSigHelper_5 ($mod, $unmanagedCallConv, $returnType)
	 * @uses SignatureHelperMethodsOverride::GetMethodSigHelper_6 ($callingConvention, $returnType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetMethodSigHelper(mixed ...$args){}
	/**
	 * @param \System\Reflection\Module $scope
	 * @param \System\Type[] $inst
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	protected static function GetMethodSpecSigHelper($scope, $inst){}
	/**
	 * @uses SignatureHelperMethodsOverride::GetLocalVarSigHelper_1 ()
	 * @uses SignatureHelperMethodsOverride::GetLocalVarSigHelper_2 ($mod)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetLocalVarSigHelper(mixed ...$args){}
	/**
	 * @param \System\Reflection\Module $mod
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	public static function GetFieldSigHelper($mod){}
	/**
	 * @uses SignatureHelperMethodsOverride::GetPropertySigHelper_1 ($mod, $returnType, $parameterTypes)
	 * @uses SignatureHelperMethodsOverride::GetPropertySigHelper_2 ($mod, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers)
	 * @uses SignatureHelperMethodsOverride::GetPropertySigHelper_3 ($mod, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetPropertySigHelper(mixed ...$args){}
	/**
	 * @param \System\Reflection\Module $module
	 * @param \System\Type $type
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	protected static function GetTypeSigToken($module, $type){}
	/**
	 * @uses SignatureHelperMethodsOverride::Init_1 ($mod)
	 * @uses SignatureHelperMethodsOverride::Init_2 ($mod, $callingConvention)
	 * @uses SignatureHelperMethodsOverride::Init_3 ($mod, $callingConvention, $cGenericParam)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Init(mixed ...$args){}
	/**
	 * @uses SignatureHelperMethodsOverride::AddOneArgTypeHelper_1 ($argument, $pinned)
	 * @uses SignatureHelperMethodsOverride::AddOneArgTypeHelper_2 ($clsArgument, $requiredCustomModifiers, $optionalCustomModifiers)
	 * @uses SignatureHelperMethodsOverride::AddOneArgTypeHelper_3 ($clsArgument)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddOneArgTypeHelper(mixed ...$args){}
	/**
	 * @param \System\Type $clsArgument
	 * @param \System\Boolean $lastWasGenericInst
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddOneArgTypeHelperWorker($clsArgument, $lastWasGenericInst){}
	/**
	 * @param \System\Int32|int $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddData($data){}
	/**
	 * @param \System\Reflection\CorElementType $cvt
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddElementType($cvt){}
	/**
	 * @param \System\Int32|int $token
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddToken($token){}
	/**
	 * @param \System\Int32|int $clsToken
	 * @param \System\Reflection\CorElementType $CorType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalAddTypeToken($clsToken, $CorType){}
	/**
	 * @param \System\Type $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalAddRuntimeType($type){}
	/**
	 * @uses SignatureHelperMethodsOverride::ExpandArray_1 ($inArray)
	 * @uses SignatureHelperMethodsOverride::ExpandArray_2 ($inArray, $requiredLength)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ExpandArray(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IncrementArgCounts(){}
	/**
	 * @param \System\Boolean $forceCopy
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetNumberOfSignatureElements($forceCopy){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_ArgumentCount(){}
	/**
	 * @param \System\Reflection\CorElementType $type
	 * @return \System\Boolean
	 */
	protected static function IsSimpleType($type){}
	/**
	 * @param \System\Int32& $length
	 * @return \System\Byte[]
	 */
	protected  function InternalGetSignature($length){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function InternalGetSignatureArray(){}
	/**
	 * @param \System\Reflection\Emit\DynamicScope $dynamicScope
	 * @param \System\Type $clsArgument
	 * @param \System\Type[] $requiredCustomModifiers
	 * @param \System\Type[] $optionalCustomModifiers
	 * @return \System\Void|void
	 */
	protected  function AddDynamicArgument($dynamicScope, $clsArgument, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @uses SignatureHelperMethodsOverride::AddArgument_1 ($clsArgument)
	 * @uses SignatureHelperMethodsOverride::AddArgument_2 ($argument, $pinned)
	 * @uses SignatureHelperMethodsOverride::AddArgument_3 ($argument, $requiredCustomModifiers, $optionalCustomModifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddArgument(mixed ...$args){}
	/**
	 * @param \System\Type[] $arguments
	 * @param \System\Type[][] $requiredCustomModifiers
	 * @param \System\Type[][] $optionalCustomModifiers
	 * @return \System\Void|void
	 */
	public  function AddArguments($arguments, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @return \System\Void|void
	 */
	public  function AddSentinel(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
	/**
	 * @uses SignatureHelperMethodsOverride::GetSignature_1 ()
	 * @uses SignatureHelperMethodsOverride::GetSignature_2 ($appendEndOfSig)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetSignature(mixed ...$args){}
}
