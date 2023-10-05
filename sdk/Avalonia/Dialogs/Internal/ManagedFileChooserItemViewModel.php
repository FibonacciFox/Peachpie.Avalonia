<?php
namespace Avalonia\Dialogs\Internal;
/**
 */
class ManagedFileChooserItemViewModel extends \Avalonia\Dialogs\Internal\AvaloniaDialogsInternalViewModelBase implements 
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $DisplayName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Path;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public $Modified;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Type;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public $Size;
	/**
	 * @var \Avalonia\Dialogs\Internal\ManagedFileChooserItemType
	 * @property
	 */
	public $ItemType;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $IconKey;
	/**
	 * @return \System\String|string
	 */
	public  function get_DisplayName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_DisplayName($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Path(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Path($value){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_Modified(){}
	/**
	 * @param \System\DateTime $value
	 * @return \System\Void|void
	 */
	public  function set_Modified($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Type(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Type($value){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Size(){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	public  function set_Size($value){}
	/**
	 * @return \Avalonia\Dialogs\Internal\ManagedFileChooserItemType
	 */
	public  function get_ItemType(){}
	/**
	 * @param \Avalonia\Dialogs\Internal\ManagedFileChooserItemType $value
	 * @return \System\Void|void
	 */
	public  function set_ItemType($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_IconKey(){}
}
