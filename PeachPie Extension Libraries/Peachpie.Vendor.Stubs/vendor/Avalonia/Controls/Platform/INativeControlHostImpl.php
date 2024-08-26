<?php
namespace Avalonia\Controls\Platform;
interface INativeControlHostImpl
{

	/**
	 * @param \Avalonia\Platform\IPlatformHandle $parent
	 * @return \Avalonia\Controls\Platform\INativeControlHostDestroyableControlHandle
	 */
	public function CreateDefaultChild($parent);
	/**
	 * @param \System\Func_2 $create [generic: Avalonia\Platform\IPlatformHandle,Avalonia\Platform\IPlatformHandle]
	 * @return \Avalonia\Controls\Platform\INativeControlHostControlTopLevelAttachment
	 */
	public function CreateNewAttachment($create);
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @return \Avalonia\Controls\Platform\INativeControlHostControlTopLevelAttachment
	 */
	public function CreateNewAttachment($handle);
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @return \System\Boolean|bool
	 */
	public function IsCompatibleWith($handle);
}