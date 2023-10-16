<?php
namespace System\Collections;
/**
 */
interface IComparer
{
	/**
	 * @param \System\Object|object $x
	 * @param \System\Object|object $y
	 */
	public function Compare($x, $y);
}
