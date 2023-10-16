<?php
namespace System\Collections;
/**
 */
interface IHashCodeProvider
{
	/**
	 * @param \System\Object|object $obj
	 */
	public function GetHashCode($obj);
}
