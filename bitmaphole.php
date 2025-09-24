<?php

    echo "Bitmap Hole \n";
    class BitMapHole {
        private $input_str_array;
        private $total_bitmap_hole_count = 0;
        private $already_taken = [];

        public function __construct($input_str_array) {
            $this->input_str_array = $input_str_array;
        }

        public function findBitMapHole() {
            $two_dimension_array = [];

            for ($i = 0; $i < count($this->input_str_array); $i++) {
                // echo "input str ". $this->input_str_array[$i] . "\n";
                $each_array = str_split($this->input_str_array[$i]);
                // echo "Each Array size " . count ($each_array) . "\n";
                array_push($two_dimension_array, $each_array);
            }

            echo "Input Array Size: ". count($this->input_str_array) . "\n";
            // echo ($two_dimension_array[0][0]);
            
            for ($i = 0; $i < count($this->input_str_array); $i++) {
                // echo $two_dimension_array[$i][0] . "\n";

                for ($j = 0; $j < count($two_dimension_array[$i]); $j++) {

                    $top_index = $j-1;
                    $bottom_index = $j+1;
                    $left_index = $i-1;
                    $right_index = $i+1;

                    if ($two_dimension_array[$i][$j] === "0") {
                        // if ($top_index >=0 && $top_index < count($two_dimension_array[$i])) {
                        //     if ($two_dimension_array[$i][$top_index] === "0" && 
                        //         !in_array([$i, $top_index], $already_taken)
                        //     ) {
                        //         $total_bitmap_hole_count ++;
                        //         array_push($already_taken, [$i, $top_index]);
                        //         array_push($already_taken, [$top_index, $i]);
                        //     }
                        // }
                        $this->checkBitMap($top_index, $two_dimension_array, $i);

                        // if ($bottom_index >=0 && $bottom_index < count($two_dimension_array[$i])) {
                        //     if ($two_dimension_array[$i][$bottom_index] === "0" &&
                        //         !in_array([$i, $bottom_index], $already_taken)
                        //     ) {
                        //         $total_bitmap_hole_count ++;
                        //         array_push($already_taken, [$i, $bottom_index]);
                        //         array_push($already_taken, [$bottom_index, $i]);
                        //     }
                        // }
                        $this->checkBitMap($bottom_index, $two_dimension_array, $i);

                        // if ($left_index >=0 && $left_index < count($this->input_str_array)) {
                        //     if ($two_dimension_array[$i][$left_index] === "0" &&
                        //         !in_array([$i, $left_index], $already_taken)
                        //     ) {
                        //         $total_bitmap_hole_count ++;
                        //         array_push($already_taken, [$i, $left_index]);
                        //         array_push($already_taken, [$left_index, $i]);
                        //     }
                        // }
                        $this->checkBitMap($left_index, $two_dimension_array, $i);

                        // if ($right_index >=0 && $right_index < count($this->input_str_array)) {
                        //     if ($two_dimension_array[$i][$right_index] === "0" &&
                        //         !in_array([$i, $right_index], $already_taken)
                        //     ) {
                        //         $total_bitmap_hole_count ++;
                        //         array_push($already_taken, [$i, $right_index]);
                        //         array_push($already_taken, [$right_index, $i]);
                        //     }
                        // }
                        $this->checkBitMap($right_index, $two_dimension_array, $i);
                    }

                    // echo "iterate ". $two_dimension_array[$i][$j] . "\n";
                }
            }
            echo "already taken array ". count($this->already_taken);
            echo "\nbitmap hole count : ". $this->total_bitmap_hole_count;
        }

        private function checkBitMap($current_index, $two_dimension_array, 
            $two_dimension_array_index) 
        {
            if ($current_index >= 0 && $current_index < count($two_dimension_array[$two_dimension_array_index])) {
                if ($two_dimension_array[$two_dimension_array_index][$current_index] === "0" && 
                    !in_array([$two_dimension_array_index, $current_index], $this->already_taken)
                ) {
                    $this->total_bitmap_hole_count ++;
                    array_push($this->already_taken, [$two_dimension_array_index, $current_index]);
                    array_push($this->already_taken, [$current_index, $two_dimension_array_index]);
                }
            }
        }
    }

    // $bitMapHoleInstance = new BitMapHole(["00111", "10101", "11101", "11111"]);
    $bitMapHoleInstance = new BitMapHole(["00000", "00000", "00000", "00000"]);
    $bitMapHoleInstance->findBitMapHole();

// 0 0 1 1 1
// 1 0 1 0 1
// 1 1 1 0 1
// 1 1 1 1 1

?>
