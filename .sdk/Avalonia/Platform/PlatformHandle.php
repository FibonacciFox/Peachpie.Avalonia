<?php
namespace Avalonia\Platform;
class PlatformHandle extends \System\Object implements
	\Avalonia\Platform\IPlatformHandle
{

	/**
	 * @property
	 * @var \System\IntPtr
	 * @since readonly
	 */
	public $Handle;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $HandleDescriptor;
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\String|string $descriptor
	 */
	public function __construct($handle, $descriptor){}
}