<?php
namespace Avalonia\Controls\Platform;
/**
 */
interface INativeControlHostImpl
{
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $parent
	 */
	public function CreateDefaultChild($parent);
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 */
	public function IsCompatibleWith($handle);
}
