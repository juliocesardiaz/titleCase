<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            $stopWords = array("from", "for", "off", "on", "in", "as",
                               "down", "up", "past", "by", "over", "under",
                               "to", "than", "for", "and", "but", "so", "yet",
                               "as", "if", "the", "till");
            foreach($input_array_of_words as $word) {
                $lower_case_word = strtolower($word);
                if (in_array($lower_case_word, $stopWords)){
                    array_push($output_titlecased, $lower_case_word);
                } else {
                    array_push($output_titlecased, ucfirst($lower_case_word));
                }
            }
            $output_titlecased[0] = ucfirst($output_titlecased[0]);
            return implode (" ", $output_titlecased);
        }


    }
?>
