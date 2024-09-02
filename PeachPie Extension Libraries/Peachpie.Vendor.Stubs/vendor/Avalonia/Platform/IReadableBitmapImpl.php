<?php
namespace Avalonia\Platform;
interface IReadableBitmapImpl
{

	/**
	 * @return \Avalonia\Platform\ILockedFramebuffer
	 */
	public function Lock();
}