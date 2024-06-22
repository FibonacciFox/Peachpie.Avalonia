<?php
namespace Avalonia\Controls;
final class NativeMenuInfo extends \System\Object
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ChangingIsExported;
	/**
	 * @property
	 * @var \Avalonia\Controls\Platform\ITopLevelNativeMenuExporter
	 * @since readonly
	 */
	public $Exporter;
	/**
	 * @param \Avalonia\Controls\TopLevel $target
	 */
	public function __construct($target){}
}