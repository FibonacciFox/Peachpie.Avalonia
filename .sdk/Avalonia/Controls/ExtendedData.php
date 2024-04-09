<?php
namespace Avalonia\Controls;
class ExtendedData extends \System\Object
{
	/**
	 * @field
	 * @var \Avalonia\Controls\ColumnDefinitions
	 */
	protected $ColumnDefinitions;
	/**
	 * @field
	 * @var \Avalonia\Controls\RowDefinitions
	 */
	protected $RowDefinitions;
	/**
	 * @field
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Controls\DefinitionBase]
	 */
	protected $DefinitionsU;
	/**
	 * @field
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Controls\DefinitionBase]
	 */
	protected $DefinitionsV;
	/**
	 * @field
	 * @var \Avalonia\Controls\Grid+CellCache[]
	 */
	protected $CellCachesCollection;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $CellGroup1;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $CellGroup2;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $CellGroup3;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $CellGroup4;
	/**
	 * @field
	 * @var \Avalonia\Controls\DefinitionBase[]
	 */
	protected $TempDefinitions;
	/**
	 */
	public function __construct(){}
}