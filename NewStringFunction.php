<?php 

// mengecek apakah string "Muhammad Jidan" mengandung "Muhammad"
var_dump(str_contains("Muhammad Jidan", "Muhammad"));
// mengecek apakah string "Muhammad Jidan" mengandung "Jidan"
var_dump(str_contains("Muhammad Jidan", "Jidan"));

// mengecek apakaah string "Muhammad Jidan" di depannya mengandung kata "Muhammad"
var_dump(str_starts_with("Muhammad Jidan", "Muhammad"));
// mengecek apakaah string "Muhammad Jidan" di depannya mengandung kata "Jidan"
var_dump(str_starts_with("Muhammad Jidan", "Jidan"));

// mengecek apakaah string "Muhammad Jidan" di belakangnya mengandung kata "Muhammad"
var_dump(str_ends_with("Muhammad Jidan", "Muhammad"));
// mengecek apakaah string "Muhammad Jidan" di belakangnya mengandung kata "Jidan"
var_dump(str_ends_with("Muhammad Jidan", "Jidan"));