<?php
namespace System;
/**
 */
interface ISpanFormattable
{
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $provider
	 */
	public function TryFormat($destination, $charsWritten, $format, $provider);
}
