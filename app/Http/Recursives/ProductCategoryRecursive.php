<?php

namespace App\Http\Recursives;

use App\Menu;
use App\Models\Products\Category;

class ProductCategoryRecursive
{
    private $html;
    public function __construct()
    {
        $this->html = '';
    }

    public function categoryRecursiveCreate($parent_id = 0, $subMark = '|--')
    {
        $categories = Category::where('parent_id', $parent_id)->get();
        foreach ($categories as $item) {
            $this->html .= '<option value="' . $item->id . '">' . $subMark .' '. $item->name . '</option>';
            $this->categoryRecursiveCreate($item->id, $subMark . '--');
        }
        return $this->html;
    }

    public function categoryRecursiveEdit($parent_id_edit, $parent_id = 0, $subMark = '|--')
    {
        $categories = Category::where('parent_id', $parent_id)->get();
        foreach ($categories as $item) {
            if ($parent_id_edit == $item->id) {
                $this->html .= '<option selected value="' . $item->id . '">' . $subMark .' '. $item->name . '</option>';
            } else {
                $this->html .= '<option value="' . $item->id . '">' . $subMark.' ' . $item->name . '</option>';
            }

            $this->categoryRecursiveEdit($parent_id_edit, $item->id, $subMark . '--');
        }

        return $this->html;
    }
}
