<?php
namespace System\ComponentModel;
interface IContainer
{

	/**
	 * @param \System\ComponentModel\IComponent $component
	 * @return \System\Void|void
	 */
	public function Add($component);
	/**
	 * @param \System\ComponentModel\IComponent $component
	 * @param \System\String|string $name
	 * @return \System\Void|void
	 */
	public function Add($component, $name);
	/**
	 * @param \System\ComponentModel\IComponent $component
	 * @return \System\Void|void
	 */
	public function Remove($component);
}