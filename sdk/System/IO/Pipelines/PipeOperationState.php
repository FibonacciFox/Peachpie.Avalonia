<?php
namespace System\IO\Pipelines;
/**
 */
class PipeOperationState extends \System\ValueType
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsWritingActive;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadingActive;
	/**
	 * @return \System\Void|void
	 */
	public  function BeginRead(){}
	/**
	 * @return \System\Void|void
	 */
	public  function BeginReadTentative(){}
	/**
	 * @return \System\Void|void
	 */
	public  function EndRead(){}
	/**
	 * @return \System\Void|void
	 */
	public  function BeginWrite(){}
	/**
	 * @return \System\Void|void
	 */
	public  function EndWrite(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsWritingActive(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadingActive(){}
}
