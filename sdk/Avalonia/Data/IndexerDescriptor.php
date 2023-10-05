<?php
namespace Avalonia\Data;
/**
 */
class IndexerDescriptor extends \System\Object implements 
	\System\IObservable_1,
	\Avalonia\IDescription
{
	/**
	 * @var \Avalonia\Data\BindingMode
	 * @property
	 */
	public $Mode;
	/**
	 * @var \Avalonia\Data\BindingPriority
	 * @property
	 */
	public $Priority;
	/**
	 * @var \Avalonia\AvaloniaProperty
	 * @property
	 */
	public $Property;
	/**
	 * @var \Avalonia\AvaloniaObject
	 * @property
	 */
	public $Source;
	/**
	 * @var \System\IObservable_1[System\Object]
	 * @property
	 */
	public $SourceObservable;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Description;
	/**
	 * @return \Avalonia\Data\BindingMode
	 */
	public  function get_Mode(){}
	/**
	 * @param \Avalonia\Data\BindingMode $value
	 * @return \System\Void|void
	 */
	public  function set_Mode($value){}
	/**
	 * @return \Avalonia\Data\BindingPriority
	 */
	public  function get_Priority(){}
	/**
	 * @param \Avalonia\Data\BindingPriority $value
	 * @return \System\Void|void
	 */
	public  function set_Priority($value){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	public  function get_Property(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $value
	 * @return \System\Void|void
	 */
	public  function set_Property($value){}
	/**
	 * @return \Avalonia\AvaloniaObject
	 */
	public  function get_Source(){}
	/**
	 * @param \Avalonia\AvaloniaObject $value
	 * @return \System\Void|void
	 */
	public  function set_Source($value){}
	/**
	 * @return \System\IObservable_1
	 */
	public  function get_SourceObservable(){}
	/**
	 * @param \System\IObservable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_SourceObservable($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Description(){}
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
	public  function WithMode($mode){}
	/**
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \Avalonia\Data\IndexerDescriptor
	 */
	public  function WithPriority($priority){}
	/**
	 * @param \System\IObserver_1 $observer
	 * @return \System\IDisposable
	 */
	public  function Subscribe($observer){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
