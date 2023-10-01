<?php
namespace Avalonia\Controls\Templates;
/**
 */
interface IDataTemplate
{
	/**
	 * @param \System\Object|object $data
	 */
	public function Match($data);
}
