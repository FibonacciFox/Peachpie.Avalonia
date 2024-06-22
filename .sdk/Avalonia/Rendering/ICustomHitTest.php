<?php
namespace Avalonia\Rendering;
interface ICustomHitTest
{


	/**
	 * @param \Avalonia\Point $point
	 * @return \System\Boolean|bool
	 */
	public function HitTest($point);
}