<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventMetadata extends \System\ValueType
{
	/**
	 * @var \System\Diagnostics\Tracing\EventDescriptor
	 * @field
	 */
	public $Descriptor;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $EventHandle;
	/**
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @field
	 */
	public $Tags;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $EnabledForAnyListener;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $EnabledForETW;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $EnabledForEventPipe;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $HasRelatedActivityID;
	/**
	 * @var \System\String
	 * @field
	 */
	public $Name;
	/**
	 * @var \System\String
	 * @field
	 */
	public $Message;
	/**
	 * @var \System\Reflection\ParameterInfo[]
	 * @field
	 */
	public $Parameters;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $EventListenerParameterCount;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $AllParametersAreString;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $AllParametersAreInt32;
	/**
	 * @var \System\Diagnostics\Tracing\EventActivityOptions
	 * @field
	 */
	public $ActivityOptions;
	/**
	 * @var \System\Diagnostics\Tracing\TraceLoggingEventTypes
	 * @property
	 */
	public readonly $TraceLoggingEventTypes;
	/**
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\String]
	 * @property
	 */
	public readonly $ParameterNames;
	/**
	 * @var \System\Type[]
	 * @property
	 */
	public readonly $ParameterTypes;
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingEventTypes
	 */
	public  function get_TraceLoggingEventTypes(){}
	/**
	 * @return \System\Collections\ObjectModel\ReadOnlyCollection_1
	 */
	public  function get_ParameterNames(){}
	/**
	 * @return \System\Type[]
	 */
	public  function get_ParameterTypes(){}
}
