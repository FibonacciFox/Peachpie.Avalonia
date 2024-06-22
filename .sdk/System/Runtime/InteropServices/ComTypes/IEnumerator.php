<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IEnumerator
{


	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext();
	/**
	 * @return \System\Void|void
	 */
	public function Reset();
}