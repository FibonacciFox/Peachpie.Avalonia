<?php
namespace Avalonia\Diagnostics;
class StyleDiagnostics extends \System\Object
{

	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Diagnostics\AppliedStyle]
	 * @since readonly
	 */
	public $AppliedStyles;
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $appliedStyles [generic: Avalonia\Diagnostics\AppliedStyle]
	 */
	public function __construct($appliedStyles){}
}