<?php
namespace System\StubHelpers;
final class HandleMarshaler extends \System\Object
{

	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $handle
	 * @param \System\StubHelpers\CleanupWorkListElement& $cleanupWorkList
	 * @return \System\IntPtr
	 */
	protected static function ConvertSafeHandleToNative($handle, $cleanupWorkList){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowSafeHandleFieldChanged(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowCriticalHandleFieldChanged(){}
}