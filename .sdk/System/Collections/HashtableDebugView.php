<?php
namespace System\Collections;
final class HashtableDebugView extends \System\Object
{

	/**
	 * @property
	 * @var \System\Collections\KeyValuePairs[]
	 * @since readonly
	 */
	public $Items;
	/**
	 * @param \System\Collections\Hashtable $hashtable
	 */
	public function __construct($hashtable){}
}