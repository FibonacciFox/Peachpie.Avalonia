<?php
namespace System\Collections\Generic;
final class KeyValuePairComparer extends \System\Collections\Generic\Comparer_1 implements
	\System\Collections\IComparer,
	\System\Collections\Generic\IComparer_1
{

	/**
	 * @field
	 * @var \System\Collections\Generic\IComparer_1[TKey]
	 */
	protected $keyComparer;
	/**
	 * @param \System\Collections\Generic\IComparer_1 $keyComparer [generic: TKey]
	 */
	public function __construct($keyComparer){}
}