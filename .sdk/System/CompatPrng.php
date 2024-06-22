<?php
namespace System;
final class CompatPrng extends \System\ValueType
{


	/**
	 * @return \System\Double|double
	 */
	protected function Sample(){}
	/**
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @return \System\Void|void
	 */
	protected function NextBytes($buffer){}
	/**
	 * @return \System\Int32|int
	 */
	protected function InternalSample(){}
	/**
	 * @return \System\Double|double
	 */
	protected function GetSampleForLargeRange(){}
	/**
	 * @param \System\Int32|int $seed
	 */
	public function __construct($seed){}
}