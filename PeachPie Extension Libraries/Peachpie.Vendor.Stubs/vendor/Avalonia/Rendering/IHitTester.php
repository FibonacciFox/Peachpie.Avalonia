<?php
namespace Avalonia\Rendering;
interface IHitTester
{

	/**
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Visual $root
	 * @param \System\Func_2 $filter [generic: Avalonia\Visual,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Visual]
	 */
	public function HitTest($p, $root, $filter);
	/**
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Visual $root
	 * @param \System\Func_2 $filter [generic: Avalonia\Visual,System\Boolean]
	 * @return \Avalonia\Visual
	 */
	public function HitTestFirst($p, $root, $filter);
}