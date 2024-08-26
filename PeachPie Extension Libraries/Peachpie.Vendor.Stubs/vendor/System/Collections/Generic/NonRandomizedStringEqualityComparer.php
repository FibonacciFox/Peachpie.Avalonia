<?php
namespace System\Collections\Generic;
class NonRandomizedStringEqualityComparer extends \System\Object implements
	\System\Collections\Generic\IEqualityComparer_1,
	\System\Collections\Generic\IInternalStringEqualityComparer,
	\System\Runtime\Serialization\ISerializable
{

	/**
	 * @return \System\Collections\Generic\RandomizedStringEqualityComparer
	 */
	protected function GetRandomizedEqualityComparer(){}
	/**
	 * @return \System\Collections\Generic\IEqualityComparer_1[System\String]
	 */
	public function GetUnderlyingEqualityComparer(){}
	private function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $comparer
	 * @return \System\Collections\Generic\IEqualityComparer_1[System\String]
	 */
	public static function GetStringComparer($comparer){}
}