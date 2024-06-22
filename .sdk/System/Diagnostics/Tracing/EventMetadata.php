<?php
namespace System\Diagnostics\Tracing;
final class EventMetadata extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventDescriptor
	 */
	public $Descriptor;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $EventHandle;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventTags
	 */
	public $Tags;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $EnabledForAnyListener;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $EnabledForETW;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $EnabledForEventPipe;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $HasRelatedActivityID;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $Message;
	/**
	 * @field
	 * @var \System\Reflection\ParameterInfo[]
	 */
	public $Parameters;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $EventListenerParameterCount;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $AllParametersAreString;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $AllParametersAreInt32;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventActivityOptions
	 */
	public $ActivityOptions;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\TraceLoggingEventTypes
	 * @since readonly
	 */
	public $TraceLoggingEventTypes;
	/**
	 * @property
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\String]
	 * @since readonly
	 */
	public $ParameterNames;
	/**
	 * @property
	 * @var \System\Type[]
	 * @since readonly
	 */
	public $ParameterTypes;

}