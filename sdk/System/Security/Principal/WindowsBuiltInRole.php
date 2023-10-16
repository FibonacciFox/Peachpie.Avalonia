<?php
namespace System\Security\Principal;
/**
 */
enum WindowsBuiltInRole implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Administrator = 544;
	case User = 545;
	case Guest = 546;
	case PowerUser = 547;
	case AccountOperator = 548;
	case SystemOperator = 549;
	case PrintOperator = 550;
	case BackupOperator = 551;
	case Replicator = 552;
}
