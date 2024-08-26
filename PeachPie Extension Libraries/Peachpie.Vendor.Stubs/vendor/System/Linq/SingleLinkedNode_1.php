<?php
namespace System\Linq;
final class SingleLinkedNode_1 extends \System\Object
{
	/**
	 * @property
	 * @var \TSource
	 * @since readonly
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Linq\SingleLinkedNode_1[TSource]
	 * @since readonly
	 */
	public $Linked;
	/**
	 * @param \TSource $item
	 * @return \System\Linq\SingleLinkedNode_1[TSource]
	 */
	public function Add($item){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Linq\SingleLinkedNode_1[TSource]
	 */
	public function GetNode($index){}
	/**
	 * @param \System\Int32|int $count
	 * @return \TSource[]
	 */
	public function ToArray($count){}
	/**
	 * @param \TSource $item
	 */
	public function __construct($item){}
}