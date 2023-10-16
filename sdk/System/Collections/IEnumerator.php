<?php
namespace System\Collections;
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
