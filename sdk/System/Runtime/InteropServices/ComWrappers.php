<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ComWrappersMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryGetOrCreateComInterfaceForObjectInternal_1($impl, $instance, $flags, $retValue){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryGetOrCreateComInterfaceForObjectInternal_2($comWrappersImpl, $wrapperId, $instance, $flags, $retValue){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetOrRegisterObjectForComInstance_1($externalComObject, $flags, $wrapper){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetOrRegisterObjectForComInstance_2($externalComObject, $flags, $wrapper, $inner){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryGetOrCreateObjectForComInstanceInternal_1($impl, $externalComObject, $innerMaybe, $flags, $wrapperMaybe, $retValue){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryGetOrCreateObjectForComInstanceInternal_2($comWrappersImpl, $wrapperId, $externalComObject, $innerMaybe, $flags, $wrapper, $retValue){}
}
/**
 */
class ComWrappers extends \System\Object
{
	/**
	 * @param \System\Object|object $instance
	 * @param \System\Runtime\InteropServices\CreateComInterfaceFlags $flags
	 * @return \System\IntPtr
	 */
	public  function GetOrCreateComInterfaceForObject($instance, $flags){}
	/**
	 * @uses ComWrappersMethodsOverride::TryGetOrCreateComInterfaceForObjectInternal_1 ($impl, $instance, $flags, $retValue)
	 * @uses ComWrappersMethodsOverride::TryGetOrCreateComInterfaceForObjectInternal_2 ($comWrappersImpl, $wrapperId, $instance, $flags, $retValue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryGetOrCreateComInterfaceForObjectInternal(mixed ...$args){}
	/**
	 * @param \System\Runtime\InteropServices\ComWrappersScenario $scenario
	 * @param \System\Runtime\InteropServices\ComWrappers $comWrappersImpl
	 * @param \System\Object|object $obj
	 * @param \System\Runtime\InteropServices\CreateComInterfaceFlags $flags
	 * @param \System\Int32& $count
	 * @return \System\Void*
	 */
	protected static function CallComputeVtables($scenario, $comWrappersImpl, $obj, $flags, $count){}
	/**
	 * @param \System\IntPtr $externalComObject
	 * @param \System\Runtime\InteropServices\CreateObjectFlags $flags
	 * @return \System\Object|object
	 */
	public  function GetOrCreateObjectForComInstance($externalComObject, $flags){}
	/**
	 * @param \System\Runtime\InteropServices\ComWrappersScenario $scenario
	 * @param \System\Runtime\InteropServices\ComWrappers $comWrappersImpl
	 * @param \System\IntPtr $externalComObject
	 * @param \System\Runtime\InteropServices\CreateObjectFlags $flags
	 * @return \System\Object|object
	 */
	protected static function CallCreateObject($scenario, $comWrappersImpl, $externalComObject, $flags){}
	/**
	 * @uses ComWrappersMethodsOverride::GetOrRegisterObjectForComInstance_1 ($externalComObject, $flags, $wrapper)
	 * @uses ComWrappersMethodsOverride::GetOrRegisterObjectForComInstance_2 ($externalComObject, $flags, $wrapper, $inner)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetOrRegisterObjectForComInstance(mixed ...$args){}
	/**
	 * @uses ComWrappersMethodsOverride::TryGetOrCreateObjectForComInstanceInternal_1 ($impl, $externalComObject, $innerMaybe, $flags, $wrapperMaybe, $retValue)
	 * @uses ComWrappersMethodsOverride::TryGetOrCreateObjectForComInstanceInternal_2 ($comWrappersImpl, $wrapperId, $externalComObject, $innerMaybe, $flags, $wrapper, $retValue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryGetOrCreateObjectForComInstanceInternal(mixed ...$args){}
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
	/**
	 * @param \System\Int64|int $id
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetGlobalInstanceRegisteredForTrackerSupport($id){}
	/**
	 * @param \System\Runtime\InteropServices\ComWrappers $instance
	 * @return \System\Void|void
	 */
	public static function RegisterForMarshalling($instance){}
	/**
	 * @param \System\Int64|int $id
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetGlobalInstanceRegisteredForMarshalling($id){}
	/**
	 * @param \System\IntPtr& $fpQueryInterface
	 * @param \System\IntPtr& $fpAddRef
	 * @param \System\IntPtr& $fpRelease
	 * @return \System\Void|void
	 */
	protected static function GetIUnknownImpl($fpQueryInterface, $fpAddRef, $fpRelease){}
	/**
	 * @param \System\IntPtr& $fpQueryInterface
	 * @param \System\IntPtr& $fpAddRef
	 * @param \System\IntPtr& $fpRelease
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIUnknownImplInternal($fpQueryInterface, $fpAddRef, $fpRelease){}
	/**
	 * @param \System\Object|object $customQueryInterfaceMaybe
	 * @param \System\Guid& $iid
	 * @param \System\IntPtr& $ppObject
	 * @return \System\Int32|int
	 */
	protected static function CallICustomQueryInterface($customQueryInterfaceMaybe, $iid, $ppObject){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\Runtime\InteropServices\CreateComInterfaceFlags $flags
	 * @param \System\Int32& $count
	 * @return \System\Runtime\InteropServices\ComInterfaceEntry*
	 */
	protected  function ComputeVtables($obj, $flags, $count){}
	/**
	 * @param \System\IntPtr $externalComObject
	 * @param \System\Runtime\InteropServices\CreateObjectFlags $flags
	 * @return \System\Object|object
	 */
	protected  function CreateObject($externalComObject, $flags){}
	/**
	 * @param \System\Collections\IEnumerable $objects
	 * @return \System\Void|void
	 */
	protected  function ReleaseObjects($objects){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
