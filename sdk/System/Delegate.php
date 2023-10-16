<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DelegateMethodsOverride
{
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public static function CreateDelegate_1($type, $target, $method, $ignoreCase, $throwOnBindFailure){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public static function CreateDelegate_2($type, $target, $method, $ignoreCase, $throwOnBindFailure){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public static function CreateDelegate_3($type, $method, $throwOnBindFailure){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public static function CreateDelegate_4($type, $firstArgument, $method, $throwOnBindFailure){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public static function CreateDelegate_5($type, $firstArgument, $method){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public static function CreateDelegate_6($type, $method){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public static function CreateDelegate_7($type, $target, $method){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public static function CreateDelegate_8($type, $target, $method, $ignoreCase){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public static function CreateDelegate_9($type, $target, $method){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public static function CreateDelegate_10($type, $target, $method, $ignoreCase){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public static function Combine_1($a, $b){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public static function Combine_2($delegates){}
}
/**
 */
class Delegate extends \System\Object implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $_target;
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $_methodBase;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $_methodPtr;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $_methodPtrAux;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Target;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $Method;
	/**
	 * @param \System\Object[] $args
	 * @return \System\Object|object
	 */
	protected  function DynamicInvokeImpl($args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	protected  function GetMethodImpl(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Target(){}
	/**
	 * @uses DelegateMethodsOverride::CreateDelegate_1 ($type, $target, $method, $ignoreCase, $throwOnBindFailure)
	 * @uses DelegateMethodsOverride::CreateDelegate_2 ($type, $target, $method, $ignoreCase, $throwOnBindFailure)
	 * @uses DelegateMethodsOverride::CreateDelegate_3 ($type, $method, $throwOnBindFailure)
	 * @uses DelegateMethodsOverride::CreateDelegate_4 ($type, $firstArgument, $method, $throwOnBindFailure)
	 * @uses DelegateMethodsOverride::CreateDelegate_5 ($type, $firstArgument, $method)
	 * @uses DelegateMethodsOverride::CreateDelegate_6 ($type, $method)
	 * @uses DelegateMethodsOverride::CreateDelegate_7 ($type, $target, $method)
	 * @uses DelegateMethodsOverride::CreateDelegate_8 ($type, $target, $method, $ignoreCase)
	 * @uses DelegateMethodsOverride::CreateDelegate_9 ($type, $target, $method)
	 * @uses DelegateMethodsOverride::CreateDelegate_10 ($type, $target, $method, $ignoreCase)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateDelegate(mixed ...$args){}
	/**
	 * @param \System\Type $type
	 * @param \System\Object|object $target
	 * @param \System\RuntimeMethodHandle $method
	 * @return \System\Delegate
	 */
	protected static function CreateDelegateNoSecurityCheck($type, $target, $method){}
	/**
	 * @param \System\RuntimeType $rtType
	 * @param \System\Reflection\RuntimeMethodInfo $rtMethod
	 * @param \System\Object|object $firstArgument
	 * @param \System\DelegateBindingFlags $flags
	 * @return \System\Delegate
	 */
	protected static function CreateDelegateInternal($rtType, $rtMethod, $firstArgument, $flags){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\RuntimeType $methodType
	 * @param \System\String|string $method
	 * @param \System\DelegateBindingFlags $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BindToMethodName($target, $methodType, $method, $flags){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\IRuntimeMethodInfo $method
	 * @param \System\RuntimeType $methodType
	 * @param \System\DelegateBindingFlags $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BindToMethodInfo($target, $method, $methodType, $flags){}
	/**
	 * @param \System\RuntimeType $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalAlloc($type){}
	/**
	 * @param \System\Delegate $d
	 * @return \System\MulticastDelegate
	 */
	protected static function InternalAllocLike($d){}
	/**
	 * @param \System\Object|object $a
	 * @param \System\Object|object $b
	 * @return \System\Boolean
	 */
	protected static function InternalEqualTypes($a, $b){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\IntPtr $slot
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DelegateConstruct($target, $slot){}
	/**
	 * @return \System\IntPtr
	 */
	protected  function GetMulticastInvoke(){}
	/**
	 * @return \System\IntPtr
	 */
	protected  function GetInvokeMethod(){}
	/**
	 * @return \System\IRuntimeMethodInfo
	 */
	protected  function FindMethodHandle(){}
	/**
	 * @param \System\Delegate $left
	 * @param \System\Delegate $right
	 * @return \System\Boolean
	 */
	protected static function InternalEqualMethodHandles($left, $right){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\IntPtr $methodPtr
	 * @return \System\IntPtr
	 */
	protected  function AdjustTarget($target, $methodPtr){}
	/**
	 * @param \System\IntPtr $methodPtr
	 * @return \System\IntPtr
	 */
	protected  function GetCallStub($methodPtr){}
	/**
	 * @return \System\Object|object
	 */
	protected  function GetTarget(){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @uses DelegateMethodsOverride::Combine_1 ($a, $b)
	 * @uses DelegateMethodsOverride::Combine_2 ($delegates)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Combine(mixed ...$args){}
	/**
	 * @param \System\Delegate $d
	 * @return \System\Delegate
	 */
	protected  function CombineImpl($d){}
	/**
	 * @param \System\Delegate $d
	 * @return \System\Delegate
	 */
	protected  function RemoveImpl($d){}
	/**
	 * @return \System\Delegate[]
	 */
	public  function GetInvocationList(){}
	/**
	 * @param \System\Object[] $args
	 * @return \System\Object|object
	 */
	public  function DynamicInvoke($args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	public  function get_Method(){}
	/**
	 * @param \System\Delegate $source
	 * @param \System\Delegate $value
	 * @return \System\Delegate
	 */
	public static function Remove($source, $value){}
	/**
	 * @param \System\Delegate $source
	 * @param \System\Delegate $value
	 * @return \System\Delegate
	 */
	public static function RemoveAll($source, $value){}
	/**
	 * @param \System\Delegate $d1
	 * @param \System\Delegate $d2
	 * @return \System\Boolean
	 */
	public static function op_Equality($d1, $d2){}
	/**
	 * @param \System\Delegate $d1
	 * @param \System\Delegate $d2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($d1, $d2){}
}
