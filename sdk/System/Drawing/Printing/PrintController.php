<?php
namespace System\Drawing\Printing;
/**
 */
class PrintController extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPreview;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPreview(){}
	/**
	 * @param \System\Drawing\Printing\PrintDocument $document
	 * @param \System\Drawing\Printing\PrintPageEventArgs $e
	 * @return \System\Void|void
	 */
	public  function OnEndPage($document, $e){}
	/**
	 * @param \System\Drawing\Printing\PrintDocument $document
	 * @param \System\Drawing\Printing\PrintEventArgs $e
	 * @return \System\Void|void
	 */
	public  function OnEndPrint($document, $e){}
	/**
	 * @param \System\Drawing\Printing\PrintDocument $document
	 * @param \System\Drawing\Printing\PrintPageEventArgs $e
	 * @return \System\Drawing\Graphics
	 */
	public  function OnStartPage($document, $e){}
	/**
	 * @param \System\Drawing\Printing\PrintDocument $document
	 * @param \System\Drawing\Printing\PrintEventArgs $e
	 * @return \System\Void|void
	 */
	public  function OnStartPrint($document, $e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
