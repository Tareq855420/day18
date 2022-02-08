<?php

namespace App\classes;
class Example
{
    public $data = [];

    public function index()
    {
//        $this->data = [10, 20, 30, 'BITM', 'BASIS', 100.200, true];
////        echo $this->data[5];
//        foreach ($this->data as $key=> $item)
//        {
//            echo $key .' '.$item.'<br/>';
//        }
        $this->data = [
            0 => [
                'name'      =>'Sagor',
                'mail'      =>'sagor@gmail.com',
                'mobile'    => [
                    'personal' => '123456',
                    'parent'    => '078542'
                ]
            ],

            1 => [
                'name'      =>'Fahad',
                'mail'      =>'fahad@gmail.com',
                'mobile'    =>[
                    'personal' => '789456',
                    'parent'    => '852147'
                ]
            ],
            2=>'BITM',
            3=>[
                'name'=>'sajib',
                'mail'=>'sajib@gmail.com',
                'mobile'=>'017707'
            ]

        ];
        foreach ($this->data as $item)
        {
            if(is_array($item))
            {
                foreach ($item as $value)
                {
                    if (is_array($value))
                    {
                        foreach ($value as $v_value)
                        {
                            echo $v_value,' ';
                        }
                        echo '<br/>';
                    }
                    else
                    {
                        echo $value;

                    }
                }
            }
            else{
                echo $item;
            }
        }
    }
}