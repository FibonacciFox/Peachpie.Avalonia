<?php
namespace System;
class Resolver extends \System\Object
{


	/**
	 * @param \System\Int32& &$securityControlFlags
	 * @return \System\RuntimeType
	 */
	abstract protected function GetJitContext(&$securityControlFlags);
	/**
	 * @param \System\Int32& &$stackSize
	 * @param \System\Int32& &$initLocals
	 * @param \System\Int32& &$EHCount
	 * @return \System\Byte[]
	 */
	abstract protected function GetCodeInfo(&$stackSize, &$initLocals, &$EHCount);
	/**
	 * @return \System\Byte[]
	 */
	abstract protected function GetLocalsSignature();
	/**
	 * @param \System\Int32|int $EHNumber
	 * @param \System\Void* $exception
	 * @return \System\Void|void
	 */
	abstract protected function GetEHInfo($EHNumber, $exception);
	/**
	 * @return \System\Byte[]
	 */
	abstract protected function GetRawEHInfo();
	/**
	 * @param \System\Int32|int $token
	 * @return \System\String|string
	 */
	abstract protected function GetStringLiteral($token);
	/**
	 * @param \System\Int32|int $token
	 * @param \System\IntPtr& &$typeHandle
	 * @param \System\IntPtr& &$methodHandle
	 * @param \System\IntPtr& &$fieldHandle
	 * @return \System\Void|void
	 */
	abstract protected function ResolveToken($token, &$typeHandle, &$methodHandle, &$fieldHandle);
	/**
	 * @param \System\Int32|int $token
	 * @param \System\Int32|int $fromMethod
	 * @return \System\Byte[]
	 */
	abstract protected function ResolveSignature($token, $fromMethod);
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	abstract protected function GetDynamicMethod();
}