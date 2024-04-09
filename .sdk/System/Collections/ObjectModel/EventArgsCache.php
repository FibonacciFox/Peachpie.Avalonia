<?php
namespace System\Collections\ObjectModel;
class EventArgsCache extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\PropertyChangedEventArgs
	 */
	protected static $CountPropertyChanged;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\PropertyChangedEventArgs
	 */
	protected static $IndexerPropertyChanged;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Specialized\NotifyCollectionChangedEventArgs
	 */
	protected static $ResetCollectionChanged;

}