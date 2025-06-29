<div>
  
  {{-- <h1>This is the main Page</h1>
  
    <br>
    
    @for ($i = 1; $i <= 5; $i++)
        @for ($j = 1; $i >= $j; $j++)
                {{$i}}
        @endfor
        <br> 
    @endfor

    <br>
    <h1>Inverted</h1>

    @for ($a = 5; $a >= 1; $a-- )
        @for ($b = 1; $a >= $b; $b++)
              {{$a}}
        @endfor
            <br>
    @endfor

    <br>

    <h1>Sample test</h1>

    @for ($i = 1; $i <= 5; $i++)
        @for ($j = 1; $i >= $j; $j++)
            @for ($b = 1; $j >= $b; $b++)
               
             _
            @endfor
                {{$i}} 
        @endfor
        <br>
    @endfor
 
    <br> --}}

    <h1>Odd numbers practice</h1>

    <?php 
        function odd($n){
            return intdiv($n, 2);
        }
        echo odd(6);
    ?>


    <br>

    <?php 
    
    $words = ['hello', 'world', 'this', 'is', 'great'];

    foreach ($words as $word) {
            echo  $word . '_';
    }
    
    ?>

    <br>

    <h1>Question 1</h1>

   

    <?php 
    function  multiply ($a, $b){
        return $a * $b;
    }
    echo multiply(6,2);
    ?>



    <br>
    <h1>Question 2</h1>

    <?php
        function accum($s){
            $result = [];
            for ($i = 0; $i < strlen($s); $i++) { 
                $segment = '';
                for ($j = 0; $j <= $i; $j++) { 
                    $segment .= $s[$i];
                }
                $result[] = ucfirst(strtolower($segment)); // Capitalize first letter, lowercase the rest
            }
            echo implode("-", $result);  // Join segments with "-"
        } 
 
       echo accum('abcd');
        
    ?>

        <br>

        <h1>test</h1>

        {{-- Split the string into an array like for ex: "Robin Singh" ==> ['Robin', 'Singh'] --}}
        <?php

            function accum2($s){
                $result = [];
                for ($i=0; $i < strlen($s); $i++) { 
                    $segment = '';
                    for ($j=0; $j <= $i; $j++) { 
                        $segment .= $s[$i]; 
                    }

                    $result[] =  ucfirst(strtolower($segment));
                    
                }

                echo implode("-", $result);

            }

            echo accum2("abcd");


       

        


        ?>
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}-
  {{-- Day3 --}}-
  {{-- Day3 --}}-
  {{-- Day3 --}}-
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}Day
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}DA
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day3 --}}
  {{-- Day2 --}}
  {{-- Day2 --}}
  {{-- Day2 --}}
  {{-- Day2 --}}
  {{-- Day2 --}}
  {{-- Day2 --}}
  {{-- Day2 --}}
  {{-- Day2 --}}























        

        <br>

        <h1>Question 3</h1>
        <?php
            function reverseWords($str){
                return implode(" ", array_map('strrev', explode(" ", $str)));
            }
        ?>




      
        
     

</div>
