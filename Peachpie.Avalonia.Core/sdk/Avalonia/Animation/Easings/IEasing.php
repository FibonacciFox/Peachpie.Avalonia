<?php
namespace Avalonia\Animation\Easings;
/**
 */
interface IEasing
{
	/**
	 * @param \System\Double|double $progress
	 */
	public function Ease($progress);
}
