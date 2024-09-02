<?php
namespace System\Collections;
interface IComparer
{

	/**
	 * @param \System\Object|object $x
	 * @param \System\Object|object $y
	 * @return \System\Int32|int
	 */
	public function Compare($x, $y);
}