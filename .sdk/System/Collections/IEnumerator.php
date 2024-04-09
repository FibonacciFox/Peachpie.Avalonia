<?php
namespace System\Collections;
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