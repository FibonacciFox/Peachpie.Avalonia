<?php
namespace Internal\Runtime\InteropServices;
class ComponentActivator extends \System\Object
{

	private static function OnDisabledGetFunctionPointerCall($typeNameNative, $methodNameNative){}
	private static function InitializeIsSupported(){}
	private static function MarshalToString($arg, $argName){}
	/**
	 * @param \System\IntPtr $assemblyPathNative
	 * @param \System\IntPtr $typeNameNative
	 * @param \System\IntPtr $methodNameNative
	 * @param \System\IntPtr $delegateTypeNative
	 * @param \System\IntPtr $reserved
	 * @param \System\IntPtr $functionHandle
	 * @return \System\Int32|int
	 */
	public static function LoadAssemblyAndGetFunctionPointer($assemblyPathNative, $typeNameNative, $methodNameNative, $delegateTypeNative, $reserved, $functionHandle){}
	/**
	 * @param \System\IntPtr $typeNameNative
	 * @param \System\IntPtr $methodNameNative
	 * @param \System\IntPtr $delegateTypeNative
	 * @param \System\IntPtr $loadContext
	 * @param \System\IntPtr $reserved
	 * @param \System\IntPtr $functionHandle
	 * @return \System\Int32|int
	 */
	public static function GetFunctionPointer($typeNameNative, $methodNameNative, $delegateTypeNative, $loadContext, $reserved, $functionHandle){}
	private static function GetIsolatedComponentLoadContext($assemblyPath){}
	private static function InternalGetFunctionPointer($alc, $typeName, $methodName, $delegateTypeNative){}
}