<?php
namespace System\Drawing\Printing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PrintDocumentMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class PrintDocument extends \System\ComponentModel\Component implements 
	\System\ComponentModel\IComponent,
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\Printing\PageSettings
	 * @property
	 */
	public $DefaultPageSettings;
	/**
	 * @var \System\String
	 * @property
	 */
	public $DocumentName;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $OriginAtMargins;
	/**
	 * @var \System\Drawing\Printing\PrintController
	 * @property
	 */
	public $PrintController;
	/**
	 * @var \System\Drawing\Printing\PrinterSettings
	 * @property
	 */
	public $PrinterSettings;
	/**
	 * @var \System\ComponentModel\ISite
	 * @property
	 */
	public $Site;
	/**
	 * @var \System\ComponentModel\IContainer
	 * @property
	 */
	public readonly $Container;
	/**
	 * @return \System\Drawing\Printing\PageSettings
	 */
	public  function get_DefaultPageSettings(){}
	/**
	 * @param \System\Drawing\Printing\PageSettings $value
	 * @return \System\Void|void
	 */
	public  function set_DefaultPageSettings($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DocumentName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_DocumentName($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_OriginAtMargins(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_OriginAtMargins($value){}
	/**
	 * @return \System\Drawing\Printing\PrintController
	 */
	public  function get_PrintController(){}
	/**
	 * @param \System\Drawing\Printing\PrintController $value
	 * @return \System\Void|void
	 */
	public  function set_PrintController($value){}
	/**
	 * @return \System\Drawing\Printing\PrinterSettings
	 */
	public  function get_PrinterSettings(){}
	/**
	 * @param \System\Drawing\Printing\PrinterSettings $value
	 * @return \System\Void|void
	 */
	public  function set_PrinterSettings($value){}
	/**
	 * @param \System\Drawing\Printing\PrintEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_BeginPrint($value){}
	/**
	 * @param \System\Drawing\Printing\PrintEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_BeginPrint($value){}
	/**
	 * @param \System\Drawing\Printing\PrintEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_EndPrint($value){}
	/**
	 * @param \System\Drawing\Printing\PrintEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_EndPrint($value){}
	/**
	 * @param \System\Drawing\Printing\PrintPageEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_PrintPage($value){}
	/**
	 * @param \System\Drawing\Printing\PrintPageEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_PrintPage($value){}
	/**
	 * @param \System\Drawing\Printing\QueryPageSettingsEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_QueryPageSettings($value){}
	/**
	 * @param \System\Drawing\Printing\QueryPageSettingsEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_QueryPageSettings($value){}
	/**
	 * @param \System\Drawing\Printing\PrintEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnBeginPrint($e){}
	/**
	 * @param \System\Drawing\Printing\PrintEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnEndPrint($e){}
	/**
	 * @param \System\Drawing\Printing\PrintPageEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnPrintPage($e){}
	/**
	 * @param \System\Drawing\Printing\QueryPageSettingsEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnQueryPageSettings($e){}
	/**
	 * @return \System\Void|void
	 */
	public  function Print(){}
	/**
	 * @uses PrintDocumentMethodsOverride::Dispose_1 ()
	 * @uses PrintDocumentMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses PrintDocumentMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses PrintDocumentMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
