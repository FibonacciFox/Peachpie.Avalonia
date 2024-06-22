<?php
namespace Avalonia\Controls\Templates;
interface IDataTemplate
{


	/**
	 * @param \System\Object|object $data
	 * @return \System\Boolean|bool
	 */
	public function Match($data);
}