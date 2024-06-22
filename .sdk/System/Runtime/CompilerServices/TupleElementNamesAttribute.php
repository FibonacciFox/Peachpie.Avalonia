<?php
namespace System\Runtime\CompilerServices;
final class TupleElementNamesAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[System\String]
	 * @since readonly
	 */
	public $TransformNames;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String $transformNames
	 */
	public function __construct($transformNames){}
}