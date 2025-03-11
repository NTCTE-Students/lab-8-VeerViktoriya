<?php

class Counter {
    private $count = 10;

    public function increment() { 
        $this -> count = $this -> count+1;
    }

    public function decrement() {
        if (($this -> count-1) == 0 ) {
            print("NO");
        } else {
            $this -> count = $this -> count-1;
        }
    }
    public function getCount() {
        print("{$this -> count} это число!<br>");
    }
}
$counter = new Counter();
$counter->decrement();
$counter->increment();
$counter->getCount();