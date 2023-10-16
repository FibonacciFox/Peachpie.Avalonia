<?php
namespace System;
/**
 */
class CompatPrng extends \System\ValueType
{
	/**
	 * @return \System\Double|double
	 */
	protected  function Sample(){}
	/**
	 * @param \System\Span_1 $buffer
	 * @return \System\Void|void
	 */
	protected  function NextBytes($buffer){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function InternalSample(){}
	/**
	 * @return \System\Double|double
	 */
	protected  function GetSampleForLargeRange(){}
}
