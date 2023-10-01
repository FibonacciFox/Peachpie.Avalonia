<?php
namespace Avalonia\Platform;
/**
 */
interface IPlatformGraphicsContext
{
	/**
	 */
	public function get_IsLost();
	/**
	 */
	public function EnsureCurrent();
}
