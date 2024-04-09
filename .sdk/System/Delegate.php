<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DelegateOverride {
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Object|object $target
	 * @param \System\String|string $method
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Boolean|bool $throwOnBindFailure
	 * @return \System\Delegate
	 */
	#[MethodOverride]public static function CreateDelegate_1 ($type, $target, $method, $ignoreCase, $throwOnBindFailure){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Type $target
	 * @param \System\String|string $method
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Boolean|bool $throwOnBindFailure
	 * @return \System\Delegate
	 */
	#[MethodOverride]public static function CreateDelegate_2 ($type, $target, $method, $ignoreCase, $throwOnBindFailure){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Reflection\MethodInfo $method
	 * @param \System\Boolean|bool $throwOnBindFailure
	 * @return \System\Delegate
	 */
	#[MethodOverride]public static function CreateDelegate_3 ($type, $method, $throwOnBindFailure){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Object|object $firstArgument
	 * @param \System\Reflection\MethodInfo $method
	 * @param \System\Boolean|bool $throwOnBindFailure
	 * @return \System\Delegate
	 */
	#[MethodOverride]public static function CreateDelegate_4 ($type, $firstArgument, $method, $throwOnBindFailure){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Object|object $firstArgument
	 * @param \System\Reflection\MethodInfo $method
	 * @return \System\Delegate
	 */
	#[MethodOverride]public static function CreateDelegate_5 ($type, $firstArgument, $method){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Reflection\MethodInfo $method
	 * @return \System\Delegate
	 */
	#[MethodOverride]public static function CreateDelegate_6 ($type, $method){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Object|object $target
	 * @param \System\String|string $method
	 * @return \System\Delegate
	 */
	#[MethodOverride]public static function CreateDelegate_7 ($type, $target, $method){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Object|object $target
	 * @param \System\String|string $method
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Delegate
	 */
	#[MethodOverride]public static function CreateDelegate_8 ($type, $target, $method, $ignoreCase){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Type $target
	 * @param \System\String|string $method
	 * @return \System\Delegate
	 */
	#[MethodOverride]public static function CreateDelegate_9 ($type, $target, $method){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Type $target
	 * @param \System\String|string $method
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Delegate
	 */
	#[MethodOverride]public static function CreateDelegate_10 ($type, $target, $method, $ignoreCase){}
	/**
	 * @deprecated
	 * @param \System\Delegate $a
	 * @param \System\Delegate $b
	 * @return \System\Delegate
	 */
	#[MethodOverride]public static function Combine_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \System\Delegate ...$delegates
	 * @return \System\Delegate
	 */
	#[MethodOverride]public static function Combine_2 (...$delegates){}
}
class Delegate extends \System\Object implements
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	use DelegateOverride;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $_target;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $_methodBase;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $_methodPtr;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $_methodPtrAux;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Target;
	/**
	 * @property
	 * @var \System\Reflection\MethodInfo
	 * @since readonly
	 */
	public $Method;
	/**
	 * @param \System\Object $args
	 * @return \System\Object|object
	 */
	protected function DynamicInvokeImpl($args){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	protected function GetMethodImpl(){}
	/**
	 * @uses DelegateOverride::CreateDelegate_1 <br>public , args: ($type, $target, $method, $ignoreCase, $throwOnBindFailure)<br>
	 * @uses DelegateOverride::CreateDelegate_2 <br>public , args: ($type, $target, $method, $ignoreCase, $throwOnBindFailure)<br>
	 * @uses DelegateOverride::CreateDelegate_3 <br>public , args: ($type, $method, $throwOnBindFailure)<br>
	 * @uses DelegateOverride::CreateDelegate_4 <br>public , args: ($type, $firstArgument, $method, $throwOnBindFailure)<br>
	 * @uses DelegateOverride::CreateDelegate_5 <br>public , args: ($type, $firstArgument, $method)<br>
	 * @uses DelegateOverride::CreateDelegate_6 <br>public , args: ($type, $method)<br>
	 * @uses DelegateOverride::CreateDelegate_7 <br>public , args: ($type, $target, $method)<br>
	 * @uses DelegateOverride::CreateDelegate_8 <br>public , args: ($type, $target, $method, $ignoreCase)<br>
	 * @uses DelegateOverride::CreateDelegate_9 <br>public , args: ($type, $target, $method)<br>
	 * @uses DelegateOverride::CreateDelegate_10 <br>public , args: ($type, $target, $method, $ignoreCase)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Delegate|mixed|\override
	 */
	#[MethodOverridePublic]function CreateDelegate (\override ...$args){}
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
	private function BindToMethodName($target, $methodType, $method, $flags){}
	private function BindToMethodInfo($target, $method, $methodType, $flags){}
	private static function InternalAlloc($type){}
	/**
	 * @param \System\Delegate $d
	 * @return \System\MulticastDelegate
	 */
	protected static function InternalAllocLike($d){}
	/**
	 * @param \System\Object|object $a
	 * @param \System\Object|object $b
	 * @return \System\Boolean|bool
	 */
	protected static function InternalEqualTypes($a, $b){}
	private function DelegateConstruct($target, $slot){}
	/**
	 * @return \System\IntPtr
	 */
	protected function GetMulticastInvoke(){}
	/**
	 * @return \System\IntPtr
	 */
	protected function GetInvokeMethod(){}
	/**
	 * @return \System\IRuntimeMethodInfo
	 */
	protected function FindMethodHandle(){}
	/**
	 * @param \System\Delegate $left
	 * @param \System\Delegate $right
	 * @return \System\Boolean|bool
	 */
	protected static function InternalEqualMethodHandles($left, $right){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\IntPtr $methodPtr
	 * @return \System\IntPtr
	 */
	protected function AdjustTarget($target, $methodPtr){}
	/**
	 * @param \System\IntPtr $methodPtr
	 * @return \System\IntPtr
	 */
	protected function GetCallStub($methodPtr){}
	/**
	 * @return \System\Object|object
	 */
	protected function GetTarget(){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @uses DelegateOverride::Combine_1 <br>public , args: ($a, $b)<br>
	 * @uses DelegateOverride::Combine_2 <br>public , args: (...$delegates)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Delegate|mixed|\override
	 */
	#[MethodOverridePublic]function Combine (\override ...$args){}
	/**
	 * @param \System\Delegate $d
	 * @return \System\Delegate
	 */
	protected function CombineImpl($d){}
	/**
	 * @param \System\Delegate $d
	 * @return \System\Delegate
	 */
	protected function RemoveImpl($d){}
	/**
	 * @return \System\Delegate[]
	 */
	public function GetInvocationList(){}
	/**
	 * @param \System\Object ...$args
	 * @return \System\Object|object
	 */
	public function DynamicInvoke(...$args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
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
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($d1, $d2){}
	/**
	 * @param \System\Delegate $d1
	 * @param \System\Delegate $d2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($d1, $d2){}
}