<?php
use Illuminate\Support\Facades\DB;

function prx($arr){
    echo "<pre>";
    print_r($arr);
    die();
}

function getTopNavCat()
{
        $result = DB::table('categories')
        ->where(['status' => 1])
        ->get();
       $arr = [];
   foreach ($result as $row) {
        $arr[$row->id]['category_name'] = $row->category_name;
        $arr[$row->id]['parent_category_id'] = $row->parent_category_id;
        $arr[$row->id]['category_slug'] = $row->category_slug;
    }
    $html = buildTreeView($arr, 0);
    return $html;
}

function buildTreeView($arr, $parent, $level = 0)
{
    $html = '';
    if ($level == 0) 
    {
        $html .= '<ul class="nav navbar-nav">';
    } else {
        $html .= '<ul class="dropdown-menu">';
    }
    foreach ($arr as $id => $data) {
        if ($parent == $data['parent_category_id']) 
        {
            $html .= '<li><a href="category/'. $data['category_slug'].'">' . $data['category_name']; 
            $childCategories = getChildCategories($arr, $id);
            if (!empty($childCategories)) 
            {
                $html .= '<span class="caret"></span></a>';
                $html .= buildTreeView($arr, $id, $level + 1);
            }
            $html .= '</li>';
        }
    }
    $html .= '</ul>';
    return $html;
}

function getChildCategories($arr, $parentId)
{
    $children = [];
    foreach ($arr as $id => $data) {
        if ($parentId == $data['parent_category_id'])
        {
            $children[$id] = $data;
        }
    }
    return $children;
}
function getUserTempId()
{
    if(session()->has('USER_TEMP_ID')===null){
        $rand=rand(111111111,999999999);
        session()->put('USER_TEMP_ID',$rand);
        return $rand;
    }else{
        return session()->get('USER_TEMP_ID');
    }
}

function getAddToCartTotalItem()
{
    if (session()->has('FRONT_USER_LOGIN')) {
        $uid = session()->get('FRONT_USER_LOGIN');
        $user_type = "Reg";
    } else {
        $uid = getUserTempId();
        $user_type = "Not-Reg";
    }
    $result= DB::table('cart')
    ->leftJoin('products', 'products.id', '=', 'cart.product_id')
    ->leftJoin('product_attr', 'product_attr.id', '=', 'cart.product_attr_id')
    ->leftJoin('sizes', 'sizes.id', '=', 'product_attr.size_id')
    ->leftJoin('colors', 'colors.id', '=', 'product_attr.color_id')
    ->where(['user_id' => $uid])
    ->where(['user_type' => $user_type])
    ->select('cart.qty','products.name','products.image','sizes.size','colors.color','product_attr.price','products.slug','products.id as pid','product_attr.id as attr_id')
    ->get();

    return $result;
}
?>
