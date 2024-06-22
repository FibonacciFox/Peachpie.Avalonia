<?php
namespace Avalonia\Media\Immutable;
class ImmutableDashStyle extends \System\Object implements
	\Avalonia\Media\IDashStyle,
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Double]
	 * @since readonly
	 */
	public $Dashes;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Offset;
	private static function SequenceEqual($left, $right){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $dashes [generic: System\Double]
	 * @param \System\Double|double $offset
	 */
	public function __construct($dashes, $offset){}
}