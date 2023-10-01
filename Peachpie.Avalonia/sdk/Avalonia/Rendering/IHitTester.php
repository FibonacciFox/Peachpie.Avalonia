<?php
namespace Avalonia\Rendering;
/**
 */
interface IHitTester
{
	/**
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Visual $root
	 * @param \System\Func_2 $filter
	 */
	public function HitTest($p, $root, $filter);
	/**
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Visual $root
	 * @param \System\Func_2 $filter
	 */
	public function HitTestFirst($p, $root, $filter);
}
