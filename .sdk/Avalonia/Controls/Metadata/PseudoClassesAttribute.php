<?php
namespace Avalonia\Controls\Metadata;
final class PseudoClassesAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 * @since readonly
	 */
	public $PseudoClasses;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String ...$pseudoClasses
	 */
	public function __construct(...$pseudoClasses){}
}