<?php
namespace System;
interface ITupleInternal
{

	/**
	 * @param \System\Text\StringBuilder $sb
	 * @return \System\String|string
	 */
	public function ToString($sb);
	/**
	 * @param \System\Collections\IEqualityComparer $comparer
	 * @return \System\Int32|int
	 */
	public function GetHashCode($comparer);
}