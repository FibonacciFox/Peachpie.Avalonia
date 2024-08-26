<?php
namespace System\Collections\Generic;
interface IInternalStringEqualityComparer
{

	/**
	 * @return \System\Collections\Generic\IEqualityComparer_1[System\String]
	 */
	public function GetUnderlyingEqualityComparer();
	/**
	 * @param \System\Collections\Generic\IEqualityComparer_1 $outerComparer [generic: System\String]
	 * @return \System\Collections\Generic\IEqualityComparer_1[System\String]
	 */
	protected static function GetUnderlyingEqualityComparer($outerComparer){}
}