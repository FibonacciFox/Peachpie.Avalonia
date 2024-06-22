<?php
namespace Avalonia\Platform;
class KnownPlatformGraphicsExternalSemaphoreHandleTypes extends \System\Object
{

	/**
	 * @field
	 * @var \System\String|string
	 */
	const VulkanOpaquePosixFileDescriptor = 'VulkanOpaquePosixFileDescriptor';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const VulkanOpaqueNtHandle = 'VulkanOpaqueNtHandle';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const VulkanOpaqueKmtHandle = 'VulkanOpaqueKmtHandle';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const Direct3D12FenceNtHandle = 'Direct3D12FenceNtHandle';

}