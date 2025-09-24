<?php

    echo "Bitmap Hole \n";
    class BitMapHole {
        private $input_str_array;

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
            $total_bitmap_hole_count = 0;
            $already_taken = [];

            for ($i = 0; $i < count($this->input_str_array); $i++) {
                // echo $two_dimension_array[$i][0] . "\n";

                for ($j = 0; $j < count($two_dimension_array[$i]); $j++) {

                    $top_index = $j-1;
                    $bottom_index = $j+1;
                    $left_index = $i-1;
                    $right_index = $i+1;

                    if ($two_dimension_array[$i][$j] === "0") {
                        if ($top_index >=0 && $bottom_index < count($two_dimension_array[$i])) {
                            if ($two_dimension_array[$i][$top_index] === "0" && 
                                !in_array([$i, $top_index], $already_taken)
                            ) {
                                $total_bitmap_hole_count ++;
                                array_push($already_taken, [$i, $top_index]);
                                array_push($already_taken, [$top_index, $i]);
                            }
                        }

                        if ($bottom_index >=0 && $bottom_index < count($two_dimension_array[$i])) {
                            if ($two_dimension_array[$i][$bottom_index] === "0" &&
                                !in_array([$i, $bottom_index], $already_taken)
                            ) {
                                $total_bitmap_hole_count ++;
                                array_push($already_taken, [$i, $bottom_index]);
                                array_push($already_taken, [$bottom_index, $i]);
                            }
                        }

                        if ($left_index >=0 && $left_index < count($this->input_str_array)) {
                            if ($two_dimension_array[$i][$left_index] === "0" &&
                                !in_array([$i, $left_index], $already_taken)
                            ) {
                                $total_bitmap_hole_count ++;
                                array_push($already_taken, [$i, $left_index]);
                                array_push($already_taken, [$left_index, $i]);
                            }
                        }

                        if ($right_index >=0 && $right_index < count($this->input_str_array)) {
                            if ($two_dimension_array[$i][$right_index] === "0" &&
                                !in_array([$i, $right_index], $already_taken)
                            ) {
                                $total_bitmap_hole_count ++;
                                array_push($already_taken, [$i, $right_index]);
                                array_push($already_taken, [$right_index, $i]);
                            }
                        }
                    }

                    // echo "iterate ". $two_dimension_array[$i][$j] . "\n";
                }
            }
            echo "already taken array ". count($already_taken);
            echo "\nbitmap hole count : ". $total_bitmap_hole_count;
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
