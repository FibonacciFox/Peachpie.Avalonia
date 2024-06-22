<?php
namespace Avalonia\Data;
class IndexerDescriptor extends \System\Object implements
	\System\IObservable_1,
	\Avalonia\IDescription
{

	/**
	 * @property
	 * @var \Avalonia\Data\BindingMode
	 */
	public $Mode;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingPriority
	 */
	public $Priority;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaProperty
	 */
	public $Property;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaObject
	 */
	public $Source;
	/**
	 * @property
	 * @var \System\IObservable_1[System\Object]
	 */
	public $SourceObservable;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Description;
	/**
	 * @param \Avalonia\Data\IndexerDescriptor $binding
	 * @return \Avalonia\Data\IndexerDescriptor
	 */
	public static function op_LogicalNot($binding){}
	/**
	 * @param \Avalonia\Data\IndexerDescriptor $binding
	 * @return \Avalonia\Data\IndexerDescriptor
	 */
	public static function op_OnesComplement($binding){}
	/**
	 * @param \Avalonia\Data\BindingMode $mode
	 * @return \Avalonia\Data\IndexerDescriptor
	 */
	public function WithMode($mode){}
	/**
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \Avalonia\Data\IndexerDescriptor
	 */
	public function WithPriority($priority){}
	/**
	 * @param \System\IObserver_1 $observer [generic: System\Object]
	 * @return \System\IDisposable
	 */
	public function Subscribe($observer){}
	/**
	 */
	public function __construct(){}
}