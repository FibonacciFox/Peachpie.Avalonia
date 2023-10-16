<?php
namespace System;
/**
 */
interface IValueTupleInternal
{
	/**
	 * @param \System\Collections\IEqualityComparer $comparer
	 */
	public function GetHashCode($comparer);
	/**
	 */
	public function ToStringEnd();
}
