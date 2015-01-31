<?php

use src\Repository\Interfaces\ITypeItemRepository as TypeItem;

class TypeItemController extends BaseController 
{
	public function __construct(TypeItem $typeItem)
	{
	  $this->typeItem = $typeItem;
	}

    public function QueryTypeItems()
    {
		return Response::json($this->typeItem->All());
    }

    public function QueryTypeItem($typeItemId)
    {
    	$typeItem = $this->typeItem->Find($typeItemId);
    	return Response::json($typeItem);
    }
}