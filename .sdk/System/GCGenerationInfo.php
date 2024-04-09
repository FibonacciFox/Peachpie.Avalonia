<?php
namespace System;
final class GCGenerationInfo extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $SizeBeforeBytes;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $FragmentationBeforeBytes;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $SizeAfterBytes;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $FragmentationAfterBytes;

}