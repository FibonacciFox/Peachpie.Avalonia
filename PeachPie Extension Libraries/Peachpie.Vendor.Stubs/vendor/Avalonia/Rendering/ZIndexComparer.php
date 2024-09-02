<?php
namespace Avalonia\Rendering;
class ZIndexComparer extends \System\Object implements
	\System\Collections\Generic\IComparer_1
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Rendering\ZIndexComparer
	 */
	public static $Instance;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Comparison_1[Avalonia\Visual]
	 */
	public static $ComparisonInstance;
	/**
	 * @param \Avalonia\Visual $x
	 * @param \Avalonia\Visual $y
	 * @return \System\Int32|int
	 */
	public function Compare($x, $y){}
	/**
	 */
	public function __construct(){}
}