<?php
namespace Avalonia\Platform\Internal;
/**
 */
interface IAssemblyDescriptorResolver
{
	/**
	 * @param \System\String|string $name
	 */
	public function GetAssembly($name);
}
