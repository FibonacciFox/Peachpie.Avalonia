<?php
namespace System\Reflection;
/**
 */
class LoaderAllocatorScout extends \System\Object
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $m_nativeLoaderAllocator;
	/**
	 * @param \System\IntPtr $nativeLoaderAllocator
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Destroy($nativeLoaderAllocator){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
