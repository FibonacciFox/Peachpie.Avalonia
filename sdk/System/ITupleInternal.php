<?php
namespace System;
/**
 */
interface ITupleInternal
{
	/**
	 * @param \System\Text\StringBuilder $sb
	 */
	public function ToString($sb);
	/**
	 * @param \System\Collections\IEqualityComparer $comparer
	 */
	public function GetHashCode($comparer);
}
