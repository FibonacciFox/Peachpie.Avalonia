<?php
namespace System\Collections;
interface IEnumerable
{

	/**
	 * @return \System\Collections\IEnumerator
	 */
	public function GetEnumerator();
}