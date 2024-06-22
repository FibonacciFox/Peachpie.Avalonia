<?php
namespace System;
interface IComparable
{


	/**
	 * @param \System\Object|object $obj
	 * @return \System\Int32|int
	 */
	public function CompareTo($obj);
}