<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface ITextRangeProvider
{
	/**
	 */
	public function Clone();
	/**
	 * @param \Avalonia\Win32\Interop\Automation\ITextRangeProvider $range
	 */
	public function Compare($range);
	/**
	 * @param \Avalonia\Win32\Interop\Automation\TextPatternRangeEndpoint $endpoint
	 * @param \Avalonia\Win32\Interop\Automation\ITextRangeProvider $targetRange
	 * @param \Avalonia\Win32\Interop\Automation\TextPatternRangeEndpoint $targetEndpoint
	 */
	public function CompareEndpoints($endpoint, $targetRange, $targetEndpoint);
	/**
	 * @param \Avalonia\Win32\Interop\Automation\TextUnit $unit
	 */
	public function ExpandToEnclosingUnit($unit);
	/**
	 * @param \System\Int32|int $attribute
	 * @param \System\Object|object $value
	 * @param \System\Boolean $backward
	 */
	public function FindAttribute($attribute, $value, $backward);
	/**
	 * @param \System\String|string $text
	 * @param \System\Boolean $backward
	 * @param \System\Boolean $ignoreCase
	 */
	public function FindText($text, $backward, $ignoreCase);
	/**
	 * @param \System\Int32|int $attribute
	 */
	public function GetAttributeValue($attribute);
	/**
	 */
	public function GetBoundingRectangles();
	/**
	 */
	public function GetEnclosingElement();
	/**
	 * @param \System\Int32|int $maxLength
	 */
	public function GetText($maxLength);
	/**
	 * @param \Avalonia\Win32\Interop\Automation\TextUnit $unit
	 * @param \System\Int32|int $count
	 */
	public function Move($unit, $count);
	/**
	 * @param \Avalonia\Win32\Interop\Automation\TextPatternRangeEndpoint $endpoint
	 * @param \Avalonia\Win32\Interop\Automation\TextUnit $unit
	 * @param \System\Int32|int $count
	 */
	public function MoveEndpointByUnit($endpoint, $unit, $count);
	/**
	 * @param \Avalonia\Win32\Interop\Automation\TextPatternRangeEndpoint $endpoint
	 * @param \Avalonia\Win32\Interop\Automation\ITextRangeProvider $targetRange
	 * @param \Avalonia\Win32\Interop\Automation\TextPatternRangeEndpoint $targetEndpoint
	 */
	public function MoveEndpointByRange($endpoint, $targetRange, $targetEndpoint);
	/**
	 */
	public function Select();
	/**
	 */
	public function AddToSelection();
	/**
	 */
	public function RemoveFromSelection();
	/**
	 * @param \System\Boolean $alignToTop
	 */
	public function ScrollIntoView($alignToTop);
	/**
	 */
	public function GetChildren();
}
