<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MulticastDelegateMethodsOverride
{
	/**
	 * @return \System\MulticastDelegate
	 */
	#[MethodOverride] private  function NewMulticastDelegate_1($invocationList, $invocationCount, $thisIsMultiCastAlready){}
	/**
	 * @return \System\MulticastDelegate
	 */
	#[MethodOverride] protected  function NewMulticastDelegate_2($invocationList, $invocationCount){}
}
/**
 */
class MulticastDelegate extends \System\Delegate implements 
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
	 * @return \System\Boolean
	 */
	protected  function IsUnmanagedFunctionPtr(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function InvocationListLogicallyNull(){}
	/**
	 * @param \System\MulticastDelegate $d
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InvocationListEquals($d){}
	/**
	 * @param \System\Object[] $a
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $o
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TrySetSlot($a, $index, $o){}
	/**
	 * @uses MulticastDelegateMethodsOverride::NewMulticastDelegate_1 ($invocationList, $invocationCount, $thisIsMultiCastAlready)
	 * @uses MulticastDelegateMethodsOverride::NewMulticastDelegate_2 ($invocationList, $invocationCount)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NewMulticastDelegate(mixed ...$args){}
	/**
	 * @param \System\Reflection\MethodInfo $dynamicMethod
	 * @return \System\Void|void
	 */
	protected  function StoreDynamicMethod($dynamicMethod){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @param \System\Int32|int $deleteIndex
	 * @param \System\Int32|int $deleteCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DeleteFromInvocationList($invocationList, $invocationCount, $deleteIndex, $deleteCount){}
	/**
	 * @param \System\Object[] $a
	 * @param \System\Object[] $b
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EqualInvocationLists($a, $b, $start, $count){}
	/**
	 * @param \System\MulticastDelegate $d1
	 * @param \System\MulticastDelegate $d2
	 * @return \System\Boolean
	 */
	public static function op_Equality($d1, $d2){}
	/**
	 * @param \System\MulticastDelegate $d1
	 * @param \System\MulticastDelegate $d2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($d1, $d2){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowNullThisInDelegateToInstance(){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\IntPtr $methodPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CtorClosed($target, $methodPtr){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\IntPtr $methodPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CtorClosedStatic($target, $methodPtr){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\IntPtr $methodPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CtorRTClosed($target, $methodPtr){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\IntPtr $methodPtr
	 * @param \System\IntPtr $shuffleThunk
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CtorOpened($target, $methodPtr, $shuffleThunk){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\IntPtr $methodPtr
	 * @param \System\IntPtr $shuffleThunk
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CtorVirtualDispatch($target, $methodPtr, $shuffleThunk){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\IntPtr $methodPtr
	 * @param \System\IntPtr $gchandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CtorCollectibleClosedStatic($target, $methodPtr, $gchandle){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\IntPtr $methodPtr
	 * @param \System\IntPtr $shuffleThunk
	 * @param \System\IntPtr $gchandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CtorCollectibleOpened($target, $methodPtr, $shuffleThunk, $gchandle){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\IntPtr $methodPtr
	 * @param \System\IntPtr $shuffleThunk
	 * @param \System\IntPtr $gchandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CtorCollectibleVirtualDispatch($target, $methodPtr, $shuffleThunk, $gchandle){}
}
