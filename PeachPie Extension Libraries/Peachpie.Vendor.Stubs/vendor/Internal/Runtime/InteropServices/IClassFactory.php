<?php
namespace Internal\Runtime\InteropServices;
interface IClassFactory
{

	/**
	 * @param \System\Object|object $pUnkOuter
	 * @param \System\Guid& $riid
	 * @param \System\IntPtr& &$ppvObject
	 * @return \System\Void|void
	 */
	public function CreateInstance($pUnkOuter, $riid, &$ppvObject);
	/**
	 * @param \System\Boolean|bool $fLock
	 * @return \System\Void|void
	 */
	public function LockServer($fLock);
}