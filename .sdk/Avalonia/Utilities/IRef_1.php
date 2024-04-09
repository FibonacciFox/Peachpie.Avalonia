<?php
namespace Avalonia\Utilities;
interface IRef_1
{

	/**
	 * @return \Avalonia\Utilities\IRef_1[T]
	 */
	public function Clone();
	/**
	 * @return \Avalonia\Utilities\IRef_1[TResult]
	 */
	public function CloneAs();
}