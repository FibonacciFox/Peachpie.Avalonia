<?php
namespace Avalonia\VisualTree;
class ZOrderElement extends \System\Object implements
	\System\IComparable_1
{

	/**
	 * @property
	 * @var \Avalonia\Visual
	 */
	public $Element;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Index;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $ZIndex;
	/**
	 * @property
	 * @var \System\Collections\Generic\IComparer_1[Avalonia\VisualTree\VisualExtensions+ZOrderElement]
	 * @since readonly
	 */
	public $Comparer;
	/**
	 * @param \Avalonia\VisualTree\VisualExtensions+ZOrderElement $other
	 * @return \System\Int32|int
	 */
	public function CompareTo($other){}
	/**
	 */
	public function __construct(){}
}