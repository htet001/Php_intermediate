<?php
class callback
{
    // public function done($finish)
    // {
    //     $i = 0;
    //     $sum = 0;
    //     while ($i < 100) {
    //         $sum += $i;
    //         $i++;
    //     }
    //     $this->finish($sum);
    // }

    public function done($var)
    {
        $this->$var(400);
    }
    public function finish($total)
    {
        echo "All total is {$total}";
    }
    public function donkey()
    {
        echo "i am a donkey";
    }
}

$ans = new callback();
$ans->done("donkey");