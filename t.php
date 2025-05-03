<?php
define('dataObjects', [
  [
    'totalNutrients' => [
      'ENERC_KCAL' => ['quantity' => 100, 'unit' => 'kcal'],
      'FAT' => ['quantity' => 10, 'unit' => 'g'],
      'FASAT' => ['quantity' => 5, 'unit' => 'g'],
      'FIBTG' => ['quantity' => 2, 'unit' => 'g'],
      'CHOCDF' => ['quantity' => 15, 'unit' => 'g'],
      'PROCNT' => ['quantity' => 5, 'unit' => 'g'],
      'VITA_RAE' => ['quantity' => 50, 'unit' => 'µg'],
    ],
  ],
  [
    'totalNutrients' => [
      'ENERC_KCAL' => ['quantity' => 150, 'unit' => 'kcal'],
      'FAT' => ['quantity' => 12, 'unit' => 'g'],
      'FASAT' => ['quantity' => 6, 'unit' => 'g'],
      'FIBTG' => ['quantity' => 3, 'unit' => 'g'],
      'CHOCDF' => ['quantity' => 20, 'unit' => 'g'],
      'PROCNT' => ['quantity' => 8, 'unit' => 'g'],
      'VITA_RAE' => ['quantity' => 75, 'unit' => 'µg'],
    ],
  ],
  // Tambahkan set data lainnya sesuai kebutuhan
]);

// Fungsi untuk mengakses dan menambahkan nilai dari setiap data
function processAndPrintNutrientValues($data) {
  $totalCalories = 0;
  $totalFat = 0;
  $totalSaturatedFat = 0;
  $totalFiber = 0;
  $totalCarbohydrates = 0;
  $totalProtein = 0;
  $totalVitaminA = 0;

  // Iterasi melalui setiap data dan akumulasikan nilai nutrient
  foreach ($data as $obj) {
    $totalCalories += $obj['totalNutrients']['ENERC_KCAL']['quantity'];
    $totalFat += $obj['totalNutrients']['FAT']['quantity'];
    $totalSaturatedFat += $obj['totalNutrients']['FASAT']['quantity'];
    $totalFiber += $obj['totalNutrients']['FIBTG']['quantity'];
    $totalCarbohydrates += $obj['totalNutrients']['CHOCDF']['quantity'];
    $totalProtein += $obj['totalNutrients']['PROCNT']['quantity'];
    $totalVitaminA += $obj['totalNutrients']['VITA_RAE']['quantity'];
  }

  // Tampilkan hasil akumulasi
  echo "Total Calories: $totalCalories kcal\n";
  echo "Total Fat: $totalFat g\n";
  echo "Total Saturated Fat: $totalSaturatedFat g\n";
  echo "Total Fiber: $totalFiber g\n";
  echo "Total Carbohydrates: $totalCarbohydrates g\n";
  echo "Total Protein: $totalProtein g\n";
  echo "Total Vitamin A: $totalVitaminA µg\n";
}

// Panggil fungsi untuk setiap objek dalam dataObjects
processAndPrintNutrientValues(dataObjects);
?>
