<?php
namespace Avalonia\Rendering;
/**
 */
class ZIndexComparer extends \System\Object implements 
	\System\Collections\Generic\IComparer_1
{
	/**
	 * @var \Avalonia\Rendering\ZIndexComparer
	 * @field
	 */
	public readonly $Instance;
	/**
	 * @var \System\Comparison_1[Avalonia\Visual]
	 * @field
	 */
	public readonly $ComparisonInstance;
	/**
	 * @param \Avalonia\Visual $x
	 * @param \Avalonia\Visual $y
	 * @return \System\Int32|int
	 */
	public  function Compare($x, $y){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
