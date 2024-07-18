<?php

$products = [
    [
        'name' => 'آیفون ۱۲',
        'price' => 10000000,
        'category' => 'تلفن همراه',
        'category_id' => 1
    ],
    [
        'name' => 'لپتاپ ایسوس',
        'price' => 25000000,
        'category' => 'لپتاپ',
        'category_id' => 2
    ],
    [
        'name' => 'تلویزیون سامسونگ',
        'price' => 15000000,
        'category' => 'تلویزیون',
        'category_id' => 3
    ],
    [
        'name' => 'کیبورد مکانیکال',
        'price' => 500000,
        'category' => 'کامپیوتر',
        'category_id' => 4
    ],
    [
        'name' => 'پاوربانک ریمکس',
        'price' => 800000,
        'category' => 'لوازم جانبی موبایل',
        'category_id' => 5
    ],
    [
        'name' => 'ساعت هوشمند',
        'price' => 700000,
        'category' => 'لوازم جانبی موبایل',
        'category_id' =>5
    ],
    [
        'name' => 'رم ریدر',
        'price' => 200000,
        'category' => 'کامپیوتر',
        'category_id' => 4
    ],
    [
        'name' => 'تبلت سامسونگ',
        'price' => 12000000,
        'category' => 'تبلت',
        'category_id' => 6
    ],
    [
        'name' => 'هدفون بلوتوث',
        'price' => 3000000,
        'category' => 'لوازم جانبی موبایل',
        'category_id' => 5
    ],
    [
        'name' => 'دوربین دیجیتال',
        'price' => 5000000,
        'category' => 'دوربین',
        'category_id' => 7
    ]
];

// تعریف متغیر، حاوی آرایه خالی
$groupByCategory=[];

$lists=[]; // حذف شود

//products پیمایش آرایه اصلی
foreach($products as $product){


//information پیاده سازی ساختار لایه دوم آرایه، شبیه به سوال، در یک آرایه کمکی ،به نام
    $information=[
         'name' =>  $product['name'],
         'price' => $product['price'],
         'category' => $product['category'],
         'category_id' =>  $product['category_id']
                  ];


//data پیاده سازی ساختار لایه اول آرایه، شبیه به سوال ،در یک آرایه کمکی ،به نام
   $data=[ 'category' => $product['category'],
           'category_id' =>$product['category_id'],
           'lists'=> []
         ];

         array_push($data['lists'],$information);


  //  groupByCategory اگر آرایه
  //  خالی بود، آرایه
  //  رو پوش کن data
//   if (count($groupByCategory)==0)
if(empty($groupByCategory)){
        array_push($groupByCategory,$data);
    }
  else{
//     پیداکردن
//     $findcategory  های مشابه توسط متغیر  category_id

      $findcategory=false;

      //  با هدف پیداکردن آی دی های مشابه $groupByCategory پیمایش عناصر آرایه جدید

      foreach($groupByCategory as $items){
        //$groupByCategory  بررسی شرط وجود عنصر تکراری داخل آرایه جدید
          if($product['category_id'] == $items['category_id']){
            $findcategory=true;
            }
        }
         //   groupByCategory  در غیر این صورت یعنی اگر آی دی عضو جدید تکراری نبود دیتاهای اونو درزیرمجموعه آرایه
         //lists  در آرایه
        // قرار بده
        if(!$findcategory){
            array_push($groupByCategory,$data);
        }else{

         //اگر دسته بندی را بیدا کرد  بس فقط $information را در ان دسته بوش کن
         foreach($groupByCategory as $sub){


            if ($product['category_id'] == $sub['category_id']) {
             ///   print_r($information);
            //    echo "\n ujjujujuj";
                $sub['lists'][] = "ghvghvhg"; // add $information as a new element to $sub['lists']
             //   print_r($sub['lists']);
            }
         }


        }

        }
     }
    echo '<pre>';
     print_r($groupByCategory[0]["lists"]);
    echo '</pre>';
     exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task-groupby</title>
</head>
<body>

</body>
</html>
