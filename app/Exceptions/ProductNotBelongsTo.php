<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsTo extends Exception
{
    public function render()
    {
    	return ['errors' => 'Product Not Belongs to User'];
    }
}
