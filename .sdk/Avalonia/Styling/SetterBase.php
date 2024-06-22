<?php
namespace Avalonia\Styling;
class SetterBase extends \System\Object
{


	/**
	 * @param \Avalonia\Styling\IStyleInstance $styleInstance
	 * @param \Avalonia\StyledElement $target
	 * @return \Avalonia\Styling\ISetterInstance
	 */
	abstract protected function Instance($styleInstance, $target);
}