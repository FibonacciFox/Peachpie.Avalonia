<?php
namespace System\Collections;
final class DictionaryNode extends \System\Object
{

	/**
	 * @field
	 * @var \System\Object|object
	 */
	public $key;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	public $value;
	/**
	 * @field
	 * @var \System\Collections\ListDictionaryInternal+DictionaryNode
	 */
	public $next;
	/**
	 */
	public function __construct(){}
}