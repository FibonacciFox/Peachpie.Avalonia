<?php
namespace System\Collections;
interface ICollection
{


	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $index);
}