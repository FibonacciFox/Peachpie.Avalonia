<?php
namespace System\Collections\Generic;
class RandomizedStringEqualityComparer extends \System\Collections\Generic\EqualityComparer_1 implements
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IEqualityComparer_1,
	\System\Collections\Generic\IInternalStringEqualityComparer
{


	/**
	 * @param \System\Collections\Generic\IEqualityComparer_1 $underlyingComparer [generic: System\String]
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Collections\Generic\RandomizedStringEqualityComparer
	 */
	protected static function Create($underlyingComparer, $ignoreCase){}
	/**
	 * @return \System\Collections\Generic\IEqualityComparer_1[System\String]
	 */
	public function GetUnderlyingEqualityComparer(){}
}