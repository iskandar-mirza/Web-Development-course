<?php
$freePrice = 0;
$proBasePrice = 100;
$enterpriseBasePrice = 1000;

$taxRate = 0.1;
$proTotal = $proBasePrice + ($proBasePrice * $taxRate);
$enterprisePrice = $enterpriseBasePrice + ($enterpriseBasePrice * $taxRate);


$isPremium = true; // change to false to test conditional

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>my website</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
  <h1 class="text-center py-4 text-3xl font-bold">Select Your Plan</h1>

  <div class="grid grid-cols-1 md:grid-cols-3 text-center gap-8 mx-9">
    <!-- Free Plan -->
    <div class="border rounded-lg p-6 shadow-sm bg-white">
      <h4 class="text-xl font-semibold">Free Trial</h4>
      <p class="mt-2 text-gray-700">Price: $<?= $freePrice ?></p>
      <ul class="mt-4 space-y-2">
        <li>1st feature</li>
        <li>2nd feature</li>
        <li>3rd feature</li>
      </ul>
      <button type="button" class="border rounded-full hover:bg-gray-500 hover:text-white px-6 py-2 my-4">
        Buy
      </button>
    </div>

    <!-- Pro Plan -->
    <div class="border rounded-lg p-6 shadow-sm bg-blue-50 border-blue-400">
      <h4 class="text-xl font-semibold">Pro</h4>
      <p class="mt-2 text-gray-700">Price: $<?= $proTotal ?> / month</p>
      <ul class="mt-4 space-y-2">
        <li>1st feature</li>
        <li>2nd feature</li>
        <li>3rd feature</li>
      </ul>
      <button type="button" class="border rounded-full hover:bg-blue-500 hover:text-white px-6 py-2 my-4">
        Buy
      </button>
      <?php if ($isPremium): ?>
        <span class="inline-block bg-green-500 text-white text-sm px-3 py-1 rounded-full">Discount</span>
      <?php else: ?>
        <span class="inline-block bg-yellow-500 text-white text-sm px-3 py-1 rounded-full">Standard Pricing</span>
      <?php endif; ?>
    </div>

    <!-- Enterprise Plan -->
    <div class="border rounded-lg p-6 shadow-sm bg-white">
      <h4 class="text-xl font-semibold">Enterprise</h4>
      <p class="mt-2 text-gray-700">Price: $<?= $enterprisePrice ?> / year</p>
      <ul class="mt-4 space-y-2">
        <li>1st feature</li>
        <li>2nd feature</li>
        <li>3rd feature</li>
      </ul>
      <button type="button" class="border rounded-full hover:bg-gray-500 hover:text-white px-6 py-2 my-4">
        Buy
      </button>
    </div>
  </div>
</body>
</html>
