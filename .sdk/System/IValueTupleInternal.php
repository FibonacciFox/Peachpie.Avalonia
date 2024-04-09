<?php
namespace System;
interface IValueTupleInternal
{

	/**
	 * @param \System\Collections\IEqualityComparer $comparer
	 * @return \System\Int32|int
	 */
	public function GetHashCode($comparer);
	/**
	 * @return \System\String|string
	 */
	public function ToStringEnd();
}