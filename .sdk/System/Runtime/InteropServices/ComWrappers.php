<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ComWrappersOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\InteropServices\ComWrappers $impl
	 * @param \System\Object|object $instance
	 * @param \System\Runtime\InteropServices\CreateComInterfaceFlags $flags
	 * @param \System\IntPtr& &$retValue
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryGetOrCreateComInterfaceForObjectInternal_1 ($impl, $instance, $flags, &$retValue){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $comWrappersImpl
	 * @param \System\Int64|int $wrapperId
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $instance
	 * @param \System\Runtime\InteropServices\CreateComInterfaceFlags $flags
	 * @param \System\IntPtr& &$retValue
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryGetOrCreateComInterfaceForObjectInternal_2 ($comWrappersImpl, $wrapperId, $instance, $flags, &$retValue){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $externalComObject
	 * @param \System\Runtime\InteropServices\CreateObjectFlags $flags
	 * @param \System\Object|object $wrapper
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetOrRegisterObjectForComInstance_1 ($externalComObject, $flags, $wrapper){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $externalComObject
	 * @param \System\Runtime\InteropServices\CreateObjectFlags $flags
	 * @param \System\Object|object $wrapper
	 * @param \System\IntPtr $inner
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetOrRegisterObjectForComInstance_2 ($externalComObject, $flags, $wrapper, $inner){}
	/**
	 * @deprecated
	 * @param \System\Runtime\InteropServices\ComWrappers $impl
	 * @param \System\IntPtr $externalComObject
	 * @param \System\IntPtr $innerMaybe
	 * @param \System\Runtime\InteropServices\CreateObjectFlags $flags
	 * @param \System\Object|object $wrapperMaybe
	 * @param \System\Object& &$retValue
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryGetOrCreateObjectForComInstanceInternal_1 ($impl, $externalComObject, $innerMaybe, $flags, $wrapperMaybe, &$retValue){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $comWrappersImpl
	 * @param \System\Int64|int $wrapperId
	 * @param \System\IntPtr $externalComObject
	 * @param \System\IntPtr $innerMaybe
	 * @param \System\Runtime\InteropServices\CreateObjectFlags $flags
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $wrapper
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retValue
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryGetOrCreateObjectForComInstanceInternal_2 ($comWrappersImpl, $wrapperId, $externalComObject, $innerMaybe, $flags, $wrapper, $retValue){}
}
class ComWrappers extends \System\Object
{
	use ComWrappersOverride;


	/**
	 * @param \System\Object|object $instance
	 * @param \System\Runtime\InteropServices\CreateComInterfaceFlags $flags
	 * @return \System\IntPtr
	 */
	public function GetOrCreateComInterfaceForObject($instance, $flags){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ComWrappersOverride::TryGetOrCreateComInterfaceForObjectInternal_1 <br>private , args: ($impl, $instance, $flags, &$retValue)<br>
	 * @uses ComWrappersOverride::TryGetOrCreateComInterfaceForObjectInternal_2 <br>private , args: ($comWrappersImpl, $wrapperId, $instance, $flags, &$retValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryGetOrCreateComInterfaceForObjectInternal (\override ...$args){}
	/**
	 * @param \System\Runtime\InteropServices\ComWrappersScenario $scenario
	 * @param \System\Runtime\InteropServices\ComWrappers $comWrappersImpl
	 * @param \System\Object|object $obj
	 * @param \System\Runtime\InteropServices\CreateComInterfaceFlags $flags
	 * @param \System\Int32& &$count
	 * @return \System\Void*
	 */
	protected static function CallComputeVtables($scenario, $comWrappersImpl, $obj, $flags, &$count){}
	/**
	 * @param \System\IntPtr $externalComObject
	 * @param \System\Runtime\InteropServices\CreateObjectFlags $flags
	 * @return \System\Object|object
	 */
	public function GetOrCreateObjectForComInstance($externalComObject, $flags){}
	/**
	 * @param \System\Runtime\InteropServices\ComWrappersScenario $scenario
	 * @param \System\Runtime\InteropServices\ComWrappers $comWrappersImpl
	 * @param \System\IntPtr $externalComObject
	 * @param \System\Runtime\InteropServices\CreateObjectFlags $flags
	 * @return \System\Object|object
	 */
	protected static function CallCreateObject($scenario, $comWrappersImpl, $externalComObject, $flags){}
	/**
	 * @uses ComWrappersOverride::GetOrRegisterObjectForComInstance_1 <br>public , args: ($externalComObject, $flags, $wrapper)<br>
	 * @uses ComWrappersOverride::GetOrRegisterObjectForComInstance_2 <br>public , args: ($externalComObject, $flags, $wrapper, $inner)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetOrRegisterObjectForComInstance (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ComWrappersOverride::TryGetOrCreateObjectForComInstanceInternal_1 <br>private , args: ($impl, $externalComObject, $innerMaybe, $flags, $wrapperMaybe, &$retValue)<br>
	 * @uses ComWrappersOverride::TryGetOrCreateObjectForComInstanceInternal_2 <br>private , args: ($comWrappersImpl, $wrapperId, $externalComObject, $innerMaybe, $flags, $wrapper, $retValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryGetOrCreateObjectForComInstanceInternal (\override ...$args){}
	/**
	 * @param \System\Runtime\InteropServices\ComWrappers $comWrappersImpl
	 * @param \System\Collections\IEnumerable $objects
	 * @return \System\Void|void
	 */
	protected static function CallReleaseObjects($comWrappersImpl, $objects){}
	/**
	 * @param \System\Runtime\InteropServices\ComWrappers $instance
	 * @return \System\Void|void
	 */
	public static function RegisterForTrackerSupport($instance){}
	private static function SetGlobalInstanceRegisteredForTrackerSupport($id){}
	/**
	 * @param \System\Runtime\InteropServices\ComWrappers $instance
	 * @return \System\Void|void
	 */
	public static function RegisterForMarshalling($instance){}
	private static function SetGlobalInstanceRegisteredForMarshalling($id){}
	/**
	 * @param \System\IntPtr& &$fpQueryInterface
	 * @param \System\IntPtr& &$fpAddRef
	 * @param \System\IntPtr& &$fpRelease
	 * @return \System\Void|void
	 */
	protected static function GetIUnknownImpl(&$fpQueryInterface, &$fpAddRef, &$fpRelease){}
	private static function GetIUnknownImplInternal(&$fpQueryInterface, &$fpAddRef, &$fpRelease){}
	/**
	 * @param \System\Object|object $customQueryInterfaceMaybe
	 * @param \System\Guid& $iid
	 * @param \System\IntPtr& &$ppObject
	 * @return \System\Int32|int
	 */
	protected static function CallICustomQueryInterface($customQueryInterfaceMaybe, $iid, &$ppObject){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\Runtime\InteropServices\CreateComInterfaceFlags $flags
	 * @param \System\Int32& &$count
	 * @return \System\Runtime\InteropServices\ComWrappers+ComInterfaceEntry*
	 */
	abstract protected function ComputeVtables($obj, $flags, &$count);
	/**
	 * @param \System\IntPtr $externalComObject
	 * @param \System\Runtime\InteropServices\CreateObjectFlags $flags
	 * @return \System\Object|object
	 */
	abstract protected function CreateObject($externalComObject, $flags);
	/**
	 * @param \System\Collections\IEnumerable $objects
	 * @return \System\Void|void
	 */
	abstract protected function ReleaseObjects($objects);
}