<?php
namespace Avalonia\Animation\Easings;
interface IEasing
{


	/**
	 * @param \System\Double|double $progress
	 * @return \System\Double|double
	 */
	public function Ease($progress);
}