<?php
namespace System\Reflection;
final class NullabilityInfo extends \System\Object
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $Type;
	/**
	 * @property
	 * @var \System\Reflection\NullabilityState
	 */
	public $ReadState;
	/**
	 * @property
	 * @var \System\Reflection\NullabilityState
	 */
	public $WriteState;
	/**
	 * @property
	 * @var \System\Reflection\NullabilityInfo
	 * @since readonly
	 */
	public $ElementType;
	/**
	 * @property
	 * @var \System\Reflection\NullabilityInfo[]
	 * @since readonly
	 */
	public $GenericTypeArguments;

}