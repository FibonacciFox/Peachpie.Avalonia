<?php
namespace Avalonia\Data\Core;
interface ITransformNode
{


	/**
	 * @param \System\Object|object $value
	 * @return \System\Object|object
	 */
	public function Transform($value);
}