<?php
namespace System\Linq;
class CachingComparer_1 extends \System\Object
{

	/**
	 * @param \TElement $element
	 * @param \System\Boolean|bool $cacheLower
	 * @return \System\Int32|int
	 */
	abstract protected function Compare($element, $cacheLower);
	/**
	 * @param \TElement $element
	 * @return \System\Void|void
	 */
	abstract protected function SetElement($element);
}