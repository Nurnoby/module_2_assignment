<?php
// Task 1: Looping with Increment using a Function
// For loop 
function evenNumber($start,$end,$step){
    // for loop 
    echo "=============== For Loop\n";
    for($i=$start;$i<=$end;$i++){
            if($i % $step == 0){
                echo $i;
                echo PHP_EOL;
            }
        }
    // while loop
    echo "=============== While Loop \n";
    $i=$start;
    while($i<=$end){
        if($i % $step == 0){
            echo $i;
            echo PHP_EOL;
        }
        $i++;
    }
    echo "=============== Do while Loop \n";
    // do while loop 
    $i=$start;
    do{
        if($i % $step == 0){
         echo $i;
         echo PHP_EOL;
        }
        $i++;
    } while($i<=$end);

}

evenNumber(1,20,2);
// Task 2: Skip Multiples of 5
echo "============ Task 2: Skip Multiples of 5 \n";
for($i=1; $i<=50; $i++){
    if($i % 5 == 0){
        continue;// Skip multiples of 5
    }
    echo $i;
    echo PHP_EOL;
}

// Task 3: Break on Condition
echo "============ Task 3: Break on Condition \n";
$first=0;
$second=1;

for($i=1;$i<=10; $i++){
    $next=$first+$second;

    if($next>100){
        break;
    }
    echo $next;
    echo PHP_EOL;
    // Update values for the next iteration
    $first = $second;
    $second = $next;
}

// Task 4: Fibonacci Series printing using a Function
echo "============ Task 4: Fibonacci Series printing using a Function \n";


function Fibonacci($numbers){
    $first=0;
    $second=1;
    for ($i=1; $i<=$numbers; $i++){
        echo $first;
        echo PHP_EOL;
        $next=$first+$second;
        $first = $second;
        $second = $next;
        
    }
    

}
Fibonacci(15);
?>