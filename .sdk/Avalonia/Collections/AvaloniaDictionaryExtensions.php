<?php
namespace Avalonia\Collections;
class AvaloniaDictionaryExtensions extends \System\Object
{

	/**
	 * @param \Avalonia\Collections\IAvaloniaReadOnlyDictionary_2 $collection [generic: TKey,TValue]
	 * @param \System\Action_2 $added [generic: TKey,TValue]
	 * @param \System\Action_2 $removed [generic: TKey,TValue]
	 * @param \System\Action $reset
	 * @param \System\Boolean|bool $weakSubscription
	 * @return \System\IDisposable
	 */
	public static function ForEachItem($collection, $added, $removed, $reset, $weakSubscription){}
}