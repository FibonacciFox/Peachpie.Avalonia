<?php
namespace Avalonia\Platform\Internal;
interface IAssemblyDescriptorResolver
{

	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Platform\Internal\IAssemblyDescriptor
	 */
	public function GetAssembly($name);
}