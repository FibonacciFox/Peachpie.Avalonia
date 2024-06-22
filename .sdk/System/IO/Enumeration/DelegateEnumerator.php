<?php
namespace System\IO\Enumeration;
final class DelegateEnumerator extends \System\IO\Enumeration\FileSystemEnumerator_1 implements
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{

	/**
	 * @property
	 * @var \TResult
	 * @since readonly
	 */
	public $Current;
	/**
	 * @param \System\IO\Enumeration\FileSystemEnumerable_1 $enumerable [generic: TResult]
	 * @param \System\Boolean|bool $isNormalized
	 */
	public function __construct($enumerable, $isNormalized){}
}