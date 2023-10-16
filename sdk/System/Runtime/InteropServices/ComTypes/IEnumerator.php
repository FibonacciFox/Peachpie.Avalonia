<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IEnumerator
{
	/**
	 */
	public function MoveNext();
	/**
	 */
	public function get_Current();
	/**
	 */
	public function Reset();
}
