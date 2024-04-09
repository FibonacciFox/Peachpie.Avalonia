<?php
namespace Avalonia\Controls\Templates;
interface ITreeDataTemplate
{

	/**
	 * @param \System\Object|object $item
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public function ItemsSelector($item);
}