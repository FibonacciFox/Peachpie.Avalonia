<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IEnumerable
{

	/**
	 * @return \System\Collections\IEnumerator
	 */
	public function GetEnumerator();
}