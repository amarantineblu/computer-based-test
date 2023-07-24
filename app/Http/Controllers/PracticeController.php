<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Exception;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Ramsey\Uuid\Type\Integer;
use Session;

class PracticeController extends Controller
{
    function practice() {
        // dd( e('<html>foo</html>'));
        // $value = ends_with('This is my name', 'name');
        $class = class_basename('Foo\Bar\Baz');
        // $value = 'The PHP framework for web artisans.';
        // $plural = substr($value, 4, 9);
        $value = 'While Laravel Breeze provides a simple oijuhrjkfhjrflkfhyufoifhfdjkfoiuyhkfjfhkjcvhj oiueiyeriuoryurfiuoeryueoiueoijiu';
        $string = strlen($value);
        // $aval = ;

        // $plural = '';
        if ($string <= 100) {
            $plural = $value;
        }else{
            $val = substr($value,0, 100);

            $plural = $val . '...';
        }

        dd($plural);


        $prefix = substr($value, 0, 3);
        $suffix = substr($value, 4);
        $main_name = $prefix . $plural . $suffix;
        // dd($plural);

        // $string = str_random(40);

        $names = [
            'Marcus',
            'Delight',
            'Lebanon'
        ];
        $delimeter = '*';
        $t = my_implode($delimeter, $names);
        $a = 'I eat Food';
        $b = str_ireplace('a', '*', $a);
        // dd($b);
        // $isAccessible = Arr::accessible(['a' => 1, 'b' => 2]);
        // dd($isAccessible);
        // $array = ['products' => ['desk' => ['price' => 100], 'windows' => ['price' => 399]], 'height' => 49];
        // $flattened = Arr::dot($array);
        // $flattened = $array['height'];


        // dd($filtered);

        // [$keys, $values] = Arr::divide(['name' => 'Desk', 'height' => 20]);
        // $filtered = Arr::except($array, ['height']);

        // $array = [100, 200, 300];
        // $default = 599;

//         $array = [
//     ['developer' => ['id' => 1, 'name' => 'Taylor']],
//     ['developer' => ['id' => 2, 'name' => 'Abigail']],
// ];

// $names = Arr::pluck($array, 'developer.name');
// $array = [
//     'name' => 'Taylor',
//     'order' => [
//         'column' => 'created_at',
//         'direction' => 'desc'
//     ]
// ];
$string = 'The event will take place between :start through :through and end :end';

$replaced = preg_replace_array('/:[a-z_]+/', ['8:30', '8:45', '9:00'], $string);

// $truncated = limit('The quick brown fox jumps over the lazy dog', 20);


// $array = Arr::shuffle([1, 2, 3, 4, 5]);

// $names = Arr::query($array);
// $first = Arr::first($array, function ($value, $key) {
//     return $value > 300;
// },
// $default);
// dd($truncated);

        //  dd($filtered);
        // $array = Arr::crossJoin([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
        // $array = Arr::add(['name' => 'Lebanon', 'price' => null, 'color' => null], 'color', 'black', 'height', 20, 'price',500);
        // dd($array);

        $firsts[] = 'I am First';
        $firsts[] = 'I am Second';
        $firsts[] = 'I am third';

        // foreach ($firsts as $first){
        //     $first = $firsts;
        // }
        // $res = implode('|', $firsts);
        // dd($res);



        // dd($class);
        // $try = checkNum(3);

        $practice = Practice::pluck('option');

        // $array = $p->array_add(['name' => 'Desk'], 'price', 100);

        return view('practice', with([
            'practice' => $practice,
            // 'option' => $option
            // 'pr' => $pr,
            // 'array' => $array
        ]));
    }

    function post_practice(Request $request) {
        // dd($request);
        // foreach($request->options as $option){
        //     $option = $request->options;
        //     // dd($option);
        // }

        $opt = new Practice();
        $opt->option = json_encode($request->options);
        $opt->save();
        return redirect()->back();

    }

    function numbers(){
        return view('numbers');
    }

    function verifyNumber(Request $request) {
        $request->validate([
            // 'odd_number' => 'integer',
        ]);
        $even = $request->even_number;
        $prime = $request->prime_number;
        $odd = $request->odd_number;
        // dd($odd);



         if ($odd%2 >= 1 ) {
            //  dd('this is an odd number');
             # code...
         } else {
             # code...
         }


        if ($request->even_number !=null) {
            if ($even%2 == 0) {
                Session::put('evenMessage', 'This is an Even Number');
            } else {
                Session::put('evenMessage', 'This is not an Even Number');
            }
            # code...
        }

       if($request->prime_number !=null){
        if ($prime%1 == 0 && $prime%$prime == 0 && $prime%3 == 0 && $prime%9 == 0) {
          dd('this is a prime number');
        } else {
            dd('its not a prime number');
        }
       }

        return redirect()->back();


    }

}
