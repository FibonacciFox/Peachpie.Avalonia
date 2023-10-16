<?php
namespace System;
/**
 */
class Resolver extends \System\Object
{
	/**
	 * @param \System\Int32& $securityControlFlags
	 * @return \System\RuntimeType
	 */
	protected  function GetJitContext($securityControlFlags){}
	/**
	 * @param \System\Int32& $stackSize
	 * @param \System\Int32& $initLocals
	 * @param \System\Int32& $EHCount
	 * @return \System\Byte[]
	 */
	protected  function GetCodeInfo($stackSize, $initLocals, $EHCount){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function GetLocalsSignature(){}
	/**
	 * @param \System\Int32|int $EHNumber
	 * @param \System\Void* $exception
	 * @return \System\Void|void
	 */
	protected  function GetEHInfo($EHNumber, $exception){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function GetRawEHInfo(){}
	/**
	 * @param \System\Int32|int $token
	 * @return \System\String|string
	 */
	protected  function GetStringLiteral($token){}
	/**
	 * @param \System\Int32|int $token
	 * @param \System\IntPtr& $typeHandle
	 * @param \System\IntPtr& $methodHandle
	 * @param \System\IntPtr& $fieldHandle
	 * @return \System\Void|void
	 */
	protected  function ResolveToken($token, $typeHandle, $methodHandle, $fieldHandle){}
	/**
	 * @param \System\Int32|int $token
	 * @param \System\Int32|int $fromMethod
	 * @return \System\Byte[]
	 */
	protected  function ResolveSignature($token, $fromMethod){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	protected  function GetDynamicMethod(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
