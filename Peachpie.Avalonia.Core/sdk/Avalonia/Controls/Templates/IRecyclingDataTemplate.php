<?php
namespace Avalonia\Controls\Templates;
/**
 */
interface IRecyclingDataTemplate
{
	/**
	 * @param \System\Object|object $data
	 * @param \Avalonia\Controls\Control $existing
	 */
	public function Build($data, $existing);
}
