<?php
namespace Avalonia\Animation\Easings;
class Easing extends \System\Object implements
	\Avalonia\Animation\Easings\IEasing
{


	/**
	 * @param \System\Double|double $progress
	 * @return \System\Double|double
	 */
	abstract public function Ease($progress);
	private static function TryCreateEasingInstance($type, &$instance){}
	/**
	 * @param \System\String|string $e
	 * @return \Avalonia\Animation\Easings\Easing
	 */
	public static function Parse($e){}
}