<?php
namespace System;
/**
 */
class GCGenerationInfo extends \System\ValueType
{
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $SizeBeforeBytes;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $FragmentationBeforeBytes;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $SizeAfterBytes;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $FragmentationAfterBytes;
	/**
	 * @return \System\Int64|int
	 */
	public  function get_SizeBeforeBytes(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_FragmentationBeforeBytes(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_SizeAfterBytes(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_FragmentationAfterBytes(){}
}
