<?php
namespace Avalonia\Rendering\Composition\Animations;
interface IInterpolator_1
{

	/**
	 * @param \T|object $from
	 * @param \T|object $to
	 * @param \System\Single $progress
	 * @return \T|object
	 */
	public function Interpolate($from, $to, $progress);
}