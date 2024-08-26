<?php
namespace System\Collections;
interface IHashCodeProvider
{

	/**
	 * @param \System\Object|object $obj
	 * @return \System\Int32|int
	 */
	public function GetHashCode($obj);
}