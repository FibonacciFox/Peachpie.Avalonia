<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MulticastDelegateOverride {
	/**
	 * @deprecated
	 * @param \System\Object $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @param \System\Boolean|bool $thisIsMultiCastAlready
	 * @return \System\MulticastDelegate
	 */
	#[MethodOverride]private function NewMulticastDelegate_1 ($invocationList, $invocationCount, $thisIsMultiCastAlready){}
	/**
	 * @deprecated
	 * @param \System\Object $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	#[MethodOverride]protected function NewMulticastDelegate_2 ($invocationList, $invocationCount){}
}
class MulticastDelegate extends \System\Delegate implements
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	use MulticastDelegateOverride;

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
	 * @return \System\Boolean|bool
	 */
	protected function IsUnmanagedFunctionPtr(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function InvocationListLogicallyNull(){}
	private function InvocationListEquals($d){}
	private static function TrySetSlot($a, $index, $o){}
	/**
	 * @uses MulticastDelegateOverride::NewMulticastDelegate_1 <br>private , args: ($invocationList, $invocationCount, $thisIsMultiCastAlready)<br>
	 * @uses MulticastDelegateOverride::NewMulticastDelegate_2 <br>protected , args: ($invocationList, $invocationCount)<br>
	 * @var mixed|\override ...$args
	 * @return \System\MulticastDelegate|mixed|\override
	 */
	#[MethodOverrideProtected]function NewMulticastDelegate (\override ...$args){}
	/**
	 * @param \System\Reflection\MethodInfo $dynamicMethod
	 * @return \System\Void|void
	 */
	protected function StoreDynamicMethod($dynamicMethod){}
	private function DeleteFromInvocationList($invocationList, $invocationCount, $deleteIndex, $deleteCount){}
	private static function EqualInvocationLists($a, $b, $start, $count){}
	private static function ThrowNullThisInDelegateToInstance(){}
	private function CtorClosed($target, $methodPtr){}
	private function CtorClosedStatic($target, $methodPtr){}
	private function CtorRTClosed($target, $methodPtr){}
	private function CtorOpened($target, $methodPtr, $shuffleThunk){}
	private function CtorVirtualDispatch($target, $methodPtr, $shuffleThunk){}
	private function CtorCollectibleClosedStatic($target, $methodPtr, $gchandle){}
	private function CtorCollectibleOpened($target, $methodPtr, $shuffleThunk, $gchandle){}
	private function CtorCollectibleVirtualDispatch($target, $methodPtr, $shuffleThunk, $gchandle){}
}