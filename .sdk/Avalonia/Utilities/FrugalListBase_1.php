<?php
namespace Avalonia\Utilities;
class FrugalListBase_1 extends \System\Object
{

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_count;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Capacity;
	/**
	 * @param \System\Int32|int $newCount
	 * @return \System\Void|void
	 */
	protected function TrustedSetCount($newCount){}
	/**
	 * @param \T|object $value
	 * @return \Avalonia\Utilities\FrugalListStoreState
	 */
	abstract public function Add($value);
	/**
	 * @return \System\Void|void
	 */
	abstract public function Clear();
	/**
	 * @param \T|object $value
	 * @return \System\Boolean|bool
	 */
	abstract public function Contains($value);
	/**
	 * @param \T|object $value
	 * @return \System\Int32|int
	 */
	abstract public function IndexOf($value);
	/**
	 * @param \System\Int32|int $index
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	abstract public function Insert($index, $value);
	/**
	 * @param \System\Int32|int $index
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	abstract public function SetAt($index, $value);
	/**
	 * @param \T|object $value
	 * @return \System\Boolean|bool
	 */
	abstract public function Remove($value);
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	abstract public function RemoveAt($index);
	/**
	 * @param \System\Int32|int $index
	 * @return \T|object
	 */
	abstract public function EntryAt($index);
	/**
	 * @param \Avalonia\Utilities\FrugalListBase_1 $newList [generic: T]
	 * @return \System\Void|void
	 */
	abstract public function Promote($newList);
	/**
	 * @return \T[]
	 */
	abstract public function ToArray();
	/**
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	abstract public function CopyTo($array, $index);
	/**
	 * @return \System\Object|object
	 */
	abstract public function Clone();
	/**
	 * @param \System\Int32|int $newCount
	 * @return \Avalonia\Utilities\FrugalListBase_1+Compacter[T]
	 */
	public function NewCompacter($newCount){}
}