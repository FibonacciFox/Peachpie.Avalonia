<?php
namespace Avalonia\Platform;
/**
 */
class KnownPlatformGraphicsExternalSemaphoreHandleTypes extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $VulkanOpaquePosixFileDescriptor;
	/**
	 * @var \System\String
	 * @field
	 */
	public $VulkanOpaqueNtHandle;
	/**
	 * @var \System\String
	 * @field
	 */
	public $VulkanOpaqueKmtHandle;
	/**
	 * @var \System\String
	 * @field
	 */
	public $Direct3D12FenceNtHandle;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
