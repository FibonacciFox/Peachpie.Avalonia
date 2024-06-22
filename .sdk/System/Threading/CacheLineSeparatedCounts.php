<?php
namespace System\Threading;
final class CacheLineSeparatedCounts extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Threading\LowLevelLifoSemaphore+Counts
	 */
	public $_counts;

}