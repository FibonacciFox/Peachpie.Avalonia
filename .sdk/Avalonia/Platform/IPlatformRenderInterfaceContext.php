<?php
namespace Avalonia\Platform;
interface IPlatformRenderInterfaceContext
{


	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $surfaces [generic: System\Object]
	 * @return \Avalonia\Platform\IRenderTarget
	 */
	public function CreateRenderTarget($surfaces);
}