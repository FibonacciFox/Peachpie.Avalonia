<?php
namespace Avalonia\LogicalTree;
enum ChildIndexChangedAction
{
	
	case ChildIndexChanged = '0';
	case ChildIndexesReset = '1';
	case TotalCountChanged = '2';

}