<?php
namespace Avalonia\Platform;
interface IPlatformGraphicsContext
{

	/**
	 * @return \System\IDisposable
	 */
	public function EnsureCurrent();
}