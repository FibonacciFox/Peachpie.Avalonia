<?php
namespace System\Collections\ObjectModel;
final class SimpleMonitor extends \System\Object implements
	\System\IDisposable
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_busyCount;
	/**
	 * @field
	 * @var \System\Collections\ObjectModel\ObservableCollection_1[T]
	 */
	protected $_collection;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\Collections\ObjectModel\ObservableCollection_1 $collection [generic: T]
	 */
	public function __construct($collection){}
}