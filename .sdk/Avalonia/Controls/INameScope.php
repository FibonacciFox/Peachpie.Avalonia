<?php
namespace Avalonia\Controls;
interface INameScope
{


	/**
	 * @param \System\String|string $name
	 * @param \System\Object|object $element
	 * @return \System\Void|void
	 */
	public function Register($name, $element);
	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Utilities\SynchronousCompletionAsyncResult_1[System\Object]
	 */
	public function FindAsync($name);
	/**
	 * @param \System\String|string $name
	 * @return \System\Object|object
	 */
	public function Find($name);
	/**
	 * @return \System\Void|void
	 */
	public function Complete();
}