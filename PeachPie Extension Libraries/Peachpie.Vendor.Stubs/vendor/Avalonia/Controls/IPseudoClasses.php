<?php
namespace Avalonia\Controls;
interface IPseudoClasses
{

	/**
	 * @param \System\String|string $name
	 * @return \System\Void|void
	 */
	public function Add($name);
	/**
	 * @param \System\String|string $name
	 * @return \System\Boolean|bool
	 */
	public function Remove($name);
	/**
	 * @param \System\String|string $name
	 * @return \System\Boolean|bool
	 */
	public function Contains($name);
}